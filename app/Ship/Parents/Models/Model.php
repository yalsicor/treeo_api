<?php

namespace App\Ship\Parents\Models;

use Apiato\Core\Abstracts\Models\Model as AbstractModel;
use Apiato\Core\Traits\HashIdTrait;
use Apiato\Core\Traits\HasResourceKeyTrait;
use Illuminate\Support\Facades\Config;

/**
 * Class Model.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
abstract class Model extends AbstractModel
{

    use HashIdTrait;
    use HasResourceKeyTrait;

    public $relationships = [];

    protected $hashLength = 6;
    protected $hashKeySpace = '0123456789abcdefghijklmnopqrstuvwxyz';

    /**
     * @param $length
     * @param string $keyspace
     * @return string
     * @throws \Exception
     */
    protected function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $pieces []= $keyspace[random_int(0, $max)];
        }
        return implode('', $pieces);
    }

    /**
     * @param $field
     * @param $value
     * @return bool
     */
    protected function collision($field, $value)
    {
        return (new static)->where($field, $value)->count()?true:false;
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function makeIdentifier()
    {
            $hash = $this->random_str($this->hashLength, $this->hashKeySpace);
            if ($this->collision('identifier', $hash)) return $this->makeIdentifier();
            else return $hash;
    }

    /**
     * Overwrite the default GetHashedKey function to return null if value is null (instead of empty string)
     *
     * @param null $field
     * @return mixed
     */
    public function getHashedKey($field = null)
    {
        // if no key is set, use the default key name (i.e., id)
        if ($field === null) {
            $field = $this->getKeyName();
        }

        // hash the ID only if hash-id enabled in the config
        if (Config::get('apiato.hash-id')) {
            // we need to get the VALUE for this KEY (model field)
            $value = $this->getAttribute($field);
            return (is_null($value))?null:$this->encoder($value);
        }

        return $this->getAttribute($field);
    }

    /**
     * accessors for date fields to set iso 8601 format
     *
     * @param $value
     * @return string|null
     */
    public function getIso8601Date($value) : ?string
    {
        if (is_null($value)) return null;
        $date = new \Carbon\Carbon($value);
        return $date->toIso8601String();
    }

    /**
     * @param $value
     * @return string|null
     */
    public function getIsoDate($value) : ?string
    {
        if (is_null($value)) return null;
        $date = new \Carbon\Carbon($value);
        return $date->format('Y-m-d');
    }

    /**
     * @param $value
     * @return string|null
     */
    public function getIsoDatetime($value) : ?string
    {
        if (is_null($value)) return null;
        $date = new \Carbon\Carbon($value);
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * @param $value
     * @return string|null
     */
    public function getCreatedAtAttribute($value)
    {
        return $this->getIso8601Date($value);
    }

    /**
     * @param $value
     * @return string|null
     */
    public function getUpdatedAtAttribute($value)
    {
        return $this->getIso8601Date($value);
    }

    /**
     * @param $value
     * @return string|null
     */
    public function getDeletedAtAttribute($value)
    {
        Return $this->getIso8601Date($value);
    }

}
