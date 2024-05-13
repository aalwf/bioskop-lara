<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseTickets;

class HistoryController extends Controller
{
    public function index()
    {
        $history = PurchaseTickets::orderBy('created_at', 'desc')->get();

        return view('history', [
            "title" => "History",
            "history" => $history
        ]);
    }

    public function show($id)
    {
        $purchase = PurchaseTickets::findOrFail($id);
        $seats = collect(explode(',', $purchase->seat));
        return view('history_detail', [
            "title" => "History Detail",
            "detail" => $purchase->purchase,
            "purchase_id" => $purchase->purchase_id,
            "seats" => $seats,
            'change' => $purchase->purchase->cash - $purchase->purchase->total
        ]);
    }

    public function destroy($id)
    {
        $purchase = PurchaseTickets::findOrFail($id);
        $purchase->delete();

        return redirect('/history')->with('success', 'Purchase ticket deleted successfully.');
    }
}
