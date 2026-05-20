<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index(Request $request)
    {
        $query = ContactMessage::latest();
        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }
        $messages = $query->paginate(20);
        $counts   = ContactMessage::selectRaw('status, count(*) as count')->groupBy('status')->pluck('count', 'status');
        return view('backend.contact.messages.index', compact('messages', 'counts'));
    }

    public function show(ContactMessage $contactMessage)
    {
        if ($contactMessage->isNew()) $contactMessage->markAsRead();
        return view('backend.contact.messages.show', compact('contactMessage'));
    }

    public function updateStatus(Request $request, ContactMessage $contactMessage)
    {
        $request->validate(['status' => 'required|in:new,read,replied,archived']);
        $contactMessage->update(['status' => $request->input('status')]);
        return redirect()->back()->with('success', 'Status updated.');
    }

    public function addNote(Request $request, ContactMessage $contactMessage)
    {
        $request->validate(['notes' => 'required|string']);
        $contactMessage->update(['notes' => $request->input('notes')]);
        return redirect()->back()->with('success', 'Note saved.');
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();
        return redirect()->route('admin.contact-messages.index')->with('success', 'Message deleted.');
    }

    // Public form submission (called from frontend)
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'         => 'required|string|max:100',
            'email'        => 'required|email|max:150',
            'phone'        => 'nullable|string|max:30',
            'company'      => 'nullable|string|max:150',
            'project_type' => 'nullable|string|max:100',
            'message'      => 'required|string|max:2000',
        ]);
        $data['ip_address'] = $request->ip();
        ContactMessage::create($data);

        return redirect()->back()->with('success', 'Thank you! We will contact you shortly.');
    }
}