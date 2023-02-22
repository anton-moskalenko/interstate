<?php

namespace Liloi\Interstate\API\Points\Save;

use Liloi\API\Response;
use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Interstate\Engine\Domain\Points\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $entity = Manager::load(self::getParameter('key'));

        $entity->setTitle(self::getParameter('title'));
        $entity->setData(self::getParameter('data'));
        $entity->setProgram(self::getParameter('program'));

        $entity->save();

        return new Response();
    }
}