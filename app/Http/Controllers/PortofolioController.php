<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Portofolio;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;


class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.'
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = Portofolio::with('user')->get();

          //Logic untuk mengaktifkan warna di navbar
          session(['active_button' => 'portofolio']);

        // $data = User::with('portofolio_id')->has('portofolio_id')->get();
        return view('pages.portofolio.index', compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Portofolio::findOrFail($id);
        $porto = Portofolio::latest()->take(3)->get();
        
        return view('pages.portofolio.details', compact('data', 'porto'));
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
