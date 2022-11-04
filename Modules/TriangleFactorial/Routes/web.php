<?php
//dd(111);
use Illuminate\Support\Facades\Route;

Route::get('factorial/{rows}',[\Modules\TriangleFactorial\Http\FactorialController::class,'index']);
