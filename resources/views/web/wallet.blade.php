@extends('web.layouts.app')

@section('content')

        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="m-0">Wallet Connect</h2>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">Wallet Connect</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Wallet Connect Area Start ***** -->
        <section class="wallet-connect-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-7">
                        <!-- Intro -->
                        <div class="intro text-center">
                            <div class="intro-content">
                                <!--<span class="intro-text">Wallet Connect</span>-->
                                <h3 class="mt-3 mb-0">Add your Wallet Blance</h3>
                                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <!-- Single Wallet -->
                        <div class="card single-wallet">
                            <a class="d-block text-center" href="">
                                <img class="avatar-lg" src="assets/img/content/metamask.png" alt="">
                                <h4 class="mb-0">RazerPay</h4>
                                <!--<p>A browser extension with great flexibility. The web's most popular wallet</p>-->
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <!-- Single Wallet -->
                        <div class="card single-wallet">
                            <a class="d-block text-center" href="">
                                <img class="avatar-lg" src="assets/img/content/authereum.png" alt="">
                                <h4 class="mb-0">PhonePe</h4>
                                <!--<p>A user-friendly wallet that allows you to sign up with your phone number on any device</p>-->
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <!-- Single Wallet -->
                        <div class="card single-wallet">
                            <a class="d-block text-center" href="">
                                <img class="avatar-lg" src="assets/img/content/walletconnect.png" alt="">
                                <h4 class="mb-0">Paytem</h4>
                                <!--<p>Pair with Trust, Argent, MetaMask &amp; more. Works from any browser, without an extension</p>-->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Wallet Connect Area End ***** -->

        @endsection