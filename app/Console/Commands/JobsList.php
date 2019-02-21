<?php

namespace App\Console\Commands;

use App\Models\Job;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * Class JobsList
 *
 * @package App\Console\Commands
 */
class JobsList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jobs:list {status?} {limit?} {offset?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get list of jobs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     * @throws \Exception
     */
    public function handle()
    {
        $jobs = Job::select("*");
        if ($status = $this->argument('status')) {
            $jobs->where('status', '=', $status);
        }
        $limit  = $this->argument('limit');
        $offset = $this->argument('offset');
        $jobs->limit($limit ?? 100);
        $jobs->offset($offset ?? 0);
        $jobs->orderBy("status");
        $jobs->orderBy("id");
        $jobs = $jobs->get();
        if ($jobs->count() < 1) {
            $this->info('Not found');
        } else {
            foreach ($jobs as $job) {
                $this->info($job->url . ' -> ' . $job->status);
            }
        }
    }
}
