<?php

use SSD\StringConverter\Factory;


class FactoryTest extends BaseTest {


    /**
     * @expectedException \BadMethodCallException
     *
     * @expectedExceptionMessage
     * The method you called does not contain both operands
     */
    public function testCallStaticNonExistentMethodShort()
    {

        $string = Factory::backslash(parent::STRING_CAMEL);

    }


    /**
     * @expectedException \BadMethodCallException
     *
     * @expectedExceptionMessage
     * The format class you're trying to convert to does not exists
     */
    public function testCallStaticNonExistentMethod()
    {

        $string = Factory::camelToBackslash(parent::STRING_CAMEL);

    }


}