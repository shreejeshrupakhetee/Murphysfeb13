<?php

namespace App\Http\Controllers;

use App\Models\User;
use Nikolag\Square\Facades\Square;
use Nikolag\Square\Models\Customer;

class ChargeController extends Controller
{
    /**
     * Basic charge.
     */
    public function charge()
    {
        $transaction = Square::charge([
            'amount' => 500,
            'card_nonce' => 'fake-card-nonce-ok',
            'source_id' => 'formNonce',
            'location_id' => 'LG6C58F9VXJW1',
            'currency' => 'AUD'
        ]);

        return response()->json(compact('transaction'));
    }
}