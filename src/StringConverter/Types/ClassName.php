<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class ClassName extends Converter implements Contract
{
    /**
     * Convert to class name.
     */
    public function from(Contract $contract, string $string, ?callable $callback = null): string
    {
        $string = ucwords(
            $contract->recipe(
                $string,
                'upperCaseFirst',
                function ($string) use ($contract) {

                    if ($contract instanceof Camel) {
                        return $string;
                    }

                    return strtolower($string);
                }
            )
        );

        return $this->callback($string, $callback);
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
