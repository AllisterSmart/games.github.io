@extends('web.layouts.app')

@section('content')

<section style="padding-top: 120px;">
    <div class="mycontainer">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-header section-header--large" style="margin-bottom:10px; text-align: center; color: red;">
                    ✵ ✵ ✵ This Tournament Players ✵ ✵ ✵
                </h2>
            </div>
            </div>
            
                
   @if ($tournament->players)
   <div class="row">
        @foreach (explode(',', $tournament->players) as $player)
            <div class="col-md-12">
                <div class="playerlist">
                    <div class="row match-header">
                                <div class="col-md-5">
                                    <!-- Start Player Column -->
                                    <a href="#" class="player-link" style="color: #fff; font-size: 22px; font-weight: 600;">{{ $player }}</a>
                                        <span style="font-size: 14px; font-weight: bold; color: #070fff;">
                                        <span style="animation: blink 1s infinite;"> Rating 3.5</span>
                                    </span>
                                </div>
                                <div class="predict col-md-7" style="text-align-last: end; padding: -1px;">
                                    <!-- Start Predict Column -->
                                    @if ($tournament->entry_fees)
                                        <span style="font-size: 15px; font-weight: 700;">Predict:- </span>
                                        @foreach (explode(',', $tournament->entry_fees) as $fee)
                                            <h6 style="display: inline-block;"><input type="radio" name="entry_fee" value="{{ $fee }}">
                                            {{ $fee }}Rs.</h6>
                                        @endforeach
                                    @endif
                                </div>
                            <div style="padding: 14px;">
                                    <h6>Total Play Games:- 10</h6>
                                <h6>Total Win Games: 8</h6>
                                </div>
                        </div></div>
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
</section>


<style>
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
</style>

@endsection