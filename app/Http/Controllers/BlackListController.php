<?php

namespace App\Http\Controllers;

use App\Models\BlackList;
use App\Models\Buyer;
use App\Models\Check;
use Illuminate\Http\Request;

class BlackListController extends Controller
{
    public function showBuyerPage($phone)
    {
        $lists =  BlackList::where('phone', $phone)->orderByDesc('id')->get();
        $user = Buyer::where('phone', $phone)->first();
        return view('buyerPage', compact('lists', 'user', 'phone'));
    }

    public static function preparePhone($phone)
    {
        return str_replace(['+', '-', ' '], '', $phone);
    }
    public function createBlackListRow(Request $request){
        $user = Buyer::where('phone', self::preparePhone($request->phone))->first();
        if(is_null($user)){
            $user = new Buyer();
            $user->phone = self::preparePhone($request->phone);
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->save();
        }
        $bl = new BlackList();
        $bl->post_doc = $request->ttn;
        $bl->phone = self::preparePhone($request->phone);
        $bl->name = $request->name;
        $bl->last_name = $request->last_name;
        $bl->post = $request->delivery;
        $bl->coment = $request->comment;
        $bl->save();
        return response()->json(['success' => $bl->id>0]);
    }

    public function getByPhone(Request $request)
    {
        $phone = self::preparePhone($request->value);
        Check::create(
            [
                'phone' => $phone,
                'ip'  => $request->ip()
            ]
        );
        $items = [];
        $lists =  BlackList::where('phone', $phone)->orderByDesc('id')->get();
        $return_info['phone'] = $phone;
        $return_info['count'] = 0;
        foreach ($lists as $list) {
            $return_info['full_names'][] = $list['name'].' '.$list['last_name'];
            $return_info['count']++;
        }
        if ($return_info['count']>0) {
            $items[] = $return_info;
        }
        return response()->json(['success' => true, 'items' => $items]);
    }

    public function getByName(Request $request)
    {
        $name = $request->value;
        Check::create(
            [
                'name'=>$name,
                'ip' => $request->ip()
            ]
        );
        $return_items = [];
        $lists =  BlackList::where('last_name', $name)->orderByDesc('id')->get();
        $by_phone = [];
        foreach ($lists as $list){
            $by_phone[$list->phone][] = $list;
        }
        foreach ($by_phone as $phone => $items){
            $return_info['phone'] = $phone;
            $return_info['count'] = count($items);
            foreach ($items as $item)
                $return_info['full_names'][] = $item['name'].' '.$item['last_name'];
            if($return_info['count']>0)
                $return_items[] = $return_info;
            unset($return_info);
        }
        return response()->json(['success' => true, 'items' => $return_items]);
    }
}
