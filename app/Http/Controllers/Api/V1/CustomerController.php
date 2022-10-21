<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreCustomerRequest;
use App\Http\Requests\v1\UpdateCustomerRequest;
use App\Http\Resources\V1\CustomerCollection;
use App\Http\Resources\V1\CustomerResource;
use App\Models\Customer;
use App\Filters\V1\CustomerFilter;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        $filter = new CustomerFilter();
        $filterItems = $filter->transform($request); // [['column', 'operator', 'value']]

        $includeInvoices = $request->query('includeInvoices');

        $customers = Customer::where($filterItems);

        if ($includeInvoices) {
            $customers = $customers->with('invoices');
        }

        return new CustomerCollection($customers->paginate()->appends($request->query()));
    }


    public function store(StoreCustomerRequest $request)
    {
        // Retrieve the validated input...
        $validated = $request->safe()->all();

        $newKeys = ['name', 'type', 'email', 'address', 'city', 'state', 'postal_code'];

        $validatedValues = array_values($validated);

        $requestValidated = array_combine($newKeys, $validatedValues);

        return new CustomerResource(Customer::create($requestValidated));
    }

    public function show(Request $request, Customer $customer)
    {
        $includeInvoices = $request->query('includeInvoices');

        if ($includeInvoices) {
            return new CustomerResource($customer->loadMissing('invoices'));
        }

        return new CustomerResource($customer);
    }


    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $validated = $request->safe()->all();

        return $customer->update([
            'name' => $validated['name'] ?? $customer->name,
            'type' => $validated['type'] ?? $customer->type,
            'email' => $validated['email'] ?? $customer->email,
            'address' => $validated['address'] ?? $customer->address,
            'city' => $validated['city'] ?? $customer->city,
            'state' => $validated['state'] ?? $customer->state,
            'postal_code' => $validated['postalCode'] ?? $customer->postal_code,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
