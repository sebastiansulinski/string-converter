<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class ClassName extends Converter implements Contract
{
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
        return ucwords($contract->recipe(
            $string,
            'upperCaseFirst',
            function($string) use($contract) {

                if ($contract instanceof Camel) {
                    return $string;
                }

                return strtolower($string);

            }
        ));
    }

    /**
     * Return result of the regular expression replacement.
     *
     * @param $string
     * @param $method
     * @param callable|null $before
     * @return string
     */
    public function recipe($string, $method, callable $before = null)
    {
        return preg_replace_callback(
            RegEx::REGEX_CAPITAL_LETTERS,
            [$this, $method],
            $this->callBefore($string, $before)
        );
    }

}