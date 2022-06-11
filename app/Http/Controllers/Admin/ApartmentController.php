<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Building;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $apartments = Apartment::leftJoin(
        //     'buildings',
        //     'buildings.id',
        //     '=',
        //     'apartments.building_id'
        // )->select('apartments.*', 'buildings.name as building_name')->get();
        $apartments = Apartment::with('building')->get();
        return view('apartments.index', [
            'apartments' => $apartments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $apartent = new Apartment();
        $buildings = Building::all();
        return view(
            'apartments.create',
            [
                'apartment' => $apartent,
                'buildings' => $buildings
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Apartment::create($request->all());
        return redirect()->route('apartments.index')
            ->with('success', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        $buildings = Building::all();
        return view('apartments.edit', compact('apartment', 'buildings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
        $apartment->update($request->all());
        return redirect()->route('buildings.index')
            ->with('success', 'تم التعديل  بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $apartment = Apartment::findOrFail($id);
        $apartment->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }
}
