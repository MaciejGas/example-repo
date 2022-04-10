<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Repositories\EventRepository;
use Illuminate\Support\Facades\Hash;

class EventController extends Controller
{
    public function index(EventRepository $eventRepo)
    {
        $events = $eventRepo->getAll();

        return view('a_panel.plans.plans', ["plansList"=>$events]);
    }

    public function add()
    {
        return view('a_panel.plans.plans_add');
    }

    public function create(Request $request)
    {
        $request->validate([
            'width'=> 'required',
            'height'=> 'required',
            'place'=> 'required',
            'color'=> 'required',
            'description'=> 'nullable'
        ]);

        $client = new User;
        $client->name = $request->input('name');
        $client->surname = $request->input('surname');
        $client->email = $request->input('email');
        $client->password  = Hash::make($request->input('password'));
        $client->phone = $request->input('phone');
        $client->type = 'client';
        $client->status = 'active';

        $client->save();

        $event = new Event;
        $event->title = $request->input('title');
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->client_id = $client->id;
        $event->width = $request->input('width');
        $event->height = $request->input('height');
        $event->place = $request->input('place');
        $event->color = $request->input('color');
        $event->description = $request->input('description');

        $event->save();
        
        return back()->with('success','Dodano!');

    }


    public function edit(EventRepository $eventRepo, $id)
    {
        $event = $eventRepo->find($id);

        return view('a_panel.plans.plans_edit', ["event" => $event]);
    }

    public function update(EventRepository $eventRepo, Request $request)
    {
        $request->validate([
            'width'=> 'required',
            'height'=> 'required',
            'start'=> 'required',
            'end'=> 'required',
            'place'=> 'required',
            'color'=> 'required',
            'description'=> 'required'
        ]);

        $event = $eventRepo->find($request->input('id'));
        $event->title = $request->input('title');
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->client_id = $request->input('client_id');
        $event->width = $request->input('width');
        $event->height = $request->input('height');
        $event->place = $request->input('place');
        $event->color = $request->input('color');
        $event->description = $request->input('description');

        $event->save();

        return back()->with('success','Edytowano poprawnie');

    }

    public function delete(EventRepository $eventRepo, $id)
    {
        $event = $eventRepo->delete($id);

        return back()->with('success','Usunięto poprawnie');

    }

}
