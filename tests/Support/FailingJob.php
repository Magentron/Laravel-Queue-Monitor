<?php

namespace romanzipp\QueueMonitor\Tests\Support;

use Exception;

class FailingJob extends Job
{
    public function handle(): void
    {
        $this->job->markAsFailed();

        // throw new Exception('Whoops');
    }
}