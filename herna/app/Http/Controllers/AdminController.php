<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $records = Record::all();
        return view('admin.index', compact('records'));
    }

    public function records()
    {
        $records = Record::all();
        return view('admin.records', compact('records'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
        ]);

        Record::create($validated);
        return redirect()->route('admin.records')->with('success', 'Добавлено');
    }

    public function edit($id)
    {
        $record = Record::findOrFail($id);
        return view('admin.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $record = Record::findOrFail($id);
        $record->update($request->all());
        return redirect()->route('admin.records')->with('success', 'Обновлено');
    }

    public function destroy($id)
    {
        Record::destroy($id);
        return redirect()->route('admin.records')->with('success', 'Удалено');
    }
}