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
     */
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * Get source class instance.
     */
    public function from(): Contract
    {
        $className = $this->className($this->from);

        return new $className;
    }

    /**
     * Get destination class instance.
     */
    public function to(): Contract
    {
        $className = $this->className($this->to);

        return new $className;
    }

    /**
     * Return formatted class name.
     */
    private function className(string $name): string
    {
        return 'SSD\\StringConverter\\Types\\'.ucfirst($name);
    }
}
