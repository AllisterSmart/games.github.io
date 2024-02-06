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

<form id="category" action="{{ route('updatecategory',$category->id)}}" method="POST">
    @csrf
                            <div class="card-body">

                                <div class="form-group col">
                                    <label>Category Name * </label>
                                    <input required="" type="text" class="form-control" value="{{$category->category}}" name="category">
                                </div>
                                    
                                </div>
                            
                                
                                    <button class="btn btn-primary" type="submit" id="submitBtn" fdprocessedid="k9rt9k">
                                        Update Category
                                    </button>
                                </div>
                            </div>
                        </form>

@endsection