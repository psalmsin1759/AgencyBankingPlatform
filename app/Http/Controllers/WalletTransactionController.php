<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWalletTransactionRequest;
use App\Http\Requests\UpdateWalletTransactionRequest;
use App\Models\WalletTransaction;

class WalletTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWalletTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WalletTransaction $walletTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WalletTransaction $walletTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWalletTransactionRequest $request, WalletTransaction $walletTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WalletTransaction $walletTransaction)
    {
        //
    }
}
