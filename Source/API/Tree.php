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

    public static function collect(): void
    {
        $manager = new Manager();

        // @todo: add automatic API method collect.
        $manager->add(new Method('Interstate.Topics.Show', '\Liloi\Interstate\API\Topics\Show\Method::execute'));
        $manager->add(new Method('Interstate.Topics.Create', '\Liloi\Interstate\API\Topics\Create\Method::execute'));
        $manager->add(new Method('Interstate.Topics.Remove', '\Liloi\Interstate\API\Topics\Remove\Method::execute'));
        $manager->add(new Method('Interstate.Topics.Edit', '\Liloi\Interstate\API\Topics\Edit\Method::execute'));
        $manager->add(new Method('Interstate.Topics.Save', '\Liloi\Interstate\API\Topics\Save\Method::execute'));


        self::$manager = $manager;
    }

    public static function execute(): string
    {
        $response = self::$manager->search($_POST['method'])->execute($_POST['parameters'] ?? []);
        return $response->getResponse();
    }
}