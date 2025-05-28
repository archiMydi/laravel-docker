<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Public page: contact form
    public function create()
    {
        return view('pages.contact');
    }

    public function adminIndex()
    {
        return view('pages.admin.contacts-admin');
    }

    // Public page: submit the contact form
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        ContactRequest::create($validated);

        return redirect()->route('contact.create')->with('success', 'Message sent successfully.');
    }

    // Back-office: list of contact requests
    public function index()
    {
        $contacts = ContactRequest::latest()->get();
        return view('pages.admin.contacts-admin', compact('contacts'));
    }

    // Back-office: delete a contact request
    public function destroy(ContactRequest $contactRequest)
    {
        $contactRequest->delete();
        return redirect()->route('admin.contact-requests.index')->with('success', 'Contact request deleted successfully.');
    }
}
