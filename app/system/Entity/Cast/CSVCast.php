<?php

namespace Dragon\system\Entity\Cast;

/**
 * Class CSVCast
 */
class CSVCast extends BaseCast
{
    /**
     * {@inheritDoc}
     */
    public static function get($value, array $params = []): array
    {
        return explode(',', $value);
    }

    /**
     * {@inheritDoc}
     */
    public static function set($value, array $params = []): string
    {
        return implode(',', $value);
    }
}
