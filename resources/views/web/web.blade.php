@extends('web.layouts.app')

@section('content')


			     @foreach($banners as $banner)
        @endforeach
<section class="hero-area" id="home" style="background-image: url('{{'web/images/banners/'. $banner->image }}'); background-position: 0 0, 0 0; background-size: auto, cover; background-repeat: repeat, no-repeat;  fixed;"> 
		
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="hero-area-content">
							<!-- <h1>It’s all about Promoting your Business</h1> -->
							<img src="{{ asset('web/images/banners/'.$banner->image1) }}" alt="Play Kung Fu Panda Game"  width="100" height="100">
							<h1>{{ $banner->name }}</h1>
							<p><h2>{{ $banner->heading }}</h2>

<ul>
	<li>
	<h3>{{ $banner->content }}</h3>
	</li>
</ul> 

</p>
		<section class="download-hero ptb-50">
				 <div class="col-lg-12">
				 <!--<ul><li> <img src="{{ asset('web/images/banners/'.$banner->image1) }}" alt="download gamethon apk"> </li></ul>-->
				 <ul>
				 <li>
				 </li>
				 </ul>
				 </div>
				 
				</div>
					</div>			
							
		
				<div class="col-lg-5"> 
			 <div class="" style="margin-top: -40px">
			<div><img src="{{ asset('web/images/banners/'.$banner->image1) }}"></div><br>
			 <div><img src="{{ asset('web/images/banners/'.$banner->image2) }}"></div>
			 
   
			 
      	</div>
      </div>
      </div>
	</div>		
		</section>

<!-- Hero section -->
	<!--<section class="hero-section">-->
	<!--	<div class="hero-slider owl-carousel">-->
	<!--		<div class="hs-item set-bg" data-setbg="img/slider-1.jpg">-->
	<!--			<div class="hs-text">-->
	<!--				<div class="container">-->
	<!--					<h2>The Best <span>Games</span> Out There</h2>-->
	<!--					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>-->
	<!--					<a href="#" class="site-btn">Read More</a>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--		<div class="hs-item set-bg" data-setbg="img/slider-2.jpg">-->
	<!--			<div class="hs-text">-->
	<!--				<div class="container">-->
	<!--					<h2>The Best <span>Games</span> Out There</h2>-->
	<!--					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>-->
	<!--					<a href="#" class="site-btn">Read More</a>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</section>-->
	<!-- Hero section end -->
	
		<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest News</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">new</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="strategy">strategy</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="racing">racing</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->
	
	
	<section style="background-image: url('{{ asset('web/images/gameback6.jpg') }}'); background-position: 0 0; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="mycontainer">
        <!-- code here -->
        <div class="row">
			<div class="col-md-12">
               <h2 class="section-header section-header--large" style="margin-bottom:10px; text-align: center; color: red;"> ✵ ✵ ✵
Live Tournaments ✵ ✵ ✵
</h2>

            </div>
            @foreach($tournaments as $tourna)
                <div class="col-md-4">
                    <div class="match">
                        <div class="match-header">
                            <div class="match-status"><span class="blink-text">Live</span></div>
                            <div class="match-tournament">
                                {{ $tourna->game_name }}
                            </div>
                            <div class="match-actions">
                                <button class="btn-icon"><i class="material-icons-outlined">{{ $tourna->category }}</i></button>
                                <!--<button class="btn-icon"><i class="material-icons-outlined">{{ $tourna->game_name }}</i></button>-->
                            </div>
                        </div>
                        <div class="match-content">
                            <div class="column">
                                <div class="team team--home">
                                    <div class="team-logo">
                                        <img src="https://assets.codepen.io/285131/whufc.svg" />
                                    </div>
                                    <h2 class="team-name">{{ $tourna->game_name }}</h2>
                                </div>
                            </div>
                            <div class="column">
                                <div class="match-details">
                                    <div class="match-date">
    <strong>Date: {{ date('Y-m-d', strtotime($tourna->from_schedule)) }}</strong>
</div>
<div class="match-time">
    <strong>Time: {{ date('H:i:s', strtotime($tourna->from_schedule)) }}</strong>
</div>
<div class="match-time">
    <strong>To: {{ date('H:i:s', strtotime($tourna->to_schedule)) }}</strong>
</div>

                                    <div class="match-score">
                                        <span class="match-score-number match-score-number--leading">Players{{ $tourna->total_players }}</span>
                                    </div>
                                    <div class="match-referee">
                                        Bonus: <strong>{{ $tourna->from_bonus }}</strong>
                                    </div>
                                    <div class="match-bet-options">
                                        <span class="match-bet-option">Entry: {{ min(explode(',', $tourna->entry_fees)) }} RS.</span>
                                    </div>
                                    <a href="{{route('pricelist',['id'=> $tourna->id])}}" class="match-bet-place">Place a bet</a>
                                </div>
                            </div>
                            <div class="column">
                                <div class="team team--away">
                                    <div class="team-logo">
                                        <img src="https://assets.codepen.io/285131/chelsea.svg" />
                                    </div>
                                    <h2 class="team-name">{{ $tourna->category }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<br>

<section style="background-image: url('{{ asset('web/images/gameback7.jpg') }}'); background-position: 0 0; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; padding-bottom: 25px;">
    <!-- POPULAR SECTION -->
    <div class="mycontainer">
        <div class=" row text-center">
			<div class="col-md-12">
                <h2 class=" section-header section-header--large text-white" style="padding-top: 25px;">Top Games on Esport</h2>
				<h5 class="para text-white"> Play over 40+ games and win cash!</h5>
            </div>
			</div>
    <div class="popular_games">
        @foreach($games as $game)
        <div class="sports popular-card">
            <p style="text-align: center;"><img class="img_container" src="{{ asset('web/images/games/'.$game->image) }}" alt=""></p>
            <h4 class="game_title">{{ $game->game_name }}</h4>
            <p style="text-align: center;"><a class="download_button" href="{{ route('tournament', ['id' => $game->id]) }}">
                <i class="fas fa-download"></i> Predict Now
            </a></p>
            </div>
        @endforeach
    </div>
    </div>

    <!-- FOLLOW -->
    <a class="Follow" href="https://codepen.io/ZaynAlaoudi/" target="_blank"></a>
</section>





	


	<!-- Tournaments section -->
	<section class="tournaments-section spad">
		<div class="container">
			<div class="tournament-title">Tournaments</div>
			<div class="row">
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/1.jpg"></div>
							<div class="ti-text">
								<h4>World Of WarCraft</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tournament-item">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/2.jpg"></div>
							<div class="ti-text">
								<h4>DOOM</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Tournaments section bg -->


	
	<!-- Review section end -->
@endsection