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
									<form action="{{ route('storetournaments') }}" method="POST" enctype="multipart/form-data">
                        				@csrf
									 <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 mt-3">
                                    <label>Games * </label>
                                    <select  type="text" class="form-control" name="game_name">
                                        <option>Select Game</option>
                                        @foreach( $games as $game)
                                        <option>{{ $game->game_name }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                                    
                                    
                                    <div class="form-group col mt-3">
                                        <label>Title *</label>
                                        <input  type="text" class="form-control" name="title">
                                    </div>
                                

									<div class="form-group col-md-6 mt-3">
												<label>Image</label>
												<input type="file" class="form-control" name="image" placeholder="Upload File">
									</div>
							<div class="form-group col-md-6 mt-3">
                                        <label>Map </label>
                                        <input type="text" class="form-control" name="map">
                                        <p style="color: blue; font-size:14px;">Leave this field empty if you don't want this option to be shown in the App.</p>
                                    </div>
                             
                                    <div class="form-group col-md-6 mt-3">
                                        <label>Select Type *</label>
                                        <select  name="game_type" class="form-control m-b" fdprocessedid="ms9m78">
                                            <option value="solo">Solo</option>
                                            <option value="duo">Duo</option>
                                            <option value="squad">Squad</option>
                                        </select>
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-6 mt-3">
                                        <label>Select Category *</label>
                                        <select  name="category" class="form-control m-b" fdprocessedid="ms9m78">
                                            <option value="solo">Select Category</option>
                                            @foreach( $category as $cat)
                                            <option value="duo">{{ $cat->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                   <div class="form-group col-md-6 mt-3">
                                        <div class="ui form">
                                            <div class="inline field">
                                                <label>Select Players</label>
                                                <select name="players[]" multiple="" class="label ui selection fluid dropdown">
                                                    <option value="" disabled selected>Select Players</option>
                                                    @foreach( $players as $player)
                                                        <option>{{ $player->player_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group col-md-6 mt-3">
                                        <label>Select Mode *</label>
                                        <select  name="game_mode" class="form-control m-b" fdprocessedid="fe553i">
                                            <option value="no_mode">No Mode</option>
                                            <option value="tpp">TPP</option>
                                            <option value="fpp">FPP</option>
                                        </select>
                                    </div>
                                
                                
                             
                                    <div class="form-group col-md-6 mt-3">
                                        <label>Predict Amount *</label>
                                        <input  type="text" class="form-control" name="entry_fees[]">
                                    </div>
                                    
                                    <div class="form-group col-md-6 mt-3">
                                        <label>Total Prize Pool *</label>
                                        <input  type="number" class="form-control" name="prize_pool" fdprocessedid="tjupqb">
                                    </div>
                                
                                    <div class="form-group col-md-6 mt-3">
                                        <label>Per Kill *</label>
                                        <input  type="number" class="form-control" name="per_kill" value="-1" fdprocessedid="6owkmr">
                                        <p style="color: blue; font-size:14px;">Use -1 value if you don't want this option to be shown in the App.</p>
                                    </div>
                                    
                                    <div class="form-group col-md-6 mt-3">
                                        <label>From Bonus *</label>
                                        <input  type="number" class="form-control" name="from_bonus" fdprocessedid="fbtf2c">
                                        <p style="color: blue; font-size:14px;">Can user use his bonus amount to participate in this tournament in case of insufficient balance.</p>
                                    </div>
                                
                                    <div class="form-group col-md-6 mt-1">
                                        <label>Total Players *</label>
                                        <input  type="number" class="form-control" name="total_players" fdprocessedid="0qxo5l">
                                    </div>
                                    
                                    <div class="form-group col-md-6 mt-1">
                                <label>Prize Distributions *</label>
                                <a class="float-right" onclick="addNewPrize()">Add New Prize</a>
                                <table class="table">
                                    <tbody id="prize_details">
                                        <tr>
                                     <td><input  type="text" class="form-control" name="start_rank_1" placeholder="Start Rank" fdprocessedid="poij2e"></td>
                                     <td><input  type="text" class="form-control" name="end_rank_2" placeholder="End Rank" fdprocessedid="r0qxd"></td>
                                     <td><input  type="text" class="form-control" name="amount" placeholder="Amount" fdprocessedid="9hcobj"></td>
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
                                     <input type="datetime-local" class="form-control float-right" id="from_schedule" name="from_schedule" fdprocessedid="ssdhw">
                                        </div>

                                    </div>
                                </div>
                                
                                 <div class="col-md-6">
                                    <div class="form-group col mt-1">
                                      <label>To *</label>
                                      <div class="input-group">
                                        <input type="datetime-local" class="form-control float-right" id="to_schedule" name="to_schedule" fdprocessedid="ssdhw">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                                <div class="row">
                                    <div class="form-group col mt-1">
                                        <label>Tournament Details *</label>
                                        <textarea  class="form-control" name="t_details" rows="3">Tournament Details 1, Tournament Details 2, ......</textarea>
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
 
<!--Multipule Select Options-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>

 
<script>
  $('.label.ui.dropdown')
  .dropdown();

$('.no.label.ui.dropdown')
  .dropdown({
  useLabels: false
});

$('.ui.button').on('click', function () {
  $('.ui.dropdown')
    .dropdown('restore defaults')
})

</script>
<style>
    body {
  padding: 40px;
}

.ui.dropdown {
  max-width: 800px;
}

@media only screen and (max-width: 767px) {
  .ui.selection.dropdown .menu {
    /*      max-height: 8.01428571rem; /* + 1.335714285 to 9.349999995rem */
    /*      max-height: 9.349999995rem; /* Adds a half */
    max-height: 16.02857142rem; /* Double size */
  }
}
@media only screen and (min-width: 768px) {
  .ui.selection.dropdown .menu {
    /*         max-height: 10.68571429rem; /* + 1.3357142863 to 12.0214285763rem */
    max-height: 12.0214285763rem;
  }
}
@media only screen and (min-width: 992px) {
  .ui.selection.dropdown .menu {
    max-height: 16.02857143rem; /* + 1.3357142858 to 17.3642857158rem */
  }
}
@media only screen and (min-width: 1920px) {
  .ui.selection.dropdown .menu {
    max-height: 21.37142857rem; /* + 1.3357142856 to 22.7071428556rem */
  }
}

</style>

<!--End Multipule Select Options-->


@endsection