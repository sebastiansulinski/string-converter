<?php

namespace SSDTest\StringConverter;

use SSD\StringConverter\Factory;
use SSDTest\BaseCase;

class ClassNameConverterTest extends BaseCase
{
    /**
     * @test
     */
    public function converts_class_name_to_camel(): void
    {
        $this->assertSame('phpEol', Factory::classNameToCamel(parent::STRING_CLASS_NAME));
    }

    /**
     * @test
     */
    public function converts_class_name_to_constant(): void
    {
        $this->assertSame('PHP_EOL', Factory::classNameToConstant(parent::STRING_CLASS_NAME));
    }

    /**
     * @test
     */
    public function converts_class_name_to_hyphen(): void
    {
        $this->assertSame('Php-Eol', Factory::classNameToHyphen(parent::STRING_CLASS_NAME));
    }

    /**
     * @test
     */
    public function converts_class_name_to_underscore(): void
    {
        $this->assertSame('Php_Eol', Factory::classNameToUnderscore(parent::STRING_CLASS_NAME));
    }

    /**
     * @test
     */
    public function converts_class_name_to_space(): void
    {
        $this->assertSame('Php Eol', Factory::classNameToSpace(parent::STRING_CLASS_NAME));
    }

    /**
     * @test
     */
    public function converts_class_name_to_space_and_lower_case(): void
    {
        $this->assertSame('php eol', Factory::classNameToSpace(parent::STRING_CLASS_NAME, 'strtolower'));
    }
}
