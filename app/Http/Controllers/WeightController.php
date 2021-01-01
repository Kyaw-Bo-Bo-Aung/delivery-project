<?php

namespace App\Http\Controllers;

use App\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weights=Weight::orderBy('id','desc')->get();
        return view('backend.weights.index',compact('weights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.weights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'weight' => 'required|max:50',
            'price' => 'required|max:50',
             
        ]);

        $weight = new Weight;
        $weight->weight = $request->weight;
         $weight->price = $request->price;
       

        $weight->save();

        return redirect()->route('weights.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function show(Weight $weight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function edit(Weight $weight)
    {
          // $weight=Weight::find($id);
          return view('backend.weights.edit',compact('weight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weight $weight)
    {
        $request->validate([
            'weight' => 'required|max:50',
            'price' => 'required|max:50',
            
        ]);

    
         $weight->weight = $request->weight;
         $weight->price = $request->price;
       

        $weight->save();

        return redirect()->route('weights.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weight $weight)
    {
        
        $weight->delete();
        return redirect()->route('weights.index');
    }
}
