<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
//use App\Http\Controllers\File;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function tambah() {
        return view('admin.tambah');
    }

    public function postTambahAdmin(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'jenisKelamin' => 'required',
            'password' => 'required|min:8|max:20|confirmed'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = 'admin';
        $user->jenis_kelamin = $request->jenisKelamin;
        $user->password = Hash::make($request->password);

        $user->save();

        if($user){
            return back()->with('success', 'Admin baru telah berhasil ditambah!');
        } else {
            return back()->with('failed', 'Maaf, Admin baru gagal di tambah:(');
        }
    }

    public function editAdmin($id){
        $data = User::find($id);
        
        return view('admin.edit', compact('data'));
    }

    public function postEditAdmin(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'jenisKelamin' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->jenis_kelamin = $request->jenisKelamin;

        $user->save();

        if($user){
            return back()->with('success', 'Data Admin berhasil di update!');
        } else {
            return back()->with('failed', 'Maaf, data Admin gagal di update:(');
        }
    }

    public function deleteAdmin($id){
        $data = User::find($id);

        $data->delete();

        if($data){
            return back()->with('success', 'Data berhasil di hapus!');
        } else {
            return back()->with('failed', 'Maaf, data gagal di hapus:(');
        }
    }

    public function adminBuku(Request $request){
        $search = $request->input('search');

        $data = Buku::where(function($query) use ($search) {
            $query->where('judul_buku', 'LIKE', '%' .$search. '%');
        })->paginate(5);

        return view('admin.buku', compact('data'));
    }

    public function tambahBuku(){
        return view('admin.tambahBuku');
    }

    public function postTambahBuku(Request $request){
        $request->validate([
            'kodeBuku' => 'required',
            'judulBuku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunTerbit' => 'required|date',
            'gambar' => 'required|image|max:5120',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);

        $bukus = new Buku;
        $bukus->kode_buku = $request->kodeBuku;
        $bukus->judul_buku = $request->judulBuku;
        $bukus->penulis = $request->penulis;
        $bukus->penerbit = $request->penerbit;
        $bukus->tahun_terbit = $request->tahunTerbit;
        $bukus->deskripsi = $request->deskripsi;
        $bukus->kategori = $request->kategori;
        
        if($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().','.$extension;
            $file->move('image/', $filename);
            $bukus->gambar = $filename;
        }

        $bukus->save();

        if($bukus) {
            return back()->with('success', 'Buku baru berhasil ditambahkan');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }
    }
    
    public function editBuku($id) {
        $data = Buku::find($id);
        $kategori = ["Programmer", "Sains", "Komik"];
        return view('admin.editBuku', ['data' => $data, 'kategori' => $kategori]);
    }

    public function postEditBuku(Request $request, $id) {
        $request->validate([
            'kodeBuku' => 'required',
            'judulBuku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunTerbit' => 'required|date',
            'gambar' => 'required|image|max:5120',
            'deskripsi' => 'required',
            'kategori' => 'required'
        ]);

        $bukus = Buku::find($id);
        $bukus->kode_buku = $request->kodeBuku;
        $bukus->judul_buku = $request->judulBuku;
        $bukus->penulis = $request->penulis;
        $bukus->penerbit = $request->penerbit;
        $bukus->tahun_terbit = $request->tahunTerbit;
        $bukus->deskripsi = $request->deskripsi;
        $bukus->kategori = $request->kategori;

        if($request->hasFile('gambar')) {
            $filepath = '/images' . $bukus->gambar;
            if(File::exists($filepath)) {
                File::delete($filepath);
            }
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/', $filename);
            $bukus->gambar = $filename;
        }

        $bukus->save();

        if($bukus) {
            return back()->with('success', 'Buku berhasil di update!');
        } else {
            return back()->with('failed', 'Buku gagal di update!');
        }
    }

    public function deleteBuku($id) {
        $bukus = Buku::find($id);
        $filepath = '/images'.$bukus->gambar;

        if(File::exists($filepath)) {
            File::delete($filepath);
        }

        $bukus->delete();

        if($bukus){
            return back()->with('success', 'Data buku berhasil di hapus!');
        } else {
            return back()->with('failed', 'Data buku gagal di hapus!');
        }
    }

    //Peminjaman
    public function adminPinjam(Request $request){
        $search = $request->input('search');

        $data = Peminjaman::where(function($query) use ($search) {
            $query->where('id_user', 'LIKE', '%' .$search. '%');
        })->paginate(5);

        return view('admin.pinjam', compact('data'));
    }

    public function tambahPinjam(){
        return view('admin.tambahPinjam');
    }

    public function postTambahPinjam(Request $request){
        $request->validate([
            'tanggalPinjam' => 'required|date',
            'tanggalKembali' => 'required|date',
            'kodeBuku' => 'required|int',
            'idUser' => 'required',
        ]);

        $peminjamen = new Peminjaman;
        $peminjamen->tanggal_pinjam = $request->tanggalPinjam;
        $peminjamen->tanggal_kembali = $request->tanggalKembali;
        $peminjamen->id_buku = $request->kodeBuku;
        $peminjamen->id_user = $request->idUser;
        $peminjamen->status = 'Belum Dikembalikan';
        
        $peminjamen->save();

        if($peminjamen) {
            return back()->with('success', 'Peminjaman berhasil ditambahkan');
        } else {
            return back()->with('failed', 'Peminjaman gagal ditambahkan!');
        }
    }
    
    public function editPinjam($id) {
        $data = Peminjaman::find($id);

        return view('admin.editPinjam', compact('data'));
    }

    public function postEditPinjam(Request $request, $id) {
        $request->validate([
            'tanggalPinjam' => 'required',
            'tanggalKembali' => 'required',
            'kodeBuku' => 'required|int',
            'idUser' => 'required',
            'status' => 'required' 
        ]);

        $peminjamen = Peminjaman::find($id);
        $peminjamen->tanggal_pinjam = $request->tanggalPinjam;
        $peminjamen->tanggal_kembali = $request->tanggalKembali;
        $peminjamen->id_buku = $request->kodeBuku;
        $peminjamen->id_user = $request->idUser;
        $peminjamen->status = $request->status;

        $peminjamen->save();

        if($peminjamen) {
            return back()->with('success', 'Peminjaman berhasil di update!');
        } else {
            return back()->with('failed', 'Peminjaman gagal di update!');
        }
    }

    public function deletePinjam($id) { 
        $data = Peminjaman::find($id); 
        
        $data->delete(); 
        
        if($data) { 
            return back()->with('success', 'Data peminjaman berhasil di hapus!'); 
        } else { 
            return back()->with('failed', 'Gagal menghapus data peminjaman!'); 
        } 
    }
    public function detailPeminjaman($id_peminjamen, $id_user, $id_buku) { 
        $detailPinjam = Peminjaman::select('peminjamen.*', 'bukus.*', 'users.*')
        ->join('bukus', 'peminjamen.id_buku', '=', 'bukus.id') 
        ->join('users', 'peminjamen.id_user', '=', 'users.id') 
        ->where('peminjamen.id', $id_peminjamen) 
        ->where('bukus.id', $id_buku) 
        ->where('users.id', $id_user) 
        ->first(); 
        
        if(!$detailPinjam) { 
            abort(404, 'Data tidak ditemukan');
        } 
        
        return view('admin.detail_peminjaman', compact('detail_peminjaman'));
    }
}
