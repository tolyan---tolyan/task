<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use DB;
use App\Worker;
class ExcelController extends Controller
{
    public function ExportWorkers()
    {
    	$hr_request = Worker::all();
    	Excel::create('worker', function($excel){
    		$excel->sheet('worker', function($sheet){
    			$sheet->loadView('ShowWorkers');
    		});
    	})->export("xlsx");
    	
    }


    public function ShowWorkers()
    {
    	$hr_request = Worker::all();
   		return view('ShowWorkers')->with('hr_request', $hr_request);
    }
}
