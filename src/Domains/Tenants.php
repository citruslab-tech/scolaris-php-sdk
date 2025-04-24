<?php

namespace ScolarisSdk\Domains;

use ScolarisSdk\Models\Tenant;
use ScolarisSdk\HttpApiClient;

class Tenants
{
    public function __construct(
        private HttpApiClient $httpApiClient
    ) {}

    public function create(string $id, string $name): Tenant
    {
        $data = [
            'id' => $id,
            'name' => $name,
        ];

        $tenantData = $this->httpApiClient->post("admin/tenants", $data);

        return new Tenant(
            $tenantData['id'],
            $tenantData['name'],
            $tenantData['created_at'],
        );
    }
}
