<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class MachineIdentifierTest extends TestCase
{
    public function testFileExists(): string
    {
        $path = __DIR__.'/../src/MachineIdentifier.php';
        $this->assertFileExists($path);

        return $path;
    }

    /**
     * @depends testFileExists
     */
    public function testClassExists(string $path): void
    {
        include_once $path;
        $this->assertTrue(class_exists(Kito\UniqueIdentifier\MachineIdentifier::class));
    }

    /**
     * @depends testClassExists
     */
    public function testGetLinuxMachineID()
    {
        $lmid = Kito\UniqueIdentifier\MachineIdentifier::getLinuxMachineID();
        $this->assertIsNotBool($lmid);
        $this->assertIsString($lmid);
        $this->assertNotEmpty($lmid);
    }
}
