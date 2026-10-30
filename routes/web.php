<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('website.home');
})->name('home');
Route::get('/index.php', function () {
    return redirect()->route('home');
});

// About Us
Route::get('/about-us', function () {
    return view('website.about-us');
})->name('about-us');
Route::get('/about-us.php', function () {
    return redirect()->route('about-us');
});

// Our Work
Route::get('/our-work', function () {
    return view('website.our-work');
})->name('our-work');
Route::get('/our-work.php', function () {
    return redirect()->route('our-work');
});

// Capacity Building
Route::get('/capacity-building', function () {
    return view('website.capacity-building');
})->name('capacity-building');
Route::get('/capacity-building.php', function () {
    return redirect()->route('capacity-building');
});

// Sustainable Research & Development
Route::get('/sustainable-research-development', function () {
    return view('website.sustainable-research-development');
})->name('sustainable-research-development');
Route::get('/sustainable-research-development.php', function () {
    return redirect()->route('sustainable-research-development');
});

// Advocacy and Lobbying
Route::get('/advocacy-and-lobbying', function () {
    return view('website.advocacy-and-lobbying');
})->name('advocacy-and-lobbying');
Route::get('/advocacy-and-lobbying.php', function () {
    return redirect()->route('advocacy-and-lobbying');
});

// Sustainable Trade
Route::get('/sustainable-trade', function () {
    return view('website.sustainable-trade');
})->name('sustainable-trade');
Route::get('/sustainable-trade.php', function () {
    return redirect()->route('sustainable-trade');
});

// COVID Relief Project Sahyog
Route::get('/covid-relief-project-sahyog', function () {
    return view('website.covid-relief-project-sahyog');
})->name('covid-relief-project-sahyog');
Route::get('/covid-relief-project-sahyog.php', function () {
    return redirect()->route('covid-relief-project-sahyog');
});

// Services
Route::get('/services', function () {
    return view('website.services');
})->name('services');
Route::get('/services.php', function () {
    return redirect()->route('services');
});

// Latest Updates
Route::get('/latest-updates', function () {
    return view('website.latest-updates');
})->name('latest-updates');
Route::get('/latest-updates.php', function () {
    return redirect()->route('latest-updates');
});

// Gallery
Route::get('/gallery', function () {
    return view('website.gallery');
})->name('gallery');
Route::get('/gallery.php', function () {
    return redirect()->route('gallery');
});

// Green Stories
Route::get('/green-stories', function () {
    return view('website.green-stories');
})->name('green-stories');
Route::get('/green-stories.php', function () {
    return redirect()->route('green-stories');
});

// Connect With Us
Route::get('/connect-with-us', function () {
    return view('website.connect-with-us');
})->name('connect-with-us');
Route::get('/connect-with-us.php', function () {
    return redirect()->route('connect-with-us');
});

// Contact Us
Route::get('/contact-us', function () {
    return view('website.contact-us');
})->name('contact-us');
Route::get('/contact-us.php', function () {
    return redirect()->route('contact-us');
});
