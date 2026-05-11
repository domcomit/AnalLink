<?php
/**
 * Tests for AnalLink
 */

use PHPUnit\Framework\TestCase;
use Anallink\Anallink;

class AnallinkTest extends TestCase {
    private Anallink $instance;

    protected function setUp(): void {
        $this->instance = new Anallink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Anallink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
