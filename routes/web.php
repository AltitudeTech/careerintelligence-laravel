<?php

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
    return view('index')->with('title', 'Home');
})->name('index');

Route::get('index', function () {
    return view('index')->with('title', 'Home');
})->name('index');

Route::get('join-us', function () {
    return view('join-us')->with('title', 'Join Us');
})->name('join-us');

Route::get('policy', function () {
    return view('policy')->with('title', 'Privacy Policy');
})->name('policy');

Route::get('cookie', function () {
    return view('cookie')->with('title', 'Cookie Policy');
})->name('cookie');

Route::get('disclaimer', function () {
    return view('disclaimer')->with('title', 'Disclaimer');
})->name('disclaimer');

Route::get('termsofuse', function () {
    return view('termsofuse')->with('title', 'Terms of Use');
})->name('termsofuse');

Route::get('search', 'RecruitingController@searchJobIndex')->name('search');

Route::get('sector', 'Admin\SectorController@userDisplay')->name('sector');

Route::get('sec-cat-recruit/{specCat}', 'Admin\SectorController@specCat')->name('sec-cat-recruit');

Route::get('sector/{secId}', 'Admin\SectorController@sectorDisplay')->name('sectordisplay');

Route::resource('recruitment', 'RecruitingController');

Route::get('contact', function () {
    return view('contact')->with('title', 'Contact');
})->name('contact');

Route::get('companystructure', function(){
		return view('companystructure')->with('title', 'Company Structure');
	})->name('companystructure') ;

	Route::get('registration', function(){
		return view('registration')->with('title', 'Registration');
	})->name('registration') ;

Route::get('mission', function(){
		return view('mission')->with('title', 'Mission & Values');
	})->name('mission') ;

Route::get('franchise', function(){
		return view('franchise')->with('title', 'Franchise');
	})->name('franchise') ;

Route::get('careeradvice', function(){
		return view('careeradvice')->with('title', 'Career Advice');
	})->name('careeradvice') ;

Route::get('faqs', function(){
		return view('faqs')->with('title', 'FAQs');
	})->name('faqs') ;

Route::get('marketintel', function(){
		return view('marketintel')->with('title', 'Market Intelligence');
	})->name('marketintel') ;

Route::get('globalhelpdesk', function(){
		return view('globalhelpdesk')->with('title', 'Global Help Desk');
	})->name('globalhelpdesk') ;

Route::get('events', function(){
		return view('events')->with('title', 'Events');
	})->name('events') ;

Route::get('citv', function(){
		return view('citv')->with('title', 'CITV');
	})->name('citv') ;

Route::prefix('partner')->group(function () {

	Route::get('google', function(){
		return view('partner.google')->with('title', 'Google');
	})->name('google') ;

	Route::get('hireselect', function(){
		return view('partner.hireselect')->with('title', 'Hire Select');
	})->name('hireselect') ;
	
	Route::get('hirevue', function(){
		return view('partner.hirevue')->with('title', 'Hire Vue');
	})->name('hirevue') ;
	
	Route::get('linkedin', function(){
		return view('partner.linkedin')->with('title', 'LinkedIn');
	})->name('linkedin') ;
	
	Route::get('myprofile', function(){
		return view('partner.myprofile')->with('title', 'My Profile');
	})->name('myprofile') ;
	
	Route::get('talentrecruit', function(){
		return view('partner.talentrecruit')->with('title', 'Talent Recruit');
	})->name('talentrecruit') ;

});

Route::prefix('services')->group(function () {

	Route::get('permanentplacement', function(){
		return view('services.permanentplacement')->with('title', 'Permanent Placement');
	})->name('permanentplacement') ;

	Route::get('temporaryplacement', function(){
		return view('services.temporaryplacement')->with('title', 'Temporary Placement');
	})->name('temporaryplacement') ;

	Route::get('digitalizedvideo', function(){
		return view('services.digitalizedvideo')->with('title', 'Digitalized Video');
	})->name('digitalizedvideo') ;

	Route::get('executiveservices', function(){
		return view('services.executiveservices')->with('title', 'Executive Services');
	})->name('executiveservices') ;

	Route::get('featureddigitalcampaign', function(){
		return view('services.featureddigitalcampaign')->with('title', 'Featured Digital Campaign');
	})->name('featureddigitalcampaign') ;

	Route::get('internships', function(){
		return view('services.internships')->with('title', 'Internships');
	})->name('internships') ;

	Route::get('hr-services', function(){
		return view('services.hr-services')->with('title', 'HR Services');
	})->name('hr-services') ;

	Route::get('labour-market-research', function(){
		return view('services.labour-market-research')->with('title', 'Labour Market Research');
	})->name('labour-market-research') ;

	Route::get('outplacement', function(){
		return view('services.outplacement')->with('title', 'Outplacement');
	})->name('outplacement') ;

	Route::get('recruitmentprocess', function(){
		return view('services.recruitmentprocess')->with('title', 'Recruitment Process');
	})->name('recruitmentprocess') ;

	Route::get('salaryandremuneration', function(){
		return view('services.salaryandremuneration')->with('title', 'Salary and Remuneration Benchmarking');
	})->name('salaryandremuneration') ;

	Route::get('internationalrecruitment', function(){
		return view('services.internationalrecruitment')->with('title', 'International Recruitment');
	})->name('internationalrecruitment') ;

});


Route::get('login', function () {
    return view('login')->with('title', 'Login');
})->name('login');

Route::get('submitcv', function () {
    return view('submitcv')->with('title', 'SubmitCV');
})->name('submitcv');

//Route::controller('subscribers', 'SubscriberController');

Route::get('/newsletter', [
	'as' => 'newsletter',
	'uses' => 'NewsletterController@index'
	]);
Route::resource('admin/sector', 'Admin\SectorController');
Route::resource('admin/category', 'Admin\CategoryController');
Route::get('searchLoc', 'LocationController@searchLocation')->name('searchLoc');


//Route::get('api/dependent-dropdown','APIController@index');
Route::get('api/get-state-list','APIController@getStateList');
Route::get('api/get-city-list','APIController@getCityList');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

