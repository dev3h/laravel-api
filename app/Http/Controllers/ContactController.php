<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getAllContacts()
    {
        $contacts = Contact::all();
        return response()->json([
            'status' => 200,
            'contacts' => $contacts,
            'message' => 'Contacts retrieved successfully.',
        ]);
    }
    public function getContact($id)
    {
        $contact = Contact::find($id);

        return response()->json([
            'status' => 200,
            'contact' => $contact,
        ]);
    }
    public function storeContact(Request $request)
    {
        Contact::create($request->all());

        return response()->json([
            'status' => 200,
            'message' => 'Contact created successfully.',
        ]);
    }
    public function updateContact($id, Request $request)
    {
        $contact = Contact::find($id);
        $contact->update($request->all());

        return response()->json([
            'status' => 200,
            'message' => 'Contact updated successfully.',
        ]);
    }
    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Contact deleted successfully.',
            ]);
        } else {
            return response()->json([
                'message' => "Contact with id:$id doesn't exists",
            ]);
        }
    }
}
