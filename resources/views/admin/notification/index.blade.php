
@extends('admin.layouts.app')


@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-noti"><a href="index.html">Home</a></li>
          <li class="breadcrumb-noti active">Notification</li>
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
                        <a style="float: right;" href="{{ url('createloction') }}" class="btn btn-primary float-end mt-1">Notification</a>
                    </h4>
                    <!-- <button onclick="printTable()" class="btn btn-primary">Print Table</button> -->
                </div>
                <div class="card-body">
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Message</th>
                <th>Payload</th>
                <th>Image</th>
                <th>Click Action</th>
                <th>Destination</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notification as $noti)
            <tr>
                <td>{{ $noti->id }}</td>
                <td>{{ $noti->title }}</td>
                <td>{{ $noti->message }}</td>
                <td>{{ $noti->payload }}</td>
                <td>
                    <img src="{{ asset('web/images/notification/'.$noti->image) }}" width="150px" height="70px" alt="Image">
                </td>
                <td>{{ $noti->click_action }}</td>
                <td>{{ $noti->destination }}</td>
                <td>
                    <form action="{{ route('deletenotification', ['id'=> $noti->id]) }}" method="get">
                        <input type="hidden" value="{{ $noti->id }}" name="id">
                        <!-- <a href="{{ route('editnotification', ['id'=> $noti->id]) }}"><i class="bi-pencil-square" style="text-decoration: none; display: inline-block;"> Edit</i></a>&nbsp; -->
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