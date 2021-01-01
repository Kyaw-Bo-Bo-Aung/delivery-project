<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $productTypes=ProductType::orderBy('name','asc')->get();
        return view('backend.producttypes.index',compact('productTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.producttypes.create');
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
            'name' => 'required|max:50',
            
        ]);

        $productType = new ProductType;
        $productType->name = $request->name;
       

        $productType->save();

        return redirect()->route('producttypes.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit($id,ProductType $productType)
    {  
       // dd($id);
       $productType=ProductType::find($id);
       return view('backend.producttypes.edit',compact('productType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, ProductType $productType)
    {    

         $request->validate([
            'name' => 'required|max:50',
            
        ]);

        $productType=ProductType::find($id);
        $productType->name = $request->name;
       

        $productType->save();

        return redirect()->route('producttypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,ProductType $productType)
    {  
       $productType=ProductType::find($id);
       $productType->delete();
       return redirect()->route('producttypes.index');
    }
}
