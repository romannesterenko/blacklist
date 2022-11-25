<?php

namespace App\Http\Controllers;

use App\Models\BlackList;
use App\Models\Buyer;
use Illuminate\Http\Request;

class BlackListController extends Controller
{
    public function createBlackListRow(Request $request){
        $phone = str_replace(['+', '-', ' '], '', $request->phone);
        $user = Buyer::where('phone', $phone)->first();
        if(is_null($user)){
            $user = new Buyer();
            $user->phone = $phone;
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->save();
        }
        $bl = new BlackList();
        $bl->user_id = $user->id;
        $bl->post_doc = $request->ttn;
        $bl->post = $request->delivery;
        $bl->coment = $request->comment;
        $bl->save();
        if($bl->id>0)
            return response()->json(['success' => true]);
    }
}
