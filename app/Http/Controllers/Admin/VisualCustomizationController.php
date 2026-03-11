<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisualCustomizationController extends Controller
{
    public function index()
    {
        $colors = \App\Models\SiteColor::pluck('color_value', 'color_key')->toArray();
        $fonts = \App\Models\SiteFont::pluck('font_family', 'font_key')->toArray();
        return view('admin.visual.index', compact('colors', 'fonts'));
    }

    public function update(\Illuminate\Http\Request $request)
    {
        if ($request->has('colors')) {
            foreach ($request->colors as $key => $value) {
                \App\Models\SiteColor::updateOrCreate(['color_key' => $key], ['color_value' => $value]);
            }
        }

        if ($request->has('fonts')) {
            foreach ($request->fonts as $key => $value) {
                \App\Models\SiteFont::updateOrCreate(['font_key' => $key], ['font_family' => $value]);
            }
        }

        return redirect()->route('visual.index')->with('success', 'Visual settings updated successfully.');
    }
}
