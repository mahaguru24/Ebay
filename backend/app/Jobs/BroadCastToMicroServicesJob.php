<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;


class BroadCastToMicroServicesJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var array
     */
    protected $model;

    /**
     * @var string
     */
    protected $event;

    /**
     * Create a new job instance.
     * @param  Mixed $model
     * @param  String $event
     * @return void
     */
    public function __construct($model, $event)
    {
        $this->model = $model;
        $this->event = $event;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // TODO Broadcast to microservices
        Log::info($this->event . ' fired job ran');
        Log::info(print_r($this->model, true));
    }
}
