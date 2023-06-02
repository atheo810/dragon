<?php

namespace Psr\log;

/**
 * Describe a logger-aware instance.
 *
 */
interface LoggerAwareInterface
{
    /**
     * Sets a Logger instance on the object
     * 
     * @param LoggerInterface $logger
     * 
     * @return void
     */
    public function setLogger(LoggerInterface $logger);
}
