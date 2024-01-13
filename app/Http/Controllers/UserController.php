<?php

namespace App\Http\Controllers;
use App\Models\Ad;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function pricing()
    {
        return view('user.pricing');
    }

    public function tiktokAds(Request $request)
    {
        // Logic to show ad search page
        $ads = Ad::paginate(12); // Fetch ads with pagination

        if ($request->ajax()) {

          $view = view('frontend.layouts.adsearch.products', compact('ads'))->render();

          return response()->json(['html' => $view]);

        }

        return view('user.tiktoks',  compact('ads'));
    }

}
