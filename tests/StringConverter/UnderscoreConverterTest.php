<?php

use SSD\StringConverter\Factory;


class UnderscoreConverterCase extends BaseCase
{

    public function testUnderscoreToClassName()
    {

        $result = Factory::underscoreToClassName(parent::STRING_UNDERSCORE);

        $this->assertSame(parent::STRING_CLASS_NAME, $result);

    }

    public function testUnderscoreToCamel()
    {

        $result = Factory::underscoreToCamel(parent::STRING_UNDERSCORE);

        $this->assertSame(parent::STRING_CAMEL, $result);

    }

    public function testUnderscoreToConstant()
    {

        $result = Factory::underscoreToConstant(parent::STRING_UNDERSCORE);

        $this->assertSame(parent::STRING_CONSTANT, $result);

    }

    public function testUnderscoreToHyphen()
    {

        $result = Factory::underscoreToHyphen(parent::STRING_UNDERSCORE);

        $this->assertSame(parent::STRING_HYPHEN, $result);

    }

    public function testUnderscoreToSpace()
    {

        $result = Factory::underscoreToSpace(ucfirst(parent::STRING_UNDERSCORE), 'strtolower');

        $this->assertSame(parent::STRING_SPACE, $result);

    }

    public function testUnderscoreToSpaceFails()
    {

        $result = Factory::underscoreToSpace(ucfirst(parent::STRING_UNDERSCORE));

        $this->assertNotSame(parent::STRING_SPACE, $result);

    }

}