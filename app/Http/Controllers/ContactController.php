<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return response()->json([
            'status' => 200,
            'contacts' => $contacts,
            'message' => 'Contacts retrieved successfully.',
        ]);
    }
}
