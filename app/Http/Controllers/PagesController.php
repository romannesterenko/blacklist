<?php

namespace App\Http\Controllers;

use App\Models\BlackList;
use App\Models\Buyer;
use App\Models\Check;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showMainPage()
    {
        $users_count =  BlackList::all()->count()+3590;
        $today_checked = Check::where('created_at', '>=', Carbon::today())->get()->count();
        $today_added = BlackList::where('created_at', '>=', Carbon::today())->get()->count();
        $hours = ceil((time()-Carbon::today()->timestamp)/3600);
        $today_checked = $hours*8+$today_checked;
        $today_added = ceil($hours*0.5)+$today_added;
        $finded = ceil($today_checked*0.07);
        return view('mainPage', compact('users_count', 'today_checked', 'finded', 'today_added'));
    }
    public function showBuyerPage($phone)
    {
        $lists =  BlackList::where('phone', $phone)->orderByDesc('id')->get();
        $user = Buyer::where('phone', $phone)->first();
        return view('buyerPage', compact('lists', 'user', 'phone'));
    }
}
