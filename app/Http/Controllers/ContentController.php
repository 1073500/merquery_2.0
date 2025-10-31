<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Rules\ValidDutchOrBelgianCity;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //$contents = Content::all();

        //search
        $contents = Content::orderBy('created_at', 'DESC');

        if (request()->filled('search')) {
            $search = request()->get('search', '');
            $contents = $contents->where('title',  'like', '%' . $search . '%');
        }
        $contents = $contents->paginate(3);

        return view('contents.index', compact('contents'));



    }

    public function show(Content $content)
    {
//
        return view('contents.show', compact('content'));

    }

    /**
     * Show the form for creating a new resource.
     */

    //database tabel -> migration
    //model
    //meesturen view
    //select
    public function create()
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


//        validatie
        $request->validate([
            'title' => 'required|max:70',
            'name' => 'required|max:255',
            'constellation' => 'required|max:255',
            'city' => ['string', new ValidDutchOrBelgianCity],
            'town' => 'required|max:255',
            'province' => 'required|max:255',
            'country' => 'required|max:255',
            'date' => 'required|date',
            'description',
            'type' => 'required|max:255',
//            'image_url' => 'required|url|max:400',
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
//        $content->image_url = $request->input('image_url');
        $content->save();

        //redirect
        return redirect()->route('contents.show', $content->id);
    }


    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        return view('contents.edit', compact('content'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        $request->validate([
            'title' => 'required|max:70',
            'name' => 'required|max:255',
            'constellation' => 'required|max:255',
            'city' => 'required|max:255',
            'town' => 'required|max:255',
            'province' => 'required|max:255',
            'country' => 'required|max:255',
            'date' => 'required|date',
            'description',
            'type' => 'required|max:255',
//            'image_url' => 'required|url|max:400',
        ]);
        $content->update($request->all());
//        $content->title = $request->input('title');
//        $content->name = $request->input('name');
//        $content->constellation = $request->input('constellation');
//        $content->city = $request->input('city');
//        $content->town = $request->input('town');
//        $content->province = $request->input('province');
//        $content->country = $request->input('country');
//        $content->date = $request->input('date');
//        $content->description = $request->input('description');
//        $content->type = $request->input('type');
//        $content->image_url = $request->input('image_url');
        $content->save();

        return redirect()->route('contents.show', $content->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        $content->delete();
        return redirect()->route('contents.index', $content);
    }

    public function contents()
    {
        $contents = Content::all();
        return view('contents.show', compact('contents'));
    }
}
