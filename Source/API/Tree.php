<?php

namespace Liloi\Interstate\API;

use Liloi\API\Manager;
use Liloi\API\Method;

/**
 * @inheritDoc
 */
class Tree
{
    static ?Manager $manager = null;

    public static function collect(?Manager $manager = null): Manager
    {
        if(is_null($manager))
        {
            $manager = new Manager();
        }

        // @todo: add automatic API method collect.
        $manager->add(new Method('Interstate.Points.Collection', '\Liloi\Interstate\API\Points\Collection\Method::execute'));
        $manager->add(new Method('Interstate.Points.Create', '\Liloi\Interstate\API\Points\Create\Method::execute'));
        $manager->add(new Method('Interstate.Points.Remove', '\Liloi\Interstate\API\Points\Remove\Method::execute'));
        $manager->add(new Method('Interstate.Points.Edit', '\Liloi\Interstate\API\Points\Edit\Method::execute'));
        $manager->add(new Method('Interstate.Points.Show', '\Liloi\Interstate\API\Points\Show\Method::execute'));
        $manager->add(new Method('Interstate.Points.Save', '\Liloi\Interstate\API\Points\Save\Method::execute'));

        self::$manager = $manager;
        return $manager;
    }

    public static function execute(): string
    {
        $response = self::$manager->search($_POST['method'])->execute($_POST['parameters'] ?? []);
        return $response->getResponse();
    }
}