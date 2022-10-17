<?php

namespace App\Http\Controllers;

use App\Models\Biospecimen;
use App\Models\cart;
use App\Models\organ;
use App\Models\SpecimenType;
use App\Models\Tissue;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $appName = 'Catalog';
        $bizcontact = '+256-70xxxxxx';
        $bizlocation = 'Makerere Kampala';
        $bizname = 'MakBRC';
        $email = 'info@brc.com.com';

        // $guest = session()->get('guestuser');
        // $mycartitems = cart::Where('session_id', $guest)->where('state', 'pending')->get();
        // $cartcount = cart::where('session_id', $guest)->get();
        // $specimens = SpecimenType::orderBy('specimen_type', 'ASC')->limit(12)->get();
        // $biospecimens = Biospecimen::count();
        // $cov19 = Biospecimen::where('ProjectAcronym', 'COVID-19')->count();
        // $tissues = Tissue::count();
        // $organs = organ::count();
        View::share('appName', $appName);
        View::share('bizcontact', $bizcontact);
        View::share('bizname', $bizname);
        View::share('bizlocation', $bizlocation);
        View::share('bizemail', $email);
        // View::share('cartount', $cartcount);
        // // View::share('mycartitems', $mycartitems);
        // View::share('biospecimensAll', $biospecimens);
        // View::share('covAll', $cov19);
        // View::share('tissuesAll', $tissues);
        // View::share('organsAll', $organs);
        // View::share('specimensAll', $specimens);
    }
}
