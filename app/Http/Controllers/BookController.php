<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        $data = Book::all();
        return view('home',compact('data'));

    }
    public function tambahBook(){
        return view('tambahBook');
    }

    public function insertdata(Request $request){
        $data = Book::create($request->all());
        return redirect()->route('buku')->with('success', 'Data Buku Berhasil Di Tambahkan');
    }

    public function tampildatabuku($id){
        $data = Book::find($id);
        return view('tampildatabuku', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Book::find($id);
        $data ->update($request->all());
        return redirect()->route('buku')->with('success', 'Data Buku Berhasil Di Update');
    }

    public function deletedata($id){
        $data = Book::find($id);
        $data -> delete();
        return redirect()->route('buku')->with('success', 'Data Buku Berhasil Di Hapus');
    }
}
