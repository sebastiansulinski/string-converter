<?php

use SSD\StringConverter\Factory;


class CamelConverterTest extends BaseTest {


    public function testCamelToConstant()
    {

        $result = Factory::camelToConstant(parent::STRING_CAMEL);

        $this->assertSame(parent::STRING_CONSTANT, $result);

    }

    public function testCamelToHyphen()
    {

        $result = Factory::camelToHyphen(parent::STRING_CAMEL);

        $this->assertSame(parent::STRING_HYPHEN, $result);

    }

    public function testCamelToUnderscore()
    {

        $result = Factory::camelToUnderscore(parent::STRING_CAMEL);

        $this->assertSame(parent::STRING_UNDERSCORE, $result);

    }

    public function testCamelToSpace()
    {

        $result = Factory::camelToSpace(parent::STRING_CAMEL, 'strtolower');

        $this->assertSame(parent::STRING_SPACE, $result);

    }

    public function testCamelToSpaceFails()
    {

        $result = Factory::camelToSpace(parent::STRING_CAMEL);

        $this->assertNotSame(parent::STRING_SPACE, $result);

    }


}