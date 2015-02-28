<?php

use PHPUnit_Framework_TestCase;

use SSD\CaseConverter\Factory;


class ConverterTest extends PHPUnit_Framework_TestCase {


    public function testCamelToConstant()
    {

        $string = 'phpEol';

        $result = Factory::fromCamelToConstant($string);

        $this->assertEquals('PHP_EOL', $result);

    }


    public function testHyphenToCamel()
    {

        $string = 'simple-method-name';

        $result = Factory::hyphenToCamel($string);

        $this->assertEquals('simpleMethodName', $result);

    }

    public function testUnderScoreToCamel()
    {

        $string = 'simple_method_name';

        $result = Factory::underScoreToCamel($string);

        $this->assertEquals('simpleMethodName', $result);

    }

    public function testUnderScoreToUCWords()
    {

        $string = 'simple_method_name';

        $result = Factory::underScoreToUCWords($string);

        $this->assertEquals('SimpleMethodName', $result);

    }

}