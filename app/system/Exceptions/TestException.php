<?php

namespace Dragon\system\Exceptions;

class TestException extends CriticalError{

    use DebugTraceableTrait;

    public function forInvalidMockClass(string $name){
        // return new static(lang('Test.invalidMockClass', [$name]));
    }
}