<?php

use SSD\StringConverter\Factory;


class CamelConverterTest extends BaseTest {


    public function testCamelToConstant()
    {

        $result = Factory::camelToConstant(parent::STRING_CAMEL);

        $this->assertEquals(parent::STRING_CONSTANT, $result);

    }

    public function testCamelToHyphen()
    {

        $result = Factory::camelToHyphen(parent::STRING_CAMEL);

        $this->assertEquals(parent::STRING_HYPHEN, $result);

    }

    public function testCamelToUnderscore()
    {

        $result = Factory::camelToUnderscore(parent::STRING_CAMEL);

        $this->assertEquals(parent::STRING_UNDERSCORE, $result);

    }


}