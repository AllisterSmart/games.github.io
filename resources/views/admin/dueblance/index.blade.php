@extends('admin.layouts.app')
<!-- Datatable Links -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
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
                <!-- <th>Name</th> -->
<!--                 <th>Email</th>
                <th>Mobile</th> -->
                <th>Project Name</th>
                <th>Project Price</th>
                <th>Paid Amount</th>
                <th>Due Amount</th>
            </tr>
        </thead>
        <tbody>
    @foreach($paidamount as $customer)
        @if($customer->project_price == $customer->p_amount + $customer->p2_amount + $customer->p3_amount + $customer->p4_amount)
            <!-- Skip the row if ProjectPrice equals PaidAmount -->
            @continue
        @endif
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->project_name }}</td>
<!--             <td>{{ $customer->customer_email }}</td>
            <td>{{ $customer->customer_mobile }}</td>
            <td>{{ $customer->customer_address }}</td> -->
            <td>{{ $customer->project_price }}</td>
            <td>{{ $customer->p_amount + $customer->p2_amount + $customer->p3_amount + $customer->p4_amount }}</td>
            <td>{{ $customer->project_price - $customer->p_amount + $customer->p2_amount + $customer->p3_amount + $customer->p4_amount }}</td>
        </tr>
    @endforeach
</tbody>


        </tbody>
    </table>
</div>

   <!-- Datatable Script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

   <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
} );
   </script>
@endsection