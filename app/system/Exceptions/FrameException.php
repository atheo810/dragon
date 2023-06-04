<?php

namespace Dragon\system\Exceptions;

use RuntimeException;

/**
 * Class FrameworkException
 *
 * A collection of exceptions thrown by the framework
 * that can only be determined at run time.
 */
class FrameworkException extends RuntimeException implements ExceptionInterface
{
    use DebugTraceableTrait;

    public static function forEnabledZlibOuputCompresion()
    {
        // return new static(lang('Core.enabledZlibOutputCompresion'));
    }

    public static function forInvalidFile()
    {
        // return new static(lang('Core.invalidFile', [$path]));
    }

    public static function forMissingExtension(string $extension)
    {
        if (strpos($extension, 'intl') !== false) {
            // @codeCoverageIgnoreStart
            $message = sprintf(
                'The framework needs the following extension(s) installed and loaded: %s.',
                $extension
            );
            // @codeCoverageIgnoreEnd
        } else {
            // $message = lang('Core.missingExtension', [$extension]);
        }

        return new static($message);
    }

    public static function forNoHandlers(string $class)
    {
        // return new static(lang('Core.noHandlers', [$class]));
    }

    public static function forFabricatorCreateFailed(string $table, string $reason)
    {
        // return new static(lang('Fabricator.createFailed', [$table, $reason]));
    }
}
