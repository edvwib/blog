<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;

class PagesController extends BaseController
{
    public function GetIndex(string $dataName, $data) {
        Route::get('/', function () use($dataName, $data) {
            return view('index', [$dataName => $data]);
        });
    }
}
