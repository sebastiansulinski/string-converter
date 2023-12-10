<?php

namespace SSDTest\StringConverter;

use SSD\StringConverter\Factory;
use SSDTest\BaseCase;

class SpaceConverterTest extends BaseCase
{
    /**
     * @test
     */
    public function converts_space_to_class_name(): void
    {
        $this->assertSame('PhpEol', Factory::spaceToClassName(parent::STRING_SPACE));
    }

    /**
     * @test
     */
    public function converts_space_to_camel(): void
    {
        $this->assertSame('phpEol', Factory::spaceToCamel(parent::STRING_SPACE));
    }

    /**
     * @test
     */
    public function converts_space_to_constant(): void
    {
        $this->assertSame('PHP_EOL', Factory::spaceToConstant(parent::STRING_SPACE));
    }

    /**
     * @test
     */
    public function converts_space_to_hyphen(): void
    {
        $this->assertSame('php-eol', Factory::spaceToHyphen(parent::STRING_SPACE));
    }

    /**
     * @test
     */
    public function converts_space_to_underscore(): void
    {
        $this->assertSame('php_eol', Factory::spaceToUnderscore(parent::STRING_SPACE));
    }

    /**
     * @test
     */
    public function converts_space_to_underscore_and_upper_case(): void
    {
        $this->assertSame('PHP_EOL', Factory::spaceToUnderscore(parent::STRING_SPACE, 'strtoupper'));
    }
}
