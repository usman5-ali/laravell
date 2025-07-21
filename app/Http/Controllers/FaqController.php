<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    //
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('faq.index', compact('faqs'));
    }
    public function getall()
    {
        $faq = Faq::latest()->get();
        return $faq;
    }
    public function store(Request $request)
    {

        Faq::create([
            'question' => $request->title,
            'answer' => $request->description,
        ]);

        return redirect()->route('faq.index')->with('success', 'Faq created successfully.');
    }
    public function show(Faq $faq)
    {
        //
        return view('faq.show', compact('faq'));
    }
    public function create()
    {

        return view('faq.create');
    }
    public function edit(Faq $faq)
    {
        //
        return view('faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $Faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        // Update other fields
        $Faq->question = $request->question;
        $Faq->answer = $request->answer;
        $Faq->save();

        return redirect()->route('faq.index')->with('success', 'Faq updated successfully.');
    }

    public function destroy(Faq $Faq)
    {


        $Faq->delete();

        return redirect()->route('faq.index')->with('success', 'Faq deleted successfully.');
    }
}
