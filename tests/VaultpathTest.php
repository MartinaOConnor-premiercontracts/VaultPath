<?php
/**
 * Tests for VaultPath
 */

use PHPUnit\Framework\TestCase;
use Vaultpath\Vaultpath;

class VaultpathTest extends TestCase {
    private Vaultpath $instance;

    protected function setUp(): void {
        $this->instance = new Vaultpath(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Vaultpath::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
