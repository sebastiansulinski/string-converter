<?php

use SSD\StringConverter\Factory;


class ClassNameConverterCase extends BaseCase
{

    public function testClassNameToConstant()
    {

        $result = Factory::classNameToConstant(parent::STRING_CLASS_NAME);

        $this->assertSame('PHP_EOL', $result);

    }

    public function testClassNameToHyphen()
    {

        $result = Factory::classNameToHyphen(parent::STRING_CLASS_NAME);

        $this->assertSame('Php-Eol', $result);

    }

    public function testClassNameToUnderscore()
    {

        $result = Factory::classNameToUnderscore(parent::STRING_CLASS_NAME);

        $this->assertSame('Php_Eol', $result);

    }

    public function testClassNameToSpace()
    {

        $result = Factory::classNameToSpace(parent::STRING_CLASS_NAME);

        $this->assertSame('Php Eol', $result);

    }

    public function testClassNameToSpaceStringToLower()
    {

        $result = Factory::classNameToSpace(parent::STRING_CLASS_NAME, 'strtolower');

        $this->assertSame('php eol', $result);

    }


}