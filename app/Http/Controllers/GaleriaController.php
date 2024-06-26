<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GaleriaController extends Controller

{

        public function index()
        {
            // Lógica para obter dados da galeria, se necessário
            // $galleries = Galeria::all();

            return view('galeria'); // Retorna a view 'galeria.blade.php'
        }

}
//     // Mostrar formulário para criar um novo item da galeria
//     public function create()
//     {
//         return view('gallery.create');
//     }

//     // Salvar novo item da galeria
//     public function store(Request $request)
//     {
//         $request->validate([
//             'title' => 'required',
//             'description' => 'nullable',
//             'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         $galeria = new Galeria();
//         $galeria->title = $request->title;
//         $galeria->description = $request->description;

//         if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $name = time().'.'.$image->getClientOriginalExtension();
//             $destinationPath = public_path('/images/gallery');
//             $image->move($destinationPath, $name);
//             $galeria->image = $name;
//         }

//         $galeria->save();

//         return redirect()->route('gallery.index')->with('success', 'Item adicionado à galeria com sucesso.');
//     }

//     // Mostrar formulário para editar um item da galeria
//     public function edit($id)
//     {
//         $gallery = Galeria::find($id);
//         return view('gallery.edit', compact('gallery'));
//     }

//     // Atualizar item da galeria
//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'title' => 'required',
//             'description' => 'nullable',
//             'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         $galeria = Galeria::find($id);
//         $galeria->title = $request->title;
//         $galeria->description = $request->description;

//         if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $name = time().'.'.$image->getClientOriginalExtension();
//             $destinationPath = public_path('/images/gallery');
//             $image->move($destinationPath, $name);
//             $galeria->image = $name;
//         }

//         $galeria->save();

//         return redirect()->route('gallery.index')->with('success', 'Item atualizado com sucesso.');
//     }

//     // Deletar item da galeria
//     public function destroy($id)
//     {
//         $galeria = Galeria::find($id);
//         $galeria->delete();
//         return redirect()->route('gallery.index')->with('success', 'Item deletado com sucesso.');
//     }
// }


