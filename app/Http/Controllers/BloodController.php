<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Hemocomponent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class BloodController extends Controller
{
    public function index(){

        $components = Component::orderby('iD','desc')->paginate();
        return view('hemocomponents.index', compact('components'));
    }
    public function create(){
        return view('hemocomponents.create');
    }
    public function store(Request $request){

        $request->validate([

            'COD_COMPONENT'=>'required',
            'DES_COMPONENT'=> 'required',
            'LOG_ACTIVE'=>'required',
            'COD_LABELTYPE'=> 'required',
        ]);
        
        $component = new Component();

        $component->COD_COMPONENT=$request->COD_COMPONENT;
        $component->DES_COMPONENT=$request->DES_COMPONENT;
        $component->LOG_ACTIVE=$request->LOG_ACTIVE;

        $component->save();
    
        return redirect()->route('hemocomponents.show',$component);
        
    }
    public function show(Component $component){
     
        return view('hemocomponents.show', compact('component'));
    } 
    public function edit(component $component){

        return view('hemocomponents.edit', compact('component')); 
         
    } 
    public function update(Request $request, component $component){

        $request->validate([

            'COD_COMPONENT'=>'required',
            'DES_COMPONENT'=> 'required',
            'LOG_ACTIVE'=>'required',
            'COD_LABELTYPE'=> 'required',
        ]);
                
        $component->COD_COMPONENT=$request->COD_COMPONENT;
        $component->DES_COMPONENT=$request->DES_COMPONENT;
        $component->LOG_ACTIVE=$request->LOG_ACTIVE;
       
        $component->save();

        return redirect()->route('hemocomponents.show', $component->ID);
    } 
    
}
