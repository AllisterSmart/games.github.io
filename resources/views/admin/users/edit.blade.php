@extends('admin.layouts.app')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
<div class="main-panel">
            <div class="content">
                <div class="page-inner">
                            <div class="card card-with-nav">
                                <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          
                    <h4>
                        <a style="margin-top: 20px;" style="float: right;" href="{{ route('thator') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('updatethator',$thator->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                             <div class="col-md-6 myform">
                            <label>Thator Name</label>
                                <input type="text" class="form-control" value="{{$thator->name}}" name="name" placeholder="Country">
                                    @error('name')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                    </div>

                        <div class="form-group col-md-6 myform">
                            <label for="">Location</label>
                            <input type="text" name="location" value="{{$thator->location}}" class="form-control">
                            <input type="hidden" name="id" value="{{$thator->id}}">
                            @error('location')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>

                        <div class="form-group col-md-6 myform">
                            <label for="">Thator Image</label>
                            <input type="file" name="image" class="form-control"><br>
                            <img src="{{ asset('web/images/thators/'.$thator->image) }}" width="112px" height="40px" alt="Image" style="border: 2px solid; margin-top: -30px;">
                            <input type="hidden" name="id" value="{{$thator->id}}">
                            @error('thator')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                    </div>
                        <div class="text-right mt-3 mb-3">
                            <button type="submit" class="btn btn-primary">Update thator</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
</main>

@endsection