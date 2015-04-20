<?php namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;


class Camel extends Converter implements Contract {


    /**
     * Convert to camel case format.
     *
     * @param \SSD\StringConverter\Types\Contract
     * @param string $string
     *
     * @return string
     */
    public function from(Contract $contract, $string)
    {

        return $contract->recipe(
            strtolower($string),
            'upperCaseFirst'
        );

    }

    /**
     * Return result of the regular expression replacement.
     *
     * @param $string
     * @param $method
     *
     * @return string
     */
    public function recipe($string, $method)
    {

        return preg_replace_callback(
            RegEx::REGEX_CAPITAL_LETTERS,
            [$this, $method],
            $string
        );

    }


}