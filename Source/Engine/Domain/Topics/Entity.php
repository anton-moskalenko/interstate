<?php

namespace Liloi\Interstate\Engine\Domain\Quests;

use Liloi\Tools\Entity as AbstractEntity;

/**
 * @method void setUid(string $value)
 * @method string getUid()
 * @method void setTitle(string $value)
 * @method string getTitle()
 * @method void setProgram(string $value)
 * @method string getProgram()
 * @method void setStatus(string $value)
 * @method string getStatus()
 * @method void setUrl(string $value)
 * @method string getUrl()
 * @method void setTags(string $value)
 * @method string getTags()
 * @method void setData(string $value)
 * @method string getData()
 *
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_topic');
    }

    public function getStatusCaption(): string
    {
        return Statuses::$list[$this->getStatus()];
    }

    public function getStatusClass(): string
    {
        $status = strtolower($this->getStatusCaption());
        return str_replace(' ', '-', $status);
    }

    public function save(): void
    {
        Manager::save($this);
    }
}