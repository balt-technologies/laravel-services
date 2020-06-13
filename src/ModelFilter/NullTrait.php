<?php

namespace Balt\ModelFilter;

trait NullTrait
{

    /**
     * @param $attributeName
     *
     *  Filter would be
     *
     * [
     *   'is_null' => 'updated_at'
     * ]
     *
     */
    public function isNull($attributeName)
    {
        $this->whereNull($attributeName);
    }

    /**
     * @param $attributeName
     *
     * Filter would be
     *
     * [
     *   'not_null' => 'updated_at'
     * ]
     *
     */
    public function notNull($attributeName)
    {
        $this->whereNotNull($attributeName);
    }

}