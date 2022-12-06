<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create(Request $request){
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->phone = str_replace(['+', ' ', '-'], '', $request->phone);
        $feedback->email = $request->email;
        $feedback->text = $request->text;
        $feedback->save();
        return response()->json(['success' => true]);
    }
}
