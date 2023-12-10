<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class Camel extends Converter implements Contract
{
    /**
     * Convert to camel case.
     */
    public function from(Contract $contract, string $string, ?callable $callback = null): string
    {
        return $this->callback(
            $contract->recipe(
                $string,
                'upperCaseFirst',
                function ($string) use ($contract) {

                    if ($contract instanceof ClassName) {
                        return lcfirst($string);
                    }

                    return strtolower($string);
                }
            ),
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
            RegEx::REGEX_CAPITAL_LETTERS,
            [$this, $method],
            $this->callback($string, $callback)
        );
    }
}
