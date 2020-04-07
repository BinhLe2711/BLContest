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
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('begin');
})->name('index');

Route::group(['middleware' => 'ifLoginButGoToLoginPage'], function () { //Authentication
    Route::get('/login',[
        'as'=>'login',
        'uses'=>'Authen@indexLogin'
    ]);
    Route::post('/login',[
        'uses'=>'Authen@postLogin'
    ]);
    Route::get('/register',[
        'as'=>'register',
        'uses'=>'Authen@indexRegister'
    ]);
});

Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

Route::group(['middleware' => 'checkLogin'], function () { //Dashboard
    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('index');
    })->name('logout');

    Route::group(['middleware' => 'checkGv'], function () {
        //Giáo viên dasboard
        Route::prefix('gv')->group(function () {
            // View::share('relation_details', DB::table('joinclass')find($relation)->get());

            Route::get('/',[
                'uses'=>'gvDashboard@index'
            ])->name('gvDashboard');

            Route::get('/create-class',[
                'uses'=>'gvDashboard@createClass'
            ])->name('createClass');

            Route::post('/create-class',[
                'uses'=>'gvDashboard@creatingClass'
            ]);

            Route::get('/classroom',[
                'uses'=>'gvDashboard@manageClassroom'
            ])->name('manageClassroom');

            Route::get('/classroom/{id}',[
                'uses'=>'gvDashboard@detailClassroom'
            ])->name('detailClassroom');

            Route::get('/classroom/{id}/contest/{idcontest}',[
                'uses'=>'gvDashboard@detailContest'
            ])->name('detailContest');    
            
            Route::get('/question/{id}',[
                'uses'=>'gvDashboard@suacauhoi'
            ])->name('suacauhoi');

            Route::post('/question/{id}',[
                'uses'=>'gvDashboard@postsuacauhoi'
            ]);

            Route::get('/classroom/{id}/contest/{idcontest}/{idbai}',[
                'uses'=>'gvDashboard@detailBailam'
            ])->name('detailBailam');    

            Route::get('/classroom/{id}/delete/{idHs}',[
                'uses'=>'gvDashboard@delStudent'
            ])->name('delStudent');

            Route::get('/classroom/{id}/create-contest',[
                'uses'=>'gvDashboard@createContest'
            ])->name('createContest');

            Route::get('/classroom/{idclass}/delete-contest/{idcontest}',[
                'uses'=>'gvDashboard@deleteContest'
            ])->name('deleteContest');
            
            Route::post('/classroom/{id}/create-contest',[
                'uses'=>'gvDashboard@creatingContest'
            ])->name('creatingContest');
            

            Route::get('/question',[
                'uses'=>'gvDashboard@manageQuestion'
            ])->name('manageQuestion');

            Route::post('/question',[
                'uses'=>'gvDashboard@createQuestion'
            ]);

            Route::get('/profile',[
                'uses'=>'gvDashboard@profile'
            ])->name('profile');
            Route::post('/profile',[
                'uses'=>'gvDashboard@changeProfile'
            ]);
        });                             
    });
    Route::group(['middleware' => 'checkHs'], function () {
        //Học sinh dasboard
        Route::prefix('hs')->group(function () {
            Route::get('/',[
                'uses'=>'hsDashboard@index'
            ])->name('hsDashboard');   

            Route::get('/find-class',[
                'uses'=>'hsDashboard@findClass'
            ])->name('findClass');     
                
            Route::post('/find-class',[
                'uses'=>'hsDashboard@postFindClass'
            ]);     
            
            Route::post('/join-class',[
                'uses'=>'hsDashboard@joinclass'
            ])->name('joinclass');

            Route::get('/classroom/{id}',[
                'uses'=>'hsDashboard@viewClass'
            ])->name('viewClass');

            Route::get('/classroom/{id}/lam-bai/{idcontest}',[
                'uses'=>'hsDashboard@lambai'
            ])->name('lambai');

            Route::post('/classroom/{id}/lam-bai/{idcontest}',[
                'uses'=>'hsDashboard@postlambai'
            ]);

            Route::get('/classroom/{id}/lam-bai/{idcontest}/result',[
                'uses'=>'hsDashboard@result'
            ])->name('result');

        });
    });
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});