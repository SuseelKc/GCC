<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        return view('resources.index');
    }

    public function create()
    {
        return view('resources.create');
    }

    public function store(Request $request)
    {
        // TODO: Implement resource creation
        return redirect()->route('resources.index');
    }

    public function show($id)
    {
        return view('resources.show', ['resource' => $id]);
    }

    public function edit($id)
    {
        return view('resources.edit', ['resource' => $id]);
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement resource update
        return redirect()->route('resources.show', $id);
    }

    public function destroy($id)
    {
        // TODO: Implement resource deletion
        return redirect()->route('resources.index');
    }
} 