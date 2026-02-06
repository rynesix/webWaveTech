<?php
/**
 * Tests for webWave
 */

use PHPUnit\Framework\TestCase;
use Webwave\Webwave;

class WebwaveTest extends TestCase {
    private Webwave $instance;

    protected function setUp(): void {
        $this->instance = new Webwave(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Webwave::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
