<?php

namespace App\Console\Commands\Github;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class UserActivityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:activity {username}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Github User Activity';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $username = $this->argument('username');
        $response = Http::accept('application/vnd.github+json')->get('https://api.github.com/users/natanael-diaz/events');
        \Log::info($response);
        $this->info('username: '. $username);
        $this->info('response: '. $response);
    }
}
