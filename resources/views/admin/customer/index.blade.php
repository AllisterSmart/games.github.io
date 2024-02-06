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
                <th>Customer Name</th>
                <th>Customer Email</th>
<!--                 <th>Customer Mobile</th>
                <th>Customer Address</th> -->
                <th>Project Name</th>
                <th>Project Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customer as $cust)
            <tr>
            	<td>{{ $cust->id }}</td>
                <td>{{ $cust->customer_name }}</td>
                <td>{{ $cust->customer_email }}</td>
<!--                 <td>{{ $cust->customer_mobile }}</td>
                <td>{{ $cust->customer_address }}</td> -->
                <td>{{ $cust->project_name }}</td>
                <td>{{ $cust->project_price }}</td>
                <td>
                	<form action="{{route('customerdelete',['id'=> $cust->id])}}" method="get">
            <input type="hidden" value="{{ $cust->id }}" name="id">
            <a href="{{route('customeredit',['id'=> $cust->id])}}"><i class="fa fa-edit" style="font-size:18px"></i> </a> 
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