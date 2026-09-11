<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('pages.contact');
    }

    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        ContactMessage::query()->create($request->validated());

        return to_route('contact.create')->with('success', 'Thanks for reaching out. The Neko Wave team will be in touch soon.');
    }
}
