<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Tests\Facades\Zomato;

class RestaurantController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function list()
    {
        // $data = Restaurant::all();
        $data = Zomato::getCategories();
        return view('list', ['data' => $data]);
    }
    function add()
    {
        return view('add_restaurant');
    }
    function add_restaurant(Request $request)
    {
        $restaurant = new Restaurant;

        $restaurant->name = $request->name;
        $restaurant->email = $request->email;
        $restaurant->address = $request->address;

        $restaurant->save();

        $request->session()->flash('status', 'success');

        return redirect("/add");

    }
}
