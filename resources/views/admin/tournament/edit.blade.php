@extends('admin.layouts.app')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Tournament</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

    <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                            <div class="card card-with-nav">
                                <div class="card-body">

<form id="tournament" action="{{route('updatetournament', $tournament->id)}}" method="POST">
    @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col mt-3">
                                    <label>Games * </label>
                                    <select  type="text" class="form-control" name="game_name">
                                        <option>PUBG</option>
                                        <option>BGMI</option>
                                        <option>FreeFire</option>
                                        <option>Cricket</option>
                                        <option>Call Of Duty</option>
                                    </select>
                                    
                                </div>
                                    
                                    
                                    <div class="form-group col mt-1">
                                        <label>Title *</label>
                                        <input  type="text" class="form-control" value="{{ $tournament->title}}" name="title">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col mt-1">
                                        <label>Image *</label>
                                        <div class="input-group mt-1">
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                        <img src="{{ asset('web/images/tournament/'.$tournament->image) }}" width="150px" height="70px" alt="Image">
                                    </div>
                                    
                                    <div class="form-group col mt-1">
                                        <label>Map </label>
                                        <input type="text" class="form-control" value="{{ $tournament->map}}" name="map">
                                        <p style="color: blue; font-size:14px;">Leave this field empty if you don't want this option to be shown in the App.</p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-1">
                                        <label>Select Type *</label>
                                        <select  name="category" class="form-control m-b" fdprocessedid="ms9m78">
                                            <option value="solo">Solo</option>
                                            <option value="duo">Duo</option>
                                            <option value="squad">Squad</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col mt-1">
                                        <label>Select Mode *</label>
                                        <select  name="game_mode" class="form-control m-b" fdprocessedid="fe553i">
                                            <option value="no_mode">No Mode</option>
                                            <option value="tpp">TPP</option>
                                            <option value="fpp">FPP</option>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="form-group col mt-1">
                                        <label>Entry Fees *</label>
                                        <input  type="number" class="form-control" value="{{ $tournament->entry_fees}}" name="entry_fees">
                                    </div>
                                    
                                    <div class="form-group col mt-1">
                                        <label>Total Prize Pool *</label>
                                        <input  type="number" class="form-control" value="{{ $tournament->prize_pool}}" name="prize_pool" fdprocessedid="tjupqb">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-1">
                                        <label>Per Kill *</label>
                                        <input  type="number" class="form-control" value="{{ $tournament->per_kill}}" name="per_kill" value="-1" fdprocessedid="6owkmr">
                                        <p style="color: blue; font-size:14px;">Use -1 value if you don't want this option to be shown in the App.</p>
                                    </div>
                                    
                                    <div class="form-group col mt-1">
                                        <label>From Bonus *</label>
                                        <input  type="number" class="form-control" value="{{ $tournament->from_bonus}}" name="from_bonus" fdprocessedid="fbtf2c">
                                        <p style="color: blue; font-size:14px;">Can user use his bonus amount to participate in this tournament in case of insufficient balance.</p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-1">
                                        <label>Total Players *</label>
                                        <input  type="number" class="form-control" value="{{ $tournament->total_players}}" name="total_players" fdprocessedid="0qxo5l">
                                    </div>
                                    
                                    <div class="form-group col mt-1">
                                <label>Prize Distributions *</label>
                                <a class="float-right" onclick="addNewPrize()">Add New Prize</a>
                                <table class="table">
                                    <tbody id="prize_details">
                                        <tr>
                                     <td><input  type="text" class="form-control" value="{{ $tournament->start_rank_1}}" name="start_rank_1" placeholder="Start Rank" fdprocessedid="poij2e"></td>
                                     <td><input  type="text" class="form-control" value="{{ $tournament->start_rank_2}}" name="start_rank_2" placeholder="End Rank" fdprocessedid="r0qxd"></td>
                                     <td><input  type="text" class="form-control" value="{{ $tournament->amount}}" name="amount" placeholder="Amount" fdprocessedid="9hcobj"></td>
                                     <td><a type="button" class="remove-row" onclick="removePrize(this)"><i class="fas fa-times-circle"></i></a></td>
                                         </tr>
                                     </tbody>
                                 </table>
                                    <p style="color: blue; font-size:14px;">If you want distribution prize to be only for rank 1 then add 1 in start and end ranks.</p>
                                    </div>

                                <div class="row">
                                    <b><label>Tournament Schedule *</label></b>
                                <div class="col-md-6">
                                    <div class="form-group col mt-1">
                                      <label>From *</label>
                                      <div class="input-group">
                                        <input  type="date" class="form-control float-right" id="from_schedule" value="{{ $tournament->from_schedule}}" name="from_schedule" fdprocessedid="ssdhw">
                                      </div>
                                    </div>
                                </div>
                                
                                 <div class="col-md-6">
                                    <div class="form-group col mt-1">
                                      <label>To *</label>
                                      <div class="input-group">
                                        <input  type="date" class="form-control float-right" id="to_schedule" value="{{ $tournament->to_schedule}}" name="to_schedule" fdprocessedid="ssdhw">
                                      </div>
                                    </div>
                                </div>
                            </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-1">
                                        <label>Tournament Details *</label>
                                        <textarea  class="form-control" value="{{ $tournament->t_details}}" name="t_details" rows="3">Tournament Details 1, Tournament Details 2, ......</textarea>
                                        <p style="color: blue; font-size:14px;">Please enter tournament details separated with comma(,).</p>
                                    </div>
                                </div>
                            </div>

                                    <button class="btn btn-primary mt-2" type="submit" id="submitBtn" fdprocessedid="nazh7f">
                                        Add New Tournament
                                    </button>
                        
                    </div></form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
    function addNewPrize() {
        var rowCount = $('#prize_details tr').length;
        var newRow = '<tr>' +
            '<td><input  type="number" class="form-control" name="start_rank_' + rowCount + '" placeholder="Start Rank" fdprocessedid="poij2e"></td>' +
            '<td><input  type="number" class="form-control" name="end_rank_' + rowCount + '" placeholder="End Rank" fdprocessedid="r0qxd"></td>' +
            '<td><input  type="number" class="form-control" name="amount_' + rowCount + '" placeholder="Amount" fdprocessedid="9hcobj"></td>' +
            '<td>' +
                '<button type="button" class="remove-row" onclick="removePrize(this)"> 🗙 </button>' +
            '</td>' +
            '</tr>';
        $('#prize_details').append(newRow);
    }

    function removePrize(button) {
        $(button).closest('tr').remove();
    }
</script>
 


@endsection