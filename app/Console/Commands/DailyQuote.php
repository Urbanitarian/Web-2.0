<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Masterplan;
class DailyQuote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:daily';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send command to active masterplans.';
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
        Masterplan::where("active", 0)->limit(2)->update(["active" => 1]);

        $this->info('Successfully sent daily command.');
    }
}