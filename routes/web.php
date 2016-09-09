<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

/*
 * |--------------------------------------------------------------------------------------------------------------------
 * |           Initialization of Web Routes Group with Main Middleware "WEB" (Layer One)
 * |--------------------------------------------------------------------------------------------------------------------
 */
Route::group(['middleware' => 'web'], function() {
    /*
     * |-----------------------------------------------------------------------------------------------------------------
     * |                                    Authentication Routes  (Layer One)
     * |-----------------------------------------------------------------------------------------------------------------
     */
    Auth::routes();

    /*
     * |-----------------------------------------------------------------------------------------------------------------
     * |           Initialization of Web Routes Group for Group for Guest Users only (Layer Two)
     * |-----------------------------------------------------------------------------------------------------------------
     */
    Route::group(['middleware' => 'guest'], function() {
        Route::get('/', function () {
            return view('welcome');
        });
    });

    /*
     * |-----------------------------------------------------------------------------------------------------------------
     * |           Initialization of Web Routes Group for Authenticated Users only (Layer Three)
     * |-----------------------------------------------------------------------------------------------------------------
     */
    Route::group(['middleware' => 'auth'], function() {

        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |                                Route for Newly Registered User
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::get('/approval-pending', function() {
            $a = Auth::user()->unreadNotifications;
            return view('Dashboard.dashboard', compact('a'));
        });

        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |                                Initializations of SuperUser Routes Group
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::group(['prefix' => 'superuser', 'middleware' => 'SuperUser'], function() {

            /*
             * |-----------------------------------------------------------------------------------------------------------
             * |                            Initializations of Dashboard Web Routes
             * |-----------------------------------------------------------------------------------------------------------
             */
            Route::get('/dashboard', function() {
                return view('SuperUser.dashboard');
            })->name('SU-Dashboard');

            /*
             * |-----------------------------------------------------------------------------------------------------------
             * |                             Initializations of Projects Web Routes
             * |-----------------------------------------------------------------------------------------------------------
             */
            Route::get('/project/view', 'ProjectController@ViewAll')->name('SU-Projects');
            Route::get('/project/view/{id?}', 'ProjectController@ViewProject')->name('SU-ViewProject');
            Route::post('/project/view', 'ProjectController@NewProject')->name('SU-NewProject');

            /*
             * |-----------------------------------------------------------------------------------------------------------
             * |                             Initializations of Company Web Routes
             * |-----------------------------------------------------------------------------------------------------------
             */
            Route::get('/manage/company', 'CompanyController@ViewAll')->name('SU-Company');
            Route::post('/manage/company', 'CompanyController@NewCompany')->name('SU-NewCompany');
        });



        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |           Initialization of Admin Web Routes Group
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::group(['prefix' => 'admin', 'middleware' => 'Admin'], function() {
            Route::get('/dashboard', function() {
                return view('Admin.dashboard');
            });
        });

        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |           Initialization of HR Web Routes Group
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::group(['prefix' => 'hr', 'middleware' => 'HR'], function() {
            Route::get('/dashboard', function() {
                return view('HR.dashboard');
            });
        });

        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |           Initialization of Bidder Web Routes Group
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::group(['prefix' => 'bidder', 'middleware' => 'Bidder'], function() {
            Route::get('/dashboard', function() {
                return view('Bidder.dashboard');
            });
        });

        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |           Initialization of Team Leader Web Routes Group
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::group(['prefix' => 'tl', 'middleware' => 'TL'], function() {
            Route::get('/dashboard', function() {
                return view('TL.dashboard');
            });
            Route::get('/tl/asdf', function() {
                
            });
        });

        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |           Initialization of Developers Web Routes Group
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::group(['prefix' => 'developer', 'middleware' => 'Developer'], function() {
            Route::get('/dashboard', function() {
                return view('Developer.dashboard');
            });
        });

        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |           Initialization of Freshers Web Routes Group
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::group(['prefix' => 'fresher', 'middleware' => 'Fresher'], function() {
            Route::get('/dashboard', function() {
                return view('Fresher.dashboard');
            });
        });

        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |           Initialization of Tester Web Routes Group
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::group(['prefix' => 'tester', 'middleware' => 'Tester'], function() {
            Route::get('/dashboard', function() {
                return view('Tester.dashboard');
            });
        });

        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |           Initialization of IT Web Routes Group
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::group(['prefix' => 'it', 'middleware' => 'IT'], function() {
            Route::get('/dashboard', function() {
                return view('IT.dashboard');
            });
        });
        
        
        /*
         * |--------------------------------------------------------------------------------------------------------------
         * |           Initialization of IT Web Routes Group
         * |--------------------------------------------------------------------------------------------------------------
         */
        Route::group(['prefix' => 'ajax'], function() {
            Route::resource('/view/team', 'AngularRequestHandler@ViewTeam');
        });
    });
});
