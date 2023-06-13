<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class DaftarAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.member.daftar_anggota', [
            'members' => $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validasi form input
        $validated = $request->validate([
            'name' => 'required|min:5|max:25',
            'email' => 'required|email',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required|min:5|max:25',
            'address' => 'required|min:5|max:25',
        ]);

        //Mengirim Data Ke Model
        Member::create($validated);
        return redirect('/member/daftar_anggota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Mencari Data Berdasarkan ID
        $member = Member::find($id);
        return view('admin.member.show', [
            'member' => $member
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Mencari Data Berdasarkan ID
        $member = Member::find($id);
        return view('admin.member.edit', [
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Mencari Data Berdasarkan ID
        $member = Member::find($id);

        //Validasi form input
        $validated = $request->validate([
            'name' => 'required|min:5|max:25',
            'email' => 'required|email',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required|min:5|max:25',
            'address' => 'required|min:5|max:25',
        ]);

         //Update Data
        $member->update($validated);
        return redirect('/member/daftar_anggota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Mencari Data Berdasarkan ID
        $member = Member::find($id);
        $member->delete();
        return redirect('/member/daftar_anggota');
    
    }
}
