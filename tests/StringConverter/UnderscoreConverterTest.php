<?php

use SSD\StringConverter\Factory;


class UnderscoreConverterCase extends BaseCase
{

    public function testUnderscoreToClassName()
    {

        $result = Factory::underscoreToClassName(parent::STRING_UNDERSCORE);

        $this->assertSame('PhpEol', $result);

    }

    public function testUnderscoreToCamel()
    {

        $result = Factory::underscoreToCamel(parent::STRING_UNDERSCORE);

        $this->assertSame('phpEol', $result);

    }

    public function testUnderscoreToConstant()
    {

        $result = Factory::underscoreToConstant(parent::STRING_UNDERSCORE);

        $this->assertSame('PHP_EOL', $result);

    }

    public function testUnderscoreToHyphen()
    {

        $result = Factory::underscoreToHyphen(parent::STRING_UNDERSCORE);

        $this->assertSame('php-eol', $result);

    }

    public function testUnderscoreToSpace()
    {

        $result = Factory::underscoreToSpace(parent::STRING_UNDERSCORE);

        $this->assertSame('php eol', $result);

    }

    public function testUnderscoreToSpaceStringToUpper()
    {

        $result = Factory::underscoreToSpace(parent::STRING_UNDERSCORE, 'strtoupper');

        $this->assertSame('PHP EOL', $result);

    }

}