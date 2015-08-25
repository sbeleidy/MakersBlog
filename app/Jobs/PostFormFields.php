<?php

namespace Makersblog\Jobs;

use Makersblog\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class PostFormFields extends Job implements SelfHandling
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
