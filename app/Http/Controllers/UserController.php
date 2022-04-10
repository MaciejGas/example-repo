<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(UserRepository $userRepo)
    {
        $clients = $userRepo->get_all_active_clients();
        $all_clients = count($userRepo->all_clients());
        $week_clients = count($userRepo->client_last_week());
        $month_clients = count($userRepo->client_last_month());

        return view('a_panel.clients/clients', ["clientsList"=>$clients ,
                                                "allClients"=>$all_clients , 
                                                "weekClients"=>$week_clients ,
                                                "monthClients"=>$month_clients]);     
    }

    public function edit_single(UserRepository $userRepo, $id)
    {
        $client = $userRepo->find($id);

        return view('a_panel.clients/clients_edit', ["client"=>$client]);
    }

    public function edit(UserRepository $userRepo, Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'surname'=> 'required',
            'email'=>'required',
            'phone'=>'required',
        ]);

        $client = $userRepo->find($request->input('id'));
        $client->name = $request->input('name');
        $client->surname = $request->input('surname');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        
        $client->save();

        return back()->with('success','Edytowano poprawnie');

    }

    public function archive(UserRepository $userRepo, $id)
    {
        $client = $userRepo->find($id);
        $client->status = 'archive';

        $client->save();

        return back()->with('warning','Klient zarchiwizowany');
    }
}
