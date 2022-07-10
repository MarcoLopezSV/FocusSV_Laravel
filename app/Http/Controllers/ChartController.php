<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Population;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    //
    public function handleChart() {
        $populationData = Population::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('year', date('Y'))
                    ->groupBy(DB::raw("Year(year)"))
                    ->pluck('count');
          
       return view('index', compact('populationData'));
    }
}
