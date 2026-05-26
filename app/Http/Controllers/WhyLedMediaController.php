<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyLedMedia;

class WhyLedMediaController extends Controller
{
    /**
     * =========================================================
     * DISPLAY ALL PAGES
     * =========================================================
     */
    public function index()
    {
        $whyLedPages = WhyLedMedia::latest()->get();

        return view(
            'backend.pages.why-led.index',
            compact('whyLedPages')
        );
    }

    /**
     * =========================================================
     * SHOW EDIT PAGE
     * =========================================================
     */
    public function edit($page)
    {
        $whyLed = WhyLedMedia::where('page', $page)->firstOrFail();

        return view(
            'backend.pages.why-led.edit',
            compact('whyLed')
        );
    }

    /**
     * =========================================================
     * UPDATE DATA
     * =========================================================
     */
    public function update(Request $request, $page)
    {
        $request->validate([

            'title'       => 'required|string|max:255',

            'description' => 'required',

        ]);

        $whyLed = WhyLedMedia::where('page', $page)->firstOrFail();

        $whyLed->update([

            'title'       => $request->title,

            'description' => $request->description,

        ]);

        return redirect()
            ->back()
            ->with('success', 'Why LED Media updated successfully.');
    }

    /**
     * =========================================================
     * FRONTEND PAGE
     * =========================================================
     */
    public function show($page)
    {
        $whyLed = WhyLedMedia::where('page', $page)->firstOrFail();

        return view(
            'frontend.pages.why-led.show',
            compact('whyLed')
        );
    }
}