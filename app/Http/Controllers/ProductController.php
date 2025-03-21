<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends Controller
{
    //
    private $names = [
        1 => ['name' => 'Ana', "age" => 30],
        2 => ['name' => 'Cesar', "age" => 23],
        3 => ['name' => 'Julia', "age" => 13],
    ];
    
    public function getAll() {
        return response()->json($this->names);
    }

    public function get(int $id = 0) {
        if(isset($this->names[$id])){
            return response()->json($this->names[$id]);
        }
        return response()->json(["error"=> "Producto no existente"], Response::HTTP_NOT_FOUND);
    }

    public function create(Request $request) {
        $person = [
            "id" => count($this->names) + 1,
            "name" => $request->input("name"),
            "age" => $request->input("age"),
        ];

        $this->names[$person["id"]] = $person;

        return response()->json(["message" => "Person creada", "persona" => $person],
        Response::HTTP_CREATED);
    }

    public function update (Request $request, int $id){
        if(isset($this->names[$id])){
            $this->names[$id]['name'] = $request->input('name', "cesar");
            $this->names[$id]['age'] = $request->input('age');

            return response()->json(['message' => 'Persona actualizada',
                                        'person'=>$this->names[$id]]);
        }

        return response()->json(["error"=> "Producto no existe"], Response::HTTP_NOT_FOUND);
    }

    public function delete (int $id) {
        if(isset($this->names[$id])){
            unset($this->names[$id]);

            return response()->json(["message" => 'Persona eliminada']);
        }

        return response()->json(["error"=> "Producto no existe"], Response::HTTP_NOT_FOUND);
    }
}
