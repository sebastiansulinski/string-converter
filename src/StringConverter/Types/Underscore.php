<?php namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;


class Underscore extends Converter {


    /**
     * Return result of the regular expression replacement.
     *
     * @param $string
     * @param $method
     *
     * @return mixed
     */
    private function express($string, $method)
    {

        return preg_replace_callback(
            RegEx::REGEX_UNDERSCORE,
            [$this, $method],
            $string
        );

    }

    /**
     * Convert snake case to camel case.
     *
     * @param $string
     *
     * @return mixed
     */
    public function toCamel($string)
    {

        return $this->express($string, 'upperCaseFirst');

    }

    /**
     * Convert to upper-case underscore.
     *
     * @param $string
     *
     * @return string
     */
    public function toConstant($string)
    {

        return strtoupper($this->express($string, 'underscore'));

    }

    /**
     * Convert to lower-case hyphen.
     *
     * @param $string
     *
     * @return mixed
     */
    public function toHyphen($string)
    {

        return strtolower($this->express($string, 'hyphen'));

    }


}