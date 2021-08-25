@php
    $p = Route::currentRouteName();
    $user = Auth::guard('admin')->user();
    $url = URL::current();
@endphp
@extends('layout.layout')
@section('content')
<div class="main-content container-fluid">
<section class="section">
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                            <h3>Category List</h3>
                            <div class="btn">
                                <a class="btn btn-primary pull-right" href="{{route('admin.category.create')}}" style="margin-left: 780px; margin-bottom:18px;">Add New</a>
                                </div>

                            <table class="table table-striped data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th width="100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cat as $i)
                                        <tr>
                                            <td>{{ $i->id }}</td>
                                            <td>{{ $i->name }}</td>
                                            
                                            <td>
                                                @if($i->status =='1')         
                                                <span class="badge bg-success">Active</span>         
                                                @else
                                                <span class="badge bg-danger">Inactive</span>  
                                                @endif  
                                                </td>
                                            <td>
                                
                                                <a  href="{{URL::to('')}}/admin/category/{{$i->id}}/edit"><i data-feather="edit" width="20"></i></a>
                                                <a onclick="return confirm('Are you sure?')" href="{{route('admin.category.delete', [$i->id])}}"><i data-feather="trash-2" width="20"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                       
                    </body>
                       
                    <script>
                        $(document).ready(function(){
                            $('.table').DataTable({
                                'info': true,
                                'ordering': true,
                                'searching': true,
                                'select': true,
                                
                            });
                        });
                    </script>
                        </html>
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