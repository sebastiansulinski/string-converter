<?php

use SSD\StringConverter\Factory;


class ConstantConverterCase extends BaseCase
{

    public function testConstantToClassName()
    {

        $result = Factory::constantToClassName(parent::STRING_CONSTANT);

        $this->assertSame('PhpEol', $result);

    }

    public function testConstantToCamel()
    {

        $result = Factory::constantToCamel(parent::STRING_CONSTANT);

        $this->assertSame('phpEol', $result);

    }

    public function testConstantToHyphen()
    {

        $result = Factory::constantToHyphen(parent::STRING_CONSTANT);

        $this->assertSame('PHP-EOL', $result);

    }

    public function testConstantToUnderscore()
    {

        $result = Factory::constantToUnderscore(parent::STRING_CONSTANT);

        $this->assertSame('PHP_EOL', $result);

    }

    public function testConstantToSpace()
    {

        $result = Factory::constantToSpace(parent::STRING_CONSTANT);

        $this->assertSame('PHP EOL', $result);

    }

    public function testConstantToSpaceStringToLower()
    {

        $result = Factory::constantToSpace(parent::STRING_CONSTANT, 'strtolower');

        $this->assertSame('php eol', $result);

    }

}