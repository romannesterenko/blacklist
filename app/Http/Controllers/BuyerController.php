<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\BlackList;
use App\Models\User;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function checkPhone(Request $request){
        $phone = $request->value;
        $phone = str_replace(['+', '-', ' '], '', $phone);
        if(strlen($phone)<11){
            return response()->json(['success' => false, 'message' => 'некорректный номер']);
        }
        $user = Buyer::where('phone', $phone)->first();
        if(!is_null($user)&&$user->id>0)
            return response()->json(['success' => true, 'user' => $user, 'items' => $user->listsByPhone()]);
        return response()->json(['success' => true, 'user' => [], 'items' => []]);
    }
    public function checkName(Request $request){
        $user = Buyer::where('last_name', $request->value)->first();
        if(!is_null($user)&&$user->id>0)
            return response()->json(['success' => true, 'user' => $user, 'items' => $user->lists()]);
        return response()->json(['success' => true, 'user' => [], 'items' => []]);
    }
}
