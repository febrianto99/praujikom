<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;
use Session;
use Auth;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::orderBy('created_at', 'desc')->get();
        return view('motor.index', compact('motor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motor = motor::all();
        return view('motor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motor = new Motor();
        $motor->motor_id = $request->motor_id;
        $motor->slug = str_slug($request->motor_id, '-');
        $motor->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan motor <b>$motor->motor_id</b>!"
        ]);
        return redirect()->route('motor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::findOrFail($id);
        return view('admin.motor.show', compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = Motor::findOrFail($id);
        return view('admin.motor.edit', compact('motor'));
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
        $request->validate([
            'motor_id' => 'required',
        ]);
        $motor = Motor::findOrFail($id);
        $motor->motor_id = $request->motor_id;
        $motor->slug = str_slug($request->motor_id, '-');
        $motor->save();
        Session::flash("flash_notification", [
            "level" => "primary",
            "message" => "Berhasil mengubah menjadi motor <b>$motor->motor_id</b>!"
        ]);
        return redirect()->route('motor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motor = Motor::findOrFail($id);
        $old = $motor->motor_id;
        $motor->delete();
        return redirect()->route('motor.index');
    }
}
