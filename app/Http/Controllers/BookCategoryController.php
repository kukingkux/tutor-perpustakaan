<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;

class BookCategoryController extends Controller
{
    public function index() {

        $category = BookCategory::all();

        return view('pages.book.index', compact('category'));
    }

    public function create()
    {
        return view('pages.book.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        BookCategory::create($data);

        return redirect()->route('buku.index');
    }

    public function edit($id)
    {
        $category = BookCategory::findOrFail($id);

        return view('pages.book.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = BookCategory::findOrFail($id);

        $data = $request->all();

        $category->update($data);

        SweetAlert::success('Success', 'Data berhasil diubah!');

        return redirect()->route('buku.index');
    }

    public function destroy($id)
    {
        $category = BookCategory::findOrFail($id);

        $category->delete();

        SweetAlert::success('Success', 'Data telah dihapus!');

        return redirect()->route('buku.index');
    }

}
