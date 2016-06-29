<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class Hyphen extends Converter implements Contract
{
    /**
     * Convert to hyphen format.
     *
     * @param Contract $contract
     * @param string $string
     * @param callable|null $callback
     * @return string
     */
    public function from(Contract $contract, $string, callable $callback = null)
    {
        return $this->callback(
            ltrim( $contract->recipe($string, 'hyphen'), '-' ),
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
            RegEx::REGEX_HYPHEN,
            [$this, $method],
            $this->callback($string, $callback)
        );
    }

}