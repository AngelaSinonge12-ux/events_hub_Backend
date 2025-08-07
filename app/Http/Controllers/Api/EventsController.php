<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $event = Events::all();
        return response()->json($event);
    }
    public function store(Request $request)
    {
        $event = Events::create($request->all());
        return response()->json($event, 201);
    }
    public function show(Events   $event)
    {
        return response()->json($event, 201);
    }
    public function update(Request $requests, Events $event)
    {
        $event->update($requests->all());
        return response()->json($event);
    }

    public function destroy(Events $event)
    {
        $event->delete();
        return response()->json(null, 204);
    }
}
