<?php

namespace Ubermanu\France\Api;

interface CityInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const KEY_CODE = 'code';
    const KEY_NAME = 'name';
    const KEY_POSTCODE = 'postcode';
    /**#@-*/

    /**
     * @return string
     */
    public function getCode();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getPostcode();
}
