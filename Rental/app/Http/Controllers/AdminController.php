<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Payment;

class AdminController extends Controller
{
    // Show form for adding a new customer
    public function showCustomerForm()
    {
        return view('admin.add_customer');
    }

    // Register a new customer
    public function registerCustomer(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|string|max:15',
            'account_type' => 'required|in:savings,current'
        ]);

        Customer::create($validated);

        return redirect()->back()->with('success', 'Customer registered successfully!');
    }

    // Show form for adding payment
    public function showPaymentForm()
    {
        $customers = Customer::all();
        return view('admin.add_payment', compact('customers'));
    }

    // Add a new payment
    public function addPayment(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'amount' => 'required|numeric|min:0.01',
            'description' => 'nullable|string|max:255'
        ]);

        Payment::create($validated);

        return redirect()->back()->with('success', 'Payment added successfully!');
    }

    // View customer profile and payment history
    public function viewCustomerProfile($id)
    {
        $customer = Customer::findOrFail($id);
        $payments = $customer->payments;

        return view('admin.view_customer', compact('customer', 'payments'));
    }

    public function searchCustomer()
    {
       return view('admin.search_customer');
    }

}