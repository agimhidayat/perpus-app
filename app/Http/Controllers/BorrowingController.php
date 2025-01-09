<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('borrowings.index', [
            // 'borrowings' => Borrowing::latest()->filter(request(['search', 'category']))->paginate(6)->withQueryString()
            'books' => Book::latest()->filter(request(['search', 'category']))->paginate(6)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrowing $borrowing)
    {
        return view('borrowings.create', [
            'borrowing' => $borrowing
        ]);
    }

    public function pinjam($buku_id)
    {
        return view('borrowings.create', [
            'book' => Book::find($buku_id),
            'user' => User::find(Auth::user()->id),
        ]);
    }

    public function storeBorrowing(Request $request)
    {
        $validated = $request->validate([
            'book_id' => 'required',
            'borrow_date' => 'required',
            'return_date' => 'required',
        ]);

        $validated['user_id'] = Auth::user()->id;
        $validated['status'] = 'pinjam';

        Borrowing::create($validated);

        return redirect('/peminjaman')->with('success', 'Data berhasil ditambahkan');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrowing $borrowing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrowing $borrowing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrowing $borrowing)
    {
        //
    }
}