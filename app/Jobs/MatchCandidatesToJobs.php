<?php
namespace App\Jobs;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Bus;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class MatchCandidatesToJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(): void
    {
        User::where('role','candidate')
            ->select('id')
            ->chunkById(10000, function ($candidatesChunk) {
                Bus::batch(
                    $candidatesChunk->map(function ($candidate) {
                        return new ProcessCandidateMatch($candidate->id);
                    })->toArray()
                )->dispatch();
            });
    }
}


