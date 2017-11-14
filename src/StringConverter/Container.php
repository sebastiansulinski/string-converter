<?php

namespace SSD\StringConverter;

use SSD\StringConverter\Types\Contract;

class Container
{
    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    /**
     * Container constructor.
     *
     * @param string $from
     * @param string $to
     */
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * Get source class instance.
     *
     * @return \SSD\StringConverter\Types\Contract
     */
    public function from(): Contract
    {
        $className = $this->className($this->from);

        return new $className;
    }

    /**
     * Get destination class instance.
     *
     * @return \SSD\StringConverter\Types\Contract
     */
    public function to(): Contract
    {
        $className = $this->className($this->to);

        return new $className;
    }

    /**
     * Return formatted class name.
     *
     * @param  string $name
     * @return string
     */
    private function className(string $name): string
    {
        return "SSD\\StringConverter\\Types\\".ucfirst($name);
    }
}