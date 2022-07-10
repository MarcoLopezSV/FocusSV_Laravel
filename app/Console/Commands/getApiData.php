<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Population;

class getApiData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getapi:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Saves all the data of the External API into a variable and returns it on console and sends its to a view';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //variable to store all the data from api using GET method
        $data = Http::get("https://datausa.io/api/data?drilldowns=Nation&measures=Population");
        //return it temporarily into the view decoded as json
        echo "the table has been updated successfully";
    }
}
