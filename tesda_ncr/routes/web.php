<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\ProgramsAndServices;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\TransparencyController;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'login_view')->name('login');
    Route::get('/register', 'register_view')->name('register');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/not-found', 'not_found')->name('not.found');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/history', 'history')->name('history');
    Route::get('/vision-mission-value-statement-and-quality-policy', 'vision_mission')->name('vision.mission');
    Route::get('/organizational-chart', 'organisational_chart')->name('organisational.chart');
});

Route::controller(TransparencyController::class)->group(function () {
    Route::get('/transparency-seal', 'transparency_seal')->name('transparency.seal');
    Route::get('/citizens-charter', 'citizens_charter')->name('citizens.charter');
    Route::get('/philgeps-posting', 'philgeps_posting')->name('philgeps.posting');
    Route::get('/committee-on-anti-red-tape', 'tesda_cart')->name('tesda.cart');
});

Route::controller(ProgramsAndServices::class)->group(function () {
    Route::get('/tvet-programs', 'tvet_programs')->name('tvet.programs');
    Route::get('/competency-standards-development', 'comp_stand_develop')->name('comp.stand.develop');
    Route::get('/assessment-and-certification', 'assess_and_certif')->name('assess.and.certif');
    Route::get('/program-registration-and-accreditation', 'program_reg_accredit')->name('program.reg.accredit');
    Route::get('/national-tesd-plan', 'national_tesd_plan')->name('national.tesd.plan');
});

Route::controller(ResourcesController::class)->group(function () {
    Route::get('/downloadable-files', 'downloadable_files')->name('downloadable.files');
    Route::get('/labor-market-intelligence-report', 'lmir')->name('lmir');
    Route::get('/planning-guidelines', 'planning_guidelines')->name('planning.guidelines');
    Route::get('/tvet-statistics', 'tvet_statistics')->name('tvet.statistics');
    Route::get('/tvet-brief', 'tvet_brief')->name('tvet.brief');
    Route::get('/skills-need-anticipation', 'skills_need_anticipation')->name('skills.need.anticipation');
    Route::get('/tvet-skills-insight-report', 'tsir')->name('tsir');
});

Route::controller(ContactsController::class)->group(function () {
    Route::get('/regional-district-offices', 'regional_district_offices')->name('regional-district.offices');
    Route::get('/technology-institute', 'technology_institute')->name('technology.institute');
});
