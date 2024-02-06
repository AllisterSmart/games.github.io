@extends('web.layouts.app')

@section('content')


	
	<section style="background-image: url('{{ asset('web/images/gameback6.jpg') }}'); background-position: 0 0; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="mycontainer">
        <!-- code here -->
        <div class="row">
			<div class="col-md-12">
               <h2 class="section-header section-header--large" style="margin-bottom:10px; text-align: center; color: red;"> ✵ ✵ ✵
Live Tournaments ✵ ✵ ✵
</h2>

            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <h2>{{ $game->game_name }} Tournaments</h2>

@if($tournament)
    @foreach($tournament as $tourna) 
        <p>{{ $tourna->category_id }}</p> 
    @endforeach
@else
    <p>No tournaments available for this game.</p>
@endif

    </div>
</section>
<br>




	
	<!-- Review section end -->
@endsection