<?php

namespace Balt\Services\Core;

use Balt\Repositories\Core\CrudRepositoryInterface;
use Illuminate\Support\Collection;

class AbstractEloquentService implements CrudServiceInterface
{

    /**
     * @var CrudRepositoryInterface
     */
    protected $repository;

    /**
     * @inheritDoc
     */
    public function all(array $filter = [], array $options = null): Collection
    {
        return $this->repository->all($filter, $options);
    }

    /**
     * @inheritDoc
     */
    public function update($object, array $data, array $options = null)
    {
        $this->repository->update($object->id, $data, $options);
    }

    /**
     * @inheritDoc
     */
    public function delete($object, array $options = null): bool
    {
        return $this->repository->delete($object->id, $options);
    }

    /**
     * @inheritDoc
     */
    public function find($id, array $options = null)
    {
        return $this->repository->find($id, $options);
    }

    /**
     * @inheritDoc
     */
    public function create(array $data, array $options = null)
    {
        return $this->repository->create($data, $options);
    }
}