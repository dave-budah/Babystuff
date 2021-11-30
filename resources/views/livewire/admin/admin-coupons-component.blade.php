<div>
    <style>
        .fa {
            font-size: 2rem;
        }
        .fa-trash {
            margin-left: 1rem;
            color: red;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <strong> All Coupons</strong>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addcoupon')}}" class="btn btn-success pull-right">Add new</a>
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
                                <th>Coupon code</th>
                                <th>Coupon Type</th>
                                <th>Coupon Value</th>
                                <th>Cart Value</th>
                                <th>Expiry Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coupons as $coupon)
                                <tr>
                                    <td>{{$coupon->id}}</td>
                                    <td>{{$coupon->code}}</td>
                                    <td>{{$coupon->type}}</td>
                                    @if($coupon->type == 'fixed')
                                    <td>${{$coupon->value}}</td>
                                    @else
                                        <td>{{$coupon->value}} %</td>
                                    @endif
                                    <td>{{$coupon->cart_value}}</td>
                                    <td>{{\Carbon\Carbon::parse($coupon->expiry_date)->format('d M Y')}}</td>

                                    <td>
                                        <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}"><i class="fa fa-edit"></i></a>
                                        <a href="#" onclick="confirm('This will be permanently deleted.') || event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon({{$coupon->id}})"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
