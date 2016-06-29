<?php

use SSD\StringConverter\Factory;


class CamelConverterCase extends BaseCase
{

    public function testCamelToClassName()
    {

        $result = Factory::camelToClassName(parent::STRING_CAMEL);

        $this->assertSame('PhpEol', $result);

    }

    public function testCamelToConstant()
    {

        $result = Factory::camelToConstant(parent::STRING_CAMEL);

        $this->assertSame('PHP_EOL', $result);

    }

    public function testCamelToHyphen()
    {

        $result = Factory::camelToHyphen(parent::STRING_CAMEL);

        $this->assertSame('php-Eol', $result);

    }

    public function testCamelToUnderscore()
    {

        $result = Factory::camelToUnderscore(parent::STRING_CAMEL);

        $this->assertSame('php_Eol', $result);

    }

    public function testCamelToSpace()
    {

        $result = Factory::camelToSpace(parent::STRING_CAMEL);

        $this->assertSame('php Eol', $result);

    }

    public function testCamelToSpaceStringToLower()
    {

        $result = Factory::camelToSpace(parent::STRING_CAMEL, 'strtolower');

        $this->assertSame('php eol', $result);

    }


}