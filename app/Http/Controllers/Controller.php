<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use App\Models\cart;
use App\Models\Biospecimen;
use App\Models\Tissue;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct() {
        $appName="Catalog";
    $bizcontact="+256-70xxxxxx";
    $bizlocation="Makerere Kampala";
    $bizname="MakBRC";
    $email="info@brc.com.com";


        $guest = session()->get('guestuser');
        $mycartitems = cart::Where('session_id', $guest)->where('state','pending')->get();
        $cartcount = cart::where('session_id', $guest)->get();
        $biospecimens = Biospecimen::count();
        $tissues = Tissue::count();
       View::share('appName',$appName);
       View::share('bizcontact',$bizcontact);
       View::share('bizname',$bizname);
       View::share('bizlocation',$bizlocation);
       View::share('bizemail',$email);
       View::share('cartount',$cartcount);
       View::share('mycartitems',$mycartitems );
       View::share('biospecimensAll',$biospecimens);
       View::share('tissuesAll',$tissues);

  }
}