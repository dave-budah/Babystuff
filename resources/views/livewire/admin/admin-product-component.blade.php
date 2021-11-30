<div>
    <style>
        nav svg {
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        nav p {
            margin-top: 20px !important;
            margin-bottom: 20px !important;
        }
        .fa {
            font-size: 2rem;
        }
        .fa-edit {
            margin-right: 1rem;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                               <strong>All products</strong>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addproduct')}}" class="btn btn-success text-uppercase pull-right">New product</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Availability</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->$product}}</td>
                                    <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" alt="{{$product->name}}" width="60" height="60"></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->stock_status}}</td>
                                    <td>{{$product->regular_price}}</td>
                                    <td>{{$product->sale_price}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{Carbon\Carbon::parse($product->created_at)->format('F d, Y')}}</td>
                                    <td>
                                        <a href="{{route('admin.editproduct', ['product_slug'=>$product->slug])}}"><i class="fa fa-edit text-info"></i></a>
                                        <a href="#" onclick="confirm('This will be permanently deleted.') || event.stopImmediatePropagation()" wire:click.prevent="deleteproduct({{$product->id}})"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
