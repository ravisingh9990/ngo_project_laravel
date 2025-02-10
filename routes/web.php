<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemosController;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;

Route::get('/', [DemosController::class, 'index'])->name('index1');

//  demos
Route::prefix('demos')->group(function () {
    Route::controller(DemosController::class)->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::get('/index-one-page','indexOnePage')->name('indexOnePage');
        Route::get('/index-dark','indexDark')->name('indexDark');
        Route::get('/index-boxed','indexBoxed')->name('indexBoxed');
        Route::get('/index-rtl','indexRtl')->name('indexRtl');
        Route::get('/index2','index2')->name('index2');
        Route::get('/index2-one-page','index2OnePage')->name('index2OnePage');
        Route::get('/index2-dark','index2Dark')->name('index2Dark');
        Route::get('/index3','index3')->name('index3');
        Route::get('/index3-one-page','index3OnePage')->name('index3OnePage');
        Route::get('/index3-dark','index3Dark')->name('index3Dark');
        Route::get('/index4','index4')->name('index4');
        Route::get('/index4-one-page','index4OnePage')->name('index4OnePage');
        Route::get('/index4-dark','index4Dark')->name('index4Dark');
        Route::get('/index5','index5')->name('index5');
        Route::get('/index5-one-page','index5OnePage')->name('index5OnePage');
        Route::get('/index5-dark','index5Dark')->name('index5Dark');
    });
});

//  donations
Route::prefix('donations')->group(function () {
    Route::controller(DonationsController::class)->group(function () {
        Route::get('/donate-now', 'donateNow')->name('donateNow');
        Route::get('/donation', 'donation')->name('donation');
        Route::get('/donation-carousel', 'donationCarousel')->name('donationCarousel');
        Route::get('/donation-details', 'donationDetails')->name('donationDetails');
        Route::get('/donations-list', 'donationsList')->name('donationsList');
        
    });
});

// events
Route::prefix('events')->group(function () {
    Route::controller(EventsController::class)->group(function () {
        Route::get('/event-details', 'eventDetails')->name('eventDetails');
        Route::get('/events', 'events')->name('events');
        Route::get('/events-carousel', 'eventsCarousel')->name('eventsCarousel');
        
    });
});

// news
Route::prefix('news')->group(function () {
    Route::controller(NewsController::class)->group(function () {
        Route::get('/news', 'news')->name('news');
        Route::get('/news-carousel', 'newsCarousel')->name('newsCarousel');
        Route::get('/news-details', 'newsDetails')->name('newsDetails');
        Route::get('/news-sidebar', 'newsSidebar')->name('newsSidebar');
        Route::get('/news-sidebar-left', 'newsSidebarLeft')->name('newsSidebarLeft');
        
    });
});


// pages
Route::prefix('pages')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('/error-page', 'errorPage')->name('errorPage');
        Route::get('/about', 'about')->name('about');
        Route::get('/become-volunteer', 'becomeVolunteer')->name('becomeVolunteer');
        Route::get('/faq', 'faq')->name('faq');
        Route::get('/gallery', 'gallery')->name('gallery');
        Route::get('/gallery-carousel', 'galleryCarousel')->name('galleryCarousel');
        Route::get('/volunteer', 'volunteer')->name('volunteer');
        Route::get('/volunteer-carousel', 'volunteerCarousel')->name('volunteerCarousel');
        
    });
});

// shop
Route::prefix('shop')->group(function () {
    Route::controller(ShopController::class)->group(function () {
        Route::get('/cart', 'cart')->name('cart');
        Route::get('/checkout', 'checkout')->name('checkout');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/product-details', 'productDetails')->name('productDetails');
        Route::get('/products', 'products')->name('products');
        
    });
});

