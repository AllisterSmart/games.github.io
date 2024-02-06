@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
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
                                            <!-- <a href="{{ url('createloction') }}" class="btn btn-primary float-end mt-1">Add location</a> -->
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
                                                    <th>User Id</th>
                                                    <th>User Name</th>
                                                    <th>User Email</th>
                                                    <th>User Mobile</th>
                                                    <th>Transactions</th>
                                                    <th>Profile Image</th>
                                                    <th>Register Date</th>
                                                    <th>Login Date</th>
                                                    <th>Referral Code</th>
                                                    <th>Sponsor</th>
                                                    <th>Bonus Amount</th>
                                                    <th>Deposit Amount</th>
                                                    <th>Winning Amount</th>
                                                    <th>Lifetime Amount</th>
                                                    <th>Played Tournaments</th>
                                                    <th>Won Tournaments</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($userlist as $user)
                                                @if(!empty($user->user_id))
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->user_id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->mobile}}</td>
                                                    <td>{{ $user->transactions }}</td>
                                                    <td>{{ $user->image }}</td>
                                                    <td>{{ $user->register_date }}</td>
                                                    <td>{{ $user->login_date }}</td>
                                                    <td>{{ $user->referal_date }}</td>
                                                    <td>{{ $user->sponsor }}</td>
                                                    <td>{{ $user->bonus_amount }}</td>
                                                    <td>{{ $user->deposit_amount }}</td>
                                                    <td>{{ $user->winning_amount }}</td>
                                                    <td>{{ $user->lifetime_amount }}</td>
                                                    <td>{{ $user->played_tournament }}</td>
                                                    <td>{{ $user->won_tournament }}</td>
                                                    <td>
                                                        <form action="" method="get">
                        <input type="hidden" value="" name="id">
                        <a href=""><i class="bi-pencil-square" style="text-decoration: none; display: inline-block;"> Edit</i></a>&nbsp;
                        <button type="submit" style="border: none; color: red;"><i class="bi-trash-fill"></i> Delete</button>
                    </form>
                                                    </td>
                                                </tr>
                                                @endif
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
@endsection
