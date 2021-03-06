<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\{
    RegEx, Converter
};

class Underscore extends Converter implements Contract
{
    /**
     * Convert to underscore.
     *
     * @param  \SSD\StringConverter\Types\Contract $contract
     * @param  string $string
     * @param  callable|null $callback
     * @return string
     */
    public function from(Contract $contract, string $string, callable $callback = null): string
    {
        return $this->callback(
            ltrim($contract->recipe($string, 'underscore'), '_'),
            $callback
        );
    }

    /**
     * Conversion recipe.
     *
     * @param  string $string
     * @param  string $method
     * @param  callable|null $callback
     * @return mixed
     */
    public function recipe(string $string, string $method, callable $callback = null): string
    {
        return preg_replace_callback(
            RegEx::REGEX_UNDERSCORE,
            [$this, $method],
            $this->callback($string, $callback)
        );
    }
}