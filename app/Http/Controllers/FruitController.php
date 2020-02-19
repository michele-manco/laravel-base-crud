<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruit;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $frutta = Fruit::all();
      $data = ['fruits' => $frutta];
      return view('fruits.index', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('fruits.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $form_data = $request->all();
      $fruit = new Fruit();
      $fruit->name = $form_data['name'];
      $fruit->peso = $form_data['peso'];
      $fruit->varieta = $form_data['varieta'];
      $fruit->save();
      return redirect()->route('fruits.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fruit $fruit)
    {
        // $frutto = Fruit::where('id', $id)->first();
        // $frutto = Fruit::find($id);

        return view('fruits.show', ['fruit' => $fruit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruit $fruit)
    {
      return view('fruits.edit', ['fruit' => $fruit]);
    }


    public function update(Request $request, Fruit $fruit)
    {
      $form_data = $request->all();
      $fruit->update($form_data);
      return redirect()->route('fruits.index');


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
