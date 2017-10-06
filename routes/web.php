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
    return view('welcome');
});

// Route::get('ExportWorkers', 'ExcelController@ExportWorkers');
// Route::get('ShowWorkers', 'ExcelController@ShowWorkers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('employee', 'EmployeeController');

Route::get('/download', function()
{
   Excel::create('employees', function($excel) {
            $excel->sheet('Sheetname', function($sheet) {
                $employees = \App\Employee::all();
                $sheet->fromModel($employees);
            });
          })->download('xls');

});