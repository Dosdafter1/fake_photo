<?php

namespace App\Jobs;

use App\Services\RemovePhotoBackService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RemovePhotoBackJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        private int $photo_id)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(RemovePhotoBackService $photoService): void
    {
        $photoService->handle($this->photo_id);
    }
}
