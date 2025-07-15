<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Integration;

class IntegrationController extends Controller
{
    public function create()
    {
        $integrations = [
            'Shopify' => 'Shopify',
            'WooCommerce' => 'WooCommerce',
            'Magento' => 'Magento',
            'BigCommerce' => 'BigCommerce',
        ];
        return view('integrations.create', compact('integrations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'platform' => 'required|string',
            'access_token' => 'required|string',
            'domain' => 'required|string', // use 'domain' if that's your column name
        ]);
        

        $user = $request->user();

        $integration = Integration::firstOrCreate(
            [
                'user_id' => $user->id,
                'platform' => $validated['platform'],
                'domain' => $validated['domain'],
            ],
            [
                'access_token' => $validated['access_token'],
            ]
        );

        if ($integration->wasRecentlyCreated) {
            $message = 'Integration successfully created!';
            $status = 'success';
        } else {
            $message = 'Integration already exists.';
            $status = 'warning';
        }

        return redirect()->route('dashboard')->with($status, $message);
    }
}
