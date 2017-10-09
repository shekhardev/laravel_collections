<?php

use App\Jobs\SendEmailJob;
use App\Mail\SendEmailMailable;
use Illuminate\Bus\dispatch;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('collections','CollectionController@index');
Route::get('help','CollectionController@helperCollection');
Route::get('collectionsclass','CollectionController@classCollection');
Route::get('cdate','CollectionController@carbonDate');

Route::get('cdates','CollectionController@cdate');

Route::get('dbex','DbController@index');

Route::get('/queue', function () {
   $queue = Queue::push('LogMessage',array('message'=> 'Time: ' .time() ));
   return $queue;
});

class LogMessage{
	public function fire($job, $data){
		File::append(app_path().'/que.txt',$data['message'].PHP_EOL);

		$job->delete();
	}
}

Route::get('sendmail',function (){
	dispatch(new SendEmailJob());

	return 'Email has been sent';

});

Route::get('json',function (){
	return response()->json([
    'name' => 'Abigail',
    'state' => 'CA'
]);
});

// Redis Routes

Route::group(['prefix' => 'api'], function() {

    Route::get('articles', 'ArticlesRedisController@index');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 // Route::get('phone','PhoneNumController@index');
 // Route::get('phone','PhoneNumController@create');
 // Route::post('phone','PhoneNumController@store');
Route::resource('phone','PhoneNumController');

Route::get('/course', 'CourseController@listofCourse')->name('course');
