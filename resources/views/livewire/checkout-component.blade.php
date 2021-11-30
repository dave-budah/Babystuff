<main id="main" class="main-site">
    <style>
        .summary-item .row-in-form input[type="password"] {
            font-size: 13px;
            line-height: 19px;
            display: inline-block;
            height: 43px;
            padding: 2px 20px;
            max-width: 300px;
            width: 100%;
            border: 1px solid rebeccapurple;
        }
    </style>
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Checkout</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-address-billing">
                        <h3 class="box-title">Billing Address</h3>
                        <div class="address-billing">
                            <p class="row-in-form">
                                <label for="fname">first name<span>*</span></label>
                                <input id="fname" type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
                                @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="lname">last name<span>*</span></label>
                                <input type="text" name="lname" id="lname" value="" placeholder="Your last name" wire:model="lastname">
                                @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="email">Email Addreess:</label>
                                <input type="email" name="email" value="" placeholder="Type your email" wire:model="email">
                                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="phone">Phone number<span>*</span></label>
                                <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
                                @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="add">Line 1:</label>
                                <input type="text" name="add" value="" placeholder="Address" wire:model="line1">
                                @error('line1') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="add">Line 2:</label>
                                <input type="text" name="line2" value="" placeholder="Address" wire:model="line2">
                            </p>
                            <p class="row-in-form">
                                <label for="country">Country:<span>*</span></label>
                                <input type="text" name="country" value="" placeholder="Your country" wire:model="country">
                                @error('country') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="city">Town / City<span>*</span></label>
                                <input type="text" name="city" value="" placeholder="City name" wire:model="city">
                                @error('city') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="city">Province:<span>*</span></label>
                                <input type="text" name="province" value="" placeholder="Province" wire:model="province">
                                @error('province') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="zip-code">Postcode / ZIP:</label>
                                <input type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
                            </p>
                            <p class="row-in-form fill-wife">
                                <label class="checkbox-field">
                                    <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
                                    <span>Ship to a different address?</span>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>

                @if ($ship_to_different)
                    <div class="col-md-12">
                    <div class="wrap-address-billing">
                        <h3 class="box-title">Shipping Address</h3>
                        <div class="address-billing">
                            <p class="row-in-form">
                                <label for="fname">first name<span>*</span></label>
                                <input id="fname" type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
                                @error('s_firstname') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="lname">last name<span>*</span></label>
                                <input type="text" name="lname" value="" placeholder="Your last name" wire:model="s_lastname">
                                @error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="email">Email Address:</label>
                                <input type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
                                @error('s_email') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="phone">Phone number<span>*</span></label>
                                <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
                                @error('s_mobile') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="add">Line 1:</label>
                                <input type="text" name="add" value="" placeholder="Address" wire:model="s_line1">
                                @error('s_line1') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="add">Line 2:</label>
                                <input type="text" name="line2" value="" placeholder="Address" wire:model="s_line2">
                            </p>
                            <p class="row-in-form">
                                <label for="country">Country:<span>*</span></label>
                                <input type="text" name="country" value="" placeholder="Your country" wire:model="s_country">
                                @error('s_country') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="city">Town / City<span>*</span></label>
                                <input type="text" name="city" value="" placeholder="City name" wire:model="s_city">
                                @error('s_city') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="city">Province:<span>*</span></label>
                                <input type="text" name="province" value="" placeholder="Province" wire:model="s_province">
                                @error('s_province') <span class="text-danger">{{$message}}</span> @enderror
                            </p>
                            <p class="row-in-form">
                                <label for="zip-code">Postcode / ZIP:</label>
                                <input type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="s_zipcode">
                            </p>
                        </div>
                    </div>
                </div>
                @endif
            </div>



            <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <h4 class="title-box">Payment Method</h4>
                    @if($paymentmode == 'card')
                    <div class="wrap-address-billing">
                        @if(Session::has('stripe_error'))
                            <div class="alert alert-danger" role="alert">{{Session::get('stripe_error')}}</div>
                        @endif
                        <p class="row-in-form">
                            <label for="card-number">Card Number:</label>
                            <input type="text" name="zip-code" value="" id="card-number" placeholder="Card number" wire:model="card_number">
                            @error('card_number') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="exp-month">Expiry Month:</label>
                            <input type="text" name="exp-month" value="" id="card-number" placeholder="MM" wire:model="exp_month">
                            @error('exp_month') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="exp-year">Expiry Year:</label>
                            <input type="number" name="exp-year" value="" id="exp-year" placeholder="YYYY" wire:model="exp_year">
                            @error('exp_year') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="cvc">CVC:</label>
                            <input type="password" name="cvc" value="" id="cvc" placeholder="CVC" wire:model="cvc">
                            @error('cvc') <span class="text-danger">{{$message}}</span> @enderror
                        </p>
                    </div>
                    @endif
                    <div class="choose-payment-methods">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
                            <span>Cash on Delivery</span>
                            <span class="payment-desc">Order now, pay on delivery.</span>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
                            <span>Debit / Credit card payment</span>
                            <span class="payment-desc">Pay using your bank card.</span>
                        </label>
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmode">
                            <span>Paypal</span>
                            <span class="payment-desc">You can pay with your credit</span>
                            <span class="payment-desc">card if you don't have a paypal account</span>
                            @error('paymentmode') <p class="text-danger">{{$message}}</p> @enderror
                        </label>
                    </div>
                    @if (Session::has('checkout'))
                    <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{Session::get('checkout')['total']}}</span></p>
                    @endif

                    @if($errors->isEmpty())
                    <div wire:ignore id="processing" style="font-size: 22px; margin-bottom: 20px; padding-left: 37px; color: rebeccapurple; display: none;">
                        <i class="fa fa-spinner fa-pulse fa-fw"></i>
                        <span>Processing...</span>
                    </div>
                    @endif
                    <button type="submit" class="btn btn-medium">Place order now</button>
                </div>
                <div class="summary-item shipping-method">
                    <h4 class="title-box f-title">Shipping method</h4>
                    <p class="summary-info"><span class="title">Flat Rate</span></p>
                    <p class="summary-info"><span class="title">Fixed $0.00</span></p>

                </div>
            </div>
            </form>
        </div><!--end main content area-->
    </div><!--end container-->

</main>
