<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $eventNames = $events->pluck('name')->toArray();
        $reservationCounts = [];

        foreach ($events as $event) {
            $reservationCounts[] = $event->reservations()->count();
        }

        $data = [
            'category' => Category::all(),
            'user' => User::all(),
            'roles' => Role::all(),
            'categoryCount' => Category::all()->count(),
            'eventNames' => $eventNames,
            'reservationCounts' => $reservationCounts,

        ];

        return view('dashboardPage', compact( 'data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->name = $request->input('categoryName');
        $category->save();

        return redirect('/category')->with('success', 'Category added successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'categoryName' => 'required|string|max:255',
        ]);

        $category = Category::find($id);

        if (!$category) {
            return redirect('/category')->with('error', 'Category not found');
        }

        $category->name = $request->input('categoryName');
        $category->save();

        return redirect('/category')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteCategory($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('your.route.name')->with('error', 'Category not found');
        }

        $category->delete();

        return redirect('/category')->with('success', 'Category deleted successfully');
    }
}
