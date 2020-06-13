<?php

namespace Balt\Repositories\Core;

use Illuminate\Support\Collection;

class AbstractEloquentRepository implements CrudRepositoryInterface
{
    /**
     * @var string
     */
    protected $class;

    /**
     * @inheritDoc
     */
    public function create(array $data, array $options = null)
    {
        $model = new $this->class($data);
        $model->save();

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function update($id, array $data, array $options = null)
    {
        $model = $this->find($id);

        $model->update($data);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function delete($id, array $options = null)
    {
        return ($this->class)::destroy($id);
    }

    /**
     * @inheritDoc
     */
    public function find($id, array $options = null)
    {
        return ($this->class)::find($id);
    }

    /**
     * @inheritDoc
     */
    public function all(array $filter = [], array $options = null): Collection
    {
        return ($this->class)::all();
    }
}