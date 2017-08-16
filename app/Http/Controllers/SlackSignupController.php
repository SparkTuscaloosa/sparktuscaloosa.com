<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlackSignupController extends Controller
{
    public function signup(Request $request) {

        $this->validate($request, [
                'email' => 'required|email'
            ]
        );

        $url = 'https://sparktuscaloosa.slack.com/api/users.admin.invite';
        $myvars = 'email='.$request->email.'&token=xoxp-3880484383-226602205045-226670521380-c5e88994f6f7bfa831726066590c7970';

        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($response,true);

        if($data['ok']) {
          return redirect()->route('home')
              ->with('success',
               'You have been invited to the channel!');
        } else {
          return redirect()->route('home')
              ->with('danger',
               'There was an issue with your invite. Please Try Again.');
        }


    }
}
