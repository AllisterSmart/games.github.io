@extends('admin.layouts.app')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

    <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                            <div class="card card-with-nav">
                                <div class="card-body">

                    <form action="{{ route('updatebanner',$banner->id)}}" method="POST" enctype="multipart/form-data">
                        
                        @csrf


                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Banner Name</label>
                            <input type="text" name="name" value="{{$banner->name}}" class="form-control">
                            <input type="hidden" name="id" value="{{$banner->id}}">
                            @error('name')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Banner Heading</label>
                            <input type="text" name="heading" value="{{$banner->heading}}" class="form-control">
                            <input type="hidden" name="id" value="{{$banner->id}}">
                            @error('heading')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Banner Content</label>
                            <input type="text" name="content" value="{{$banner->content}}" class="form-control">
                            <input type="hidden" name="id" value="{{$banner->id}}">
                            @error('content')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Banner Background Image</label>
                            <input type="file" name="image" class="form-control"><br>
                            <img src="{{ asset('web/images/banners/'.$banner->image) }}" width="150px" height="70px" alt="Image">
                            <input type="hidden" name="id" value="{{$banner->id}}">
                            @error('Image')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Image 1</label>
                            <input type="file" name="image1" class="form-control"><br>
                            <img src="{{ asset('web/images/banners/'.$banner->image1) }}" width="150px" height="70px" alt="Image1">
                            <input type="hidden" name="id" value="{{$banner->id}}">
                            @error('Image1')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Image 2</label>
                            <input type="file" name="image2" class="form-control"><br>
                            <img src="{{ asset('web/images/banners/'.$banner->image2) }}" width="150px" height="70px" alt="Image2">
                            <input type="hidden" name="id" value="{{$banner->id}}">
                            @error('image2')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                    </div>
                        <div class="text-right mt-3 mb-3">
                            <button type="submit" class="btn btn-primary">Update Banner</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection