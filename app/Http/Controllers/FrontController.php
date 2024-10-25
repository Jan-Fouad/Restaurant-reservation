<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\Menu;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        return view('front.index');
    }
    public function about()
    {

        return view('front.about');
    }
    public function service()
    {

        return view('front.service');
    }
    public function menu()
    {
        $breakfast = Menu::where('category', 'breakfast')->get();
        $lunch = Menu::where('category', 'lunch')->get();
        $dinner = Menu::where('category', 'dinner')->get();

        return view('front.menu' ,get_defined_vars());
    }
    public function contact()
    {

        return view('front.contact');
    }
    public function booking()
    {

        return view('front.booking');
    }
    public function store(StoreBookingRequest $request){
        $data=$request->validated();
        // dd($data);
        Booking::create($data);
        return redirect()->route('front.index')->with('success', 'Booking successfully created.');
    }
    
}
