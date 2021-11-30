<div>
   <div class="container" style="padding: 30px 0;">
       <div class="panel panel-heading">
           <strong>Manage Home Categories</strong>
       </div>
       <div class="panel-body">
           @if (Session::has('message'))
             <div class="alert alert-message alert-success" role="alert">
                 {{Session::get('message')}}
             </div>
           @endif
           <form action="" class="form-horizontal" wire:submit.prevent="updateHomeCategory">
               <div class="form-group">
                   <label for="choose" class="col-md-4 control-label">Choose Categories</label>
                   <div class="col-md-4" wire:ignore>
                       <select id="choose" name="categories[]" multiple="multiple" id="" class="sel_categories form-control" wire:model="selected_categories">
                           @foreach ($categories as $category)
                               <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach
                       </select>
                   </div>
               </div>

               <div class="form-group">
                   <label for="numProducts" class="col-md-4 control-label">No of products</label>
                   <div class="col-md-4">
                       <input type="text" id="numProducts" class="form-control input-md" name="no_of_products" wire:model="numberofproducts">
                   </div>
               </div>

               <div class="form-group">
                   <label for="choose" class="col-md-4 control-label"></label>
                   <div class="col-md-4">
                       <button class="btn btn-primary" type="submit">Submit</button>
                   </div>
               </div>
           </form>
       </div>
   </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function(){
           $('.sel_categories').select2();
           $('.sel_categories').on('change', function(e){
               var data = $('.sel_categories').select2("val");
               @this.set('selected_categories', data);
           });
        });
    </script>
@endpush
