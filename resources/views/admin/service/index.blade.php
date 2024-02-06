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
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Project Name</th>
                <th>Project Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            	<td>1</td>
                <td>Tiger Nixon</td>
                <td>admin@gmail.com</td>
                <td>9999999999</td>
                <td>Web Applection</td>
                <td>75000</td>
                <td>
                	<form action="" method="get">
            <input type="hidden" value="" name="id">
            <a href=""><i class="fa fa-edit" style="font-size:18px"></i> </a> 
            &nbsp;                
            <button type="submit" style="border: none;"><i class="fa fa-trash" aria-hidden="true" style="font-size:18px; color: red; cursor: pointer;"></i></button>
                            </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection