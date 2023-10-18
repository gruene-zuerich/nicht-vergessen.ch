<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Guess;
use function Laravel\Prompts\text;

class DrawWinners extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'winners:draw';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Draw winners of the guessing game and the raffle';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->line('');
        $this->line('Drawing winners...');
        $actualVotes = text("How many votes did the GREEN list actually receive in the canton of Zurich?");
        $closestGuess = Guess::all()->pipe(function($guesses) use ($actualVotes) {
            $closest = null;
            foreach($guesses as $guess) {
                if($closest === null || abs($guess->guess - $actualVotes) < abs($closest->guess - $actualVotes)) {
                    $closest = $guess;
                }
            }
            return $closest;
        });
        $this->info("The closest guess was {$closestGuess->guess} by {$closestGuess->email}.");

        $tickets = Guess::all()->pipe(function($guesses) {
            $tickets = [];
            foreach($guesses as $guess) {
                for ($i = 0; $i < $guess->tickets; $i++) {
                    $tickets[] = $guess->email;
                }
            }
            return $tickets;
        });

        $raffleWinner = $tickets[array_rand($tickets)];
        $this->info("The raffle winner is {$raffleWinner}.");
        $this->line("");
    }
}
