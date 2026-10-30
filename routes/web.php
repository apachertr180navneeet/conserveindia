<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\InitiativeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\InquiryController;

/*
|--------------------------------------------------------------------------
| Public Website Routes (Dynamic)
|--------------------------------------------------------------------------
*/
Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/index.php', fn() => redirect()->route('home'));

Route::get('/about-us', [WebsiteController::class, 'about'])->name('about-us');
Route::get('/about-us.php', fn() => redirect()->route('about-us'));

Route::get('/our-work', [WebsiteController::class, 'ourWork'])->name('our-work');
Route::get('/our-work.php', fn() => redirect()->route('our-work'));

Route::get('/capacity-building', [WebsiteController::class, 'capacityBuilding'])->name('capacity-building');
Route::get('/capacity-building.php', fn() => redirect()->route('capacity-building'));

Route::get('/sustainable-research-development', [WebsiteController::class, 'sustainableResearch'])->name('sustainable-research-development');
Route::get('/sustainable-research-development.php', fn() => redirect()->route('sustainable-research-development'));

Route::get('/advocacy-and-lobbying', [WebsiteController::class, 'advocacy'])->name('advocacy-and-lobbying');
Route::get('/advocacy-and-lobbying.php', fn() => redirect()->route('advocacy-and-lobbying'));

Route::get('/sustainable-trade', [WebsiteController::class, 'sustainableTrade'])->name('sustainable-trade');
Route::get('/sustainable-trade.php', fn() => redirect()->route('sustainable-trade'));

Route::get('/covid-relief-project-sahyog', [WebsiteController::class, 'covidRelief'])->name('covid-relief-project-sahyog');
Route::get('/covid-relief-project-sahyog.php', fn() => redirect()->route('covid-relief-project-sahyog'));

Route::get('/services', [WebsiteController::class, 'services'])->name('services');
Route::get('/services.php', fn() => redirect()->route('services'));

Route::get('/latest-updates', [WebsiteController::class, 'latestUpdates'])->name('latest-updates');
Route::get('/latest-updates.php', fn() => redirect()->route('latest-updates'));

Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
Route::get('/gallery.php', fn() => redirect()->route('gallery'));

Route::get('/green-stories', [WebsiteController::class, 'greenStories'])->name('green-stories');
Route::get('/green-stories.php', fn() => redirect()->route('green-stories'));

Route::get('/connect-with-us', [WebsiteController::class, 'connectWithUs'])->name('connect-with-us');
Route::get('/connect-with-us.php', fn() => redirect()->route('connect-with-us'));

Route::get('/contact-us', [WebsiteController::class, 'contactUs'])->name('contact-us');
Route::get('/contact-us.php', fn() => redirect()->route('contact-us'));

Route::post('/inquiry', [WebsiteController::class, 'submitInquiry'])->name('inquiry.submit');

/*
|--------------------------------------------------------------------------
| Admin Portal Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest Admin Auth
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Protected Admin Routes
    Route::middleware('auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Site Settings
        Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');

        // CMS Resources
        Route::resource('sliders', SliderController::class)->except(['show']);
        Route::resource('initiatives', InitiativeController::class)->except(['show']);
        Route::resource('services', ServiceController::class)->except(['show']);
        Route::resource('regions', RegionController::class)->except(['show']);
        Route::resource('testimonials', TestimonialController::class)->except(['show']);
        Route::resource('news', NewsController::class)->except(['show']);

        // Inquiries Management
        Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
        Route::get('/inquiries/{inquiry}', [InquiryController::class, 'show'])->name('inquiries.show');
        Route::delete('/inquiries/{inquiry}', [InquiryController::class, 'destroy'])->name('inquiries.destroy');
    });
});
