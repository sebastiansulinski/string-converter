<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class Hyphen extends Converter implements Contract
{
    /**
     * Convert to hyphen.
     */
    public function from(Contract $contract, string $string, ?callable $callback = null): string
    {
        return $this->callback(
            ltrim($contract->recipe($string, 'hyphen'), '-'),
            $callback
        );
    }

    /**
     * Conversion recipe.
     *
     * @return mixed
     */
    public function recipe(string $string, string $method, ?callable $callback = null): string
    {
        return preg_replace_callback(
            RegEx::REGEX_HYPHEN,
            [$this, $method],
            $this->callback($string, $callback)
        );
    }
}
