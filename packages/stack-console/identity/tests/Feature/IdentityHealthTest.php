<?php

namespace StackConsole\Identity\Tests\Feature;

use Tests\TestCase;

class IdentityHealthTest extends TestCase
{
    public function test_identity_health_endpoint_returns_ok(): void
    {
        $response = $this->getJson('/api/v3/identity/health');

        $response
            ->assertOk()
            ->assertJsonPath('data.module', 'identity')
            ->assertJsonPath('data.status', 'ok');
    }
}
