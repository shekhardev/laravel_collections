<?php

namespace App\Http\Controllers;

use App\Course;
use App\Fee;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // public function listofCourse(){
    // 	$fee = Fee::with('fee');
    //     $course= Course::with('fee')->get();
    //     //dd($course);
       
    //     return view('listofCourse',compact('course'));
    // 	}
    
    public function listofCourse(){
        $course= Course::with('fee')->get();
        // doing this for dumping purpose
        echo "<pre>"; 
        //print_r($course->toArray()); // you will see the `fee` array
        echo "</pre>"; 
        //die();
        
        return view('listofCourse',compact('course',$course));
	}
}
