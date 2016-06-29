<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class Underscore extends Converter implements Contract
{
    /**
     * Convert to underscore format.
     *
     * @param \SSD\StringConverter\Types\Contract
     * @param string $string
     *
     * @return string
     */
    public function from(Contract $contract, $string)
    {
        return ltrim(strtolower(
            $contract->recipe(
                $string,
                'underscore'
            )
        ), '_');
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
            RegEx::REGEX_UNDERSCORE,
            [$this, $method],
            $this->callBefore($string, $before)
        );
    }
}