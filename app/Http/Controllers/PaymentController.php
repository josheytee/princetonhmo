<?php


namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Inertia\Inertia;
use KingFlamez\Rave\Facades\Rave as Flutterwave;


class PaymentController extends Controller
{

    public function FlwCallbackVerifier()
    {
        $transactionID = Flutterwave::getTransactionIDFromCallback();
        $data = Flutterwave::verifyTransaction($transactionID);
        dd($data);


        // if (
        //     $response['data']['status'] === "successful"
        //     && $response['data']['amount'] === $expectedAmount
        //     && $response['data']['currency'] === $expectedCurrency) {
        //     // Success! Confirm the customer's payment
        // } else {
        //     // Inform the customer their payment was unsuccessful
        // }

        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the $data['data']['status'] is 'successful'
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
}
