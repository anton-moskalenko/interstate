<?php

namespace Liloi\Interstate\Engine\Domain\Ticket;

use Liloi\Rune\Engine\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    public static function getTableName(): string
    {
        return 'interstate_points'; // @todo: add dynamic prefix
    }

    public static function loadCollection(?string $dt = null): Collection
    {
        if(is_null($dt))
        {
            $dt = date('Y-m-d 00:00:00');
        }

        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where key_point between "%s" and "%s" order by key_point desc limit 100;',
            $name,
            date('Y-m-d 00:00:00', strtotime($dt)),
            date('Y-m-d 23:59:59', strtotime($dt)),
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[] = Entity::create($row);
        }

        return $collection;
    }

    public static function load(string $key): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_point="%s"',
            $name, $key
        ));

        return Entity::create($row);
    }

    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();

        // @todo: Get param name from const.
        $key = $data['key_point'];
        unset($data['key_point']);

        self::getAdapter()->update(
            $name,
            $data,
            sprintf('key_point = "%s"', $key)
        );
    }

    // @todo: rise this method to more abstract level.
    public static function create(): void
    {
        $row = [
            'keys' => gmdate('Y-m-d H:i:s'),
            'title' => 'Enter the title',
            'program' => '// Invisible line',
            'tags' => 'enter the tags',
            'data' => '{}',
        ];

        $name = self::getTableName();
        self::getAdapter()->insert($name, $row);
    }
}