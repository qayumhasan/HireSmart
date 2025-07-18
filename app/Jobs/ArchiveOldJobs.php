<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use App\Models\JobManagement;

class ArchiveOldJobs implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $archivedCount = JobManagement::where('is_archived', false)
            ->whereDate('posted_at', '<', Carbon::now()->subDays(30))
            ->update(['is_archived' => true,'is_active'=>false]);

        Log::info("Archived {$archivedCount} job posts older than 30 days.");
    }
}
