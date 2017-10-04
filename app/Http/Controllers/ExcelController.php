<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
class ExcelController extends Controller
{
    public function ExportWorkers()
    {
    	Excel::create('worker', function($excel){
    		$excel->sheet('worker', function($sheet){
    			$sheet->loadView('ExportWorker');
    		});
    	})->export("xlsx");
    }
}
