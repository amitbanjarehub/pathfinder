<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class WhatsAppOtpController extends Controller
{
    public function sendOtp(Request $request)
    {
        $request->validate([
            'mobile_no' => 'required|digits:10',
        ]);

        $otp = rand(100000, 999999);

        session([
            'register_otp' => $otp,
            'register_mobile' => $request->mobile_no,
            'register_otp_expiry' => now()->addMinutes(5),
        ]);

        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');

        $client = new Client($sid, $token);

        $client->messages->create(
            'whatsapp:+91'.$request->mobile_no,
            [
                'from' => env('TWILIO_WHATSAPP_FROM'),
                'body' => "Your OTP is: {$otp}",
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'OTP sent successfully',
        ]);
    }

    // public function verifyOtp(Request $request)
    // {
    //     $request->validate([
    //         'otp' => 'required'
    //     ]);

    //     if (
    //         session('register_otp') == $request->otp &&
    //         now()->lessThan(session('register_otp_expiry'))
    //     ) {

    //         session([
    //             'mobile_verified' => true
    //         ]);

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'OTP verified'
    //         ]);
    //     }

    //     return response()->json([
    //         'success' => false,
    //         'message' => 'Invalid OTP'
    //     ], 422);
    // }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required',
            'mobile_no' => 'required',
        ]);

        if (
            session('register_otp') == $request->otp &&
            session('register_mobile') == $request->mobile_no &&
            now()->lessThan(session('register_otp_expiry'))
        ) {

            session([
                'mobile_verified' => true,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'OTP verified',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid OTP',
        ], 422);
    }
}
