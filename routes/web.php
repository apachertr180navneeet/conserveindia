<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\InitiativeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\PageController;

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
Route::get('/green-stories/{slug}', [WebsiteController::class, 'storyDetail'])->name('story.detail');
Route::get('/story/{slug}', fn($slug) => redirect()->route('story.detail', $slug));
Route::get('/news/{slug}', fn($slug) => redirect()->route('story.detail', $slug));

Route::get('/connect-with-us', [WebsiteController::class, 'connectWithUs'])->name('connect-with-us');
Route::get('/connect-with-us.php', fn() => redirect()->route('connect-with-us'));

Route::get('/contact-us', [WebsiteController::class, 'contactUs'])->name('contact-us');
Route::get('/contact-us.php', fn() => redirect()->route('contact-us'));

Route::post('/inquiry', [WebsiteController::class, 'submitInquiry'])->name('inquiry.submit');

Route::get('/login', fn() => redirect()->route('admin.login'))->name('login');

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

        // Dynamic SEO Management
        Route::get('/seo', [SeoController::class, 'index'])->name('seo.index');
        Route::get('/seo/{seo}/edit', [SeoController::class, 'edit'])->name('seo.edit');
        Route::put('/seo/{seo}', [SeoController::class, 'update'])->name('seo.update');

        // Dynamic Pages Management
        Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
        Route::get('/pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
        Route::put('/pages/{page}', [PageController::class, 'update'])->name('pages.update');

        // CMS Resources
        Route::resource('sliders', SliderController::class)->except(['show']);
        Route::resource('initiatives', InitiativeController::class)->except(['show']);
        Route::resource('services', ServiceController::class)->except(['show']);
        Route::resource('testimonials', TestimonialController::class)->except(['show']);
        Route::resource('news', NewsController::class)->except(['show']);

        // Inquiries Management
        Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
        Route::get('/inquiries/{inquiry}', [InquiryController::class, 'show'])->name('inquiries.show');
        Route::delete('/inquiries/{inquiry}', [InquiryController::class, 'destroy'])->name('inquiries.destroy');
    });
});

/*
|--------------------------------------------------------------------------
| Server Maintenance & Migration Runner Routes
|--------------------------------------------------------------------------
*/
Route::get('/run-migration', function () {
    try {
        $exitCode = Artisan::call('migrate', [
            '--force' => true,
        ]);
        $output = Artisan::output();

        $seedOutput = '';
        if (request()->has('seed')) {
            Artisan::call('db:seed', [
                '--force' => true,
            ]);
            $seedOutput = Artisan::output();
        }

        $htmlOutput = e($output ?: 'No pending migrations to run. All tables are up to date.');
        $htmlSeed = $seedOutput ? e($seedOutput) : '';

        return response("
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Server Migration Runner | Conserve India</title>
                <style>
                    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #0f172a; color: #f8fafc; padding: 40px 20px; line-height: 1.6; }
                    .container { max-width: 860px; margin: 0 auto; background: #1e293b; border-radius: 12px; padding: 30px; box-shadow: 0 10px 25px rgba(0,0,0,0.3); border: 1px solid #334155; }
                    h2 { color: #22c55e; margin-top: 0; display: flex; align-items: center; gap: 10px; font-size: 22px; }
                    pre { background: #0b1120; padding: 18px; border-radius: 8px; border: 1px solid #1e293b; color: #38bdf8; font-size: 13px; overflow-x: auto; white-space: pre-wrap; word-break: break-all; }
                    .seed-box { color: #a7f3d0; }
                    .btn-group { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 25px; padding-top: 20px; border-top: 1px solid #334155; }
                    .btn { display: inline-block; padding: 10px 18px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 14px; transition: opacity 0.2s; }
                    .btn:hover { opacity: 0.9; }
                    .btn-seed { background: #0284c7; color: #fff; }
                    .btn-cache { background: #eab308; color: #000; }
                    .btn-admin { background: #22c55e; color: #fff; }
                    .btn-home { background: #475569; color: #fff; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2><span style='font-size: 28px;'>✓</span> Migration Executed Successfully</h2>
                    <p style='color: #94a3b8; font-size: 14px;'>Artisan command <code>php artisan migrate --force</code> completed with exit code <strong>{$exitCode}</strong>.</p>
                    
                    <h4 style='color: #cbd5e1; margin-bottom: 8px;'>Migration Output:</h4>
                    <pre>{$htmlOutput}</pre>

                    " . ($htmlSeed ? "
                        <h4 style='color: #cbd5e1; margin-bottom: 8px; margin-top: 20px;'>Database Seed Output:</h4>
                        <pre class='seed-box'>{$htmlSeed}</pre>
                    " : "") . "

                    <div class='btn-group'>
                        <a href='" . url('/run-seeder') . "' class='btn btn-seed'>🌱 Run Seeders (/run-seeder)</a>
                        <a href='" . url('/run-seeder?class=PageSeeder') . "' class='btn btn-seed'>📄 Seed Pages Only</a>
                        <a href='" . url('/clear-cache') . "' class='btn btn-cache'>🧹 Clear Server Cache</a>
                        <a href='" . url('/admin/pages') . "' class='btn btn-admin'>🔐 Manage Dynamic Pages</a>
                        <a href='" . url('/') . "' class='btn btn-home'>🌐 View Live Site</a>
                    </div>
                </div>
            </body>
            </html>
        ", 200);
    } catch (\Throwable $e) {
        $errorMsg = e($e->getMessage());
        $errorTrace = e($e->getFile() . ':' . $e->getLine());

        return response("
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <title>Migration Error | Conserve India</title>
                <style>
                    body { font-family: monospace; background: #0f172a; color: #f8fafc; padding: 40px 20px; }
                    .container { max-width: 860px; margin: 0 auto; background: #1e293b; border-radius: 12px; padding: 30px; border: 1px solid #ef4444; }
                    h2 { color: #ef4444; margin-top: 0; }
                    pre { background: #450a0a; color: #fca5a5; padding: 18px; border-radius: 8px; overflow-x: auto; white-space: pre-wrap; font-size: 13px; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2>✗ Migration Error Encountered</h2>
                    <pre>{$errorMsg}\n\nLocation: {$errorTrace}</pre>
                    <p style='color: #94a3b8; font-size: 13px; margin-top: 20px;'>Check your database credentials in <code>.env</code> on the server.</p>
                </div>
            </body>
            </html>
        ", 500);
    }
})->name('run.migration');

Route::get('/run-migrations', fn() => redirect('/run-migration'));
Route::get('/migrate', fn() => redirect('/run-migration'));

Route::get('/run-seeder', function () {
    try {
        $classParam = request()->query('class', 'DatabaseSeeder');
        
        $allowedMap = [
            'DatabaseSeeder'    => \Database\Seeders\DatabaseSeeder::class,
            'PageSeeder'        => \Database\Seeders\PageSeeder::class,
            'PageSeoSeeder'     => \Database\Seeders\PageSeoSeeder::class,
            'ConserveCmsSeeder' => \Database\Seeders\ConserveCmsSeeder::class,
        ];

        if (isset($allowedMap[$classParam])) {
            $targetClass = $allowedMap[$classParam];
        } elseif (class_exists($classParam)) {
            $targetClass = $classParam;
        } elseif (class_exists("Database\\Seeders\\{$classParam}")) {
            $targetClass = "Database\\Seeders\\{$classParam}";
        } else {
            $targetClass = \Database\Seeders\DatabaseSeeder::class;
        }

        $exitCode = Artisan::call('db:seed', [
            '--class' => $targetClass,
            '--force' => true,
        ]);
        $output = Artisan::output();

        $htmlOutput = e($output ?: "Seeder executed successfully. Target class: {$targetClass}");
        $shortName = class_basename($targetClass);

        return response("
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Server Seeder Runner | Conserve India</title>
                <style>
                    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #0f172a; color: #f8fafc; padding: 40px 20px; line-height: 1.6; }
                    .container { max-width: 860px; margin: 0 auto; background: #1e293b; border-radius: 12px; padding: 30px; box-shadow: 0 10px 25px rgba(0,0,0,0.3); border: 1px solid #334155; }
                    h2 { color: #22c55e; margin-top: 0; display: flex; align-items: center; gap: 10px; font-size: 22px; }
                    .badge { display: inline-block; background: #065f46; color: #6ee7b7; font-size: 12px; padding: 3px 10px; border-radius: 9999px; font-weight: 600; text-transform: uppercase; }
                    pre { background: #0b1120; padding: 18px; border-radius: 8px; border: 1px solid #1e293b; color: #38bdf8; font-size: 13px; overflow-x: auto; white-space: pre-wrap; word-break: break-all; }
                    .quick-links { display: flex; flex-wrap: wrap; gap: 10px; margin: 20px 0; }
                    .chip { background: #334155; color: #e2e8f0; padding: 6px 14px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.2s; }
                    .chip:hover, .chip.active { background: #0284c7; color: #fff; }
                    .btn-group { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 25px; padding-top: 20px; border-top: 1px solid #334155; }
                    .btn { display: inline-block; padding: 10px 18px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 14px; transition: opacity 0.2s; }
                    .btn:hover { opacity: 0.9; }
                    .btn-seed { background: #0284c7; color: #fff; }
                    .btn-cache { background: #eab308; color: #000; }
                    .btn-admin { background: #22c55e; color: #fff; }
                    .btn-home { background: #475569; color: #fff; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2><span style='font-size: 28px;'>🌱</span> Seeder Executed Successfully</h2>
                    <p style='color: #94a3b8; font-size: 14px;'>
                        Class: <strong>{$targetClass}</strong> &nbsp;
                        <span class='badge'>Exit Code: {$exitCode}</span>
                    </p>
                    
                    <div style='margin-bottom: 12px; font-size: 13px; color: #94a3b8;'>Run a specific seeder:</div>
                    <div class='quick-links'>
                        <a href='" . url('/run-seeder') . "' class='chip " . ($shortName === 'DatabaseSeeder' ? 'active' : '') . "'>🚀 All Seeders (DatabaseSeeder)</a>
                        <a href='" . url('/run-seeder?class=PageSeeder') . "' class='chip " . ($shortName === 'PageSeeder' ? 'active' : '') . "'>📄 PageSeeder (Dynamic Pages)</a>
                        <a href='" . url('/run-seeder?class=PageSeoSeeder') . "' class='chip " . ($shortName === 'PageSeoSeeder' ? 'active' : '') . "'>🔍 PageSeoSeeder (SEO Metadata)</a>
                        <a href='" . url('/run-seeder?class=ConserveCmsSeeder') . "' class='chip " . ($shortName === 'ConserveCmsSeeder' ? 'active' : '') . "'>🏢 ConserveCmsSeeder (CMS & Admin)</a>
                    </div>

                    <h4 style='color: #cbd5e1; margin-bottom: 8px;'>Artisan Output:</h4>
                    <pre>{$htmlOutput}</pre>

                    <div class='btn-group'>
                        <a href='" . url('/clear-cache') . "' class='btn btn-cache'>🧹 Clear Server Cache</a>
                        <a href='" . url('/admin/pages') . "' class='btn btn-admin'>🔐 Manage Dynamic Pages</a>
                        <a href='" . url('/admin') . "' class='btn btn-seed'>🔐 Admin Dashboard</a>
                        <a href='" . url('/') . "' class='btn btn-home'>🌐 View Live Site</a>
                    </div>
                </div>
            </body>
            </html>
        ", 200);
    } catch (\Throwable $e) {
        $errorMsg = e($e->getMessage());
        $errorTrace = e($e->getFile() . ':' . $e->getLine());

        return response("
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <title>Seeder Error | Conserve India</title>
                <style>
                    body { font-family: monospace; background: #0f172a; color: #f8fafc; padding: 40px 20px; }
                    .container { max-width: 860px; margin: 0 auto; background: #1e293b; border-radius: 12px; padding: 30px; border: 1px solid #ef4444; }
                    h2 { color: #ef4444; margin-top: 0; }
                    pre { background: #450a0a; color: #fca5a5; padding: 18px; border-radius: 8px; overflow-x: auto; white-space: pre-wrap; font-size: 13px; }
                    a { color: #38bdf8; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2>✗ Seeder Error Encountered</h2>
                    <pre>{$errorMsg}\n\nLocation: {$errorTrace}</pre>
                    <p style='color: #94a3b8; font-size: 13px; margin-top: 20px;'>
                        Tip: If the table doesn't exist yet, run migrations first: 
                        <a href='" . url('/run-migration') . "'>Run Migrations Here</a>.
                    </p>
                </div>
            </body>
            </html>
        ", 500);
    }
})->name('run.seeder');

Route::get('/run-seeders', fn() => redirect('/run-seeder'));
Route::get('/run-seed', fn() => redirect('/run-seeder'));
Route::get('/seed', fn() => redirect('/run-seeder'));

Route::get('/clear-cache', function () {
    try {
        Artisan::call('optimize:clear');
        $output = Artisan::output();
        return response("
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <title>Cache Cleared</title>
                <style>
                    body { font-family: monospace; background: #0f172a; color: #f8fafc; padding: 40px 20px; }
                    .container { max-width: 700px; margin: 0 auto; background: #1e293b; border-radius: 12px; padding: 25px; border: 1px solid #334155; }
                    h2 { color: #22c55e; margin-top: 0; }
                    pre { background: #0b1120; color: #38bdf8; padding: 15px; border-radius: 6px; }
                    a { color: #4ade80; text-decoration: none; font-weight: bold; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2>✓ Server Caches Cleared Successfully</h2>
                    <pre>" . e($output) . "</pre>
                    <p style='margin-top: 20px;'>
                        <a href='" . url('/') . "'>&larr; Back to Live Website</a> &middot; 
                        <a href='" . url('/admin') . "'>Admin Portal</a>
                    </p>
                </div>
            </body>
            </html>
        ");
    } catch (\Throwable $e) {
        return response("Cache clear error: " . $e->getMessage(), 500);
    }
})->name('clear.cache');

Route::get('/storage-link', function () {
    try {
        Artisan::call('storage:link');
        $output = Artisan::output();
        return response("Storage linked: " . $output);
    } catch (\Throwable $e) {
        return response("Storage link error: " . $e->getMessage(), 500);
    }
});
