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

<form id="game" action="{{route('storegames')}}" method="POST" enctype="multipart/form-data">
    @csrf
                            <div class="card-body">

                                <div class="form-group col">
                                    <label>Game Name * </label>
                                    <input required="" type="text" class="form-control" name="game_name">
                                </div>

                                <div class="form-group col mt-3">
                                    <label>Category * </label>
                                    <select required="" type="text" class="form-control" name="category">
                                        <option>Select Category</option>
                                        @foreach( $category as $cat)
                                        <option>{{ $cat->category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group col mt-3">
                                    <label>Image *</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" placeholder="Upload File" name="image" id="file">
                                    </div>
                                </div>
                                
                                <div class="form-group col mt-3">
                                    <label>Tutorials link * </label>
                                    <input required="" type="text" class="form-control" name="tutorials_link">
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-primary" type="submit" id="submitBtn" fdprocessedid="k9rt9k">
                                        Add New Game
                                    </button>
                                </div>
                            </div>
                        </form>

@endsection