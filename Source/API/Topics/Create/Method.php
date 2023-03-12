<?php

namespace Liloi\Interstate\API\Topics\Create;

use Liloi\API\Response;
use Liloi\Interstate\API\Method as SuperMethod;
use Liloi\Interstate\Engine\Domain\Topics\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        Manager::create();

        return new Response();
    }
}