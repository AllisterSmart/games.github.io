@extends('admin.layouts.app')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">players</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

    <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                            <div class="card card-with-nav">
                                <div class="card-body">

<form id="game" action="{{route('updateplayer', $players->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
                            <div class="card-body">

                                <div class="form-group col">
                                    <label>Game Name * </label>
                                    <input required="" type="text" class="form-control" name="player_name" value="{{$players->player_name}}">
                                </div>

                                 <div class="form-group col mt-3">
    <label>Games * </label>
    <select class="form-control" name="category" required>
        <option value="" disabled selected>Select Category</option>
        @foreach($category as $cat)
            <option value="{{ $cat->category }}" @if($players->category == $cat->category) selected @endif>
                {{ $cat->category }}
            </option>
        @endforeach
    </select>
</div>
                                    
                                </div>
                                
                                <div class="form-group col mt-3">
                                    <label>Image *</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" placeholder="Upload File" name="image" id="file" value="{{$players->image}}">
                                    </div>
                                    <img src="{{ asset('web/images/players/'.$players->image) }}" width="150px" height="70px" alt="Image" class="mt-2">
                                </div>
                               
                                    <button class="btn btn-primary mt-3" type="submit" id="submitBtn" fdprocessedid="k9rt9k">
                                        Update Game
                                    </button>
                            </div>
                        </form>

@endsection