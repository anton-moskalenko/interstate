<?php

namespace Liloi\Interstate\API\Topics\Remove;

use Liloi\API\Response;
use Liloi\Interstate\API\Method as SuperMethod;
use Liloi\Interstate\Engine\Domain\Topics\Manager;
use Liloi\Interstate\Engine\Domain\Topics\Statuses;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $entity = Manager::load(self::getParameter('key'));
        $entity->setStatus(Statuses::OBSOLETE);
        $entity->save();

        return new Response();
    }
}