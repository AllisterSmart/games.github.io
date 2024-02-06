@extends('web.layouts.app')
<style>
  
.wallet-container {
  background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjOvSperRYjHH9-EHlKZJBfwvXy4rJpyerzHQsnp8DuuycYU5_);
  width: 320px;
  color: #fff;
  font-size: 15px;
  padding: 20px 20px 0;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  position: absolute;
}

.page-title {
  text-align: left;
}

.fa-user {
  float: right;
}

.fa-align-left {
  margin-right: 15px;
}

.amount-box img {
  width: 50px;
}

.amount {
  font-size: 35px;
}

.amount-box p {
  margin-top: -10px;
  margin-bottom: -15px;
}

.btn-group {
  /*margin: 20px 0;*/
}

.btn-group .btn {
  margin: 8px;
  border-radius: 20px !important;
  font-size: 12px;
}

.txn-history {
  text-align: left;
}

.txn-list {
  background-color: #fff;
  padding: 12px 10px;
  color: #777;
  font-size: 14px;
  margin: 7px 0;
}

.debit-amount {
  color: red;
  float: right;
}

.credit-amount {
  color: green;
  float: right;
}

.footer-menu {
  margin: 20px -20px 0;
  bottom: 0;
  border-top: 1px solid #ccc;
  padding: 10px 10px 0;
}

.footer-menu p {
  font-size: 12px;
}

@media screen and (max-width: 800px) {
  .wallet-container {
    height: 115%;
    bottom: 20px;
    margin-top: 100px;
  }
}

.razorpay-payment-button{
    display: none;
}
</style>


@section('content')


<section >

  <div class="wallet-container text-center" style="margin-top: -20px; padding-bottom: 85px;">
    <p class="page-title"><i class="fa fa-align-left"></i>My E-wallet<i class="fa fa-user"></i></p>

    <div class="amount-box text-center">
      <!--<img src="https://lh3.googleusercontent.com/ohLHGNvMvQjOcmRpL4rjS3YQlcpO0D_80jJpJ-QA7-fQln9p3n7BAnqu3mxQ6kI4Sw" alt="wallet">-->
      <p>Total Balance</p>
      <p class="amount"><img src="{{asset('web/images/coins.png')}}">0</p>
    </div>

    <div class="btn-group text-center">
      <!--<button type="button" class="btn btn-outline-light">Add Money</button>-->
      
      <!--Popup form-->
      <div class="form-popup" id="myForm">
 <form id="payment-form" action="{!! route('payment') !!}" class="form-container" method="post">
    <h3 style="text-align: center">Add Balance</h3>
    <script src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="rzp_test_QPfy4tDzaD5Gnb" <!-- Replace with your actual Razorpay API key -->
            data-amount="" <!-- This will be set dynamically using JavaScript -->
            data-currency="INR" <!-- Replace with your desired currency code -->
            data-name="phpicoder"
            data-description="Order Value"
            data-image="logo.png"
            data-theme.color="#ff7529">
    </script>
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <input type="hidden" name="paymentId" id="paymentId" value="">
    <input type="hidden" name="orderId" id="orderId" value="">
    <label for="balance"><b>Balance</b></label>
    <input type="number" placeholder="Enter Balance" name="balance" id="balance" required>
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn" onclick="openRazorpay()">Add</button>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </div>
    </div>
</form>
</div>
      <!--End form-->
      <button class="btn btn-outline-light" onclick="openForm()">Add Money</button>
      <button type="button" class="btn btn-outline-light">Widthdraw</button>
    </div>

    <div class="txn-history">
      <p><b>History</b></p>
      <p class="txn-list">Payment to xyz shop<span class="debit-amount">-₹100</span></p>

      <p class="txn-list">Payment to abc shop<span class="debit-amount">-₹150</span></p>

      <p class="txn-list">Credit From abc ltd<span class="credit-amount">+₹300</span></p>

      <p class="txn-list">Transfer From John Doe<span class="credit-amount">+₹100</span></p>
    </div>
  </div>

</section>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<style>

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #2745fb;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 20px;
    width: 280px;
    font-size: 18px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 284px;
  padding: 25px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 5px 0px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<script>
    function openRazorpay() {
        var amount = document.getElementById('balance').value;
        if (amount <= 0) {
            alert('Please enter a valid amount.');
            return;
        }
        var options = {
            key: 'rzp_test_QPfy4tDzaD5Gnb', 
            amount: amount * 100, 
            currency: 'INR',
            name: '19 Loops It Service',
            description: 'Order Value',
            image: 'logo.png',
            theme: {
                color: '#ff7529'
            },
            handler: function(response) {
                console.log(response);
                document.forms[0].submit();
            }
        };
        var rzp = new Razorpay(options);
        rzp.open();
    }
</script>


    @endsection
