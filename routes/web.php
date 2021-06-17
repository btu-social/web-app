<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Livewire\Posts;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('post', [App\Http\Controllers\PostController::class, 'store']);
Route::get('post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit']);
//Route::get('post/{post}', [App\Http\Controllers\PostController::class, 'show']);
Route::put('post/{post}', [App\Http\Controllers\PostController::class, 'update']);
Route::delete('post/{post}', [App\Http\Controllers\PostController::class, 'destroy']);


Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('event/create', [App\Http\Controllers\EventController::class, 'create']);
Route::post('event', [App\Http\Controllers\EventController::class, 'store']);
Route::get('event/{event}/edit', [App\Http\Controllers\EventController::class, 'edit']);
Route::get('event/{event}', [App\Http\Controllers\EventController::class, 'show']);
Route::put('event/{event}', [App\Http\Controllers\EventController::class, 'update']);
Route::delete('event/{event}', [App\Http\Controllers\EventController::class, 'destroy']);

Route::get('/article/{event:slug}', [App\Http\Controllers\EventController::class, 'show'])->name('event.show');
Route::post('/comment/storeEvent', [App\Http\Controllers\CommentEventController::class, 'storeEvent'])->name('commentevent.add');
Route::post('/reply/storeEvent', [App\Http\Controllers\CommentEventController::class, 'replyStoreEvent'])->name('replyevent.add');

Route::post('/userActivities', [App\Http\Controllers\EventController::class, 'addUserActivities']);
Route::post('/deleteUserActivities', [App\Http\Controllers\EventController::class, 'deleteUserActivities']);







Route::get('/article/{post:slug}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::post('/comment/storePost', [App\Http\Controllers\CommentPostController::class, 'storePost'])->name('comment.add');
Route::post('/reply/storePost', [App\Http\Controllers\CommentPostController::class, 'replyStorePost'])->name('reply.add');





Route::get('/location', [App\Http\Controllers\PlaceController::class, 'index'])->name('location');
Route::get('place/create', [App\Http\Controllers\PlaceController::class, 'create']);
Route::post('place', [App\Http\Controllers\PlaceController::class, 'store']);
Route::get('place/{place}/edit', [App\Http\Controllers\PlaceController::class, 'edit']);
Route::get('place/{place}', [App\Http\Controllers\PlaceController::class, 'show']);
Route::put('place/{place}', [App\Http\Controllers\PlaceController::class, 'update']);
Route::delete('place/{place}', [App\Http\Controllers\PlaceController::class, 'destroy']);

Route::get('/article/{place:slug}', [App\Http\Controllers\PlaceController::class, 'show'])->name('place.show');
Route::post('/comment/store', [App\Http\Controllers\CommentPlaceController::class, 'store'])->name('commentplace.add');
Route::post('/reply/store', [App\Http\Controllers\CommentPlaceController::class, 'replyStore'])->name('replyplace.add');








Route::get('/email/verify',function(){
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/friends', [App\Http\Controllers\FriendController::class, 'index'])->name('friends');
Route::get('/myFriend', [App\Http\Controllers\FriendController::class, 'myFriend'])->name('myFriend');


Route::post('/addFriends', [App\Http\Controllers\FriendController::class, 'addFriend']);
Route::post('/deletefriendship', [App\Http\Controllers\FriendController::class, 'deletefriendship']);
Route::post('/removeFriends', [App\Http\Controllers\FriendController::class, 'removeFriend']);

Route::get('profile/{user:name}', [App\Http\Controllers\ProfileController::class,'index'])->name('profiles.show');


Route::get('/admin/my', function () {
    return view('admin/my');
});

Route::get('/admin', function () {
    return view('admin/index');
});


Route::get('/admin/students', function () {
    return view('admin/students/index');
});

Route::get('/admin/students/update', function () {
    return view('admin/students/update');
});


Route::get('/admin/events', function () {
    return view('admin/events/index');
});

Route::get('/admin/events/update', function () {
    return view('admin/events/update');
});