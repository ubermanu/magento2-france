<?php

namespace Ubermanu\France\Model;

use Ubermanu\France\Api\CityInterface;

class City extends \Magento\Framework\Model\AbstractModel implements CityInterface
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(\Ubermanu\France\Model\ResourceModel\City::class);
    }

    /**
     * @inheritDoc
     */
    public function getCode()
    {
        return $this->getData(self::KEY_CODE);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::KEY_NAME);
    }

    /**
     * @inheritDoc
     */
    public function getPostcode()
    {
        return $this->getData(self::KEY_POSTCODE);
    }
}
