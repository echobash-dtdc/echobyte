<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    public function index()
    {
        $integrations = [
            'shopify' => 'Shopify',
            'woocommerce' => 'WooCommerce',
            'magento' => 'Magento',
            'bigcommerce' => 'BigCommerce'
        ];

        return view('integrations.index', [
            'integrations' => $integrations
        ]);
    }
}
