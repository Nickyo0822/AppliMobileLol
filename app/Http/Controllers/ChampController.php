<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChampController extends Controller
{
    public function returnChampion($champion)
    {
        $champ = DB::table('champions')
                ->where('name', '=', $champion)
                ->get();

        $champ = json_decode($champ, true);

        if (empty($champ)) {
            return array();
        }

        $id_champ = $champ[0]['id'];

        $spellChamp = DB::table('spells')
                        ->where('champions_id', '=', $id_champ)
                        ->get();

        $spellChamp = json_decode($spellChamp, true);
        
        $kitChamp = array_merge($champ, $spellChamp);
        
        return $kitChamp;
    }

    public function getChampionRoles($champion)
    {
        $champ = DB::table('champions')
                ->where('name', '=', $champion)
                ->get();

        $champ = json_decode($champ, true);

        if (empty($champ)) {
            return array();
        }

        $id_champ = $champ[0]['id'];

        $roleChamp = DB::table('champions_roles')
                        ->leftJoin('roles', 'champions_roles.roles_id', '=', 'roles.id')
                        ->where('champions_roles.champions_id', '=', $id_champ)
                        ->select('roles.id', 'roles.name as roles', 'roles.path_icon')
                        ->get();

        return $roleChamp;
    }

    public function getChampionTypes($champion)
    {
       $champ = DB::table('champions')
                ->where('name', '=', $champion)
                ->get();

        $champ = json_decode($champ, true);

        if (empty($champ)) {
            return array();
        }

        $id_champ = $champ[0]['id'];     

        $typeChamp = DB::table('champions_types')
                        ->leftJoin('types', 'champions_types.types_id', '=', 'types.id')
                        ->where('champions_types.champions_id', '=', $id_champ)
                        ->select('types.id', 'types.name as types', 'types.path_icon')
                        ->get();

        return $typeChamp;
    }

}
