<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(Content $content)
    {
//        $content = Content::findOrFail();
//        if(!$content){
//            abort(404);
//        }
//        $content = new Content();
//        $content->title = 'Blue star';
//        $content->name = 'Rigel';
//        $content->constellation = 'Orion';
//        $content->city = 'Capelle aan den IJssel';
//        $content->town = 's-Gravenland';
//        $content->province = 'Zuid-Holland';
//        $content->country = 'The Netherlands';
//        $content->date = '2021-11-17';
//        $content->description = 'Rigel is a blue supergiant star located in the constellation Orion. It is one of the brightest stars in the night sky and is approximately 860 light-years away from Earth. Rigel is a massive star, with a mass about 21 times that of the Sun, and it is estimated to be around 8 million years old. The star is known for its intense luminosity, which is about 120,000 times that of the Sun, and its surface temperature of around 12,000 degrees Celsius. Rigel is also a variable star, meaning that its brightness can change over time due to pulsations in its outer layers.';
//        $content->type = 'star';
//        $content->image_url = 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Rigel_Star.jpg/800px-Rigel_Star.jpg';


        return view('contents.show', compact('content'));

    }

    /**
     * Show the form for creating a new resource.
     */

    //database tabel -> migration
    //model
    //meesturen view
    //select
    public function create(Content $content)
    {
       $content = Content::all();

        return view('contents.create', compact('content'));
    }

    /**
     * Store a newly created resource in storage.
     */
    //form data

    public function store(Request $request)
    {
        //dd($request);
        //validatie
        $request->validate([
            'title' => 'required|max:70',
            'name' => 'required|max:255',
            'constellation' => 'required|max:255',
            'city' => 'required|max:255',
            'town' => 'required|max:255',
            'province' => 'required|max:255',
            'country' => 'required|max:255',
            'date' => 'required|date',
            'description' => 'required',
            'type' => 'required|max:255',
            'image_url' => 'required|url|max:400',
        ]);

        //insert into
        $content = new Content();
        $content->title = $request->input('title');
        $content->name = $request->input('name');
        $content->constellation = $request->input('constellation');
        $content->city = $request->input('city');
        $content->town = $request->input('town');
        $content->province = $request->input('province');
        $content->country = $request->input('country');
        $content->date = $request->input('date');
        $content->description = $request->input('description');
        $content->type = $request->input('type');
        $content->image_url = $request->input('image_url');
        $content->save();
        //redirect
        return redirect()->route('contents.show', ['content' => $content->id]);
    }


    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        //
    }
}
