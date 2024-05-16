<?php
http://127.0.0.1:8000/login
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCourceController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'homePage'])->name('home.page');
Route::get('about',[PageController::class,'aboutPage'])->name('about.page');
Route::get('contact',[PageController::class,'contactPage'])->name('contact.page');
Route::get('news',[PageController::class,'newsPage'])->name('news.page');
Route::get('staff',[PageController::class,'staffPage'])->name('staff.page');
Route::get('gallery',[PageController::class,'galleryPage'])->name('gallery.page');

            // admin dashboard
Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard')->middleware(['auth','admin']);

            //  Cource page
Route::get('admin/all/cource/page',[AdminCourceController::class,'allCourcePage'])->name('allCourcePage')->middleware(['auth','admin']);
Route::get('admin/add/cource/page',[AdminCourceController::class,'addCourcePage'])->name('addCourcePage')->middleware(['auth','admin']);
Route::post('admin/add/cource/post',[AdminCourceController::class,'addCourcePost'])->name('addCourcePost')->middleware(['auth','admin']);

            // edit cource page
Route::get('admin/edit/cource/page/{id}',[AdminCourceController::class,'editCourcePage'])->name('editCourcePage')->middleware(['auth','admin']);
Route::post('admin/update/cource/post',[AdminCourceController::class,'updateCourcePost'])->name('updateCourcePost')->middleware(['auth','admin']);

            // delete cource
Route::get('admin/delete/cource/post/{id}',[AdminCourceController::class,'deleteCourcePost'])->name('deleteCourcePost')->middleware(['auth','admin']);

            // news education page
Route::get('admin/all/news/page',[AdminNewsController::class,'allNewsPage'])->name('allNewsPage')->middleware(['auth','admin']);
Route::get('admin/add/news/page',[AdminNewsController::class,'addNewsPage'])->name('addNewsPage')->middleware(['auth','admin']);
Route::post('admin/add/news/post',[AdminNewsController::class,'addNewsPost'])->name('addNewsPost')->middleware(['auth','admin']);

            // edit news page
Route::get('admin/edit/news/page/{id}',[AdminNewsController::class,'editNewsPage'])->name('editNewsPage')->middleware(['auth','admin']);
Route::post('admin/update/news/post',[AdminNewsController::class,'updateNewsPost'])->name('updateNewsPost')->middleware(['auth','admin']);

            // delete news page
Route::get('admin/delete/news/post/{id}',[AdminNewsController::class,'deleteNewsPost'])->name('deleteNewsPost')->middleware(['auth','admin']);

            // stuff or teacher page
Route::get("admin/all/teacher/page",[AdminTeacherController::class,'allTeacherPage'])->name('allTeacherPage')->middleware(['auth','admin']);
Route::get("admin/add/teacher/page",[AdminTeacherController::class,'addTeacherPage'])->name('addTeacherPage')->middleware(['auth','admin']);
Route::post("admin/add/teacher/post",[AdminTeacherController::class,'addTeacherPost'])->name('addTeacherPost')->middleware(['auth','admin']);

            // edit teacher
Route::get("admin/edit/teacher/page/{id}",[AdminTeacherController::class,'editTEacherPage'])->name('editTeacherPage')->middleware(['auth','admin']);
Route::post('admin/update/teacher/post',[AdminTeacherController::class,'updateTeacherPost'])->name('updateTeacherPost')->middleware(['auth','admin']);

            // delete teacher
Route::get("admin/delete/teacher/post/{id}",[AdminTeacherController::class,'deleteTeacherPost'])->name('deleteTeacherPost')->middleware(['auth','admin']);

            // user page
Route::get('admin/all/user/page',[AdminUserController::class,'allUserPage'])->name('allUserPage')->middleware(['auth','admin']);
Route::get('admin/add/user/page',[AdminUserController::class,'addUserPage'])->name('addUserPage')->middleware(['auth','admin']);
Route::get('admin/search',[AdminUserController::class,'search'])->name('search');
            // edit user page
Route::get('admin/edit/user/page{id}',[AdminUserController::class,'editUserPage'])->name('editUserPage')->middleware(['auth','admin']);
Route::post('admin/update/user/post',[AdminUserController::class,'updateUserPost'])->name('updateUserPost')->middleware(['auth','admin']);

            //delete user
Route::get('admin/delete/user/post/{id}',[AdminUserController::class,'deleteUserPost'])->name('deleteUserPost')->middleware(['auth','admin']);

      // application and asnwer

Route::get('answer/page',[AnswerController::class,'index'])->name('answer.index');

Route::get('answer/{application}/create',[AnswerController::class,'create'])->name('answer.create');
Route::post('answer/{application}/post',[AnswerController::class,'store'])->name('answer.store');

Route::resource('applications',ApplicationController::class);




            // auth
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('auth_login',[AuthController::class,'auth_login'])->name('auth_login');
Route::post('registration',[AuthController::class,'registration'])->name('registration');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::get('logout',[AuthController::class,'logout'])->name('logout');





