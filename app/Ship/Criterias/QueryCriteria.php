<?php

namespace App\Ship\Criterias;

use App\Ship\Parents\Criterias\Criteria;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;
use Vinkla\Hashids\Facades\Hashids;

/**
 * Class QueryCriteria
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class QueryCriteria extends Criteria
{
    /**
     * @var Request
     */
    private $request;

    private $types = [
        'text',
        'empty',
        'empty_text',
        'bool',
        'date',
        'date_range',
        'number',
        'number_range',
        'select',
        'multi_select',
        'select_id',
        'multi_select_id',
    ];

    /**
     * QueryCriteria constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param $model
     * @param PrettusRepositoryInterface $repository
     * @return mixed
     * @throws Exception
     */
    public function apply($model, PrettusRepositoryInterface $repository)
    {
        if ($queries = $this->request->get('query')) {
            $queries = $this->validateQueryArray(array_map(function ($elem) {
                return json_decode($elem, true);
            }, $queries), $repository->getFieldsSearchable());

            foreach ($queries as $query) {
                $function = $this->buildMethodName($query['type']);
                if (method_exists($this, $function)) $model = $this->$function($model, $query['field'], $query['value']);
                else throw new Exception("No query method {$query['type']} exists.");
            }
        }

        return $model;
    }

    /**
     * @param array $query
     * @param array $fields
     * @return array
     */
    protected function validateQueryArray(array $query, array $fields): array
    {
        return array_filter(
            array_map(function($elem) use ($fields) {
                if (
                    (isset($elem['value']))
                    && (array_key_exists($elem['field'] ?? null, $fields)
                    && in_array($elem['type'] ?? null, $this->types))
                ) return $elem;
                else return null;
            }, $query)
        );
    }

    /**
     * @param string $type
     * @return string
     */
    protected function buildMethodName(string $type):string
    {
        return 'resolve' . implode(
            array_map(function($elem){
                return ucfirst($elem);
            },
            explode('_', $type)
        ));
    }

    /**
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveText($model, $field, $value)
    {
        return $model->where($field, 'ilike', "%$value%");
    }

    /**
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveEmpty($model, $field, $value)
    {
        return ($value)?
            $model->whereNotNull($field)
            :$model->whereNull($field);
    }

    /**
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveEmptyText($model, $field, $value)
    {
        return ($value)?
            $model->where($field, '<>', '')
            :$model->where($field, '')->orWhereNull($field);
    }

    /**
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveBool($model, $field, $value)
    {
        return $model->where($field, ($value)?true:false);
    }

    /**
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveDate($model, $field, $value)
    {
        return $model->whereDate($field, '=', new Carbon($value));
    }

    /**
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveDateRange($model, $field, $value)
    {
        $range = explode('~', $value);

        if ($range[0] ?? null) $model = $model->whereDate($field, '>=', (new Carbon($range[0])));
        if ($range[1] ?? null) $model = $model->whereDate($field, '<=', (new Carbon($range[1])));

        return $model;
    }

    /**
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveNumber($model, $field, $value)
    {
        return $model->where($field, '=', $value);
    }

    /**
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveNumberRange($model, $field, $value)
    {
        $range = explode('~', $value);

        if ($range[0] ?? null) $model = $model->where($field, '>=', $range[0]);
        if ($range[1] ?? null) $model = $model->where($field, '<=', $range[1]);

        return $model;
    }

    /**
     * looks for one hashed id
     *
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveSelectId($model, $field, $value)
    {
        //silently fail for non hashed id
        if (is_numeric($value)) return $model;

        return ($id = (Hashids::decode($value)[0] ?? null))?$model->where($field, '=', $id):$model;
    }

    /**
     * looks for multiple hashed ids
     *
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveMultiSelectId($model, $field, $value)
    {
        $ids = array_filter(array_map(function($elem){
            return Hashids::decode(trim($elem))[0] ?? null;
        }, explode(',', $value)));
        return $model->whereIn($field, $ids);
    }

    /**
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveSelect($model, $field, $value)
    {
        return $model->where($field, $value);
    }

    /**
     * @param $model
     * @param $field
     * @param $value
     * @return mixed
     */
    protected function resolveMultiSelect($model, $field, $value)
    {
        return $model->whereIn($field, explode(',', $value));
    }

}