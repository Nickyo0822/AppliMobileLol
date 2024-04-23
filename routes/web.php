<?php

use App\Models\Champions;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/champions', function () {
    $champions = DB::table('champions')
                ->leftJoin('types', 'champions.types_id', '=', 'types.id')
                ->leftJoin('roles', 'champions.roles_id', '=', 'roles.id')
                ->select('champions.name', 'champions.description', 'champions.path_icon as icon', 'types.name as type', 'roles.name as role')
                ->get();

    return $champions;
});

Route::get('/spells', function () {
    $spells = DB::table('spells')
                ->leftJoin('champions', 'spells.champions_id', '=', 'champions.id')
                ->select('champions.name', 'spells.name as spellname', 'spells.touch', 'spells.description', 'spells.path_icon as icon')
                ->get();

    return $spells;
});