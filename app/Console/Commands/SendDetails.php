<?php

namespace App\Console\Commands;

use App\Jobs\SendDetailsJob;
use Illuminate\Console\Command;

class SendDetails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send the mails';

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
        $data = [
            'email' => 'ajay krishna reddy',
            'password' => 'password'
        ];

        $scheduledata = new SendDetailsJob($data);
        //$val = dispatch($scheduledata->onQueue('queuename'));
        // $val = \Queue::pushOn('queuename', $scheduledata);
        dispatch($scheduledata);
    }
}
