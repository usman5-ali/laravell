<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clear-config', function () {
    Artisan::call('config:clear');
    return 'Config cache cleared!';
});
Route::get('/route-list', function () {
    Artisan::call('route:list', ['--json' => true]);
    return response()->json(json_decode(Artisan::output()));
});
// Auth routes (register disabled)
Auth::routes(['register' => false]);
Route::get('/services/get-all', [ServiceController::class, 'getall'])->name('services.all');  
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');             // List all services
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');    // Show create form
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');            // Store new service
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');     // View single service
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');// Edit form
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update'); // Update service
Route::patch('/services/{service}', [ServiceController::class, 'update']);                        // Optional PATCH
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy'); // Delete
// ✅ THIS MUST BE AFTER Auth::routes()
Route::get('/login', fn() => abort(404));
Route::get('/register', fn() => abort(404));

// ✅ POST login still allowed
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blogs/all', [BlogController::class, 'fetchall'])->name('blogs.all');
Route::post('/blogs/store', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/latest-blogs', [App\Http\Controllers\BlogController::class, 'fetch'])->name('blogs.fetch');
Route::get('/blogs/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('blogs.show');
Route::delete('/blogs/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blogs.destroy');
Route::get('/blogs/{id}/edit', [App\Http\Controllers\BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blogs.update');




// Testimonials Routes
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
Route::get('/testimonials/{testimonial}', [TestimonialController::class, 'show'])->name('testimonials.show');
Route::get('/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
Route::put('/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('testimonials.update');
Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');

// FAQs Routes
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/faqs/create', [FaqController::class, 'create'])->name('faqs.create');
Route::post('/faqs-store', [FaqController::class, 'store'])->name('faqs.store');
Route::get('/faqs/{faq}', [FaqController::class, 'show'])->name('faqs.show');
Route::get('/faqs/{faq}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
Route::put('/faqs/{faq}', [FaqController::class, 'update'])->name('faqs.update');
Route::delete('/faqs/{faq}', [FaqController::class, 'destroy'])->name('faqs.destroy');
Route::get('/faqs/get-all', [FaqController::class, 'getall'])->name('faqs.all');  