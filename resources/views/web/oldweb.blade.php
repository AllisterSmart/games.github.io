@extends('web.layouts.app')

@section('content')

			     @foreach($banners as $banner)
        @endforeach
<section class="hero-area" id="home" style="background-image: url('{{'web/images/banners/'. $banner->image }}'); background-position: 0 0, 0 0; background-size: auto, cover; background-repeat: repeat, no-repeat; background-attachment: scroll, fixed;"> 
		
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
		<!-- hero area end -->
		<!-- video area start -->
  <br>  <section class="video-section">
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <div class="video-box text-center">
 </div>
 </div>
 </div>
 </div>
 </section>       
<!--    <section class=" money-withdraw-section text-center">-->
<!--    <div class=" container">-->
<!--        <div class=" section-layout money-withdraw-layout">-->
<!--            <div class=" row">-->
<!--			<div class="col-md-12">-->
<!--                <h2 class=" section-header section-header--large" style="margin-bottom:60px;">How to Play Kung Fu Panda</h2>-->
<!--            </div>-->
<!--			</div>-->
<!--            <div class=" row money-withdraw">-->
<!--			<div class="col-md-1">-->
			
<!--			</div>-->
<!--                <div class="  col-md-5">-->
<!--                    <div class="bullet-box">-->
<!--                           <p><img src="admin/images/new-tournament_icon.png" alt="gamethon tournaments" width="50" height="50"><a href="daily-income-tournament.html"><b>Daily Income Tournament</b></a></p>-->
<!--                           <ul>-->
<!--                               <li>Single Player Game - play alone no opponent. </li>-->
<!--                               <li>daily 1 lac and 50K leaderboards </li>-->
<!--                               <li>Your highscore can earn you money </li>-->
<!--                               <li>Live for 24Hrs Daily </li>-->
<!--                               <li>Play Unlimited times untill the tournament is live </li>-->
<!--                               <li>Only your highscore is accounted </li>-->
<!--                               <li>Keep playing to improve your score and rank </li>-->
<!--                           </ul>-->
<!--                       </div>-->
<!--                </div>-->
<!--              </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- <section class="text-center">-->
<!-- <div class="download ">-->
			
<!--				</div>-->
<!-- </section>-->

<section>
    <div class="container">
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
                                <img src="https://assets.codepen.io/285131/pl-logo.svg" />
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
                                        <!--<span class="match-score-divider">:</span>-->
                                        <!--<span class="match-score-number">0</span>-->
                                    </div>
                                    <!--<div class="match-time-lapsed">-->
                                    <!--    72'-->
                                    <!--</div>-->
                                    <div class="match-referee">
                                        Bonus: <strong>{{ $tourna->from_bonus }}</strong>
                                    </div>
                                    <div class="match-bet-options">
                                        <!--<button class="match-bet-option">1.48</button>-->
                                        <span class="match-bet-option">Entry: {{ $tourna->entry_fees }} RS.</span>
                                        <!--<button class="match-bet-option">8.24</button>-->
                                    </div>
                                    <button class="match-bet-place">Place a bet</button>
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
<br><br><br>

<section>
    <!-- POPULAR SECTION -->
    <div class=" container">
        <div class=" row text-center">
			<div class="col-md-12">
                <h2 class=" section-header section-header--large">Top Games on Esport</h2>
				<h5 class="para"> Play over 40+ games and win cash!</h5>
            </div>
			</div>
    <div class="popular_games">
        @foreach($games as $game)
        <div class="sports popular-card">
            <img class="img_container" src="{{ asset('web/images/games/'.$game->image) }}" alt="">
            <h4 class="game_title">{{ $game->game_name }}</h4>
            <p style="text-align: center;"><button class="download_button" href="#">
                <i class="fas fa-download"></i> Play Now
            </button></p>
            </div>
        @endforeach
    </div>
    </div>

    <!-- FOLLOW -->
    <a class="Follow" href="https://codepen.io/ZaynAlaoudi/" target="_blank"></a>
</section>


<section class="game-section desktop">
    <div class=" container">
        <div class="game-layout">
            <div class=" row text-center">
			<div class="col-md-12">
                <h2 class=" section-header section-header--large">Top Games on Esport</h2>
				<h5 class="para"> Play over 40+ games and win cash!</h5>
            </div>
			</div>
            <div class=" row game">
                @foreach($games as $game)
			<div class="col-md-3">
			    <div class="card" style="padding-bottom: 5px;">
			<div class="game-box">
			<a href="#">
			<img src="{{ asset('web/images/games/'.$game->image) }}" class="gamesimg"></a>
			<div class="game-name">
			<h4><a href="{{ route('playgames', ['id' => $game->id]) }}">{{ $game->game_name }}</a></h4>
			<div class="lable">
			<span>{{ $game->category}}</span>
			</div>
			</div>
			</div>
			</div>
			</div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section> 

<section class="game-section mobile">
<div class="container">

 <div class=" row text-center">
			<div class="col-md-12">
                <h2 class=" section-header section-header--large">Top Games on Esport</h2>
				<h5 class="para"> Play over 40+ games and win cash!</h5>
            </div>
			</div>
			
<div class="row">
<div class="col-md-12">
 <div id="slick1">
		<div class="slide-item"><div class="game-box">
			<a href="knife-cool.html">
			<img src="assets/img/knifecool_tournament.png"></a>
			<div class="game-name">
			<a href="knife-cool.html"><h4>Knife Cool</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="dart-501-rules.html">
			<img src="assets/img/loading-logo.png"></a>
			<div class="game-name">
			<a href="dart-501-rules.html"><h4>501 Darts</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="uno.html">
			<img src="assets/img/uno_2p.png"></a>
			<div class="game-name">
			<a href="uno.html"><h4>Color Card Uno</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="fruit-blast.html">
			<img src="assets/img/fruit-blast_tournament.png"></a>
			<div class="game-name">
			<a href="fruit-blast.html"><h4>Fruit Blast</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="solitaire.html">
			<img src="assets/img/solitaire_tournament.png"></a>
			<div class="game-name">
			<a href="solitaire.html"><h4>Solitaire</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="fish-hunt.html">
			<img src="assets/img/fish_hunt.png"></a>
			<div class="game-name">
			<a href="fish-hunt.html"><h4>Fish Hunt</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="cricket.html">
			<img src="assets/img/cricket.png"></a>
			<div class="game-name">
			<a href="cricket.html"><h4>Online Cricket</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="8-ball-pool.html">
			<img src="assets/img/pool_template.png"></a>
			<div class="game-name">
			<a href="8-ball-pool.html"><h4>Pool</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="carrom-pool-online.html">
			<img src="assets/img/icon-256.png"></a>
			<div class="game-name">
			<a href="carrom-pool-online.html"><h4>Carrom</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="chess.html">
			<img src="assets/img/chess.png"></a>
			<div class="game-name">
			<a href="chess.html"><h4>Chess</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="basketball.html">
			<img src="assets/img/basketball_tournament.png"></a>
			<div class="game-name">
			<a href="basketball.html"><h4>Basketball</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="candy-match.html">
			<img src="assets/img/candy-match_tournament.png"></a>
			<div class="game-name">
			<a href="candy-match.html"><h4>Candy Match</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="airbattle.html">
			<img src="assets/img/airwar_tournament.png"></a>
			<div class="game-name">
			<a href="airbattle.html"><h4>Air Battle</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="ludo-king.html">
			<img src="assets/img/ludo_2p.png"></a>
			<div class="game-name">
			<a href="ludo-king.html"><h4>Ludo</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="ludo-king.html">
			<img src="assets/img/ludo_quick.png"></a>
			<div class="game-name">
			<a href="ludo-king.html"><h4>Quick Ludo</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="brick-out.html">
			<img src="assets/img/brick-out-tournament.png"></a>
			<div class="game-name">
			<a href="brick-out.html"><h4>Brick Out</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="monster-truck.html">
			<img src="assets/img/monster-car.png"></a>
			<div class="game-name">
			<a href="monster-truck.html"><h4>Monster Car</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="Kung-fu-panda.html">
			<img src="assets/img/Kungfupanda_512X512.png"></a>
			<div class="game-name">
			<a href="Kung-fu-panda.html"><h4>Kung Fu Panda</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="ice-stack.html">
			<img src="assets/img/icestack.png"></a>
			<div class="game-name">
			<a href="ice-stack.html"><h4>Ice Stack</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="rabbit-skip.html">
			<img src="assets/img/rabbitskip.png"></a>
			<div class="game-name">
			<a href="rabbit-skip.html"><h4>Rabbit Skip</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="astro-drill.html">
			<img src="assets/img/astrodrill.png"></a>
			<div class="game-name">
			<a href="astro-drill.html"><h4>Astro Drill</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
		<div class="slide-item"><div class="game-box">
			<a href="fall-ball.html">
			<img src="assets/img/fallball.png"></a>
			<div class="game-name">
			<a href="fall-ball.html"><h4>Fall Ball</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div></div>
	
	</div>
</div>
</div>
</div>
</section>  <!--  <section class="game-section ">
    <div class=" container">
        <div class="game-layout">
            <div class=" row text-center">
			<div class="col-md-12">
                <h2 class=" section-header section-header--large">Top Games on GAMETHON</h2>
				<h5 class="para"> Play over 40+ games and win cash!</h5>
            </div>
			</div>
            <div class=" row game">
			<div class="col-md-3">
			<div class="game-box">
			<a href="knife-cool.php">
			<img src="assets/img/knifecool_tournament.png"></a>
			<div class="game-name">
			<a href="knife-cool.php"><h4>Knife Cool</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
			
				<div class="col-md-3">
			<div class="game-box">
			<a href="uno.php">
			<img src="assets/img/uno_2p.png"></a>
			<div class="game-name">
			<a href="uno.php"><h4>Color Card Uno</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
			
				<div class="col-md-3">
			<div class="game-box">
			<a href="fruit-blast.php">
			<img src="assets/img/fruit-blast_tournament.png"></a>
			<div class="game-name">
			<a href="fruit-blast.php"><h4>Fruit Blast</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
			
				<div class="col-md-3">
			<div class="game-box">
			<a href="solitaire.php">
			<img src="assets/img/solitaire_tournament.png"></a>
			<div class="game-name">
			<a href="solitaire.php"><h4>Solitaire</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
			
			<div class="col-md-3">
			<div class="game-box">
			<a href="fish-hunt.php">
			<img src="assets/img/fish_hunt.png"></a>
			<div class="game-name">
			<a href="fish-hunt.php"><h4>Fish Hunt</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
			
				<div class="col-md-3">
			<div class="game-box">
			<a href="cricket.php">
			<img src="assets/img/cricket.png"></a>
			<div class="game-name">
			<a href="cricket.php"><h4>Online Cricket</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
			
				<div class="col-md-3">
			<div class="game-box">
			<a href="8-ball-pool.php">
			<img src="assets/img/pool_template.png"></a>
			<div class="game-name">
			<a href="8-ball-pool.php"><h4>Pool</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
			
				<div class="col-md-3">
			<div class="game-box">
			<a href="basketball.php">
			<img src="assets/img/basketball_tournament.png"></a>
			<div class="game-name">
			<a href="basketball.php"><h4>Basketball</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
            	<div class="col-md-3">
			<div class="game-box">
			<a href="candy-match.php">
			<img src="assets/img/candy-match_tournament.png"></a>
			<div class="game-name">
			<a href="candy-match.php"><h4>Candy Match</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
			
				<div class="col-md-3">
			<div class="game-box">
			<a href="airbattle.php">
			<img src="assets/img/airwar_tournament.png"></a>
			<div class="game-name">
			<a href="airbattle.php"><h4>Air Battle</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
			
				<div class="col-md-3">
			<div class="game-box">
			<a href="ludo-king.php">
			<img src="assets/img/ludo_2p.png"></a>
			<div class="game-name">
			<a href="ludo-king.php"><h4>Ludo</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
			
				<div class="col-md-3">
			<div class="game-box">
			<a href="ludo-king.php">
			<img src="assets/img/ludo_quick.png"></a>
			<div class="game-name">
			<a href="ludo-king.php"><h4>Quick Ludo</h4></a>
			<div class="lable">
			<span>New </span>
			</div>
			</div>
			</div>
			</div>
                
            </div>
        </div>
    </div>
</section> -->
	<section class="slider">
 <div class="container">
 <div class="row">
 <div class="col-sm-12">
  <div class="items">
			 <div><img src="https://www.naya11.com/assets/img/fbpost-website.webp"></div>
			  <div><img src="https://www.naya11.com/assets/img/winnershorizontal.webp"></div>
			   <div><img src="https://www.naya11.com/assets/img/dailyincome.webp"></div>
			
      </div>
	  </div>
	   </div>
	  </div>
 </section>
			<section class="testimonial">
		<div class="container">
		<div class="row">
		<div class="col-12 padding-content">
        <div class=" text-center d-flex align-items-center justify-content-center">

            <div>
    
                <div class="beforeLineThree"></div>
            </div>
            <h2 class="landing_topic_heading">
                Testimonial
            </h2>
            <div>
            
                <div class="beforeLine"></div>
            </div>
        </div>

        <div class="col-12 landing_fifth_slot borderc-0  p-0">
            <div class="col-12 landing_apdding_50  p-0">

                <div class="col-12 d-flex landing_flex  landing_features_content testimonial-padding-nw">
                    <div class="col-12 co-sm-4 col-md-4">
                        <div class="testimonial_content_box">
                            <div>
                                <div class="d-flex justify-content-center">
                                    <i class="fa fa-quote-left text-qouteicon"></i>
                                </div>
                            </div>
                            <div class="landing_feature_described">
                                <div class="landing_testimonial_description text-left">
                                    "
               I have won over <b>Rs. 80000/- </b>playing on Esport since the last IPLs. I got 1st rank on the leaderboard contest. I play daily. I have been getting top rank most of the time in contests. There are no Bots.
                "
                                </div>
                            </div>
                        </div>
                        <div class="testimonialUserInfo text-center">
                            <img loading="lazy" title="user review Naya11 - Fantasy Sports" height="65" width="65" alt="Download the Naya11 Sports App" class="img-responsive center-block testimonial_img" src="https://www.naya11.com/desktop_assets/img/shrikant londhe.webp">
                            <div class="testimonial_user_head">
                               Shrikant
                            </div>
                            <div class="testimonial_user_subhead">
                                Maharashtra
                            </div>
                        </div>
                    </div>

                    <div class="col-12 co-sm-4 col-md-4">
                        <div class="testimonial_content_box">
                            <div>
                                <div class="d-flex justify-content-center">
                                    <i class="fa fa-quote-left text-qouteicon"></i>
                                </div>
                            </div>
                            <div class="landing_feature_described">
                                <div class="landing_testimonial_description text-left">
                                    "
                I have played on Esport since last 2 IPLs. I have won over <b>Rs. 40000/- </b>in IPLs and also in the contests. I play Daily and withdraw weekly.
                "
                                </div>
                            </div>

                        </div>
                        <div class="testimonialUserInfo text-center">
                            <img loading="lazy" title="user review Naya11 - Fantasy Sports" height="65" width="65" alt="Play ipl fantasy cricket online" class="img-responsive center-block testimonial_img" src="https://www.naya11.com/desktop_assets/img/deepak maurya.webp">
                            <div class="testimonial_user_head">
                               Deepak Maurya
                            </div>
                            <div class="testimonial_user_subhead">
                                Rajasthan
                            </div>
                        </div>
                    </div>

                    <div class="col-12 co-sm-4 col-md-4">
                        <div class="testimonial_content_box">
                            <div>
                                <div class="d-flex justify-content-center">
                                    <i class="fa fa-quote-left text-qouteicon"></i>
                                </div>
                            </div>
                            <div class="landing_feature_described">
                                <div class="landing_testimonial_description text-left">
                                    "
              I have won over <b>Rs. 1,00,000/-</b> playing at Esport. I have won 1st rank in IPL leaderboard and also getting top rank in contest. No Bots only real people.
                "
                                </div>
                            </div>

                        </div>
                        <div class="testimonialUserInfo text-center">
                            <img loading="lazy" title="user review Naya11 - Fantasy Sports" height="65" width="65" alt="play free cricket fantasy league online" class="img-responsive center-block testimonial_img" src="https://www.naya11.com/desktop_assets/img/nagaraj.webp">
                            <div class="testimonial_user_head">
                                Nagaraj
                            </div>
                            <div class="testimonial_user_subhead">
                                Karnataka
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
		</div>
		</div>
		</section>
		<br>
		<section class="text-center">
 <div class="download ">			
		<!-- <a class="down-btn" href="https://www.naya11.com/admin/uploads/apk/fantasy.apk">40+ Games to Play & Win</a> -->
			
				</div>
 </section>
 <br>
 
 	<section class=" money-withdraw-section text-center desktop">
    <div class=" container">
        <div class="  money-withdraw-layout">
            <div class=" row">
			<div class="col-md-12">
                <h2 class=" section-header section-header--large" style="margin-bottom:60px;">Fastest Redeem Process</h2>
            </div>
			</div>
            <div class=" row money-withdraw">
			<div class="col-md-2">
			
			</div>
                <div class=" money-withdraw-tile col-md-2">
                    <picture class="">
                     <img src="assets/img/bank-building.png" alt="Instant Transfer" class=" section-tile-image"></picture>
                    <h3 class="upi-name">Quick Redeem</h3>
                </div>
                <div class=" money-withdraw-tile col-md-2">
                    <picture class="">
                     <img src="assets/img/back-arrow.png" alt="quick redeem" class=" section-tile-image"></picture>
                    <h3 class="upi-name">NEFT</h3>
                </div>
                <div class=" money-withdraw-tile col-md-2">
                    <picture class="">
                     <img src="assets/img/paytm-icon.png" alt="Paytm Wallet" class=" section-tile-image"></picture>
                    <h3 class="upi-name">Paytm Bank</h3>
                </div>
            
                <div class=" money-withdraw-tile col-md-2">
                    <picture class="">
                    <img src="assets/img/bank-transfer.png" alt="Bank Transfer" class=" section-tile-image"></picture>
                    <h3 class="upi-name">Any Other Bank</h3>
                </div>
            </div>
        </div>
    </div>
</section>


	<section class=" money-withdraw-section text-center mobile">
    <div class=" container">
        <div class="  money-withdraw-layout">
            <div class=" row">
			<div class="col-md-12">
                <h2 class=" section-header section-header--large" style="margin-bottom:60px;">Fastest Redeem Process</h2>
            </div>
			</div>
            <div class=" row money-withdraw">
			
                <div class=" money-withdraw-tile col-md-2">
                    <picture class="">
                     <img src="assets/img/bank-building.png" alt="Instant Transfer" class=" section-tile-image"></picture>
                    <h3 class="upi-name">Quick Redeem</h3>
                </div>
                <div class=" money-withdraw-tile col-md-2">
                    <picture class="">
                     <img src="assets/img/back-arrow.png" alt="quick redeem" class=" section-tile-image"></picture>
                    <h3 class="upi-name">NEFT</h3>
                </div>
                <div class=" money-withdraw-tile col-md-2">
                    <picture class="">
                     <img src="assets/img/paytm-icon.png" alt="Paytm Wallet" class=" section-tile-image"></picture>
                    <h3 class="upi-name">Paytm Bank</h3>
                </div>
            
                <div class=" money-withdraw-tile col-md-2">
                    <picture class="">
                    <img src="assets/img/bank-transfer.png" alt="Bank Transfer" class=" section-tile-image"></picture>
                    <h3 class="upi-name">Any Other Bank</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="abt-sec text-center" style="padding-top:100px;">
<div class="container">
 <div class=" row text-center">
			<div class="col-md-12">
                <h2 class=" section-header section-header--large"  style="margin-bottom:60px;">Kung Fu Panda Game ON Esport</h2>
			
            </div>
			</div>
			
			<div class="row">
			<div class="col-md-12">
			<div class="first-abt">
			<h3>Play Kung Fu Panda game on Esport for Winning Daily </h3>
			
		<p>Kung Fu Panda game is available on Esport as single player mode. The single player mode is where it is run as a Daily Income Tournaments and your high score can win you money.</p>
           
            <h3>Kung Fu Panda</h3>
            <p>Run the Panda up and down. Avoid the shuricans that are flying horizontally. Collect the fruits for additional points.  
</p>
<ol style="text-align:left;">
    <li>   Tap on screen to run the panda up and down</li>
    <li>   Game ends if you hit the shurican</li>
    <li>   Collect fruit on the way for better score</li>
    <li>    Each run gives you 1 point</li>
    <li>    Each fruit gives you 10 points.</li>
   
</ol>
<br>			
 <section class="text-center">
 <div class="download ">			
		<!-- <a class="down-btn" href="https://www.naya11.com/admin/uploads/apk/fantasy.apk">Fix your Daily Income</a> -->
			
				</div>
 </section>
<br><br>			

<h3>Kung Fu Panda - can you reach 100 points? How many times could you cross 100 points</h3>
<p>Kung Fu Panda game is a very challenging game on Esport.</p>
<p>The game tests your patience and timing. While you have to cross to the other side avoiding the shurikans, taking fruits is also an easy way to increase your score</p>

<h3>Play Kung Fu Panda Leaderboard Tournament </h3>
<p>Kung Fu Panda Tournament is a leaderboard tournament running daily for 24 hrs. Players join the leaderboard by paying a small fee. Players are allowed to play unlimited times, to increase their score.
Only the highest score is considered for ranking. At the end the players are ranked based on their scores and winnings distributed.
</p>

<h3>Ending note </h3>
<p>Esport is a fantastic app as there are battles that you can play to earn money. Apart from these battles, there are leader board contents that keep on updating for more fantastic cash prizes. For more information, click here.</p>
			</div>
			</div>
			</div>
</div>
</section>

















    <!-- <section style="margin-top: 150px;">
        <h3 style="text-align: center;">User Register</h3>
        <div class="container">
            <form action="{{ url('/user/register') }}" method="POST" enctype="multipart/form-data">
    @csrf
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                                <label>User Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="User Name">
                                    </div>

                                        <div class="col-md-6" style="display: none">
                                                <label>User Id</label>
                                                <input type="text"  id="user_id" class="form-control"
                                    name="user_id" required autofocus value="uid{{$randomNumber}}">
                                    @if ($errors->has('user_id'))
                                <span class="text-danger">{{ $errors->first('user_id') }}</span>
                                @endif
                                        </div>

                                        <div class="col-md-6">
                                        <label for="state">State</label>
                                        <select id="state" name="state" class="form-control">
                                            @foreach($events->unique('state') as $event)
                                                <option value="{{ $event->state }}">{{ $event->state }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                                <label>Mobile/Email</label>
                                                <input type="text" class="form-control" name="mobile_email" placeholder="Mobile/Email">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="dob">Date Of Birth</label>
                                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Date Of Birth">
                                    </div>


                                    <div class="col-md-3">
                                                <label> Referal code</label>
                                                <input type="text" class="form-control" name="referalcode" placeholder=" Referal code">
                                    </div>
                                </div>
                                    <div class="text-right mt-3 mb-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section> -->

                    <script>
    // Set default value to today's date
    document.getElementById('dob').valueAsDate = new Date();
</script>



    @endsection