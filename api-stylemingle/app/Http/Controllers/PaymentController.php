<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use Mockery\Generator\StringManipulation\Pass\Pass;

use function PHPUnit\Framework\returnSelf;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Payment::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        $request->validate([
            'payment_method_id' => 'required|exists:payment_methods,id',
            'email' => $this->getPaymentValidationRule($request->input('email')),
            'password' => $this->getPaymentValidationRule($request->input('password')),
            'card_number' => $this->getPaymentValidationRule($request->input('card_number')),
            'name_on_card' => $this->getPaymentValidationRule($request->input('name_on_card')),
            'expiry_month' => $this->getPaymentValidationRule($request->input('expiry_month')),
            'expiry_year' => $this->getPaymentValidationRule($request->input('expiry_year')),
            'cvc' => $this->getPaymentValidationRule($request->input('cvc')),
            'cvv' => $this->getPaymentValidationRule($request->input('cvv')),
            'cid' => $this->getPaymentValidationRule($request->input('cid')),
            'amount' => $request->input('amount'),
        ]);


        $payment = Payment::create([
            'payment_method_id' => $request->input('payment_method_id'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'card_number' => $request->input('card_number'),
            'name_on_card' => $request->input('name_on_card'),
            'expiry_month' => $request->input('expiry_month'),
            'expiry_month' => $request->input('expiry_month'),
            'cvc' => $request->input('cvc'),
            'cvc' => $request->input('cvv'),
            'cid' => $request->input('cid'),
            'amount' => $request->input('amount')
        ]);

        return response()->json(['message' => 'Payment created successfully', 'payment' => $payment], 201);
    }

    private function getPaymentValidationRule($paymentMethodId) {
        switch ($paymentMethodId) {
            //id=1 Visa
            case 1: 
                return [
                    'email' => 'nullable|email',
                    'password' => 'nullable',
                    'card_number' => 'required|numeric|digits:16',
                    'name_on_card' => 'required|string',
                    'expiry_month' => 'required',
                    'cvc' => 'nullable|numeric|digits:3',
                    'cvv' => 'required|numeric|digits:3',
                    'cid' => 'nullable|numeric|digits:3',
                ];
            //id=2 MasterCard
            case 2:
                return [
                    'email' => 'nullable|email',
                    'password' => 'nullable',
                    'card_number' => 'required|numeric|digits:16',
                    'name_on_card' => 'required|string',
                    'expiry_date' => 'required|date_format:m/Y',
                    'cvc' => 'required|numeric|digits:3',
                    'cvv' => 'nullable|numeric|digits:3',
                    'cid' => 'nullable|numeric|digits:3',
                ];
            //id=3 American Express
            case 3:
                return [
                    'email' => 'nullable|email',
                    'password' => 'nullable',
                    'card_number' => 'required|numeric|digits:15',
                    'name_on_card' => 'required|string',
                    'expiry_date' => 'required|date_format:m/Y',
                    'cvc' => 'nullable|numeric|digits:3',
                    'cvv' => 'nullable|numeric|digits:3',
                    'cid' => 'required|numeric|digits:3',
                ];
            //id=4 PayPal
            case 4:
                return [
                    'email' => 'required|email',
                    'password' => 'required',
                    'card_number' => 'nullable|numeric|digits:15',
                    'name_on_card' => 'nullable|string',
                    'expiry_date' => 'nullable|date_format:m/Y',
                    'cvc' => 'nullable|numeric|digits:3',
                    'cvv' => 'nullable|numeric|digits:3',
                    'cid' => 'nullable|numeric|digits:3',
                ];
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        return Payment::find($payment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        $payment = Payment::find($payment);
        $payment->update($request->all());

        return $payment;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        return Payment::destroy($payment);
    }

}
