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
        return ($this->class)::create($data);
    }

    /**
     * @inheritDoc
     */
    public function update($id, array $data, array $options = null)
    {
        return ($this->class)::update($id, $data);
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
    public function all($filter = null, array $options = null): Collection
    {
        return ($this->class)::findAll();
    }
}