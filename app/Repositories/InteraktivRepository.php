<?php

namespace App\Repositories;

use App\Models\Interaktiv;

class InteraktivRepository
{
    public function getAll(){
        return Interaktiv::all();
    }

    public function getById($id){
        return Interaktiv::find($id);
    }

    public function new($name, $video){
        $interaktiv = new Interaktiv;
        $interaktiv->name = $name;
        $interaktiv->video = $video;
        $interaktiv->save();
    }

    public function delete($id){
        Interaktiv::where('id', $id)->delete();
    }
}
