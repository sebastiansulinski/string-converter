<?php

use SSD\StringConverter\Factory;


class FactoryTest extends BaseTest {


    /**
     * @expectedException \BadMethodCallException
     *
     * @expectedExceptionMessage
     * The class / method you called does not exist
     */
    public function testCallStaticNonExistentMethodShort()
    {

        $string = Factory::backslash(parent::STRING_CAMEL);

    }


    /**
     * @expectedException \BadMethodCallException
     *
     * @expectedExceptionMessage
     * Method toBackslash does not exist on class SSD\StringConverter\Types\Camel
     */
    public function testCallStaticNonExistentMethod()
    {

        $string = Factory::camelToBackslash(parent::STRING_CAMEL);

    }


}