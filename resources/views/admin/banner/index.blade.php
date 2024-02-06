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
    <div class="row">
        <div class="col-md-12">
            
                    <h4>
                        <!--<a style="float: right;" href="{{route('createbanner')}}" class="btn btn-primary float-end mt-1">Add Banner</a>-->
                    </h4>
                    <!-- <button onclick="printTable()" class="btn btn-primary">Print Table</button> -->
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Heading</th>
                                <th>Content</th>
                                <th>Background image</th>
                                <th>image 1</th>
                                <th>image 2</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banner as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->heading }}</td>
                                <td>{{ $item->content }}</td>
                                <td>
                                    <img src="{{ asset('web/images/banners/'.$item->image) }}" width="150px" height="70px" alt="Image">
                                </td>
                                <td>
                                    <img src="{{ asset('web/images/banners/'.$item->image1) }}" width="150px" height="70px" alt="Image">
                                </td>
                                <td>
                                    <img src="{{ asset('web/images/banners/'.$item->image2) }}" width="150px" height="70px" alt="Image">
                                </td>

                                <td>
                                    <form action="{{route('deletebanner',['id'=> $item->id])}}" method="get">
            <input type="hidden" value="{{$item->id}}" name="id">
            <a href="{{route('editbanner',['id'=> $item->id])}}"><i class="fa fa-edit" style="font-size:24px"></i> Edit</a>                 
            <button type="submit" style="border: none;"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:24px; color: red"></i> Delete</button>
                            </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>


@endsection