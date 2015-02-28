<?php namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;


class Hyphen extends Converter {

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
            RegEx::REGEX_HYPHEN,
            [$this, $method],
            $string
        );

    }

    /**
     * Convert hyphens to camel case.
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
     * Convert to lower-case underscore.
     *
     * @param $string
     *
     * @return string
     */
    public function toUnderscore($string)
    {

        return strtolower($this->express($string, 'underscore'));

    }

}