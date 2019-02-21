<?php

namespace App\Console\Commands;

use App\Models\Job;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * Class JobsDelete
 *
 * @package App\Console\Commands
 */
class JobsDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jobs:delete {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete job by id';

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
        $job = Job::where('id', '=', $this->argument('id'))->limit(1)->first();
        if ($job) {
            $job->delete();

            $this->info('Successfully deleted');
        } else {
            $this->error('Not found');
        }
    }
}
