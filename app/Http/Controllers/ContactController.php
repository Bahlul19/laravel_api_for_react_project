<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;

class ContactController extends Controller
{
    public function addContactForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $postContactForm = ContactModel::insert(
            [
                'name'=> $name,
                'email' => $email,
                'message' => $message
            ]
        );

        if($postContactForm == true)
        {
            return 1;
        }
        else 
        {
            return 0;
        }
    }
}
