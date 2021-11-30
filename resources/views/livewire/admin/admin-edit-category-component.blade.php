<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Update Category
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">All Categories</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form class="form-horizontal" wire:submit.prevent="updateCategory">
                        <div class="form-group">
                            <label for="categoryName" class="col-md-4 control-label">Category Name</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-md" id="categoryName" placeholder="Category Name" wire:model="name" wire:keyup="generateslug">
                                @error('name') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-4 control-label">Category Slug</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-md" id="categoryName" placeholder="Category slug" wire:model="slug">
                                @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

