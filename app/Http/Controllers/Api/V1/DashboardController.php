<?php

namespace App\Http\Controllers\Api\V1;

use Inertia\Inertia;
use App\Models\Ticket;
use App\Models\Payment;
use App\Models\Customer;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $tickets = Ticket::all();
        $payments = Payment::all();

        return Inertia::render('Dashboard', compact('customers', 'tickets', 'payments'));
    }
}
