<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class Underscore extends Converter implements Contract
{
    /**
     * Convert to underscore format.
     *
     * @param Contract $contract
     * @param string $string
     * @param callable|null $callback
     * @return string
     */
    public function from(Contract $contract, $string, callable $callback = null)
    {
        return $this->callback(
            ltrim( $contract->recipe($string, 'underscore'), '_' ),
            $callback
        );
    }

    /**
     * Return result of the regular expression replacement.
     *
     * @param $string
     * @param $method
     * @param callable|null $callback
     * @return string
     */
    public function recipe($string, $method, callable $callback = null)
    {
        return preg_replace_callback(
            RegEx::REGEX_UNDERSCORE,
            [$this, $method],
            $this->callback($string, $callback)
        );
    }
}