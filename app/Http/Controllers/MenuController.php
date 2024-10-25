<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
          
            $meals = Menu::all();
            return view('admin.menu.index', get_defined_vars());
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        $data = $request->validated();
        Menu::create($data);
        
        return redirect()->route('admin.menu.index')->with('success', 'Product added successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
       return view('admin.menu.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {

        return view('admin.menu.edit',get_defined_vars());
    }

    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $data = $request->validated();
    
        $menu->update($data);
        return redirect()->route('admin.menu.index')->with('success_update', 'Updated successfully');
    }
    
/**
 * Remove the specified resource from storage.
 */
public function destroy(Menu $menu)
{
    $menu->delete();  
        return redirect()->route('admin.menu.index')->with('success_delete', 'Product deleted successfully');
}

    
    public function breakfast()
    {
            
            $breakfast = Menu::where('category', 'breakfast')->get();
            return view('admin.menu.breakfast', get_defined_vars());
        
    }
    public function lunch()
    {
            
            $lunch = Menu::where('category', 'lunch')->get();
            return view('admin.menu.lunch', get_defined_vars());
        
    }
    public function dinner()
    {
            
            $dinner = Menu::where('category', 'dinner')->get();
            return view('admin.menu.dinner', get_defined_vars());
        
    }
    
        // $lunch = Menu::where('category', 'Lunch')->get();
}

      
    
        
        // $dinner= Menu::where('category', 'Dinner')->get();
    
        // return view('', compact('breakfastMeals', 'lunchMeals', 'dinnerMeals'));


