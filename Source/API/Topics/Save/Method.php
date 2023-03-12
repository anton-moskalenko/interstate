<?php

namespace Liloi\Interstate\API\Topics\Save;

use Liloi\API\Response;
use Liloi\Interstate\API\Method as SuperMethod;
use Liloi\Interstate\Engine\Domain\Topics\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $entity = Manager::load(self::getParameter('key'));

        $entity->setUid(self::getParameter('uid'));
        $entity->setTitle(self::getParameter('title'));
        $entity->setProgram(self::getParameter('program'));
        $entity->setStatus(self::getParameter('status'));
        $entity->setUrl(self::getParameter('url'));
        $entity->setTags(self::getParameter('tags'));
        $entity->setData(self::getParameter('data'));

        $entity->save();

        return new Response();
    }
}