<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // READ: Display all contact messages
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);

        return view('admin.contacts', compact('contacts'));
    }

    // READ: Display the form to create a contact
    public function create()
    {
        return view('Pages.contactus');
    }

    // CREATE: Save a new contact
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'subject' => 'required|string|max:5000',
        ]);

        Contact::create($validated);

        return redirect()
            ->route('home')
            ->with('success', 'Contact created successfully!');
    }

    // READ: Display one contact
    public function show(Contact $contact)
    {
        return view('admin.singlecontact', compact('contact'));
    }

    // READ: Display the edit form
    public function edit(Contact $contact)
    {
        return view('admin.editcontact', compact('contact'));
    }

    // UPDATE: Save changes to an existing contact
    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'subject' => 'required|string|max:5000',

        ]);

        $contact->update($validated);

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Contact updated successfully!');
    }

    // DELETE: Remove a contact
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Contact deleted successfully!');
    }
}
