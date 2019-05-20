<?php

namespace App\Ship\Traits;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Ship\Criterias\QueryCriteria;
use App\Ship\Parents\Repositories\Repository;

/**
 * Trait HasQueryCriteriaTrait
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
trait HasQueryCriteriaTrait
{
    public function addQueryCriteria($repository = null)
    {
        $validatedRepository = $this->validateRepository($repository);

        $validatedRepository->pushCriteria(app(QueryCriteria::class));
    }

    /**
     * Validates, if the given Repository exists or uses $this->repository on the Task/Action to apply functions
     *
     * @param $repository
     *
     * @return mixed
     * @throws CoreInternalErrorException
     */
    private function validateRepository($repository)
    {
        $validatedRepository = $repository;

        // check if we have a "custom" repository
        if (null === $repository) {
            if (! isset($this->repository)) {
                throw new CoreInternalErrorException('No protected or public accessible repository available');
            }
            $validatedRepository = $this->repository;
        }

        // check, if the validated repository is null
        if (null === $validatedRepository) {
            throw new CoreInternalErrorException();
        }

        // check if it is a Repository class
        if (! ($validatedRepository instanceof Repository)) {
            throw new CoreInternalErrorException();
        }

        return $validatedRepository;
    }
}