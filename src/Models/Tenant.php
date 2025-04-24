<?php

namespace ScolarisSdk\Models;

class Tenant
{
    public function __construct(
        private string $id,
        private string $name,
        private string $createdAt,
    ) {}

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->createdAt,
        ];
    }
}
