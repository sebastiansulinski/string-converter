<?php

use SSD\StringConverter\Factory;


class ClassNameConverterCase extends BaseCase
{

    public function testClassNameToConstant()
    {

        $result = Factory::classNameToConstant(parent::STRING_CLASS_NAME);

        $this->assertSame(parent::STRING_CONSTANT, $result);

    }

    public function testClassNameToHyphen()
    {

        $result = Factory::classNameToHyphen(parent::STRING_CLASS_NAME);

        $this->assertSame(parent::STRING_HYPHEN, $result);

    }

    public function testClassNameToUnderscore()
    {

        $result = Factory::classNameToUnderscore(parent::STRING_CLASS_NAME);

        $this->assertSame(parent::STRING_UNDERSCORE, $result);

    }

    public function testClassNameToSpace()
    {

        $result = Factory::classNameToSpace(parent::STRING_CLASS_NAME, 'strtolower');

        $this->assertSame(parent::STRING_SPACE, $result);

    }

    public function testClassNameToSpaceFails()
    {

        $result = Factory::classNameToSpace(parent::STRING_CLASS_NAME);

        $this->assertNotSame(parent::STRING_SPACE, $result);

    }


}