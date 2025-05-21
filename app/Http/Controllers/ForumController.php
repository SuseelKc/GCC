<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        return view('forums.index');
    }

    public function create()
    {
        return view('forums.create');
    }

    public function store(Request $request)
    {
        // TODO: Implement forum post creation
        return redirect()->route('forums.index');
    }

    public function show($id)
    {
        return view('forums.show', ['forum' => $id]);
    }

    public function edit($id)
    {
        return view('forums.edit', ['forum' => $id]);
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement forum post update
        return redirect()->route('forums.show', $id);
    }

    public function destroy($id)
    {
        // TODO: Implement forum post deletion
        return redirect()->route('forums.index');
    }
} 