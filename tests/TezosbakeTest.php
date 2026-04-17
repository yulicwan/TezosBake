<?php
/**
 * Tests for TezosBake
 */

use PHPUnit\Framework\TestCase;
use Tezosbake\Tezosbake;

class TezosbakeTest extends TestCase {
    private Tezosbake $instance;

    protected function setUp(): void {
        $this->instance = new Tezosbake(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tezosbake::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
