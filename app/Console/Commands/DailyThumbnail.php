<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DailyThumbnail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'thumbnail:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create thumbnail';
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
    public function handle()
    {
        // Create thumbnail from storage/upload/masterplan

        
        $this->info('Successfully sent thumbnail command.');
    }
}