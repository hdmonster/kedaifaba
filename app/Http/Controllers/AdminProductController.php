<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductStore;
use App\Http\Requests\ProductUpdate;

use DB;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Produk';
        $products = Product::paginate(10);

        return view('admin.product.index',[
            'title' => $title,
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Produk';

        return view('admin.product.create',[
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStore $request)
    {
        DB::beginTransaction();
        try {
            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'product_url' => $request->product_url,
            ]);
    
            if($request->hasFile('img_url')){
                $file = $request->file('img_url');
                $fileName = 'products/' . time() . '_' .$product->name . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/' , $fileName);
                // dd($file);
                $product->update([
                    'img_url' => $fileName
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
    public function edit(Product $product)
    {
        $title = 'Edit Produk';

        return view('admin.product.edit',[
            'title' => $title,
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdate $request, Product $product)
    {
        DB::beginTransaction();
        try {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'product_url' => $request->product_url,
            ]);
            
    
            if($request->hasFile('img_url')){
                $file = $request->file('img_url');
                $fileName = 'products/' . time() . '_' .$product->name . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/' , $fileName);
                // dd($file);
                $product->update([
                    'img_url' => $fileName
                ]);
            }
            DB::commit();
            return redirect()->back()->with('success', 'Data berhasil diperbarui!');
            
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Data gagal diperbarui! Silahkan coba lagi atau hubungi developer untuk perbaikan!');
            //throw $th;
        }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');

    }
}
