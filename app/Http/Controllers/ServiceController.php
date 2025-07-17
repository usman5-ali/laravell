<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Service::latest()->get();
        return view('services.index', compact('services'));
    }
    public function getall()
    {
        //
        $services = Service::latest()->get();
        return $services;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
       return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
           
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('blogs', 'public');
            }
            Service::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imagePath,
            ]);

            return redirect()->route('services.index')->with('success', 'Service created successfully.');
        }


    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
            return view('services.show', compact('service'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
          return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Safely handle optional image
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('services', 'public');
        $service->image = $imagePath;
    }

    // Update other fields
    $service->title = $request->title;
    $service->description = $request->description;
    $service->save();

    return redirect()->route('services.index')->with('success', 'Service updated successfully.');
}

    public function destroy(Service $service)
{
    if ($service->image && Storage::disk('public')->exists($service->image)) {
        Storage::disk('public')->delete($service->image);
    }

    $service->delete();

    return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
}

}





