<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AspirationController extends Controller
{
    /**
     * Constructor untuk memastikan user sudah login untuk tindakan tertentu
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Menampilkan semua aspirasi
     */
    public function index()
    {
        $aspirations = Aspiration::with('user')
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('aspirations.index', compact('aspirations'));
    }

    /**
     * Menyimpan aspirasi baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Aspiration::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
            'is_anonymous' => true, // Semua aspirasi dibuat anonim
        ]);

        return redirect()->route('aspirations.index')
            ->with('success', 'Aspirasi berhasil ditambahkan!');
    }

    /**
     * Menghapus aspirasi
     */
    public function destroy(Aspiration $aspiration)
    {
        // Cek apakah user yang login adalah pemilik aspirasi
        if (Auth::id() !== $aspiration->user_id) {
            return redirect()->route('aspirations.index')
                ->with('error', 'Anda tidak berhak menghapus aspirasi ini!');
        }

        $aspiration->delete();
        
        return redirect()->route('aspirations.index')
            ->with('success', 'Aspirasi berhasil dihapus!');
    }
}