<?php

namespace Ubermanu\France\Model\ResourceModel\City;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Ubermanu\France\Model\City::class,
            \Ubermanu\France\Model\ResourceModel\City::class
        );
    }
}
