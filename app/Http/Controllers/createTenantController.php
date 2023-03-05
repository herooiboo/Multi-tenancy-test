<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class createTenantController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function CreateTenant(request $request)
    {
        $tenant = Tenant::create(['id' => $request->id]);
        $tenant->domains()->create(['domain' => $request->id . '.localhost']);

        return redirect()->route('tenant.list');
    }

    public function listTenants()
    {
        $tenants = Tenant::all();
        return view('success', compact('tenants'));
    }
}
