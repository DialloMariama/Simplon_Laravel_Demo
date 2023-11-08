<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{

    function getListeTaches(){
        $taches=Tache::orderBy('id','desc')->get();
        //$taches=Tache::all();
        return view('tache.taches', ["taches"=>$taches]);
        //return view('tache.taches', compact('taches'));

    }

    public function show(Request $request){
        $tache=Tache::findOrFail($request->id_tache);
        return view('tache.show', ["tacheTrouvee"=>$tache]);
    }

    public function termine(Request $request){
        $tache=Tache::findOrFail($request->id_tache);
        $tache->is_termine= 1;
        $tache->save();
        return back();


    }

    public function create(){
        return view('tache.nouveau');
    }
    public function save (Request $request){
        $tache = new Tache();
        $tache->nom_tache=$request->nom;
        $tache->description_tache=$request->description;
        $tache->date_echeance=$request->date;
        $tache->priorite=$request->priorite;

        if($request->is_termine){
            $tache->is_termine=1;
        }else{
            $tache->is_termine=0;
        }

        if($tache->save()){
            return redirect('tache');
            echo "Inserction bien reussie";
        }

    }

}
