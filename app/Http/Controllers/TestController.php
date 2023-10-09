<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index(){

        // Eloquent（エロクアント）
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb')->get();

        dd($values, $count, $first, $whereBBB);
        return view('tests.test', compact('values'));
    }
}
