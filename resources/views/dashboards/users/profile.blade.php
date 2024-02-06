@extends('web.layouts.app')

<link rel="stylesheet" type="text/css" href="{{asset('css/userprofile.css')}}">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">


@section('content')

<section class=" mt-10">
 <div class="container">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="" style="text-align: center; padding: 7px 20px 0px 20px; border-radius: 5px; color: blue;">
     Your Profile
      </h4>
    </div>
    <!-- Panel-Body -->
    <div class="panel-body">
      <div class="row">
        <div class="col-xs-12 col-md-3 col-lg-3" align="center">
          @guest
    {{-- Guest content --}}
@else
    <img src="{{ Auth::user()->picture }}" alt="User Picture">
@endguest
        </div><!-- /.col-xs-12 -->
        <!-- User Information -->
        <div class="col-xs-12 col-md-5 col-lg-5 glyphicon glyphicon-home">
    <table class="user-table text-primary">
    <tr>
        <th>User Information</th>
        <th>Details</th>
    </tr>
    <tr>
        <td>User Name</td>
        <td>
            @guest
                Guest
            @else
                {{ Auth::user()->name }}
            @endguest
        </td>
    </tr>
    <tr>
        <td>User Mobile</td>
        <td>
            @guest
                Guest
            @else
                {{ Auth::user()->mobile }}
            @endguest
        </td>
    </tr>
    <tr>
        <td>User Email</td>
        <td>
            @guest
                Guest
            @else
                {{ Auth::user()->email }}
            @endguest
        </td>
    </tr>
    <tr>
        <td>User Address</td>
        <td>
            @guest
                Guest
            @else
                {{ Auth::user()->address }}
            @endguest
        </td>
    </tr>
</table>



        </div><!-- /.col-xs-12 -->
      </div><!-- /.row -->
    </div><!-- /.panel-body -->
    <!-- Panel-Footer -->
    <div class="panel-footer">
      <h5 class="pull-left">&copy; Practice makes perfect</h5>
      <div class="pull-right">
        <a href="#" data-original-title="Follow" data-toggle="tooltip" type="button" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-heart"></i></a>
        <a data-original-title="Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-pencil"></i></a>
      </div>
    </div>
  </div><!-- /.panel panel-info -->
</div><!-- /.container -->
    </section>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>






@endsection