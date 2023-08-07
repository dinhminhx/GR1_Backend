<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockData;
use Illuminate\Support\Facades\DB;
class StockDataController extends Controller
{
    public function index($ticker)
    {
        try {
            $stockData = StockData::where('symbol', $ticker)->get();
            return response()->json($stockData);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
