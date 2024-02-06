@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Main Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="content">
                <div class="container-fluid">
                    <div class="card card-primary">
                        <form id="main_data_form" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <input type="hidden" name="from" value="update_main_data">
                                        <label>Login Username *</label>
                                        <input required="" type="text" class="form-control mt-1" name="login_username" value="" fdprocessedid="bf73z">
                                    </div>
                                    
                                    <div class="form-group col mt-3">
                                        <label>Login Password *</label>
                                        <input required="" type="text" class="form-control mt-1" name="login_password" value="" fdprocessedid="adrrbi">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <input type="hidden" name="from" value="update_main_data">
                                        <label>App Version *</label>
                                        <input required="" type="number" class="form-control mt-1" name="version" value="" fdprocessedid="glhj9r">
                                    </div>
                                    
                                
                                    
                                    <div class="form-group col mt-3">
                                        <label>App Link *</label>
                                        <input required="" type="text" class="form-control mt-1" name="app_link" value="" fdprocessedid="0ewmkm">
                                    </div>
                                    
                                    <div class="form-group col mt-3">
                                        <label>Website Link *</label>
                                        <input required="" type="text" class="form-control mt-1" name="website_link" value="" fdprocessedid="3bn8cs">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <label>You Tube *</label>
                                        <input required="" type="text" class="form-control mt-1" name="youtube" value="" fdprocessedid="8n4g3m">
                                    </div>
                                    
                                    <div class="form-group col mt-3">
                                        <label>Instagram *</label>
                                        <input required="" type="text" class="form-control mt-1" name="instagram" value="" fdprocessedid="6mv10p">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <label>Privacy Policy *</label>
                                        <input required="" type="text" class="form-control mt-1" name="privacy_policy" value="" fdprocessedid="dg6le7">
                                    </div>
                                    
                                    <div class="form-group col mt-3">
                                        <label>Terms Link *</label>
                                        <input required="" type="text" class="form-control mt-1" name="terms" value="" fdprocessedid="fijfwbd">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <label>Referral Amount *</label>
                                        <input required="" type="number" class="form-control mt-1" name="refer_amount" value="" fdprocessedid="ni399k">
                                    </div>
                                    
                                    <div class="form-group col mt-3">
                                        <label>Minimum Withdraw *</label>
                                        <input required="" type="number" class="form-control mt-1" name="min_withdraw" value="" fdprocessedid="0ggz7f">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <label>Registration Bonus Amount *</label>
                                        <input required="" type="number" class="form-control mt-1" name="registration_bonus" value="" fdprocessedid="lmggf">
                                    </div>

                                    <div class="form-group col mt-3">
                                        <label>Select Payment Gateway *</label>
                                        <select required="" name="gateway_id" id="payment_gateway" class="form-control mt-1 m-b" fdprocessedid="wsfx8e">
                                            <option value="1">RazorPay</option>
                                            <option value="2">Instamojo</option>
                                            <option value="3">Paytm</option>
                                            <option value="4">PayUMoney</option>                                     </select>
                                    </div>
                                </div>

                                    <div class="form-group col mt-3">                                            
                                                <div id="payment_div_2" style="display : ">
                                                    <label>Key *</label>
                                                    <input type="text" class="form-control mt-1" name="key_value_2" value="key value" fdprocessedid="curihb">
                                                    <br>
                                                    <label>Salt *</label>
                                                    <input type="text" class="form-control mt-1" name="salt_value_2" value="salt value" fdprocessedid="qc3b3q">
                                                </div>
                                            </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <label>Update Details *</label>
                                        <textarea required="" class="form-control mt-1" name="update_details" rows="5"></textarea>
                                        <p style="color: blue; font-size:14px;">Please enter update details separated with comma(,).</p>
                                    </div>
                                    
                                    <div class="form-group col mt-3">
                                        <label>Share Text *</label>
                                        <textarea required="" class="form-control mt-1" name="share_txt" rows="5"></textarea>
                                        <p style="color: blue; font-size:14px;">Use '%referral_link%' where to want to add user's referral link.</p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-3">
                                        <label>Announcements *</label>
                                        <textarea required="" class="form-control mt-1" name="announcements" rows="5"></textarea>
                                        <p style="color: blue; font-size:14px;">Please enter announcements separated with comma(,).</p>
                                    </div>
                                    
                                    <div class="form-group col mt-3">
                                        <label>Offline Payment Instructions *</label>
                                        <textarea required="" class="form-control mt-1" name="offline_payment_instructions" rows="5"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit" id="save" fdprocessedid="tvo2v">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
    </main>
@endsection
