<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Breakfasts;

class BreakfastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breakfasts = Breakfasts::all();
        
        return view('pages.home')->with('breakfasts', $breakfasts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'food' => 'required',
            'drink' => 'required',
        ],[
            //to change the error msg, either change in the lang folder,
            //or put another array here to overwrite the msg in different situations
            'food.required' => 'Give me the food',
            'drink.required' => 'Give me the drink',
        ]);      

        $newBreakfast = new Breakfasts;

        $newBreakfast->food = $request->food;
        $newBreakfast->drink = $request->drink;

        $newBreakfast->save();

        //redirect the page to the URL and pass the a message along with it
        return redirect('/db')->with('message', 'Submited - Thank you');
       
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selectedBreakfast = Breakfasts::find($id);
        
        return view('pages.show')->with('selectedBreakfast', $selectedBreakfast);     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selectedBreakfast = Breakfasts::find($id);
        
        return view('pages.edit')->with('selectedBreakfast', $selectedBreakfast);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'food' => 'required',
            'drink' => 'required',
        ],[
            //to change the error msg, either change in the lang folder,
            //or put another array here to overwrite the msg in different situations
            'food.required' => 'Give me the food',
            'drink.required' => 'Give me the drink',
        ]);      

        $newBreakfast = Breakfasts::find($id);
        $newBreakfast->food = $request->food;
        $newBreakfast->drink = $request->drink;
        $newBreakfast->save();

        //redirect the page to the URL and pass the a message along with it
        return redirect('/db')->with('message', 'Updated - Thank you');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $selectedBreakfast = Breakfasts::find($id);

        $selectedBreakfast->delete();

        //redirect the page to the URL and pass the a message along with it
        return redirect('/db')->with('delete', 'The selected breakfast has been deleted.');


    }
}