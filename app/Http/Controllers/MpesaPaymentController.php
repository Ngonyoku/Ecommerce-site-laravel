<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Safaricom\Mpesa\Mpesa;

class MpesaPaymentController extends Controller
{
    //
    public static function stkPush() {
        $mpesa = new \Safaricom\Mpesa\Mpesa();

        $BusinessShortCode = "6279730";
        $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
            $TransactionType = "CustomerPayBillOnline";
        $Amount = "1";
        $PartyA = "254707670113";
        $PartyB = "6279730";
        $PhoneNumber = "254707670113";
        $CallBackURL = "https://ngonyoku.com/mpesa/config";
        $AccountReference = "AccountReference";
        $TransactionDesc = "TransactionDesc";
        $Remarks = "Remarks";

        $stkPushSimulation = $mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType, 
            $Amount, 
            $PartyA, 
            $PartyB, 
            $PhoneNumber, 
            $CallBackURL, 
            $AccountReference, 
            $TransactionDesc, 
            $Remarks
        );

        dd($stkPushSimulation);
    }

    //Todo: Implement C2B 
    public static function c2b() {

    }
}
