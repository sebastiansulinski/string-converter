<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class ClassName extends Converter implements Contract
{
    /**
     * Convert to camel case format.
     *
     * @param Contract $contract
     * @param string $string
     * @param callable $callback
     * @return string
     */
    public function from(Contract $contract, $string, callable $callback = null)
    {
        $string = ucwords(
            $contract->recipe(
                $string,
                'upperCaseFirst',
                function($string) use($contract) {

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
            RegEx::REGEX_CAPITAL_LETTERS,
            [$this, $method],
            $this->callback($string, $callback)
        );
    }

}