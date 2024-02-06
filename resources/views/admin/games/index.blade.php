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
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>
                                            <a href="{{ url('creategames') }}" class="btn btn-primary float-end mt-1">Add Games</a>
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
                                                    <th>Game Name</th>
                                                    <th>Category</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($games as $game)
                                                    <tr>
                                                        <td>{{ $game->id }}</td>
                                                        <td>{{ $game->game_name }}</td>
                                                        <td>{{ $game->category }}</td>
                                                        <td>
                                                            <img src="{{ asset('web/images/games/'.$game->image) }}" width="150px" height="70px" alt="Image">
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('deletegames', ['id'=> $game->id]) }}" method="get">
                        <input type="hidden" value="{{ $game->id }}" name="id">
                        <a href="{{ route('editgames', ['id'=> $game->id]) }}"><i class="bi-pencil-square" style="text-decoration: none; display: inline-block;"> Edit</i></a>&nbsp;
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
