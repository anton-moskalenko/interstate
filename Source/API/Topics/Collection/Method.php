<?php

namespace Liloi\Interstate\API\Topics\Collection;

use Liloi\API\Response;
use Liloi\Interstate\API\Method as SuperMethod;
use Liloi\Interstate\Engine\Domain\Topics\Manager as TopicsManager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $response = new Response();

        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'collection' => TopicsManager::loadCollection()
        ]));

        return $response;
    }
}