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
        $left_content = Content::get()->where('name', 'left_section');
        $right_content = Content::get()->where('name', 'right_section');

        return view('web', ['Left' => $left_content, 'Right' => $right_content ]);
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

