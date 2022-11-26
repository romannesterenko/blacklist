<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'phone',
    ];

    public function listsByPhone(){
        $items = [];
        $lists =  BlackList::where('user_id', $this->id)->orderByDesc('id')->get();
        $return_info['phone'] = $this->phone;
        $return_info['count'] = 0;
        foreach ($lists as $list) {
            $return_info['full_names'][] = $list['name'].' '.$list['last_name'];
            $return_info['count']++;
        }
        $items[] = $return_info;
        return $items;
    }
}
