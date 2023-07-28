<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\Classes\Wally;
use function Termwind\{render};

class Khata extends Command
{
    use Wally;
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'khata {name? : khata name is requried}
                            {--sn|note : Description about khata}
    ';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'create the khata';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->khataName();
        $des = $this->khataDes();
        $this->info("My khata was created with name: {$name} and description {$des}");
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
