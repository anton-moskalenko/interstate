<?php

namespace Liloi\Interstate\API\Points\Collection;

use Liloi\API\Response;
use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Interstate\Engine\Domain\Points\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $dt = self::getParameter('dt');
        $collection_points = Manager::loadCollection($dt);

        $response = new Response();

        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'collection' => $collection_points
        ]));

        return $response;
    }
}