<?php

namespace SSD\StringConverter\Types;

use SSD\StringConverter\Converter;
use SSD\StringConverter\RegEx;

class Space extends Converter implements Contract
{
    /**
     * Convert to space format.
     * Call optional function on callback.
     *
     * @param \SSD\StringConverter\Types\Contract
     * @param string $string
     * @param callable|null $callback
     *
     * @return string
     */
    public function from(Contract $contract, $string, callable $callback = null)
    {
        return $this->callback(
            trim($contract->recipe($string, 'space')),
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
            RegEx::REGEX_SPACE,
            [$this, $method],
            $this->callback($string, $callback)
        );
    }

}