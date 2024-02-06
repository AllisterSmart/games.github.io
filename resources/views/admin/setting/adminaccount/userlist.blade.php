
@extends('admin.layouts.app')

@section('content')


            <div id="content">
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
<div class="table-reponsive box">
<table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usersetting as $user)
            <tr>
            	<td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                	<form action="{{route('deleteadmin',['id'=> $user->id])}}" method="get">
            <input type="hidden" value="{{ $user->id }}" name="id">
            <a href="{{route('editadmin',['id'=> $user->id])}}"><i class="fa fa-edit" style="font-size:18px"></i> </a> 
            &nbsp;                
            <button type="submit" style="border: none;"><i class="fa fa-trash" aria-hidden="true" style="font-size:18px; color: red; cursor: pointer;"></i></button>
                            </form>
                </td>
            @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection