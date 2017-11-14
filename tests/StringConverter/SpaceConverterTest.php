<?php

namespace SSDTest\StringConverter;

use SSDTest\BaseCase;
use SSD\StringConverter\Factory;

class SpaceConverterCase extends BaseCase
{
    /**
     * @test
     */
    public function converts_space_to_class_name()
    {
        $this->assertSame('PhpEol', Factory::spaceToClassName(parent::STRING_SPACE));
    }

    /**
     * @test
     */
    public function converts_space_to_camel()
    {
        $this->assertSame('phpEol', Factory::spaceToCamel(parent::STRING_SPACE));
    }

    /**
     * @test
     */
    public function converts_space_to_constant()
    {
        $this->assertSame('PHP_EOL', Factory::spaceToConstant(parent::STRING_SPACE));
    }

    /**
     * @test
     */
    public function converts_space_to_hyphen()
    {
        $this->assertSame('php-eol', Factory::spaceToHyphen(parent::STRING_SPACE));
    }

    /**
     * @test
     */
    public function converts_space_to_underscore()
    {
        $this->assertSame('php_eol', Factory::spaceToUnderscore(parent::STRING_SPACE));
    }

    /**
     * @test
     */
    public function converts_space_to_underscore_and_upper_case()
    {
        $this->assertSame('PHP_EOL', Factory::spaceToUnderscore(parent::STRING_SPACE, 'strtoupper'));
    }
}