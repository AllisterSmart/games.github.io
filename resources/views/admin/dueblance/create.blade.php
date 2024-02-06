@extends('admin.layouts.app')

@section('content')


     <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>

<div class="container mt-5">
	<h3 style="text-align: center;">Add Due Blance</h3>
    <div class="myform mt-5">
    <form action="submit_form.php" method="post">
    	<div class="row">
        <div class="col-md-6">
            <label for="customer_id" class="form-label formlabel mt-3">Customer ID</label> &nbsp;<span>Please Do Not Cahnge This Id</span>
            <input type="text" class="form-control" id="customer_id" name="customer_id" required>
        </div>

        <div class="col-md-6">
            <label for="date" class="form-label formlabel mt-3">Date</label>
           <input type="date" class="form-control" id="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
        </div>

        <div class="col-md-6">
            <label for="customer_name" class="form-label formlabel mt-3">Customer Name</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label formlabel mt-3">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="col-md-6">
            <label for="mobile" class="form-label formlabel mt-3">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" required>
        </div>

        <div class="col-md-6">
            <label for="address" class="form-label formlabel mt-3">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <!-- Project Information -->
        <div class="col-md-6">
            <label for="project_name" class="form-label formlabel mt-3">Project Name</label>
            <input type="text" class="form-control" id="project_name" name="project_name" required>
        </div>
        <div class="col-md-6">
            <label for="project_price" class="form-label formlabel mt-3">Project Price</label>
            <input type="text" class="form-control" id="project_price" name="project_price" required>
        </div>

        <div class="col-md-6">
            <label for="compney_name" class="form-label formlabel mt-3">Compney Name</label>
            <input type="text" class="form-control" id="compney_name" name="compney_name" required>
        </div>
    </div>

        <div class="mt-3">
        <button type="submit" class="submitbtn btn">Submit</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="backbtn btn my-button"> Back </button>
    </div>
    </form>
</div>

@endsection