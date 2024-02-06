@extends('web.layouts.app')

@section('content')

<section style="padding-top: 120px;">
    <div class="container">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-header section-header--large" style="margin-bottom:10px; text-align: center; color: red;">
                    ✵ ✵ ✵ Turnament  Players ✵ ✵ ✵
                </h2>
            </div>
            </div>
            
                
   @if ($tournaments->players)
   <div class="row">
        @foreach (explode(',', $tournaments->players) as $fee)
            <div class="col-md-12">
                <div class="playerlist">
                    <div class="row match-header">
                        <div class="col-lg-6 col-6">
                            <!-- Start Player Column -->
                            <a href="#" class="player-link" style="color: #fff; font-size: 22px; font-weight: 600;"> {{ $fee }}</a>
                        </div>
                        <div class="col-lg-6 col-6" style="text-align-last: end; padding: -1px;">
                            <!-- Start Player Column -->
                            <h6>100% Bonus</h6><br>
                            @if(auth()->check())
                                <a href="" class="player-link" style="color: #fff; font-size: 22px; font-weight: 600; border: 2px solid; padding: 2px 30px; border-radius: 25px; background: lightgreen;">Beat Now</a>
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

@endsection