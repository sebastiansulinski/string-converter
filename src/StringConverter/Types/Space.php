<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class Space extends Converter implements Contract
{
    /**
     * Convert to space format.
     * Call optional function on callback.
     */
    public function from(Contract $contract, string $string, ?callable $callback = null): string
    {
        return $this->callback(
            trim($contract->recipe($string, 'space')),
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
            RegEx::REGEX_SPACE,
            [$this, $method],
            $this->callback($string, $callback)
        );
    }
}
