<?php

namespace App\Console\Commands;

use App\Models\Job;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * Class Jobs
 *
 * @package App\Console\Commands
 */
class Jobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jobs:create {url} {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new job';

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
     */
    public function handle()
    {
        $arguments = $this->arguments();
        if (!isset($arguments['name']) || !$arguments['name']) {
            $arguments['name'] = $arguments['url'];
        }
        $validator = Validator::make($arguments, [
            'name' => 'sometimes|string|max:255',
            'url' => 'required|url|string|max:255',
            'status' => Rule::in(array_keys(Job::listOfStatus())),
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->getMessages();
            foreach ($errors AS $error) {
                $this->error(current($error));
            }
        } else {
            Job::create($arguments);

            $this->info('Successfully added');
        }
    }
}
