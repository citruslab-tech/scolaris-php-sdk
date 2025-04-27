<?php

namespace ScolarisSdk\Domains;

use ScolarisSdk\Models\Tenant;
use ScolarisSdk\HttpApiClient;
use ScolarisSdk\Models\Administrative;

class Tenants
{
    public function __construct(
        private HttpApiClient $httpApiClient
    ) {}

    public function create(string $id, string $name, Administrative $adminitrative, array $configs = []): Tenant
    {
        $data = [
            'id' => $id,
            'name' => $name,
            'administrative' => [
                'name' => $adminitrative->getName(),
                'last_name' => $adminitrative->getLastName(),
                'email' => $adminitrative->getEmail(),
            ],
            'configs' => $configs,
        ];

        $tenantData = $this->httpApiClient->post("admin/tenants", $data);

        return new Tenant(
            $tenantData['id'],
            $tenantData['name'],
            $tenantData['created_at'],
        );
    }
}
