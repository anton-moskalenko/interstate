<?php

namespace Liloi\Interstate\Engine\Domain\Ticket;

use Liloi\Tools\Entity as AbstractEntity;

/**
 * @todo: add tests
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_point');
    }

    public function getTitle(): string
    {
        return $this->getField('title');
    }

    public function setTitle(string $value): void
    {
        // @todo Extract param names to const.
        $this->data['title'] = $value;
    }

    public function getProgram(): string
    {
        return $this->getField('program');
    }

    public function setProgram(string $value): void
    {
        // @todo Extract param names to const.
        $this->data['program'] = $value;
    }

    public function getTags(): string
    {
        return $this->getField('tags');
    }

    public function setTags(string $value): void
    {
        // @todo Extract param names to const.
        $this->data['tags'] = $value;
    }

    public function getData(): string
    {
        return $this->getField('data');
    }

    public function setData(string $value): void
    {
        // @todo Extract param names to const.
        $this->data['data'] = $value;
    }

    public function save(): void
    {
        Manager::save($this);
    }
}