<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialStore;
use App\Http\Requests\TestimonialUpdate;
use DB;

class AdminTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Testimonial';
        $testimonials = Testimonial::paginate(10);

        return view('admin.testimonial.index',[
            'title' => $title,
            'testimonials' => $testimonials,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Testimoni';

        return view('admin.testimonial.create',[
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialStore $request)
    {
        DB::beginTransaction();
        try {
            $testimonial = Testimonial::create([
                'name' => $request->name,
                'message' => $request->message,
                'role' => $request->role,
            ]);
    
            if($request->hasFile('avatar_url')){
                $file = $request->file('avatar_url');
                $fileName = 'testimonials/' . time() . '_' .$testimonial->name . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/' , $fileName);
                // dd($file);
                $testimonial->update([
                    'avatar_url' => $fileName
                ]);
            }
            DB::commit();
            return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
            
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Data gagal ditambahkan! Silahkan coba lagi atau hubungi developer untuk perbaikan!' . $th->getMessage());
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
    public function edit(Testimonial $testimonial)
    {
        $title = 'Edit - ' . $testimonial->name;

        return view('admin.testimonial.edit',[
            'title' => $title,
            'testimonial' => $testimonial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialUpdate $request, Testimonial $testimonial)
    {
        DB::beginTransaction();
        try {
            $testimonial->update([
                'name' => $request->name,
                'message' => $request->message,
                'role' => $request->role,
            ]);
    
            if($request->hasFile('avatar_url')){
                $file = $request->file('avatar_url');
                $fileName = 'testimonials/' . time() . '_' .$testimonial->name . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/' , $fileName);
                // dd($file);
                $testimonial->update([
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
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
