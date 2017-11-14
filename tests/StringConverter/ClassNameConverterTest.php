<?php

namespace SSDTest\StringConverter;

use SSDTest\BaseCase;
use SSD\StringConverter\Factory;

class ClassNameConverterCase extends BaseCase
{
    /**
     * @test
     */
    public function converts_class_name_to_camel()
    {
        $this->assertSame('phpEol', Factory::classNameToCamel(parent::STRING_CLASS_NAME));
    }

    /**
     * @test
     */
    public function converts_class_name_to_constant()
    {
        $this->assertSame('PHP_EOL', Factory::classNameToConstant(parent::STRING_CLASS_NAME));
    }

    /**
     * @test
     */
    public function converts_class_name_to_hyphen()
    {
        $this->assertSame('Php-Eol', Factory::classNameToHyphen(parent::STRING_CLASS_NAME));
    }

    /**
     * @test
     */
    public function converts_class_name_to_underscore()
    {
        $this->assertSame('Php_Eol', Factory::classNameToUnderscore(parent::STRING_CLASS_NAME));
    }

    /**
     * @test
     */
    public function converts_class_name_to_space()
    {
        $this->assertSame('Php Eol', Factory::classNameToSpace(parent::STRING_CLASS_NAME));
    }

    /**
     * @test
     */
    public function converts_class_name_to_space_and_lower_case()
    {
        $this->assertSame('php eol', Factory::classNameToSpace(parent::STRING_CLASS_NAME, 'strtolower'));
    }
}