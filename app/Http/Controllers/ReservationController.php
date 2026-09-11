<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ReservationController extends Controller
{
    public function create(): View
    {
        return view('pages.reserve');
    }

    public function store(StoreReservationRequest $request): RedirectResponse
    {
        Reservation::query()->create($request->validated());

        return to_route('reservations.create')->with('success', 'Your cozy table request is in! We will confirm it by email soon.');
    }
}
