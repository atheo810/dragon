<?php

namespace Dragon\system\Exceptions;

class ConfigException extends CriticalError implements HasExitCodeInterface
{
    public function getExitCode(): int
    {
        return EXIT_CONFIG;
    }

    public static function forDisabledMigrations()
    {
        // return new static(lang('Migrations.disabled'));
    }
}
