<?php

namespace App\Http\Controllers;

use App\PackagingType;
use Illuminate\Http\Request;

class PackagingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $packagingTypes=PackagingType::orderBy('name','asc')->get();
        return view('backend.packagingtypes.index',compact('packagingTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.packagingtypes.create');
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

        $packagingType = new PackagingType;
        $packagingType->name = $request->name;
       

        $packagingType->save();

        return redirect()->route('packagingtypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PackagingType  $packagingType
     * @return \Illuminate\Http\Response
     */
    public function show(PackagingType $packagingType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PackagingType  $packagingType
     * @return \Illuminate\Http\Response
     */
    public function edit($id,PackagingType $packagingType)
    {
          $packagingType=PackagingType::find($id);
          return view('backend.packagingtypes.edit',compact('packagingType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PackagingType  $packagingType
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, PackagingType $packagingType)
    {
        $request->validate([
            'name' => 'required|max:50',
            
        ]);

        $packagingType=PackagingType::find($id);
        $packagingType->name = $request->name;
       

        $packagingType->save();

        return redirect()->route('packagingtypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PackagingType  $packagingType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,PackagingType $packagingType)
    {
        $packagingType=PackagingType::find($id);
        $packagingType->delete();
        return redirect()->route('packagingtypes.index');
    }
}
