<?php
$login = 'login';
//Main Route and Public Portal Route
Route::get('/', 'Portal\PortalController@izin');
Route::get('portal/perizinan','Portal\PortalController@izin')->name('portal_izin');
Route::get('portal/kemiskinan','Portal\PortalController@kemiskinan')->name('portal_kemiskinan');
Route::get('portal/kependudukan','Portal\PortalController@penduduk')->name('portal_kependudukan');
//Authentication Routes.
Route::get($login, 'Auth\LoginController@showLoginForm')->name($login);
Route::post($login, 'Auth\LoginController@login');
//Password Reset Routes.
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//Route Group with custom auth
Route::group(['middleware' => 'my_auth'], function() {
    Route::group(['middleware' => 'auth'], function() {
        Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
        Route::get('/home', 'HomeController@index')->name('home');
        //Manage Users profile & pass
        Route::get('/profile', 'UserController@profile')->name('viewProfile');
        Route::get('/password', 'UserController@editpass')->name('changePass');
        Route::post('/password', 'UserController@changePassword')->name('savePass');
        //s.admin
        Route::group(['middleware' => 'cekstatusadminsuper'], function() {
            Route::resource('indikator','IndikatorController');
            Route::resource('otda','OtdaController');
            Route::get('/users/all', 'UserExtendController@listUsers')->name('userListAll');
            Route::get('/users/admin-prov', 'UserExtendController@listAdmProv')->name('adminProvList');
            Route::get('/users/admin-kab', 'UserExtendController@listAdmKab')->name('adminKabList');
            Route::get('/api/datatable/indikator', 'IndikatorController@dataTable')->name('api.datatable.indikator');
            Route::get('/api/datatable/otda', 'OtdaController@dataTable')->name('api.datatable.otda');
            Route::get('/api/datatable/adminProv', 'DataController@dataTableAdminProv')->name('api.datatable.adminProv');
            Route::get('/api/datatable/adminKab', 'DataController@dataTableAdminKab')->name('api.datatable.adminKab');
            // Route::get('/list/satda', 'SatdaController@listSatdaKabSragen')->name('satdaListKabSragen');
            // Route::get('/list/skpd', 'SkpdController@listSatdaKabSragen')->name('skpdListKabSragen');
        });
        //s.admin || adm.prov
        Route::group(['middleware' => 'cekstatusadminprov'], function() {
            Route::get('/list/satda-prov', 'SatdaController@listSatdaProv')->name('satdaListProv');
            Route::get('/list/skpd-prov', 'SkpdController@listSkpdProv')->name('skpdListProv');
            Route::get('/users/user-prov', 'UserExtendController@listUserProv')->name('userProvList');
            Route::get('/api/datatable/satda-prov', 'SatdaController@dataTableProv')->name('api.datatable.satdaProv');
            Route::get('/api/datatable/skpd-prov', 'SkpdController@dataTableProv')->name('api.datatable.skpdProv');
            Route::get('/api/datatable/userProv', 'DataController@dataTableUserProv')->name('api.datatable.userProv');
        });
        //s.admin || adm.kab
        Route::group(['middleware' => 'cekstatusadminkab'], function() {
            Route::get('/list/satda-kab', 'SatdaController@listSatdaKab')->name('satdaListKab');
            Route::get('/list/skpd-kab', 'SkpdController@listSkpdKab')->name('skpdListKab');
            Route::get('/users/user-kab', 'UserExtendController@listUserKab')->name('userKabList');
            Route::get('/api/datatable/satda-kab', 'SatdaController@dataTableKab')->name('api.datatable.satdaKab');
            Route::get('/api/datatable/skpd-kab', 'SkpdController@dataTableKab')->name('api.datatable.skpdKab');
            Route::get('/api/datatable/userKab', 'DataController@dataTableUserKab')->name('api.datatable.userKab');
        });        
        //s.admin || adm.prov || adm.kab
        Route::group(['middleware' => 'cekstatus'], function() {
            Route::resource('satda','SatdaController');
            Route::resource('skpd','SkpdController');
            Route::resource('users','UserController');
            Route::get('/users/{user}/change-pass', 'UserController@formPass')->name('userFormPass');
            Route::put('/users', 'UserController@updatePass')->name('userUpdatePass');
            Route::get('/statistic/user', 'StatisticController@statisticUser')->name('statUser');
            Route::get('/statistic/page', 'StatisticController@statisticPage')->name('statPage');
            // Route::get('/statistic/menu', 'StatisticController@statisticMenu')->name('statMenu');
            Route::post('/selectAjaxKab', 'UserExtendController@selectAjaxKabUser')->name('selectAjaxKab');
            Route::post('/selectAjaxSatda', 'UserExtendController@selectAjaxSatdaUser')->name('selectAjaxSatda');
            Route::post('/selectAjaxSkpd', 'UserExtendController@selectAjaxSkpdUser')->name('selectAjaxSkpd');
            Route::get('/api/datatable/satda', 'SatdaController@dataTable')->name('api.datatable.satda');
            Route::get('/api/datatable/skpd', 'SkpdController@dataTable')->name('api.datatable.skpd');
            Route::get('/api/datatable/access/perizinan', 'StatisticController@dataTablePerizinan')->name('api.datatable.perizinanPage');
            Route::get('/api/datatable/access/kependudukan', 'StatisticController@dataTableKependudukan')->name('api.datatable.kependudukanPage');
            Route::get('/api/datatable/access/kemiskinan', 'StatisticController@dataTableKemsikinan')->name('api.datatable.kemiskinanPage');
            Route::get('/api/datatable/access/login', 'StatisticController@dataTableLogin')->name('api.datatable.tableLogin');
            // Route::get('/api/datatable/users', 'DataController@dataTable')->name('api.datatable.user');
            // Route::get('/api/datatable/users-all', 'DataController@dataTableAll')->name('api.datatable.userAll');
        });
        //Reference
        Route::get('referensi', 'Kabupaten\ReferenceController@index')->name('reference');
        //Detail iku Sragen
        Route::group(['middleware' => ['cekskpddpmtsp']], function () {
            Route::get('iku/kabupaten/izin/data', 'Kabupaten\IkuIzinDataController@index')->name('ikuIzinData');
            Route::get('iku/kabupaten/izin/data-status', 'Kabupaten\IkuIzinDataController@status')->name('ikuIzinDataStatus');
            Route::get('iku/kabupaten/izin/status', 'Kabupaten\IkuIzinStatusController@index')->name('ikuIzinStatus');
        });
        Route::group(['middleware' => ['cekskpddisdukcapil']], function () {
            Route::get('iku/kabupaten/penduduk/data', 'Kabupaten\IkuPendudukDataController@index')->name('ikuPendudukData');
            Route::get('iku/kabupaten/penduduk/usia', 'Kabupaten\IkuPendudukDataController@age')->name('ikuPendudukDataUsia');
            Route::get('iku/kabupaten/penduduk/pekerjaan', 'Kabupaten\IkuPendudukDataController@pekerjaan')->name('ikuPendudukPekerjaan');
            Route::get('iku/kabupaten/penduduk/pendidikan', 'Kabupaten\IkuPendudukDataController@pendidikan')->name('ikuPendudukPendidikan');
            Route::get('iku/kabupaten/penduduk/keluarga', 'Kabupaten\IkuPendudukDataKkController@index')->name('ikuPendudukKk');
            Route::get('iku/kabupaten/penduduk/rasio', 'Kabupaten\IkuPendudukRasioGenderController@index')->name('ikuPendudukRasio');
        });
        Route::group(['middleware' => ['cekskpdbapedda']], function () {
            Route::get('iku/kabupaten/kemiskinan/data', 'Kabupaten\IkuKemiskinanDataController@index')->name('ikuKemiskinanData');
            Route::get('iku/kabupaten/kemiskinan/data-bps', 'Kabupaten\IkuKemiskinanDataController@bps')->name('ikuKemiskinanDataBps');
            Route::get('iku/kabupaten/kemiskinan/angka', 'Kabupaten\IkuKemiskinanAngkaController@index')->name('ikuKemiskinanAngka');        
        });
    });
});