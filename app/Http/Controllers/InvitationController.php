<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Invitation;
use Session;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= DB::table('invitations')->get();
        // return $result;
        $data = array ("datax"=>$result);
        // return $data;

        // return view("pages.dashboard", ["datax",$data]);
        return view('pages.dashboard')->with('datax',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $invitations= Input::all();
        // $result= DB::table('invitations') -> get ();

        // $data = array ("data"=>$result);
        // return view ("layout.register")->with($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $invitations= Input::all(); 
        $invitations= new Invitation;

        $nama= Input::get('nama');
        $email= Input::get('email');
        $opsi= Input::get('opsi');
        $note= Input::get('note');
       
        $invitations -> nama = $nama; 
        $invitations -> email = $email;
        $invitations -> opsi = $opsi;
        $invitations -> note = $note;
        $invitations -> save();
        \Session::flash('flash_message','successfully saved.');
        // $data = $request::all();
        // $data = new Invitation();
        // $data->nama = $request->get('nama');
        // $data->email = $request->get('email');
        // $data->opsi = $request->get('opsi');
        // $data->note = $request->get('note');
        // \Session::flash('flash_message','successfully saved.');

       

        // return View::make("template/dashboard", compact($result));
        return redirect ("/dashboard");

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
