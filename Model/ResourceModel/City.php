<?php

namespace Ubermanu\France\Model\ResourceModel;

class City extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    const TABLE_NAME = 'directory_france_city';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, \Ubermanu\France\Api\CityInterface::KEY_CODE);
    }
}
