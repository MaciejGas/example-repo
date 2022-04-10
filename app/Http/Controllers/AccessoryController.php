<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accessory;
use App\Repositories\AccessoryRepository;

class AccessoryController extends Controller
{

    public function index()
    {
        $accesories = Accessory::get();

        return view('a_panel.accessories/accessories', ["accessories" => $accesories]);
    }

    public function update(AccessoryRepository $accessRepo, Request $request)
    {
        $request->validate([
            'new_amount'=> 'required',
        ]);

        $accessory = $accessRepo->find($request->input('item_id'));
        $accessory->amount = $request->input('new_amount');
        $accessory->save();

        return back()->with('success','Zaktualizowano!');
    }
}
