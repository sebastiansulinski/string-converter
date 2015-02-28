<?php namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;


class Camel extends Converter {


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
            RegEx::REGEX_CAPITAL_LETTERS,
            [$this, $method],
            $string
        );

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
     * @return string
     */
    public function toHyphen($string)
    {

        return strtolower($this->express($string, 'hyphen'));

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