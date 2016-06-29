<?php

use SSD\StringConverter\Factory;


class ConstantConverterCase extends BaseCase
{

    public function testConstantToClassName()
    {

        $result = Factory::constantToClassName(parent::STRING_CONSTANT);

        $this->assertSame(parent::STRING_CLASS_NAME, $result);

    }

    public function testConstantToCamel()
    {

        $result = Factory::constantToCamel(parent::STRING_CONSTANT);

        $this->assertSame(parent::STRING_CAMEL, $result);

    }

    public function testConstantToHyphen()
    {

        $result = Factory::constantToHyphen(parent::STRING_CONSTANT);

        $this->assertSame(parent::STRING_HYPHEN, $result);

    }

    public function testConstantToUnderscore()
    {

        $result = Factory::constantToUnderscore(parent::STRING_CONSTANT);

        $this->assertSame(parent::STRING_UNDERSCORE, $result);

    }

    public function testConstantToSpace()
    {

        $result = Factory::constantToSpace(parent::STRING_CONSTANT, 'strtolower');

        $this->assertSame(parent::STRING_SPACE, $result);

    }

    public function testConstantToSpaceFails()
    {

        $result = Factory::constantToSpace(parent::STRING_CONSTANT);

        $this->assertNotSame(parent::STRING_SPACE, $result);

    }

}