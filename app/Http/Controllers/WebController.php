<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Content;
use App\Repositories\ContentRepository;

class WebController extends Controller
{
    public function index()
    {
        $content = Content::get();

        return view('web', ['Content' => $content]);
    }

    public function update(ContentRepository $contentRepo, Request $request)
    {
        $request->validate([
            'content'=> 'required',
        ]);

        $content = $contentRepo->find($request->input('item_id'));
        $content->content = $request->input('content');
        $content->save();

        return back()->with('success','Content zaktualizowany!');
    }

}

