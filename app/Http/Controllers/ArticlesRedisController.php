<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleRedis;
use Illuminate\Support\Facades\Redis;
use DB;

class ArticlesRedisController extends Controller
{
    public function index() {

    	  	$articles = \Cache::remember('articles', 10, function() {

    	return ArticleRedis::all();
    });
    return response()->json($articles);
	}
}
