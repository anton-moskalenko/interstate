<?php

namespace Liloi\Interstate\Engine\Domain\Topics;

class Statuses
{
    public const TODO = 1;
    public const COMPOSING = 2;
    public const PRIVATE = 3;
    public const PUBLIC = 4;
    public const OBSOLETE = 5;

    public static $list = [
        self::TODO => 'To Do',
        self::COMPOSING => 'Composing',
        self::PRIVATE => 'Private',
        self::PUBLIC => 'Public',
        self::OBSOLETE => 'Obsolete',
    ];
}