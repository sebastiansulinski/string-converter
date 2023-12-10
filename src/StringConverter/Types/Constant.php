<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class Constant extends Converter implements Contract
{
    /**
     * Convert to constant.
     */
    public function from(Contract $contract, string $string, ?callable $callback = null): string
    {
        return $this->callback(
            ltrim(strtoupper($contract->recipe($string, 'underscore')), '_'),
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
            RegEx::REGEX_UNDERSCORE,
            [$this, $method],
            $this->callback($string, $callback)
        );
    }
}
