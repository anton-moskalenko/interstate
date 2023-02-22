<?php

namespace Liloi\Interstate\API\Points\Remove;

use Liloi\API\Response;
use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Interstate\Engine\Domain\Points\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $entity = Manager::load(self::getParameter('key'));;
        $entity->remove();

        return new Response();
    }
}