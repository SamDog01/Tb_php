<?php
namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index()
    {
        $expenses = Expenses::where('user_id', auth()->id())
                            ->orderBy('date', 'desc')
                            ->get();

        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Expenses::create([
            'description' => $request->description,
            'amount' => $request->amount,
            'date' => $request->date,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('expenses.index')->with('success', 'Expense created!');
    }

    public function edit($id)
    {
        $expense = Expenses::where('user_id', auth()->id())->findOrFail($id);

        return view('expenses.edit', compact('expense'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $expense = Expenses::where('user_id', auth()->id())->findOrFail($id);

        $expense->update([
            'description' => $request->description,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);

        return redirect()->route('expenses.index')->with('success', 'Expense updated!');
    }
        public function category() {
        return $this->belongsTo(Category::class);
        }

}
