<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden {
            display: block !important;
        }
        nav .hidden p {
            margin-bottom: 20px !important;
            margin-top: 20px;
        }
        .fa-trash {
            font-size: 2rem;
            color: red;
        }
        .fa-edit {
            font-size: 2rem;
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
                             <strong> All Categories</strong>
                         </div>
                         <div class="col-md-6">
                             <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add new</a>
                         </div>
                     </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>
                                        <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}"><i class="fa fa-edit"></i></a>
                                        <a href="#" onclick="confirm('This will be permanently deleted.') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
