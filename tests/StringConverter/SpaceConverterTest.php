<?php

use SSD\StringConverter\Factory;


class SpaceConverterCase extends BaseCase
{

    public function testSpaceToClassName()
    {

        $result = Factory::spaceToClassName(parent::STRING_SPACE);

        $this->assertSame('PhpEol', $result);

    }

    public function testSpaceToCamel()
    {

        $result = Factory::spaceToCamel(parent::STRING_SPACE);

        $this->assertSame('phpEol', $result);

    }

    public function testSpaceToConstant()
    {

        $result = Factory::spaceToConstant(parent::STRING_SPACE);

        $this->assertSame('PHP_EOL', $result);

    }

    public function testSpaceToHyphen()
    {

        $result = Factory::spaceToHyphen(parent::STRING_SPACE);

        $this->assertSame('php-eol', $result);

    }

    public function testSpaceToUnderscore()
    {

        $result = Factory::spaceToUnderscore(parent::STRING_SPACE);

        $this->assertSame('php_eol', $result);

    }

    public function testSpaceToUnderscoreStringToUpper()
    {

        $result = Factory::spaceToUnderscore(parent::STRING_SPACE, 'strtoupper');

        $this->assertSame('PHP_EOL', $result);

    }


}