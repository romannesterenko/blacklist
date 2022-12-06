<?php

namespace App\Http\Controllers;

use App\Models\BlackList;
use App\Models\Check;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index()
    {
        $blacklists = BlackList::all();
        return response()->view('sitemap', compact('blacklists'))->header('Content-Type', 'text/xml');
    }
}
