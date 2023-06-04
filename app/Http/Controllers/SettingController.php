<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private $settings;
    private $setting;

    public function index()
    {
        return view('admin.setting.index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'logo' => 'required',
            'mobile' => 'required',
            'bkas'=>'required',
            'title' => 'required'
        ]);
        Setting::newSetting($request);
        return redirect()->back()->with('message', 'Setting info create successfully.');
    }

    public function manage()
    {
        $settings = Setting::all();
        return view('admin.setting.manage', ['settings' => $settings]);
    }

    public function edit($id)
    {
        $this->setting = Setting::find($id);
        return view('admin.setting.edit', ['setting' => $this->setting]);
    }

    public function update(Request $request, $id)
    {
        Setting::updateSetting($request, $id);
        return redirect('/manage-setting')->with('message', 'Setting info update successfully.');
    }

    public function delete($id)
    {
        Setting::deleteSetting($id);
        return redirect('/manage-setting')->with('message', 'Setting info delete successfully.');
    }


}
