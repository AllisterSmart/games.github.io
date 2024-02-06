@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Teams</li>
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
                                            <a href="{{ url('createteam') }}" class="btn btn-primary float-end mt-1">Add Team</a>
                                        </h4>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="table-header">
                                        <!-- Search bar or any other header elements go here -->
                                        <!-- For example: -->
                                        <!-- <input type="text" placeholder="Search..." /> -->
                                    </div>

                                    <div class="table-responsive" style="overflow-y: auto;">
                                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Contact</th>
                                                    <th>Address</th>
                                                    <th>Game Play</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($teams as $team)
                                                    <tr>
                                                        <td>{{ $team->id }}</td>
                                                        <td>{{ $team->name }}</td>
                                                        <td>{{ $team->contact }}</td>
                                                        <td>{{ $team->address }}</td>
                                                        <td>{{ $team->game_play }}</td>
                                                        <td>
                                                            <img src="{{ asset('web/images/team/'.$team->image) }}" width="150px" height="70px" alt="Image">
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('deleteteam', ['id'=> $team->id]) }}" method="get">
                        <input type="hidden" value="{{ $team->id }}" name="id">
                        <a href="{{ route('editteam', ['id'=> $team->id]) }}"><i class="bi-pencil-square" style="text-decoration: none; display: inline-block;"> Edit</i></a>&nbsp;
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
