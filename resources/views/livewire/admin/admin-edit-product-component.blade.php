<div>
    <style>
        textarea {
            width: 100%;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Update product</strong>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="pull-right btn btn-success text-uppercase">All products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label for="productName" class="col-md-4 control-label">Product name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product name" class="form-control input-md" id="productName" wire:model="name" wire:keyup="generateSlug">
                                    @error('name') <p class="text-danger">{!! $message !!}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="productSlug" class="col-md-4 control-label">Product slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product slug" class="form-control input-md" id="productSlug" wire:model="slug">
                                    @error('slug') <p class="text-danger">{!! $message !!}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="shortDesc" class="col-md-4 control-label">Short description</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea name="short_desc" id="short_description" class="form-control" wire:model="short_description" placeholder="Short Description"></textarea>
                                    @error('short_description') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Description</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea name="description" id="description" class="form-control" wire:model="description" placeholder="Description"></textarea>
                                    @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="regularPrice" class="col-md-4 control-label">Regular price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Regular price" class="form-control input-md" id="regularPrice" wire:model="regular_price">
                                    @error('regular_price') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="salePrice" class="col-md-4 control-label">Sale price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Sale price" class="form-control input-md" id="salePrice" wire:model="sale_price">
                                    @error('sale_price') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sku" class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" id="sku" wire:model="SKU">
                                    @error('SKU') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stock" class="col-md-4 control-label">Availability</label>
                                <div class="col-md-4">
                                    <select name="availability" id="availability" class="form-control" wire:model="stock_status">
                                        <option value="instock">Instock</option>
                                        <option value="outOfStock">Out of Instock</option>
                                    </select>
                                    @error('stock_status') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stock" class="col-md-4 control-label">Featured</label>
                                <div class="col-md-4">
                                    <select name="featured" id="featured" class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sku" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Quantity" class="form-control input-md" id="quantity" wire:model="quantity">
                                    @error('quantity') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sku" class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" id="image" wire:model="newimage">
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" alt="" width="120" style="margin: 1rem .5rem;">
                                    @else
                                        <img src="{{asset('assets/images/products')}}/{{$image}}" alt="" width="120" style="margin: 1rem .5rem;">
                                    @endif
                                    @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category" class="col-md-4 control-label">Category</label>
                                <div class="col-md-4">
                                    <select name="availability" id="category" class="form-control" wire:model="category_id">
                                        <option value="">Select category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category" class="col-md-4 control-label">Product Attribute</label>
                                <div class="col-md-3">
                                    <select name="availability" id="category" class="form-control" wire:model="attr">
                                        <option value="">Select attribute</option>
                                        @foreach($pattributes as $pattribute)
                                            <option value="{{$pattribute->id}}">{{$pattribute->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-info" wire:click.prevent="add">Add</button>
                                </div>
                            </div>
                            @foreach($inputs as $key => $value)
                                <div class="form-group">
                                    <label for="sku" class="col-md-4 control-label">{{$pattributes->where('id', $attribute_arr[$key])->first()->name}}</label>
                                    <div class="col-md-3">
                                        <input type="text" placeholder="{{$pattributes->where('id', $attribute_arr[$key])->first()->name}}" class="form-control input-md" id="sku" wire:model="attribute_values.{{$value}}">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-small" wire:click.prevent="remove({{$key}})">Remove</button>
                                    </div>
                                </div>
                            @endforeach
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector: '#short_description',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description', sd_data)
                    });
                }
            });

            tinymce.init({
                selector: '#description',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description', d_data)
                    });
                }
            });
        });
    </script>
@endpush
