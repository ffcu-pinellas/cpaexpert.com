<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController
{
    public function index()
    {
        $settings = \App\Models\Setting::pluck('setting_value', 'setting_key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(\Illuminate\Http\Request $request)
    {
        foreach ($request->settings as $key => $value) {
            \App\Models\Setting::updateOrCreate(['setting_key' => $key], ['setting_value' => $value]);
        }

        return redirect()->route('settings.index')->with('success', 'Settings updated successfully.');
    }
}
