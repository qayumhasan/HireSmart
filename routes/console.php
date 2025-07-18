<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Jobs\MatchCandidatesToJobs;
use App\Jobs\ArchiveOldJobs;
use App\Jobs\RemoveUnverifiedUsers;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::job(new MatchCandidatesToJobs)->daily();
Schedule::job(new ArchiveOldJobs)->everyMinute();
Schedule::job(new RemoveUnverifiedUsers)->everyMinute();
