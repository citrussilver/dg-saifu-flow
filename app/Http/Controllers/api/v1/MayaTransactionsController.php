<?php

namespace App\Http\Controllers\api\v1;

use App\Models\MayaTransactions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MayaTransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MayaTransactions::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
