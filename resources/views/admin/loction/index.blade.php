
@extends('admin.layouts.app')


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Location</li>
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
                        <a style="float: right;" href="{{ url('createloction') }}" class="btn btn-primary float-end mt-1">Add loction</a>
                    </h4>
                    <!-- <button onclick="printTable()" class="btn btn-primary">Print Table</button> -->
                </div>
                <div class="card-body">
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Location Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loction as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->country }}</td>
                <td>{{ $item->state }}</td>
                <td>{{ $item->city }}</td>
                <td>
                    <img src="{{ asset('web/images/loctions/'.$item->image) }}" width="150px" height="70px" alt="Image">
                </td>
                <td>
                    <form action="{{ route('deleteloction', ['id'=> $item->id]) }}" method="get">
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <a href="{{ route('editloction', ['id'=> $item->id]) }}"><i class="bi-pencil-square" style="text-decoration: none; display: inline-block;"> Edit</i></a>&nbsp;
                        <button type="submit" style="border: none; color: red;"><i class="bi-trash-fill"></i> Delete</button>
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
</div>
</div>
</div>
</section>
</main>


@endsection