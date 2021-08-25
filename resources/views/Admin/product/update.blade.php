@extends('layout.layout')
@section('content')
   
<div class="main-content container-fluid">
<section class="section">
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class='card-heading p-1 pl-3'>Update Product</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST" action="{{route('admin.product.update', [$data->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$data->name}}" placeholder="Enter name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-select" id="basicSelect" name="category" required>
                                        <option>Select Category</option>
                                        @foreach ($cat as $c)
                                        <option {{($data->category_id == $c->id)? 'selected' : ''}} value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail">{{$data->detail}}</textarea>
                                 </div>

                                 <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control" id="basicInput" value="{{$data->price}}" placeholder="Enter Price" name="price" required>
                                </div>

                                 <div class="form-group">
                                    <label>Image</label><br>
                                    <input type="file" name="image" id="customFile">
                                    <img src="{{asset('public/images/'.$data->image)}}" height="100" width="100"/>
                                </div>

                                <div class="form-group">
                                    <label>Image 1</label><br>
                                    <input type="file" name="image_1" id="customFile">
                                    <img src="{{asset('public/images/'.$data->image_1)}}" height="100" width="100"/>
                                </div>

                                <div class="form-group">
                                    <label>Image 2</label><br>
                                    <input type="file" name="image_2" id="customFile">
                                    <img src="{{asset('public/images/'.$data->image_2)}}" height="100" width="100"/>
                                </div>
                                
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-select" id="basicSelect" name="status" required>
                                        <option value="1">Active</option>
                                        <option value="0">In-Active</option>
            
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary round">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       
        </div>
    </div>
</div>
</section>
</div>

@endsection