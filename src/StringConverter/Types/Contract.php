<?php

namespace SSD\StringConverter\Types;

interface Contract
{
    /**
     * Convert to format.
     *
     * @param \SSD\StringConverter\Types\Contract
     * @param string $string
     *
     * @return string
     */
    public function from(Contract $contract, $string);

    /**
     * Return result of the regular expression replacement.
     *
     * @param $string
     * @param $method
     * @return mixed
     */
    public function recipe($string, $method);

}