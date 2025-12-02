<?php

namespace App\Http\Controllers;

use App\Models\Earnings;
use Illuminate\Http\Request;

class EarningsController extends Controller
{
    
    public function index()
    {
        $ganhos = Earnings::where('user_id', auth()->id())
                        ->orderBy('data', 'desc')
                        ->get();

        return view('earnings.index', compact('ganhos'));
    }

    public function create()
    {
        $categories = Category::where('user_id', auth()->id())
                          ->where('type', 'earning')
                          ->get();

    return view('earnings.create', compact('categories'));
    }


  public function store(Request $request)
{
    $request->validate([
        'descricao' => 'required|string',
        'valor' => 'required|numeric',
        'data' => 'required|date',
        'category_id' => 'required|exists:categories,id',
    ]);

    Earnings::create([
        'descricao' => $request->descricao,
        'valor' => $request->valor,
        'data' => $request->data,
        'user_id' => auth()->id(),
        'category_id' => $request->category_id,
    ]);

    return redirect()->route('earnings.index')->with('success', 'Ganho registrado!');
}

    public function edit($id)
    {
    $earning = Earnings::where('user_id', auth()->id())->findOrFail($id);

    return view('earnings.edit', compact('earning'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required|string',
            'valor' => 'required|numeric',
            'data' => 'required|date',
        ]);

        $earning = Earnings::where('user_id', auth()->id())->findOrFail($id);

        $earning->update([
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'data' => $request->data,
        ]);

        return redirect()->route('earnings.index')->with('success', 'Ganho atualizado!');
    }
        public function category() {
        return $this->belongsTo(Category::class);
    }
}
