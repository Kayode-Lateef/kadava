<?php

namespace App\Http\Controllers;
use App\Models\Ad;
use Illuminate\Http\Request;


class FrontpageController extends Controller
{
    public function home()
      {
          // Your logic to display the homepage
          $ads = Ad::paginate(6); // Fetch ads with pagination

          return view('frontend.index', compact('ads'));
      }


      public function ad_search(Request $request)
      {
          // Logic to show ad search page
          $ads = Ad::paginate(12); // Fetch ads with pagination

          if ($request->ajax()) {

            $view = view('frontend.layouts.adsearch.products', compact('ads'))->render();

            return response()->json(['html' => $view]);

          }

          return view('frontend.ad_search',  compact('ads'));
      }

      public function pricing()
      {
          // Logic to show pricing page
          return view('frontend.pricing');
      }

      public function privacy()
      {
          return view('frontend.privacy');
      }


      public function terms()
      {
          return view('frontend.terms-and-conditions');
      }

      public function contact()
      {
          return view('frontend.contact');
      }

}
