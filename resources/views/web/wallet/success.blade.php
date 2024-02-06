@extends('web.layouts.app')

@section('content')
   <section>
    <div class="wallet-container text-center" style="margin-top: -20px; padding-bottom: 85px;">
        <p class="page-title"><i class="fa fa-align-left"></i>Payment Confirmation<i class="fa fa-user"></i></p>

        <div class="amount-box text-center">
            <p>Order ID: {{ $order->id }}</p>
            <p>Total Amount: ₹{{ $order->amount / 100 }}</p>
            <p>Status: {{ $order->status }}</p>

            @if ($order->status === 'created')
                <form method="POST" action="{{ route('razorpay.confirm-payment') }}">
                    @csrf
                    <input type="hidden" name="razorpay_order_id" value="{{ $order->id }}">
                    <script
                        src="https://checkout.razorpay.com/v1/checkout.js"
                        data-key="rzp_test_QPfy4tDzaD5Gnb"
                        data-amount="{{ $order->amount }}"
                        data-currency="INR"
                        data-order_id="{{ $order->id }}"
                        data-buttontext="Pay with Razorpay"
                        data-name="Your Company Name"
                        data-description="Wallet Recharge"
                        data-image="https://your-company-logo-url.com/logo.png"
                        data-prefill.name="{{ Auth::user()->name }}"
                        data-prefill.email="{{ Auth::user()->email }}"
                        data-prefill.contact="{{ Auth::user()->mobile }}"
                        data-theme.color="#F37254"
                    ></script>
                    <!--<button type="submit" class="btn btn-primary">Confirm Payment</button>-->
                </form>
            @endif
        </div>
    </div>
</section>
@endsection
