<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // public function checkout() 
    // {
    //     $requestParams = array(
    //         'command' => 'AUTHORIZATION',
    //         'access_code' => 'zx0IPmPy5jp1vAz8Kpg7',
    //         'merchant_identifier' => 'CycHZxVj',
    //         'merchant_reference' => 'XYZ9239-yu898',
    //         'amount' => '10000',
    //         'currency' => 'AED',
    //         'language' => 'en',
    //         'customer_email' => 'test@payfort.com',
    //         'signature' => '7cad05f0212ed933c9a5d5dffa31661acf2c827a',
    //         'order_description' => 'iPhone 6-S'
    //         );
            
    // }
    public function checkout()
    {
        // $shaString = '';
        // $url = 'https://sbpaymentservices.payfort.com/FortAPI/paymentPage';

        // $arrData = array(
        //     'command' => 'AUTHORIZATION',
        //     'access_code' => 'J7me6FtwEQe1MUDJmmW2',
        //     'merchant_identifier' => 'NCrNhFkS',
        //     'merchant_reference' => 'XYZ9239-yu898',
        //     'amount' => '10000',
        //     'currency' => 'USD',
        //     'language' => 'en',
        //     'customer_email' => 'test@payfaaort.com',
        //     'order_description' => 'iPhone 6-S',
        // );

        // ksort($arrData);
        // foreach ($arrData as $key => $value) {
        //     $shaString .= "$key=$value";
        // }

        // $shaString = '12ORbv8Gs0TIMlBtDWlLBw@[' . $shaString . '12ORbv8Gs0TIMlBtDWlLBw@[';
        // $signalture = hash("sha256", $shaString);

        // $arrData['signature'] = $signalture;

        // $ch = curl_init($url);
        // $data = json_encode($arrData);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 

        // $result = curl_exec($ch);
        // curl_close($ch);
        // echo "<pre>$result</pre>";
        return view('payment');
    }
}
