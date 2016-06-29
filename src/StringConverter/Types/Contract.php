<?php

namespace SSD\StringConverter\Types;

interface Contract
{
    /**
     * Convert to format.
     *
     * @param Contract $contract
     * @param string $string
     * @param callable|null $callback
     * @return string
     */
    public function from(Contract $contract, $string, callable $callback = null);

    /**
     * Return result of the regular expression replacement.
     *
     * @param $string
     * @param $method
     * @param callable|null $callback
     * @return mixed
     */
    public function recipe($string, $method, callable $callback = null);

}