<?php

namespace App\Http\Controllers;

use App\Http\Requests\product\StoreProductPost;
use App\Mail\EmailCreationProduct;
use App\Models\dashboard\category\Category;
use App\Models\dashboard\product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::join('category', 'product.id_category', '=', 'category.id')
            ->select('product.*', 'category.name_category')
            ->orderBy('id', 'desc')
            ->paginate(3);

        //dd($products);
        return view('dashboard.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorys = Category::orderBy('id', 'desc')
            ->get();
        return view('dashboard.product.create', ['categorys' => $categorys]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPost $request)
    {

        $email = new EmailCreationProduct;
        Mail::to('pakito.pax@gmail.com')->bcc('francisco.izqpax@gmail.com')->send($email);
        $validated = $request->validated();
        Product::create($validated);
        return back()->with('status', 'Se creo exitosamente!!');
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
        $product = Product::findOrFail($id)->join('category', 'product.id_category', '=', 'category.id')->select('product.*', 'category.name_category')
            ->where('product.id', '=', $id)->get();;

        //dd($product);
        //dd($product->namecategory);
        return response()->json($product);
        //$comment = Product::find(1);

        //return $comment->post->category->name_category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categorys = Category::orderBy('id', 'desc')
            ->get();
        //return response()->json($product);        
        return view('dashboard.product.edit', ['product' => $product, 'categorys' => $categorys]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductPost $request, Product $product)
    {
        $validated = $request->validated();
        $product->update($validated);
        return back()->with('status', 'Se actualizo exitosamente!!');
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
        return back()->with('status', 'Se elimino con exito');
    }
}
