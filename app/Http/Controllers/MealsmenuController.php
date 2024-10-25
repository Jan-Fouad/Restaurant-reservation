<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MealsmenuController extends Controller
{
    public function breakfast()
    {
            
            $breakfast = Menu::where('category', 'breakfast')->get();
            return view('admin.menu.breakfast', get_defined_vars());
        
    }
}
