@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Tournament</li>
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
                                            <a href="{{ url('createtournament') }}" class="btn btn-primary float-end mt-1">Add New Tournament</a>
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
                                                    <th>Action</th>
                                                    <th>Game Name</th>
                                                    <th>Category</th>
                                                    <th>Game Mode</th>
                                                    <th>User Mobile</th>
                                                    <th>Total Players</th>
                                                    <th>Trom Schedule</th>
                                                    <th>To Schedule</th>
                                                    <th>Entry Fees</th>
                                                    <th>Sponsor</th>
                                                    <th>Bonus Amount</th>
                                                    <th>Deposit Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>Lifetime Amount</th>
                                                    <th>Played Tournaments</th>
                                                    <th>Won Tournaments</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($tournaments as $tournament)
                                                <tr>
                                                    <td>{{ $tournament->id }}</td>
                                                    <td> 
                                                    <form id="deleteForm" action="{{ route('deletetournament', ['id'=> $tournament->id]) }}" method="get">
                <input type="hidden" value="{{ $tournament->id }}" name="id">
                <a href="{{ route('edittournament', ['id'=> $tournament->id]) }}"><i class="bi-pencil-square" style="text-decoration: none; display: inline-block;"> Edit</i></a>&nbsp;
                <button type="button" onclick="deleteTournament()" style="border: none; color: red;"><i class="bi-trash-fill"></i> Delete</button>
                <button style="border: none;" type="button" onclick="toggleActiveStatus()">Unblock</button>
            </form>                   
                                                    </td>
                                                    <td>{{ $tournament->game_name }}</td>
                                                    <td>{{ $tournament->category}}</td>
                                                    <td>{{ $tournament->game_mode}}</td>
                                                    <td>{{ $tournament->total_players}}</td>
                                                    <td>{{ $tournament->from_schedule}}</td>
                                                    <td>{{ $tournament->to_schedule}}</td>
                                                    <td>{{ $tournament->entry_fees}}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td> 
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
        </div>
        </section>
    </main>

   <script>
    function deleteTournament() {
        $.ajax({
            url: $("#deleteForm").attr("action"),
            method: "GET",
            data: $("#deleteForm").serialize(),
            success: function(response) {
                $("form#deleteForm").closest("tr").remove();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
    function toggleActiveStatus() {
        var button = $("form#deleteForm button[type='button']:last");
        var isActive = button.hasClass("active");
        if (isActive) {
            button.text("Block").removeClass("active").css("color", "red");
        } else {
            button.text("Unblock").addClass("active").css("color", "green");
        }
    }
</script>
@endsection
