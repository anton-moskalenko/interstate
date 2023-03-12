<?php

namespace Liloi\Interstate\API\Topics\Show;

use Liloi\API\Response;
use Liloi\Interstate\API\Method as SuperMethod;
use Liloi\Interstate\Engine\Domain\Topics\Manager as TopicsManager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $response = new Response();

        $url = trim($_SERVER['REQUEST_URI'], '/');
        list($date, $time) = explode('/', $url);
        $time = str_replace('-', ':', $time);
        $uid = $date . ' ' . $time;

        $entity = TopicsManager::loadByUID($uid);

        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'entity' => $entity
        ]));

        return $response;
    }
}