<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Ticket;
use App\Models\Payment;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->input('term');

        $customers = Customer::where('first_name', 'like', "%{$term}%")
            ->orWhere('last_name', 'like', "%{$term}%")
            ->get();

        $tickets = Ticket::where('title', 'like', "%{$term}%")
            ->orWhere('description', 'like', "%{$term}%")
            ->get();

        $payments = Payment::where('transaction_code', 'like', "%{$term}%")
            ->orWhere('account_number', 'like', "%{$term}%")
            ->get();

        // return compact('customers', 'tickets', 'payments');
        return [
            'customers' => $customers,
            'tickets' => $tickets,
            'payments' => $payments,
        ];
    }
}
