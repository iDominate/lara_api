<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerCollection;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CustomerController extends Controller
{
    /**
     * Returns all Customers in Database
     * 
     * @return JsonResponse
     */
    public function index()
    {
        return response()->json(new CustomerCollection(Customer::paginate()));
    }

    public function show(Customer $customer)
    {
        return response()->json(new CustomerResource($customer));
    }
}