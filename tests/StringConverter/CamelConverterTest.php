<?php

namespace SSDTest\StringConverter;

use SSD\StringConverter\Factory;
use SSDTest\BaseCase;

class CamelConverterTest extends BaseCase
{
    /**
     * @test
     */
    public function converts_camel_to_class_name(): void
    {
        $this->assertSame('PhpEol', Factory::camelToClassName(parent::STRING_CAMEL));
    }

    /**
     * @test
     */
    public function converts_camel_to_constant(): void
    {
        $this->assertSame('PHP_EOL', Factory::camelToConstant(parent::STRING_CAMEL));
    }

    /**
     * @test
     */
    public function converts_camel_to_hyphen(): void
    {
        $this->assertSame('php-Eol', Factory::camelToHyphen(parent::STRING_CAMEL));
    }

    /**
     * @test
     */
    public function converts_camel_to_underscore(): void
    {
        $this->assertSame('php_Eol', Factory::camelToUnderscore(parent::STRING_CAMEL));
    }

    /**
     * @test
     */
    public function converts_camel_to_space(): void
    {
        $this->assertSame('php Eol', Factory::camelToSpace(parent::STRING_CAMEL));
    }

    /**
     * @test
     */
    public function converts_camel_to_space_and_lower_case(): void
    {
        $this->assertSame('php eol', Factory::camelToSpace(parent::STRING_CAMEL, 'strtolower'));
    }
}
