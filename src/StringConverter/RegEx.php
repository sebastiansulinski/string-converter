<?php

namespace SSD\StringConverter;

class RegEx
{
    /**
     * Underscore pattern.
     *
     * @var string
     */
    const REGEX_UNDERSCORE = '/_(.)/';

    /**
     * Hyphen pattern.
     *
     * @var string
     */
    const REGEX_HYPHEN = '/-(.)/';

    /**
     * Capital letters pattern.
     *
     * @var string
     */
    const REGEX_CAPITAL_LETTERS = '/([A-Z])/';

    /**
     * Space pattern.
     *
     * @var string
     */
    const REGEX_SPACE = '/\s(.)/';
}
