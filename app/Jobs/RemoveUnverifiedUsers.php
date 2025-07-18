<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Carbon\Carbon;

class RemoveUnverifiedUsers implements ShouldQueue
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
        $deletedCount = User::whereNull('email_verified_at')
        ->where('created_at', '<=', Carbon::now()->subDays(7))
        ->delete();

    Log::info("Removed {$deletedCount} unverified users.");
    }
}
