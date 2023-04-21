<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes', [
            'notes' => $notes,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required|max:2000',
        ], [
            'title.required' => 'عنوان نمی تواند خالی باشد.',
            'body.required' => 'یادداشت نمی تواند خالی باشد.',
        ]);
        $note = Note::create([
            'title' => strip_tags($request->input('title')),
            'body' => strip_tags($request->input('body')),
        ]);
        return redirect()->route('home', [
            'note' => $note,
        ]);
    }

    public function create(Request $request)
    {
        return 'hello';
    }

    public function show()
    {
        # code...
    }

}
