<?php

namespace App\Http\Controllers;

use App\DistTVInfo;
use App\DistTVType;
use Illuminate\Http\Request;

class DishTVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $DishTVTypes = DistTVType::all();
        $user = auth()->user();
        return view('dish-tv.edit', compact('user', 'DishTVTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $user->update([
            'phone' => $request->phone,
            'account' => $request->account,
            'address_line1' => $request->address_line1,
            'address_line2' => $request->address_line2,
            'postal_code' => $request->postal_code,
            'country' => $request->country
        ]);

        $dishTV = DistTVInfo::firstOrNew(['user_id' => auth()->id()]);
        $dishTV->dish_tv_type_id = $request->dish_tv_type_id;
        $dishTV->model = $request->model;
        $dishTV->sr_no = $request->sr_no;
        $dishTV->card_no = $request->card_no;
        $dishTV->save();
        return back()->with('success_msg','Update successfully.');
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
    public function edit($id)
    {
        //
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
        //
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
