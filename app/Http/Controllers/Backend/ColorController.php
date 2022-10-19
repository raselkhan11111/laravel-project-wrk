<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    public function index()
    {
        $colors = Color::all();
        return view("backend/color/index", compact('colors'));
    }

    public function store(ColorRequest $request)
    {
        $data = [
            'name' => $request->name,
            'color_code' => $request->color_code,
            'description' => $request->description,
            'is_active' => $request->is_active ? true : false,
        ];

        Color::create($data);

        return redirect()->route('color.index')->with('success', 'SuccessFully Created Color');
    }

    public function create()
    {
        return view("backend/color/create");
    }
    public function edit(Color $color)
    {
        // $categoryedit = Category::find($id);
        return view("backend/color/edit", compact('color'));
    }

    public function update(ColorRequest $request, Color $color)
    {
        //dd($request);
        // $categorie = Category::find($id);
        $data = [
            'name' => $request->name,
        ];
        $color->update($data);
        return redirect()->route('color.index')->with('success', 'Color edit Successdfully');
    }

    public function destroy(Color $color)
    {
        // $categoryDestroy = Category::find($id);
        foreach ($color->brand as $brand) {
            foreach ($brand->product as $product) {
                $product->delete();
            }
            $brand->delete();
        }

        $color->products()->detach();
        $color->delete();
        return redirect()->route('color.index')->with('success', 'SuccessFully Deleted Color');
    }
}
