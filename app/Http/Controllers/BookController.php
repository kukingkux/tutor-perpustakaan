<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Exports\BookExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreBookRequest;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('pages.book.index', compact('books'));
    }

    public function create()
    {
        return view('pages.book.create');
    }

    public function store(StoreBookRequest $request)
    {
        $data = $request->all();
        $data['cover'] = $request->file('cover')->store('assets/book', 'public');

        Book::create($data);

        SweetAlert::success("Success", "Data berhasil ditambahkan!");

        return redirect()->route('buku.index');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        SweetAlert::success('Success', 'Data telah dihapus!');

        return redirect()->route('buku.index');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('pages.book.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('assets/book', 'public');
        } else {
            $data['cover'] = $book->cover;
        }

        $book->update($data);

        SweetAlert::success('Success', 'Data berhasil diubah!');

        return redirect()->route('buku.index');
    }

    public function export_excel()
	{
		return Excel::download(new BookExport, 'databuku.xlsx');
	}
}
