<?php

namespace App\Http\Controllers;

use App\Models\CrewRegistration;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    public function index()
    {
        return view('teams.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'nim' => 'required|string|max:50',
            'major' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'whatsapp' => 'required|string|max:50',
            'division_interest' => 'required|string',
            'reason' => 'required|string',
        ]);

        CrewRegistration::create($validated);

        return redirect()->back()->with('success', 'Terima kasih! Pendaftaran Crew BLTV Anda berhasil dikirim. Tim kami akan menghubungi Anda melalui WhatsApp/Email.');
    }
}
