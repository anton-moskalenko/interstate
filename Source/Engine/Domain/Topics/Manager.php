<?php

namespace Liloi\Interstate\Engine\Domain\Quests;

use Liloi\Interstate\Engine\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'topics';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s order by uid desc limit 17;',
            $name
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
            'select * from %s where key_topic="%s"',
            $name,
            $key
        ));

        return Entity::create($row);
    }

    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();

        // @todo: Get param name from const.
        $key = $data['key_topic'];
        unset($data['key_topic']);

        self::getAdapter()->update(
            $name,
            $data,
            sprintf('key_topic = "%s"', $key)
        );
    }

    public static function create(): void
    {
        $name = self::getTableName();
        self::getAdapter()->insert($name, [
            'uid' => date('Y-m-d H:i:s'),
            'title' => 'Enter the title',
            'program' => '// comment',
            'status' => Statuses::TODO,
            'url' => 'https://liloi.com.ua',
            'tags' => 'enter the tags',
            'data' => '{}'
        ]);
    }
}