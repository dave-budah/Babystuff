
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
                                <strong> All Attributes</strong>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.add_attributes')}}" class="btn btn-success pull-right">Add new</a>
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
                                <th> Name</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pattributes as $pattribute)
                                <tr>
                                    <td>{{$pattribute->id}}</td>
                                    <td>{{$pattribute->name}}</td>
                                    <td>{{$pattribute->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.edit_attributes',['attribute_id'=>$pattribute->id])}}"><i class="fa fa-edit"></i></a>
                                        <a href="#" onclick="confirm('This will be permanently deleted.') || event.stopImmediatePropagation()" wire:click.prevent="deleteAttribute({{$pattribute->id}})"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$pattributes->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
