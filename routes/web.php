<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



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
Route::get('/welcome', [PageController::class, 'welcome']); //Laravel


Route::middleware(['auth'])->group(function () {



// PUBLIC ROUTES
Route::get('/',                                     [PageController::class, 'index'])->name('index');
Route::get('/index',                                [PageController::class, 'index']);










Route::middleware(['auth'])->group(function () {
    Route::post('/logout',                       [LoginController::class, 'logout'])->name('logout');

    Route::get('/index2',                        [PageController::class, 'index2'])->name('dashboard.v2');
    Route::get('/index3',                        [PageController::class, 'index3'])->name('dashboard.v3');

    // Examples Qovluğu
    Route::prefix('examples')->name('examples.')->group(function () {
        Route::get('lockscreen',                 [PageController::class, 'examplesLockscreen'])->name('lockscreen');
        Route::get('login',                      [PageController::class, 'examplesLogin'])->name('login');
        Route::get('login-v2',                   [PageController::class, 'examplesLoginV2'])->name('login-v2');
        Route::get('register',                   [PageController::class, 'examplesRegister'])->name('register');
        Route::get('register-v2',                [PageController::class, 'examplesRegisterV2'])->name('register-v2');
    });

    // Forms Qovluğu
    Route::prefix('forms')->name('forms.')->group(function () {
        Route::get('general',                    [PageController::class, 'formsGeneral'])->name('general');
    });

    // Generate Qovluğu
    Route::prefix('generate')->name('generate.')->group(function () {
        Route::get('theme',                      [PageController::class, 'generateTheme'])->name('theme');
    });



    // Tables Qovluğu
    Route::prefix('tables')->name('tables.')->group(function () {
        Route::get('simple',                    [PageController::class, 'tablesSimple'])->name('simple');
    });

    // UI Qovluğu
    Route::prefix('UI')->name('UI.')->group(function () {
        Route::get('general',                   [PageController::class, 'uiGeneral'])->name('general');
        Route::get('icons',                     [PageController::class, 'uiIcons'])->name('icons');
        Route::get('timeline',                  [PageController::class, 'uiTimeline'])->name('timeline');
    });




});

Route::get('/deneme', function () {
    return view('nav-leva');
});

                                        //DASHBOAARD Pages
Route::get("",                                 [Admin\PageController::class, 'index'])->name('index');
Route::get("index2",                           [Admin\PageController::class, 'index2'])->name('index2');
Route::get("index3",                           [Admin\PageController::class, 'index3'])->name('index3');
                                        //WIDGETS Pages
Route::prefix('widgets')->name('widgets.')->group(function () {
Route::get("cards",                            [Admin\PageController::class, 'widgetsCards'])->name('cards');
Route::get("info-box",                         [Admin\PageController::class, 'widgetsInfoBox'])->name('info-Box');
Route::get("small-box",                        [Admin\PageController::class, 'widgetsSmallBox'])->name('small-box');
});


    // Layout Qovluğu
    Route::prefix('layout')->name('layout.')->group(function () {

        Route::get('fixed-complete',           [Admin\PageController::class, 'layoutFixedComplete'])->name('fixed-complete');
        Route::get('fixed-footer',             [Admin\PageController::class, 'layoutFixedFooter'])->name('fixed-footer');
        Route::get('fixed-header',             [Admin\PageController::class, 'layoutFixedHeader'])->name('fixed-header');
        Route::get('fixed-sidebar',            [Admin\PageController::class, 'layoutFixedSidebar']);
        Route::get('layout-custom-area',       [Admin\PageController::class, 'layoutCustomArea'])->name('layout-custom-area');
        Route::get("collapsed-sidebar",        [Admin\PageController::class, 'layoutFixedSidebar'])->name('collapsed-sidebar');
        Route::get('layout-rtl',               [Admin\PageController::class, 'layoutRtl'])->name('layout-rtl');
        Route::get('logo-switch',              [Admin\PageController::class, 'layoutLogoSwitch'])->name('logo-switch');
        Route::get('sidebar-mini',             [Admin\PageController::class, 'layoutSidebarMini'])->name('sidebar-mini');
        Route::get('unfixed-sidebar',          [Admin\PageController::class, 'layoutUnfixedSidebar']);
    });


                                        //DOCS Pages

    Route::get('/docs/browser-support',        [Admin\PageController::class, 'docsBrowserSupport']);
    Route::get('/docs/components/main-header', [Admin\PageController::class, 'docsMainHeader']);
    Route::get('/docs/components/main-sidebar',[Admin\PageController::class, 'docsMainSidebar']);
    Route::get('/docs/javascript/treeview',    [Admin\PageController::class, 'docsTreeview']);
    Route::get('/docs/color-mode',             [Admin\PageController::class, 'docsColorMode']);
    Route::get('/docs/faq',                    [Admin\PageController::class, 'docsFaq']);
    Route::get('/docs/how-to-contribute',      [Admin\PageController::class, 'docsHowToContribute']);
    Route::get('/docs/introduction',           [Admin\PageController::class, 'docsIntroduction']);
    Route::get('/docs/layout',                 [Admin\PageController::class, 'docsLayout']);
    Route::get('/docs/license',                [Admin\PageController::class, 'docsLicense']);
});

//login kismi   Login
Route::get('/login',                           [LoginController::class,'showLoginForm'])->name('login');
Route::post('/login',                          [LoginController::class,'login']);
Route::post('/logout',                         [LoginController::class,'logout'])->name('logout');


Route::get('/register',                        [RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('/register',                       [RegisterController::class,'register']);
