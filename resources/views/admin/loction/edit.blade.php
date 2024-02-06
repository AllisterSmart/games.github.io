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
                        <a style="margin-top: 20px;" style="float: right;" href="{{ route('loction') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('updateloction',$loction->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                             <div class="col-md-6 myform">
                            <label>Country</label>
                                <input type="text" class="form-control" value="{{$loction->country}}" name="country" placeholder="Country">
                                    @error('country')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                    </div>

                        <div class="form-group col-md-6 myform">
                            <label for="">State</label>
                            <input type="text" name="state" value="{{$loction->state}}" class="form-control">
                            <input type="hidden" name="id" value="{{$loction->id}}">
                            @error('state')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div class="form-group col-md-6 myform">
                            <label for="">City</label>
                            <input type="text" name="city" value="{{$loction->city}}" class="form-control">
                            <input type="hidden" name="id" value="{{$loction->id}}">
                            @error('city')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                        
                       

                        <div class="form-group col-md-6 myform">
                            <label for="">Loction Image</label>
                            <input type="file" name="image" class="form-control"><br>
                            <img src="{{ asset('web/images/loctions/'.$loction->image) }}" width="112px" height="40px" alt="Image" style="border: 2px solid; margin-top: -30px;">
                            <input type="hidden" name="id" value="{{$loction->id}}">
                            @error('loction')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                    </div>
                        <div class="text-right mt-3 mb-3">
                            <button type="submit" class="btn btn-primary">Update loction</button>
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