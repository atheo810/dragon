<?php

namespace Psr\Log;

/**
 * Basic Implemetation of LoggerAwareInterface
 */
class LoggerAwareTrait
{
    /**
     * The Logger interface
     * 
     * @var LoggerInterface|null
     */
    protected $logger;

    /**
     * Sets a logger
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
