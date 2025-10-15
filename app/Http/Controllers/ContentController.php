<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        $content = new Content();
        $content->title ='Blue star';
        $content->name = 'Rigel';
        $content->constellation = 'Orion';
        $content->city = 'Capelle aan den IJssel';
        $content->town = 's-Gravenland';
        $content->province = 'Zuid-Holland';
        $content->country = 'The Netherlands';
        $content->date = '2021-11-17';
        $content->description = 'Rigel is a blue supergiant star located in the constellation Orion. It is one of the brightest stars in the night sky and is approximately 860 light-years away from Earth. Rigel is a massive star, with a mass about 21 times that of the Sun, and it is estimated to be around 8 million years old. The star is known for its intense luminosity, which is about 120,000 times that of the Sun, and its surface temperature of around 12,000 degrees Celsius. Rigel is also a variable star, meaning that its brightness can change over time due to pulsations in its outer layers.';
        $content->type = 'star';
        $content->image_url = 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Rigel_Star.jpg/800px-Rigel_Star.jpg';


        return view('contents.show', compact('content'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
