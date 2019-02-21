<?php

namespace App\Console\Commands;

use App\Models\Job;
use Illuminate\Console\Command;

/**
 * Class Download
 *
 * @package App\Console\Commands
 */
class Download extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download resources';

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
        $jobs = Job::select("*")
            ->where('status', '=', Job::STATUS_NEW)
            ->orderBy("id")
            ->limit(10)
            ->get();

        /** @var Job $job */
        foreach ($jobs as $job) {
            $job->status = Job::STATUS_IN_PROGRESS;
            $job->save();
            list($file, $error) = $this->curl($job->url);
            if ($error) {
                $job->status = Job::STATUS_ERROR;
                $job->save();
            } else {
                $dir = storage_path() . '/download/';
                if (!is_dir($dir)) {
                    mkdir($dir, 0777);
                }
                $name = explode('/', $job->url);
                $name = end($name);
                file_put_contents($dir . $name, $file);
                $job->status = Job::STATUS_FINISH;
                $job->save();
            }
        }
    }

    /**
     * @param string $source
     *
     * @return array
     */
    protected function curl(string $source): array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $source);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSLVERSION,3);
        $data = curl_exec ($ch);
        $error = curl_error($ch);
        curl_close ($ch);

        return [$data, $error];
    }
}
