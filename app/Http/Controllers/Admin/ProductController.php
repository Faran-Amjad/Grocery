<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();
        return view('admin.product.list', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=Category::all();
        return view('admin.product.add', ['cat'=>$cat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data=Product::create([

            'name'=>$r->name,
            'category_id'=>$r->category,
            'detail'=>$r->detail,
            'price'=>$r->price,
            'image'=>($r->image)? $this->upload($r->image): null,
            'image_1'=>($r->image_1)? $this->upload($r->image_1): null,
            'image_2'=>($r->image_2)? $this->upload($r->image_2): null,
            'status'=>$r->status??1
        ]);
        return redirect()->back()->with('success', 'Product Created!');
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
    public function edit($id)
    {
        $cat=Category::all();
        $data=Product::find($id);
        return view('admin.product.update', ['data'=>$data, 'cat'=>$cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $data=Product::find($id);
        $data->name=$r->name??$data->name;
        $data->category_id=$r->category??$data->category_id;
        $data->price=$r->price??$data->price;
        $data->detail=$r->detail??$data->detail;
        $data->image=($r->image)? $this->upload($r->image): $data->image;
        $data->image_1=($r->image_1)? $this->upload($r->image_1): $data->image_1;
        $data->image_2=($r->image_2)? $this->upload($r->image_2): $data->image_2;
        $data->status=$r->status??$data->status;
        $data->save();
        return redirect()->route('admin.product.index')->with('success', 'Product Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully!');
    }

    public function upload($image, $path="public/images")
    {
        if($image){
            $file = $image;
            $name =  uniqid().".".$file->getClientOriginalExtension();
            $file->move($path, $name);
            return $name;
        }else{
            return null;
        }
    }
}
