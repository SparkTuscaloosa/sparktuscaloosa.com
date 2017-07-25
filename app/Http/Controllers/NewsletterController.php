<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SendPulse;

class NewsletterController extends Controller
{
    private $sendPulseBookID = 1135210;

    public function signup(Request $request) {

        $this->validate($request, [
                'email' => 'required|email'
            ]
        );

        $data = [$request->email];
        $response = SendPulse::addEmails($this->sendPulseBookID, $data);
        return redirect()->route('home')
            ->with('success',
             'You have been added to the mailing list!');
    }
}
