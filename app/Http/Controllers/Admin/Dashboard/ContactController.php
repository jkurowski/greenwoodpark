<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Valuestore\Valuestore;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.settings.contact.index');
    }

    public function store(Request $request)
    {
        $settings = Valuestore::make(storage_path('app/settings.json'));
        $settings->put($request->except(['_token', 'submit']));

        return redirect(route('admin.settings.contact.index'))->with('success', 'Ustawienia zostały zapisane');
    }
}
