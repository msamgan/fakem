<?php

namespace App\Console\Commands;

use App\Models\User;
use Database\Factories\ContentFactory;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class ContentGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:content';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate content';

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
        $content = new ContentFactory();

        dd($content->definition());

        return CommandAlias::SUCCESS;
    }
}
