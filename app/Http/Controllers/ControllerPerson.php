<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelPerson;

class ControllerPerson extends Controller{
    public function all()
    {
        return ModelPerson::all();
    }

    // mengambil data by id
    public function show($id)
    {
        return ModelPerson::find($id);
    }

    // menambah data
    public function store(Request $request)
    {   
        // for ($i=0; $i < 100; $i++) { 
            $data = array(
                'first_name' => $request->first_name, 
                'last_name' => $request->last_name, 
            );
            ModelPerson::create($data);
        // }
        
    }

    // mengubah data
    public function update($id, Request $request)
    {
        $person = ModelPerson::find($id);
        $person->update($request->all());
        return $person;
    }

    // menghapus data
    public function delete($id)
    {
        $person = ModelPerson::find($id);
        $person->delete();
        return 204;
    }
}
