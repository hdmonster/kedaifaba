<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberStore;
use App\Http\Requests\MemberUpdate;
use Illuminate\Support\Facades\Storage;

use App\Models\Member;
use DB;

class AdminMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Anggota Tim';
        $members = Member::paginate(10);

        return view('admin.member.index',[
            'title' => $title,
            'members' => $members,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Anggota Tim';

        return view('admin.member.create',[
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberStore $request)
    {
        DB::beginTransaction();
        try {
            $member = Member::create([
                'name' => $request->name,
                'role' => $request->role,
            ]);

            if($request->hasFile('avatar_url')){
                $file = $request->file('avatar_url');
                $fileName = 'members/' . time() . '_' .$member->name . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/' , $fileName);
                // dd($file);
                $member->update([
                    'avatar_url' => $fileName
                ]);
            }
            DB::commit();
            return redirect()->back()->with('success', 'Data berhasil ditambahkan!');

        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Data gagal ditambahkan! Silahkan coba lagi atau hubungi developer untuk perbaikan!');
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $title = 'Edit - ' . $member->name;

        return view('admin.member.edit',[
            'title' => $title,
            'member' => $member,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberUpdate $request, Member $member)
    {
        DB::beginTransaction();
        try {
            $member->update([
                'name' => $request->name,
                'role' => $request->role,
            ]);

            if($request->hasFile('avatar_url')){
                $file = $request->file('avatar_url');
                $fileName = 'members/' . time() . '_' .$member->name . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/' , $fileName);
                // dd($file);
                $member->update([
                    'avatar_url' => $fileName
                ]);
            }
            DB::commit();
            return redirect()->back()->with('success', 'Data berhasil diperbarui!');

        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Data gagal diperbarui! Silahkan coba lagi atau hubungi developer untuk perbaikan!' . $th->getMessage());
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
