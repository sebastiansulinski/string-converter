<?php

namespace SSDTest\StringConverter;

use SSDTest\BaseCase;
use SSD\StringConverter\Factory;

class CamelConverterCase extends BaseCase
{
    /**
     * @test
     */
    public function converts_camel_to_class_name()
    {
        $this->assertSame('PhpEol', Factory::camelToClassName(parent::STRING_CAMEL));
    }

    /**
     * @test
     */
    public function converts_camel_to_constant()
    {
        $this->assertSame('PHP_EOL', Factory::camelToConstant(parent::STRING_CAMEL));
    }

    /**
     * @test
     */
    public function converts_camel_to_hyphen()
    {
        $this->assertSame('php-Eol', Factory::camelToHyphen(parent::STRING_CAMEL));
    }

    /**
     * @test
     */
    public function converts_camel_to_underscore()
    {
        $this->assertSame('php_Eol', Factory::camelToUnderscore(parent::STRING_CAMEL));
    }

    /**
     * @test
     */
    public function converts_camel_to_space()
    {
        $this->assertSame('php Eol', Factory::camelToSpace(parent::STRING_CAMEL));
    }

    /**
     * @test
     */
    public function converts_camel_to_space_and_lower_case()
    {
        $this->assertSame('php eol', Factory::camelToSpace(parent::STRING_CAMEL, 'strtolower'));
    }
}