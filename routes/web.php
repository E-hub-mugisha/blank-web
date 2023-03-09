<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/service', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{id}', [App\Http\Controllers\HomeController::class, 'blogDetail'])->name('blogDetail');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/sendContact', [App\Http\Controllers\HomeController::class, 'sendContact'])->name("sendContact");
Route::post('/sendMail', [App\Http\Controllers\HomeController::class, 'sendMail'])->name('sendMail');
Route::post('/createReview', [App\Http\Controllers\HomeController::class, 'createReview'])->name('createReview');
Route::get('/get_quotes',[App\Http\Controllers\HomeController::class,'getQuote'])->name('getQuote');
Route::post('/sendQuote', [App\Http\Controllers\HomeController::class, 'sendQuote'])->name("sendQuote");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\admin\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/blogs', [App\Http\Controllers\admin\AdminController::class, 'adminBlogs'])->name('adminBlogs');
    Route::get('/admin/add_blog', [App\Http\Controllers\admin\AdminController::class, 'addBlog'])->name('addBlog');
    Route::post('/createBlog', [App\Http\Controllers\admin\AdminController::class, 'createBlog'])->name('createBlog');
    Route::get('/admin/blog-single/{id}', [App\Http\Controllers\admin\AdminController::class, 'blogSingle'])->name('blogSingle');
    Route::get('/admin/blog/{id}/edit', [App\Http\Controllers\Admin\AdminController::class, 'editBlog'])->name('editBlog');
    Route::put('admin/blog/{id}', [App\Http\Controllers\admin\AdminController::class, 'update']);
    Route::delete('admin/blog/{blog}', [App\Http\Controllers\admin\AdminController::class, 'destroy']);

    Route::get('/admin/testimonials', [App\Http\Controllers\admin\TestimonialController::class, 'adminTestimonials'])->name('adminTestimonials');
    Route::get('/admin/add_testimonial', [App\Http\Controllers\admin\TestimonialController::class, 'addTestimonial'])->name('addTestimonial');
    Route::post('/createTestimonial', [App\Http\Controllers\admin\TestimonialController::class, 'createTestimonial'])->name('createTestimonial');
    Route::get('/admin/testimonial-single/{id}', [App\Http\Controllers\admin\TestimonialController::class, 'testimonialSingle'])->name('testimonialSingle');
    Route::get('/admin/testimonial/{id}/edit', [App\Http\Controllers\Admin\TestimonialController::class, 'editTestimonial'])->name('editTestimonial');
    Route::put('admin/testimonial/{id}', [App\Http\Controllers\admin\TestimonialController::class, 'update']);
    Route::delete('admin/testimonial/{testimonial}', [App\Http\Controllers\admin\TestimonialController::class, 'destroy']);

    Route::get('/admin/partners', [App\Http\Controllers\admin\PartnerController::class, 'adminPartners'])->name('adminPartners');
    Route::get('/admin/add_partner', [App\Http\Controllers\admin\PartnerController::class, 'addPartner'])->name('addPartner');
    Route::post('/createPartner', [App\Http\Controllers\admin\PartnerController::class, 'createPartner'])->name('createPartner');
    Route::get('/admin/partner-single/{id}', [App\Http\Controllers\admin\PartnerController::class, 'partnerSingle'])->name('partnerSingle');
    Route::get('/admin/partner/{id}/edit', [App\Http\Controllers\Admin\PartnerController::class, 'editPartner'])->name('editPartner');
    Route::put('admin/partner/{id}', [App\Http\Controllers\admin\PartnerController::class, 'update']);
    Route::delete('admin/partner/{partner}', [App\Http\Controllers\admin\PartnerController::class, 'destroy']);

    Route::get('/admin/faq', [App\Http\Controllers\admin\FaqController::class, 'adminFaq'])->name('adminFaq');
    Route::get('/admin/add_faq', [App\Http\Controllers\admin\FaqController::class, 'addFaq'])->name('addFaq');
    Route::post('/createFaq', [App\Http\Controllers\admin\FaqController::class, 'createFaq'])->name('createFaq');
    Route::get('/admin/faq-single/{id}', [App\Http\Controllers\admin\FaqController::class, 'faqSingle'])->name('faqSingle');
    Route::get('/admin/faq/{id}/edit', [App\Http\Controllers\Admin\FaqController::class, 'editFaq'])->name('editFaq');
    Route::put('admin/faq/{id}', [App\Http\Controllers\admin\FaqController::class, 'update']);
    Route::delete('admin/faq/{faq}', [App\Http\Controllers\admin\FaqController::class, 'destroy']);
});

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback']);
