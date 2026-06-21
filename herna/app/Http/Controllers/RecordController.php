<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::latest()->take(4)->get();
        return view('home', compact('records'));
    }

    public function dashboard()
    {
        $records = Record::where('user_id', auth()->id())->get();
        return view('dashboard', compact('records'));
    }

    // Показать форму создания записи (для клиента)
    public function create()
    {
        return view('records.create');
    }

    // Сохранить запись от клиента
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
        ]);

        Record::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'date' => $validated['date'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Запись создана');
    }
}