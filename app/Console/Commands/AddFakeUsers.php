<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class AddFakeUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adding fake user data to users table';

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
     * @return int
     */
    public function handle(): int
    {
        $users = User::factory(200)->make();

        foreach ($users as $user) {
            if (User::query()->where('email', $user->email)->exists()) {
                continue;
            }

            if (User::query()->where('phone', $user->phone)->exists()) {
                continue;
            }

            $user->save();
        }

        return CommandAlias::SUCCESS;
    }
}
