@extends('admin.layouts.app')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Games</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

    <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                            <div class="card card-with-nav">
                                <div class="card-body">

<form id="game" action="{{route('updateteam', $teams->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
                            <div class="card-body">

                                <div class="form-group col">
                                    <label> Name * </label>
                                    <input required="" type="text" class="form-control" name="name" value="{{$teams->name}}">
                                </div>
                                
                                <div class="form-group col">
                                    <label> Contact * </label>
                                    <input required="" type="text" class="form-control" name="contact" value="{{$teams->contact}}">
                                </div>
                                
                                <div class="form-group col">
                                    <label> Address * </label>
                                    <input required="" type="text" class="form-control" name="address" value="{{$teams->address}}">
                                </div>
                                
                                <div class="form-group col">
                                    <label> About * </label>
                                    <input required="" type="text" class="form-control" name="about" value="{{$teams->about}}">
                                </div>
                                
                                <div class="form-group col">
                                    <label>Game Play * </label>
                                    <input required="" type="text" class="form-control" name="game_play" value="{{$teams->game_play}}">
                                </div>
                                
                                <div class="form-group col mt-3">
                                    <label>Image *</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" placeholder="Upload File" name="image" id="file" value="{{$teams->image}}">
                                    </div>
                                    <img src="{{ asset('web/images/team/'.$teams->image) }}" width="150px" height="70px" alt="Image" class="mt-2">
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-primary" type="submit" id="submitBtn" fdprocessedid="k9rt9k">
                                        Update Game
                                    </button>
                                </div>
                            </div>
                        </form>

@endsection