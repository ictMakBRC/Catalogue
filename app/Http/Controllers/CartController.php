<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cartcount()
    {
        if (session()->has('guestuser')) {
            $guest = session()->get('guestuser');
            $cartitems = cart::Where('session_id', $guest)->where('state', 'pending')->get();
            $cartcount = cart::where('session_id', $guest)->where('state', 'pending')->count();
            session(['items' => $cartcount]);
        } else {
            session(['guestuser' => time().rand(50, 1000)]);
            $guest = session()->get('guestuser');
            $cartitems = cart::Where('session_id', $guest)->where('state', 'pending')->get();
            $cartcount = cart::where('session_id', $guest)->where('state', 'pending')->count();
            session(['items' => $cartcount]);
        }
    }

    public function index()
    {
        $guest = session()->get('guestuser');
        $cartitems = cart::Where('session_id', $guest)->where('state', 'pending')->get();

        $ip = request()->ip();
        //$ip = '162.159.24.227';
        $data = Location::get($ip);
        //return $data;
        return view('web.cart', compact('cartitems', 'data', 'guest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session()->has('guestuser')) {
            $guest = session()->get('guestuser');
        } else {
            session(['guestuser' => time().rand(50, 1000)]);
        }
        
        $this->validate($request, [
            'item_type' => 'required',
            'project_acronym' => 'required',
            'quantity'=>'required',
            'specimen_type' => 'required',
            'sample_id' => 'required',
            'aliqout_type' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'ethinicity' => 'required',
            'donor_status' => 'required',
        ]);
        $ip = request()->ip();
        $data = Location::get($ip);
                $isExist = cart::select('*')
                    ->where('session_id', session('guestuser'))
                    ->where('sample_id', $request->input('sample_id'))
                    ->where('item', $request->input('Tissue'))
                    ->exists();
                if ($isExist) {
                    return redirect()->back()->with('warning', 'Item already exists in the list !!');
                } 
            else {
            //  return $data;
            $value = new cart();
            $value->session_id = session('guestuser');
            $value->item = $request->input('item_type');
            $value->project_acronym = $request->input('project_acronym');
            $value->email = $request->input('email');
            $value->specimen_type = $request->input('specimen_type');
            $value->sample_id = $request->input('sample_id');
            $value->aliqout_type = $request->input('aliqout_type');
            $value->gender = $request->input('gender');
            $value->age = $request->input('age');
            $value->ethinicity = $request->input('ethinicity');
            $value->donor_status = $request->input('donor_status');
            $value->details = $request->input('details');            
            $value->quantity = $request->input('quantity');            
            $value->save();

            //$this->cartcount();

            return redirect()->back()->with('success', 'Item Successfully added !!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        $cart->delete();
        $this->cartcount();

        return redirect()->back()->with('success', 'Item Successfully removed !!');
    }
}
