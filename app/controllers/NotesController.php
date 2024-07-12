<?php

namespace App\Controllers;

use App\Models\Note;
use App\Helpers\ViewHelper;

class NotesController
{
    public function index()
    {
        $notes = Note::all();

        return ViewHelper::view('notes/index', [
            'notes' => $notes,
        ]);
    }

    public function create()
    {
        require 'app/views/notes/create.php';
    }

    public function store()
    {
        $data = [
            'user_id' => $_POST['user_id'],
            'category' => $_POST['category'],
            'access_types' => implode(',', $_POST['access_types']),
            'content' => $_POST['content']
        ];
        Note::create($data);
        header('Location: /notes');
    }

    public function show($id)
    {
        $note = Note::find($id);
        require 'app/views/notes/show.php';
    }
}
