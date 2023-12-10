<?php

namespace SSD\StringConverter\Types;

interface Contract
{
    /**
     * Convert to format.
     */
    public function from(Contract $contract, string $string, ?callable $callback = null): string;

    /**
     * Conversion recipe.
     *
     * @return mixed
     */
    public function recipe(string $string, string $method, ?callable $callback = null): string;
}
