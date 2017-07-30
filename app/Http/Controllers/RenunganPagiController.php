<?php

namespace App\Http\Controllers;

use GrahamCampbell\Markdown\Facades\Markdown;
use App\Models\RenunganPagi;
use Illuminate\Http\Request;

class RenunganPagiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.renungan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.renungan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo Markdown::convertToHtml($request->content);
        // dd($request->request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RenunganPagi  $renunganPagi
     * @return \Illuminate\Http\Response
     */
    public function show(RenunganPagi $renunganPagi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RenunganPagi  $renunganPagi
     * @return \Illuminate\Http\Response
     */
    public function edit(RenunganPagi $renunganPagi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RenunganPagi  $renunganPagi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RenunganPagi $renunganPagi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RenunganPagi  $renunganPagi
     * @return \Illuminate\Http\Response
     */
    public function destroy(RenunganPagi $renunganPagi)
    {
        //
    }
}
