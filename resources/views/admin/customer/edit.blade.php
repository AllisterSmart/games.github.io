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
    <!-- <h3 style="text-align: center;">Add Purchase Projects</h3> -->
    <div class="myform mt-5">
    <form action="{{ route('customerupdate',$customer->id)}}" method="post">
          @csrf
        <h4 class="mt-5" style="background: aquamarine;padding: 5px;">Customer Information</h4>
        <div class="row">

        <div class="col-md-6">
            <label for="customer_name" class="form-label formlabel mt-3">Customer Name</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $customer->customer_name }}">
        </div>

        <div class="col-md-6">
            <label for="customer_email" class="form-label formlabel mt-3">Customer Email</label>
            <input type="email" class="form-control" id="customer_email" name="customer_email" value="{{ $customer->customer_email }}">
        </div>

        <div class="col-md-6">
            <label for="customer_mobile" class="form-label formlabel mt-3">Customer Mobile</label>
            <input type="text" class="form-control" id="customer_mobile" name="customer_mobile" value="{{ $customer->customer_mobile }}">
        </div>

        <div class="col-md-6">
            <label for="customer_address" class="form-label formlabel mt-3">Customer Address</label>
            <input type="text" class="form-control" id="customer_address" name="customer_address" value="{{ $customer->customer_address }}">
        </div>

         <div class="col-md-12">
    <label for="discreption" class="form-label formlabel mt-3">Description</label>
    <textarea class="form-control" id="discreption" name="discreption" rows="5" value="{{ $customer->discreption }}"></textarea>
</div>
    </div>

<h4 class="mt-5" style="background: aquamarine;padding: 5px;">Project Information</h4>
        <div class="row">
        <div class="col-md-6">
            <label for="project_name" class="form-label formlabel mt-3">Project Name</label>
            <input type="text" class="form-control" id="project_name" name="project_name" value="{{ $customer->project_name }}">
        </div>
        <div class="col-md-6">
            <label for="date" class="form-label formlabel mt-3">Date</label>
           <input type="date" class="form-control" id="date" name="date"  min="<?php echo date('Y-m-d'); ?>" value="{{ $customer->date }}">
        </div>
        <div class="col-md-6">
            <label for="project_price" class="form-label formlabel mt-3">Project Price</label>
            <input type="text" class="form-control" id="project_price" name="project_price" value="{{ $customer->project_price }}">
        </div>
        <div class="col-md-6">
            <label for="p_amount" class="form-label formlabel mt-3">Paid Amount</label>
            <input type="text" class="form-control" id="p_amount" name="p_amount" value="{{ $customer->p_amount }}">
        </div>

        <div class="col-md-6">
            <label for="d_amount" class="form-label formlabel mt-3">Due Amount</label>
            <input type="text" class="form-control" id="d_amount" name="d_amount" value="{{ $customer->d_amount }}">
        </div>
    </div>

    <h4 class="mt-5" style="background: aquamarine;padding: 5px;">Second Payment Information</h4>
        <div class="row">
        <div class="col-md-6">
            <label for="date" class="form-label formlabel mt-3">Date</label>
           <input type="date" class="form-control" id="date2" name="date2"  min="<?php echo date('Y-m-d'); ?>" value="{{ $customer->date2 }}">
        </div>
        <div class="col-md-6">
            <label for="p2_amount" class="form-label formlabel mt-3">Paid Amount</label>
            <input type="text" class="form-control" id="p2_amount" name="p2_amount" value="{{ $customer->p2_amount }}">
        </div>

        <div class="col-md-6">
            <label for="p2_amount" class="form-label formlabel mt-3">Due Amount</label>
            <input type="text" class="form-control" id="d2_amount" name="d2_amount" value="{{ $customer->d2_amount }}">
        </div>
    </div>

    <h4 class="mt-5" style="background: aquamarine;padding: 5px;">Third Payment Information</h4>
        <div class="row">
        <div class="col-md-6">
            <label for="date" class="form-label formlabel mt-3">Date</label>
           <input type="date" class="form-control" id="date3" name="date3"  min="<?php echo date('Y-m-d'); ?>" value="{{ $customer->date3 }}">
        </div>
        <div class="col-md-6">
            <label for="p3_amount" class="form-label formlabel mt-3">Paid Amount</label>
            <input type="text" class="form-control" id="p3_amount" name="p3_amount" value="{{ $customer->p3_amount }}">
        </div>

        <div class="col-md-6">
            <label for="d3_amount" class="form-label formlabel mt-3">Due Amount</label>
            <input type="text" class="form-control" id="d3_amount" name="d3_amount" value="{{ $customer->d3_amount }}">
        </div>
    </div>

    <h4 class="mt-5" style="background: aquamarine;padding: 5px;">Fourth Payment Information</h4>
        <div class="row">
        <div class="col-md-6">
            <label for="date" class="form-label formlabel mt-3">Date</label>
           <input type="date" class="form-control" id="date4" name="date4"  min="<?php echo date('Y-m-d'); ?>" value="{{ $customer->date4 }}">
        </div>
        <div class="col-md-6">
            <label for="p4_amount" class="form-label formlabel mt-3">Paid Amount</label>
            <input type="text" class="form-control" id="p4_amount" name="p4_amount" value="{{ $customer->p4_amount }}">
        </div>

        <div class="col-md-6">
            <label for="d4_amount" class="form-label formlabel mt-3">Due Amount</label>
            <input type="text" class="form-control" id="d4_amount" name="d4_amount" value="{{ $customer->d4_amount }}">
        </div>
    </div>

        <div class="mt-3">
        <button type="submit" class="submitbtn btn">Submit</button>
    </div>
    </form>
</div>

@endsection