<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vegetable;

class VegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request->data);die();
        $data = new Vegetable();
        // $data->image = $request->image;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->discount = $request->discount;
        $data->featured_product = $request->featured_product;
        $data->save();
        return $data;
        // dd($data->name);
        // $data = $this->validate($request, [
        //     'data' => [
        //     'name'=>'required',
        //     'description'=> 'required',
        //     'price'=>'required',
        //     'discount'=> 'required',
        //     'featured_product'=>'required'
        //     ]
        // ]);
        // dd($data);
        // Vegetable::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Vegetable::latest()->limit(5)->get();
        // dd($data);
		return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $data = Vegetable::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->discount = $request->discount;
        $data->featured_product = $request->featured_product;
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
