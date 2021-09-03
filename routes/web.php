<?php

use App\Models\Image;
use Illuminate\Support\Facades\Route;

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

Route::get('/nav', function () {
    return view('nav');
});
Route::get('/weather', function () {
    return view('weather');
});
Route::get('/grid', function () {
    return view('gird');
});
Route::get('/bootstrap', function () {
    return view('bootstrap');
});
Route::get('/model-detay', function () {
    return view('model-detay-donanım özellikleri');
});
Route::get('/0-km', function () {
    return view('0-km anasayfa');
});

Route::get('/ilan-listeleme', function () {
    return view('ilan-listeleme');
});


Route::get('test', function () {
//    $phone = \App\Models\Phone::find(1);//1-1
//    $me = $phone->user;//1-1

//    $user = \App\Models\User::find(1);//1-1
//    $mePhone = $user->phone;




//    $comment=\App\Models\Comment::find(1);
//    $ownerUser=$comment->user;//1-n
//
//    $myCommnets=$user->myCommnets;//1-n



//    $mechanic=\App\Models\Mechanic::find(1);//1-through
//    $me=$mechanic->carOwner;


////    $project=\App\Models\Project::find(1);//n-through
////    $deployments=$project->deployments;


//    $user=\App\Models\User::find(2);//n-n
//    $myRoles=$user->myRoles;
//
//
//    $role=\App\Models\Role::find(1);//n-n
//    $ownerUsers=$role->ownerUsers;
//



//    1-1 polymorpoch
//    $user->image()->create([
//       'url' =>'hello'
//    ]);
//
//    $post=\App\Models\Post::find(1);
//
//    $post->image()->create([
//        'url' =>'hello'
//    ]);

//    $post=\App\Models\Post::find(1);
//    $postImage=$post->image;
//
//    $userImage=$user->image;
//
//    $image = Image::find(2);
//
//    $imageable = $image->imageable;
//


    // n -n polimorpocih örnek 1
//    $video=\App\Models\Video::find(1);
////    $video->categories()->create([
////        'title'=>'voleybol'
////    ]);
////    $video->categories()->create([
////        'title'=>'basketbol'
////    ]);
////    $video->categories()->create([
////        'title'=>'hantbol'
////    ]);
//


    // n-n polimorpich örnek 2

    $product=\App\Models\Product::find(1);

//    $product->resimsable()->create([
//        'url'=>'sasaas'
//    ]);
//    $product->resimsable()->create([
//        'url'=>'sasaas'
//    ]);
//
//    $product->resimsable()->create([
//        'url'=>'sasaas'
//    ]);




//    $blog=\App\Models\Blog::find(1);

//    $blog->resimsable()->create([
//        'url'=>'resim4'
//    ]);
//    $blog->resimsable()->create([
//        'url'=>'resim1'
//    ]);
//    $blog->resimsable()->create([
//        'url'=>'resim1'
//    ]);



    $student=\App\Models\Student::find(1);
//    $student->projes()->create([
//       'name'=>'medula',
//       'subject'=>'inavasyon'
//    ]);




    $proje=\App\Models\Proje::find(1);


});


