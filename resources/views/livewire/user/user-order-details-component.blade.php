<div>
    <style>
        th {
            color: purple !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('order_message'))
                    <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Order Details</strong>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('user.orders')}}" class="btn btn-success btn-sm pull-right text-uppercase">My Orders</a>
                                @if($order->status == 'ordered')
                                <a href="#" wire:click.prevent="cancelOrder" style="margin-right: 1rem;" class="btn btn-warning btn-sm pull-right text-uppercase">Cancel Order</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <th>Order ID</th>
                            <td>{{$order->id}}</td>
                            <th>Order Date</th>
                            <td>{{Carbon\Carbon::parse($order->created_at)->format('d M Y')}}</td>
                            <th>Status</th>
                            <td>{{$order->status}}</td>
                            @if($order->status == 'delivered')
                                <th>Delivery Date</th>
                                <td>{{Carbon\Carbon::parse($order->delivered_date)->format('d M Y')}}</td>
                                @elseif($order->status == 'canceled')
                                <th>Cancellation Date</th>
                                <td>{{Carbon\Carbon::parse($order->cancelled_date)->format('d M Y')}}</td>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <strong>Ordered Items</strong>
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Product Name</h3>
                            <ul class="products-cart">
                                @foreach($order->orderItems as $item)
                                    <li class="pr-cart-item">
                                        <div class="product-image">
                                            <figure><img src="{{asset('assets/images/products')}}/{{$item->product->image}}" alt="{{$item->product->name}}"></figure>
                                        </div>
                                        <div class="product-name">
                                            <a class="link-to-product" href="{{route('product.details', ['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
                                        </div>
                                        @if($item->options)
                                            <div class="product-name">
                                                @foreach(unserialize($item->options) as $key => $value)
                                                    <p><b>{{$key}}:{{$value}}</b></p>
                                                @endforeach
                                            </div>
                                        @endif
                                        <div class="price-field produtc-price"><p class="price">${{$item->price}}</p></div>
                                        <div class="quantity">
                                            <h5>{{$item->quantity}}</h5>
                                        </div>
                                        <div class="price-field sub-total"><p class="price">${{$item->price * $item->quantity}}</p></div>
                                        @if($order->status == 'delivered' && $item->rstatus == false)
                                        <div class="price-field sub-total"><p class="price"><a href="{{route('user.review', ['order_item_id'=>$item->id])}}">Write Review</a></p></div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <div class="title-box">Order Summary</div>
                                <p class="summary-info"><span class="title">Subtotal</span><b class="index">${{$order->subtotal}}</b></p>
                                <p class="summary-info"><span class="title">Tax</span><b class="index">${{$order->tax}}</b></p>
                                <p class="summary-info"><span class="title">Shipping</span><b class="index">No shipping</b></p>
                                <p class="summary-info"><span class="title">Total</span><b class="index">${{$order->total}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Billing Details</strong>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>First Name:</th>
                                <td>{{$order->firstname}}</td>
                                <th>Last Name:</th>
                                <td>{{$order->lastname}}</td>
                            </tr>
                            <tr>
                                <th>Phone number:</th>
                                <td>{{$order->mobile}}</td>
                                <th>Email:</th>
                                <td>{{$order->email}}</td>
                            </tr>
                            <tr>
                                <th>Address (Line 1):</th>
                                <td>{{$order->line1}}</td>
                                <th>Address (Line 2):</th>
                                <td>{{$order->line2}}</td>
                            </tr>
                            <tr>
                                <th>City / Town:</th>
                                <td>{{$order->city}}</td>
                                <th>Province:</th>
                                <td>{{$order->province}}</td>
                            </tr>
                            <tr>
                                <th>Country:</th>
                                <td>{{$order->country}}</td>
                                <th>Zipcode:</th>
                                <td>{{$order->zipcode}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @if ($order->is_shipping_different)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Shipping Details</strong>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <th>First Name:</th>
                                    <td>{{$order->shipping->firstname}}</td>
                                    <th>Last Name:</th>
                                    <td>{{$order->shipping->lastname}}</td>
                                </tr>
                                <tr>
                                    <th>Phone number:</th>
                                    <td>{{$order->shipping->mobile}}</td>
                                    <th>Email:</th>
                                    <td>{{$order->shipping->email}}</td>
                                </tr>
                                <tr>
                                    <th>Address (Line 1):</th>
                                    <td>{{$order->shipping->line1}}</td>
                                    <th>Address (Line 2):</th>
                                    <td>{{$order->shipping->line2}}</td>
                                </tr>
                                <tr>
                                    <th>City / Town:</th>
                                    <td>{{$order->shipping->city}}</td>
                                    <th>Province:</th>
                                    <td>{{$order->shipping->province}}</td>
                                </tr>
                                <tr>
                                    <th>Country:</th>
                                    <td>{{$order->shipping->country}}</td>
                                    <th>Zipcode:</th>
                                    <td>{{$order->shipping->zipcode}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Transaction</strong>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Transaction Mode</th>
                                <td>{{$order->transaction->mode}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$order->transaction->status}}</td>
                            </tr>
                            <tr>
                                <th>Transaction Date</th>
                                <td>{{\Carbon\Carbon::parse($order->transaction->created_at)->format('d M Y H:m:s')}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
