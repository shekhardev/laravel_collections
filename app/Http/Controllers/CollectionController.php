<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class CollectionController extends Controller
{
    public function index(){
    	$collection = collect(['name' => 'Desk', 'price' => 200]);

		$collection->toJson();
		//dd($collection);
		return view('collections.index');
    }

     public function helperCollection()
    {
        $newCollection = collect([1, 2, 3, 4, 5]);
        //dd($newCollection);
        return view('collections.index');
    }

    /**
     * Create a new collection with a Collection class instance.
     */
    public function classCollection()
    {
        $newCollection = new Collection([1, 2, 3, 4, 5]);
        dd($newCollection);
    }
    public function carbonDate(){
        $carbon = new Carbon();
        
        dd($carbon);
    }
    public function cdate(){
        setlocale(LC_TIME, 'Asia/Kolkata');

        setlocale(LC_TIME, '');
        echo $dt->formatLocalized('%A %d %B %Y');

        $current = Carbon::now();
        $current = new Carbon('Asia/Kolkata');


        // get today - 2015-12-19 00:00:00
        $today = Carbon::today();

        // get tomorrow - 2015-12-20 00:00:00
        $tomorrow = Carbon::tomorrow();


         // $current = $end->diffInDays($now);
        // return $length;
        $today = $tomorrow->diffInDays($today);

        $trialExpires = $current->addDays(30);

        // dd($today);
         dd($trialExpires);
        
        // dd($current);
    }
    
}
