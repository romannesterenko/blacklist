<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function checkPhone(Request $request){
        $phone = $request->value;
        $phone = str_replace(['+', '-', ' '], '', $phone);
        if(strlen($phone)<11){
            return response()->json(['success' => false, 'message' => 'некорректный номер']);
        }

        return response()->json(['success' => true, 'phone' => $phone]);
    }
}
