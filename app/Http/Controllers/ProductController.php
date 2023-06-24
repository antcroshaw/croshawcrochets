<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Commands\OrientateCommand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.products.index', [
            'products' =>  Product::orderBy('id','desc')->paginate(10)
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
    
        $request->validated();
       
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $this->storeImage($request),
            'price' => $request->price
        ]);

        return redirect('Products/')->with('message', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('auth.products.show', [

            'product' => Product::find($id),
           
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('auth.products.edit', [
            'product' => Product::where('id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request,$id)
    {
        $request->validated();
        $currentProduct = Product::where('id',$id)->first();
     
        //code for file checking
        if($request->image != ''){        
            $path = base_path().'/storage/app/public/images/';
  
            //code for remove old file
            if($currentProduct->image != ''  && $request->image != null && $currentProduct->image != 'default-image.jpg'){
                 $file_old = $path.$currentProduct->image;
                 unlink($file_old);
            }
  
            $filename = $this->storeImage($request);
            $currentProduct->update(['image' => $filename]);
       }

        
         
        Product::where('id',$id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect('Products/')->with('message', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        Product::findOrFail($id)->delete();

        return redirect('Products/')->with('message', 'Product has been deleted successfully');
    
    }

    private function storeImage($request){
        $user = auth()->user();
        if($request->image == '') {
            return $filename = 'default-image.jpg';
        }
        $filename = $user->id . '-' . uniqid() . '.jpg';
        $imgData = Image::make($request->file('image'))->orientate()->fit(400)->encode('jpg');
        Storage::put('public/images/' . $filename, $imgData); 
        return $filename;
    }
}
