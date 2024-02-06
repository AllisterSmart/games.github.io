@extends('web.layouts.app')

@section('content')

<section style="padding-top: 120px;">
    <div class="container">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-header section-header--large" style="margin-bottom:10px; text-align: center; color: red;">
                    ✵ ✵ ✵ Turnament  Price ✵ ✵ ✵
                </h2>
            </div>
            </div>
            
                
   @if ($tournament->entry_fees)
    <div class="row">
        @foreach (explode(',', $tournament->entry_fees) as $fee)
            <div class="col-md-12">
                <div class="playerlist">
                    <div class="row match-header">
                        <div class="col-lg-6 col-6">
                            <!-- Start Player Column -->
                            <h4>Entry Fees</h4>
                            <a href="#" class="player-link" style="color: #fff; font-size: 22px; font-weight: 600;">₹ {{ $fee }}</a>
                        </div>
                        <div class="col-lg-6 col-6" style="text-align-last: end; padding: -1px;">
                            <!-- Start Player Column -->
                            <h6>100% Bonus</h6><br>
                            @if(auth()->check())
                                @php
                                    $user = auth()->user();
                                    $walletBalance = $user->add_blance;
                                @endphp

                                @if($walletBalance >= $fee)
                                    <a id="message" href="{{ route('playerlist', ['id' => $tournament->id]) }}" class="player-link play-btn" data-fee="{{ $fee }}" style="color: #fff; font-size: 22px; font-weight: 600; border: 2px solid; padding: 2px 30px; border-radius: 25px; background: lightgreen;">Play</a>
                                @else
                                    <span>
                                        <!-- Redirect to add funds page or display a message -->
                                        <a href="{{ route('addwallet') }}" style="color: #fff; font-size: 22px; font-weight: 600; border: 2px solid; padding: 2px 30px; border-radius: 25px; background: lightcoral;">Insufficient Balance</a>
                                    </span>
                                @endif
                            @else
                                <span>
                                    <!-- Redirect to login page or display a login link -->
                                    <a href="{{ route('login') }}" style="color: #fff; font-size: 22px; font-weight: 600; border: 2px solid; padding: 2px 30px; border-radius: 25px; background: lightgreen;">Play</a>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    No players available.
@endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<style>
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.play-btn').forEach(function (button) {
            button.addEventListener('click', function (event) {
                var fee = this.getAttribute('data-fee');
                
                var confirmMessage = "Your dedicated money is ₹" + fee + ". Do you want to proceed?";
                var userConfirmed = confirm(confirmMessage);
                if (userConfirmed) {
                    alert("Proceeding with the play action");
                    deductBalance(fee);
                    window.location.href = this.getAttribute('href');
                } else {
                    alert("Cancelled play action");
                    event.preventDefault();
                }
            });
        });

        function deductBalance(fee) {
            $.ajax({
                type: 'POST',
                url: '{{ route("deductBalance") }}',
                data: {
                    fee: fee,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    if (response.success) {
                        alert(response.message);
                    } else {
                        alert(response.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }
    });
</script>
@endsection