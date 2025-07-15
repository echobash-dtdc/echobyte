<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;
use App\Models\Integration;

class IntegrationController extends Controller
{
    public function index(Request $request){
        $integrations = Integration::where('user_id',$request->user()->id)->get();
        return view('integrations.list',['integrations' => $integrations]);
    }

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
        
        return redirect()->route('integrations.index')->with($status, $message);
    }

    public function sync(Request $request, Integration $integration) : \Illuminate\View\View {
        $access_token = $integration->access_token;
        $url = config('services.shopify.url').'/admin/api/2024-04/products.json';
        // Code to take the above access token and then hit the shopify post api for fetching the api
        if ($integration->platform === 'Shopify') {
            $response = Http::withHeaders([
                'X-Shopify-Access-Token' => $access_token,
                'Accept' => 'application/json'
            ])->get($url);
            
            $error = '';
            if($response->successful()){
                $products = $response->json();
            }else{
                $error = $response->body();
            }
        } elseif ($platform === 'WooCommerce') {
            // Call WooCommerce sync logic
        }
        
        return view('integrations.products', [
            'products' => $products,
            'error' => $error,
        ]);
    }
}
