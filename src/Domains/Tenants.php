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

    public function create(
        string $name,
        string $subdomain,
        Administrative $adminitrative,
        array $configs = []
    ): Tenant {
        $data = [
            'name' => $name,
            'subdomain' => $subdomain,
            'administrative' => [
                'name' => $adminitrative->getName(),
                'last_name' => $adminitrative->getLastName(),
                'email' => $adminitrative->getEmail(),
            ],
            'configs' => $configs,
        ];

        $tenantData = $this->httpApiClient->post("admin/tenants", $data);

        return new Tenant(
            $tenantData['subdomain'],
            $tenantData['name'],
            $tenantData['created_at'],
        );
    }
}
