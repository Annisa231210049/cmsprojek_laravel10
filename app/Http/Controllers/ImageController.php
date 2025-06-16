<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    // Fungsi untuk menampilkan form upload
    public function create()
    {
        return view('upload');
    }

    // Fungsi untuk menyimpan gambar
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $image = Image::create([
            'title' => $request->title,
            'image_path' => $imagePath,
        ]);

        return view('upload', ['image' => $image])->with('success', 'Gambar berhasil diupload');
    }

    // Fungsi untuk menghapus gambar
    public function destroy($id)
    {
        $image = Image::find($id);
        
        if ($image) {
            // Hapus file gambar dari storage
            Storage::delete('public/' . $image->image_path);
            
            // Hapus record dari database
            $image->delete();
            
            return redirect()->back()->with('success', 'Gambar berhasil dihapus');
        }
        
        return redirect()->back()->with('error', 'Gambar tidak ditemukan');
    }
}
