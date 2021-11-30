<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Add New Coupon
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.coupons')}}" class="btn btn-success pull-right">All Coupons</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form class="form-horizontal" wire:submit.prevent="storeCoupon">
                        <div class="form-group">
                            <label for="code" class="col-md-4 control-label">Coupon Code</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-md" id="code" placeholder="Coupon Code" wire:model="code">
                                @error('code') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type" class="col-md-4 control-label">Coupon Type</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="type">
                                    <option value="fixed">Fixed</option>
                                    <option value="percent">Percentage</option>
                                </select>
                                @error('type') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-4 control-label">Coupon Value</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-md" id="categoryName" placeholder="Coupon Value" wire:model="value">
                                @error('value') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-4 control-label">Cart Value</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-md" id="categoryName" placeholder="Cart Value" wire:model="cart_value">
                                @error('cart_value') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-4 control-label">Expiry Date</label>
                            <div class="col-md-4" wire:ignore>
                                <input type="text" class="form-control input-md" id="expiryDate" placeholder="Expiry Date" wire:model="expiry_date">
                                @error('cart_value') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Add Coupon</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(function(){
            $('#expiryDate').datetimepicker({
                format: 'Y-MM-DD'
            })
            .on('dp.change', function(event){
                var data =  $('#expiryDate').val();
                @this.set('expiry_date', data);
            })
        })
    </script>
@endpush
