<?php

declare(strict_types=1);

namespace Kito\UniqueIdentifier;

/**
 * Description of UniqueIdentifier.
 *
 * @author Instalacion
 */
class MachineIdentifier
{
    const linuxMachineIDPath = '/etc/machine-id';

    public static function getLinuxMachineID(): ?string
    {
        if (!file_exists(self::linuxMachineIDPath)) {
            return null;
        }

        if (!is_readable(self::linuxMachineIDPath)) {
            return null;
        }

        return file_get_contents(self::linuxMachineIDPath);
    }
}
