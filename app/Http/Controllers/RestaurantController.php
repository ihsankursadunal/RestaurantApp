<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Facade\Zomato;

class RestaurantController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function categories()
    {
        // $data = Restaurant::all();
        $data = json_decode(Zomato::getCategories()->getContents(), true);
        $serialized = [];
        for ($i = 0; $i < count($data['categories']); $i++) {
            $serialized[(string)$data['categories'][$i]['categories']['id']] = [$data['categories'][$i]['categories']['name'],(string)$data['categories'][$i]['categories']['id']];
        }
        return view('categories', ['data' => $serialized]);
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
    function search()
    {
        return view('search');
    }
}
