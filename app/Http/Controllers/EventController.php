<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $events = [
        [
            'id' => 1,
            'title' => 'Seminar Teknologi AI',
            'date' => '2026-10-15',
            'location' => 'Aula Gedung A'
        ],
        [
            'id' => 2,
            'title' => 'Workshop UI/UX Design',
            'date' => '2026-10-22',
            'location' => 'Lab Komputer 2'
        ],
        [
            'id' => 3,
            'title' => 'Lomba Hackathon Kampus',
            'date' => '2026-11-05',
            'location' => 'Auditorium Utama'
        ],
    ];

    return view('events.index', compact('events'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
