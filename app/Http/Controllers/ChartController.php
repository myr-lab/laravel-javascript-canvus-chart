<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
       $today =  date('d');
      
       $yesterday = Carbon::now()->subDay(1);
       $six_days = Carbon::now()->subDay(5);

       $today = $this->helper($today);
       $yesterday = $this->helper($yesterday);
       $six_days = $this->helper($six_days);
       
       $week = $today + $yesterday + $six_days;

      return view('welcome',compact('today','yesterday','week'));
    }


    public function helper($date)
    {
      return Post::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at',date('Y'))
                    ->whereMonth('created_at',date('m'))
                    ->whereday('created_at',$date)
                    ->groupBy(\DB::raw("Day(created_at)"))
                    ->sum('like');
    }
}
