<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgencyRequest;
use App\Http\Requests\updateRequest;
use App\Models\Agency;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agency::all();
        return view('list', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgencyRequest $request, Agency $agency)
    {
        $agency->name = $request->name;
        $agency->phone = $request->phone;
        $agency->email = $request->email;
        $agency->address = $request->address;
        $agency->manager = $request->manager;
        $agency->status = $request->status;
        $agency->save();
        return redirect()->route('list');
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
        $agency = Agency::findOrFail($id);
        return view('update', compact('agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = [
          'name' => $request->name,
          'phone' => $request->phone,
          'email' => $request->email,
          'address' => $request->address,
          'manager' => $request->manager,
          'status' => $request->status
        ];
        DB::table('agents')->where('id', $id)->update($data);
        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agency = Agency::findOrFail($id);
        $agency->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $text = $request->name;
        $agents = DB::table('agents')->where('name', 'LIKE', '%'. $text .'%')->get();
        return view('list', compact('agents'));
    }

}
