<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\web\RazorpayController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\PaymentGetwayController;
// use App\Http\Controllers\web\RazorpayController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserregisterController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\web\RechargeController;
use App\Http\Controllers\AadhaarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// cache Routes
Route::get('/route-cache', function() {
     $exitCode = Artisan::call('route:cache');
     return 'Routes cache cleared';
 });
  Route::get('/config-cache', function() {
     $exitCode = Artisan::call('config:cache');
     return 'Config cache cleared';
 });
 Route::get('/clear-cache', function() {
     $exitCode = Artisan::call('cache:clear');
     return 'Application cache cleared';
 });
 Route::get('/view-clear', function() {
     $exitCode = Artisan::call('view:clear');
     return 'View cache cleared';
 });
 // End cache Routes

// Route::get('addwallet', [RazorpayController::class, 'addwallet'])->name('addwallet');

Route::get('/verify-otp/{user}',[RegisterController::class,'verifyOtp'])->name('verify.otp');
Route::post('/verify-otp/{user}',[RegisterController::class,'processOTP'])->name('verify.otp');
Route::get('/resend-otp/{user}',[RegisterController::class,'resendOTP'])->name('resend.otp');




Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});
    // Route::get('home', [App\Http\Controllers\web\HomeController::class, 'home'])->name('home');
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('profile',[HomeController::class,'profile'])->name('user.profile');
    Route::get('settings',[HomeController::class,'settings'])->name('user.settings');
    Route::post('/user/register',[UserregisterController::class,'register'])->name('/user/register');

    Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');


        Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
        Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
        Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
});

Route::group(['middleware'=>['isAdmin','auth','PreventBackHistory']], function(){

    // Locations
Route::get('loction', [App\Http\Controllers\Admin\LocationController::class, 'loction'])->name('loction');
Route::get('createloction', [App\Http\Controllers\Admin\LocationController::class, 'create'])->name('createloction');
Route::post('storeloction', [App\Http\Controllers\Admin\LocationController::class, 'store'])->name('storeloction');
Route::get('editloction/{id}', [App\Http\Controllers\Admin\LocationController::class, 'editloction'])->name('editloction');
Route::post('updateloction/{id}', [App\Http\Controllers\Admin\LocationController::class, 'updateloction'])->name('updateloction');
Route::get('deleteloction/{id}', [App\Http\Controllers\Admin\LocationController::class, 'deleteloction'])->name('deleteloction');


// Userlists
Route::get('userlist', [App\Http\Controllers\Admin\UserlistController::class, 'userlist'])->name('userlist');
Route::get('createuserlist', [App\Http\Controllers\Admin\UserlistController::class, 'create'])->name('createuserlist');
Route::post('storeuserlist', [App\Http\Controllers\Admin\UserlistController::class, 'store'])->name('storeuserlist');
Route::get('edituserlist/{id}', [App\Http\Controllers\Admin\UserlistController::class, 'edituserlist'])->name('edituserlist');
Route::post('updateuserlist/{id}', [App\Http\Controllers\Admin\UserlistController::class, 'updateuserlist'])->name('updateuserlist');
Route::get('deleteuserlist/{id}', [App\Http\Controllers\Admin\UserlistController::class, 'deleteuserlist'])->name('deleteuserlist');


// Tournaments
Route::get('tournaments', [App\Http\Controllers\Admin\TournamentsController::class, 'tournaments'])->name('tournaments');
Route::get('createtournaments', [App\Http\Controllers\Admin\TournamentsController::class, 'create'])->name('createtournaments');
Route::post('storetournaments', [App\Http\Controllers\Admin\TournamentsController::class, 'store'])->name('storetournaments');
Route::get('edittournaments/{id}', [App\Http\Controllers\Admin\TournamentsController::class, 'edit'])->name('edittournaments');
Route::post('updatetournaments/{id}', [App\Http\Controllers\Admin\TournamentsController::class, 'update'])->name('updatetournaments');
Route::get('deletetournaments/{id}', [App\Http\Controllers\Admin\TournamentsController::class, 'delete'])->name('deletetournaments');
     
     
     
     
      // UpcomingTournament
Route::get('upcomingtournament', [App\Http\Controllers\Admin\UpcomingTournamentsController::class, 'upcomingtournament'])->name('upcomingtournament');
Route::get('createupcomingtournament', [App\Http\Controllers\Admin\UpcomingTournamentsController::class, 'create'])->name('createupcomingtournament');
Route::post('storeupcomingtournament', [App\Http\Controllers\Admin\UpcomingTournamentsController::class, 'store'])->name('storeupcomingtournament');
Route::get('editupcomingtournament/{id}', [App\Http\Controllers\Admin\UpcomingTournamentsController::class, 'editupcomingtournament'])->name('editupcomingtournament');
Route::post('updateupcomingtournament/{id}', [App\Http\Controllers\Admin\UpcomingTournamentsController::class, 'updateupcomingtournament'])->name('updateupcomingtournament');
Route::get('deleteupcomingtournament/{id}', [App\Http\Controllers\Admin\UpcomingTournamentsController::class, 'deleteupcomingtournament'])->name('deleteupcomingtournament');


// Ongoing Tournament
Route::get('ongoingtournament', [App\Http\Controllers\Admin\OngoingTournamentsController::class, 'ongoingtournament'])->name('ongoingtournament');
Route::get('createongoingtournament', [App\Http\Controllers\Admin\OngoingTournamentsController::class, 'create'])->name('createongoingtournament');
Route::post('storeongoingtournament', [App\Http\Controllers\Admin\OngoingTournamentsController::class, 'store'])->name('storeongoingtournament');
Route::get('editongoingtournament/{id}', [App\Http\Controllers\Admin\OngoingTournamentsController::class, 'editongoingtournament'])->name('editongoingtournament');
Route::post('updateongoingtournament/{id}', [App\Http\Controllers\Admin\OngoingTournamentsController::class, 'updateongoingtournament'])->name('updateongoingtournament');
Route::get('deleteongoingtournament/{id}', [App\Http\Controllers\Admin\OngoingTournamentsController::class, 'deleteongoingtournament'])->name('deleteongoingtournament');

// Ofline Payment
Route::get('oflinepayment', [App\Http\Controllers\Admin\OflinePaymentController::class, 'oflinepayment'])->name('oflinepayment');
Route::get('createoflinepayment', [App\Http\Controllers\Admin\OflinePaymentController::class, 'create'])->name('createoflinepayment');
Route::post('storeoflinepayment', [App\Http\Controllers\Admin\OflinePaymentController::class, 'store'])->name('storeoflinepayment');
Route::get('editoflinepayment/{id}', [App\Http\Controllers\Admin\OflinePaymentController::class, 'editoflinepayment'])->name('editoflinepayment');
Route::post('updateoflinepayment/{id}', [App\Http\Controllers\Admin\OflinePaymentController::class, 'updateoflinepayment'])->name('updateoflinepayment');
Route::get('deleteoflinepayment/{id}', [App\Http\Controllers\Admin\OflinePaymentController::class, 'deleteoflinepayment'])->name('deleteoflinepayment');

// Tournament Result
Route::get('tournamentresult', [App\Http\Controllers\Admin\TournamentsResultController::class, 'tournamentresult'])->name('tournamentresult');
Route::get('createtournamentresult', [App\Http\Controllers\Admin\TournamentsResultController::class, 'create'])->name('createtournamentresult');
Route::post('storetournamentresult', [App\Http\Controllers\Admin\TournamentsResultController::class, 'store'])->name('storetournamentresult');
Route::get('edittournamentresult/{id}', [App\Http\Controllers\Admin\TournamentsResultController::class, 'edittournamentresult'])->name('edittournamentresult');
Route::post('updatetournamentresult/{id}', [App\Http\Controllers\Admin\TournamentsResultController::class, 'updatetournamentresult'])->name('updatetournamentresult');
Route::get('deletetournamentresult/{id}', [App\Http\Controllers\Admin\TournamentsResultController::class, 'deletetournamentresult'])->name('deletetournamentresult');



// Withdraw Request
Route::get('withdrawrequest', [App\Http\Controllers\Admin\WithdrawRequestController::class, 'withdrawrequest'])->name('withdrawrequest');
Route::get('createwithdrawrequest', [App\Http\Controllers\Admin\WithdrawRequestController::class, 'create'])->name('createwithdrawrequest');
Route::post('storewithdrawrequest', [App\Http\Controllers\Admin\WithdrawRequestController::class, 'store'])->name('storewithdrawrequest');
Route::get('editwithdrawrequest/{id}', [App\Http\Controllers\Admin\WithdrawRequestController::class, 'editwithdrawrequest'])->name('editwithdrawrequest');
Route::post('updatewithdrawrequest/{id}', [App\Http\Controllers\Admin\WithdrawRequestController::class, 'updatewithdrawrequest'])->name('updatewithdrawrequest');
Route::get('deletewithdrawrequest/{id}', [App\Http\Controllers\Admin\WithdrawRequestController::class, 'deletewithdrawrequest'])->name('deletewithdrawrequest');


 // Games
Route::get('games', [App\Http\Controllers\Admin\GamesController::class, 'games'])->name('games');
Route::get('creategames', [App\Http\Controllers\Admin\GamesController::class, 'create'])->name('creategames');
Route::post('storegames', [App\Http\Controllers\Admin\GamesController::class, 'store'])->name('storegames');
Route::get('editgames/{id}', [App\Http\Controllers\Admin\GamesController::class, 'edit'])->name('editgames');
Route::post('updategames/{id}', [App\Http\Controllers\Admin\GamesController::class, 'update'])->name('updategames');
Route::get('deletegames/{id}', [App\Http\Controllers\Admin\GamesController::class, 'delete'])->name('deletegames');


 // Transactions
Route::get('transactions', [App\Http\Controllers\Admin\TransactionsController::class, 'transactions'])->name('transactions');
Route::get('createtransactions', [App\Http\Controllers\Admin\TransactionsController::class, 'create'])->name('createtransactions');
Route::post('storetransactions', [App\Http\Controllers\Admin\TransactionsController::class, 'store'])->name('storetransactions');
Route::get('edittransactions/{id}', [App\Http\Controllers\Admin\TransactionsController::class, 'edittransactions'])->name('edittransactions');
Route::post('updatetransactions/{id}', [App\Http\Controllers\Admin\TransactionsController::class, 'updatetransactions'])->name('updatetransactions');
Route::get('deletetransactions/{id}', [App\Http\Controllers\Admin\TransactionsController::class, 'deletetransactions'])->name('deletetransactions');

 // Notification
Route::get('notification', [App\Http\Controllers\Admin\NotificationsController::class, 'notification'])->name('notification');
Route::get('createnotification', [App\Http\Controllers\Admin\NotificationsController::class, 'create'])->name('createnotification');
Route::post('storenotification', [App\Http\Controllers\Admin\NotificationsController::class, 'store'])->name('storenotification');
Route::get('editnotification/{id}', [App\Http\Controllers\Admin\NotificationsController::class, 'edit'])->name('editnotification');
Route::post('updatenotification/{id}', [App\Http\Controllers\Admin\NotificationsController::class, 'update'])->name('updatenotification');
Route::get('deletenotification/{id}', [App\Http\Controllers\Admin\NotificationsController::class, 'delete'])->name('deletenotification');


 // Data
Route::get('maindata', [App\Http\Controllers\Admin\MainDataController::class, 'maindata'])->name('maindata');


// Category
Route::get('category', [App\Http\Controllers\Admin\CategorysController::class, 'category'])->name('category');
Route::get('createcategory', [App\Http\Controllers\Admin\CategorysController::class, 'create'])->name('createcategory');
Route::post('storecategory', [App\Http\Controllers\Admin\CategorysController::class, 'store'])->name('storecategory');
Route::get('editcategory/{id}', [App\Http\Controllers\Admin\CategorysController::class, 'edit'])->name('editcategory');
Route::post('updatecategory/{id}', [App\Http\Controllers\Admin\CategorysController::class, 'update'])->name('updatecategory');
Route::get('deletecategory/{id}', [App\Http\Controllers\Admin\CategorysController::class, 'delete'])->name('deletecategory');


// Player
Route::get('players', [App\Http\Controllers\Admin\PlayersController::class, 'players'])->name('players');
Route::get('createplayer', [App\Http\Controllers\Admin\PlayersController::class, 'create'])->name('createplayer');
Route::post('storeplayer', [App\Http\Controllers\Admin\PlayersController::class, 'store'])->name('storeplayer');
Route::get('editplayer/{id}', [App\Http\Controllers\Admin\PlayersController::class, 'edit'])->name('editplayer');
Route::post('updateplayer/{id}', [App\Http\Controllers\Admin\PlayersController::class, 'update'])->name('updateplayer');
Route::get('deleteplayer/{id}', [App\Http\Controllers\Admin\PlayersController::class, 'delete'])->name('deleteplayer');

// Banner Routes
Route::get('banner', [App\Http\Controllers\Admin\BannerController::class, 'banner'])->name('banner');
Route::get('createbanner', [App\Http\Controllers\Admin\BannerController::class, 'create'])->name('createbanner');
Route::post('storebanner', [App\Http\Controllers\Admin\BannerController::class, 'store'])->name('storebanner');
Route::get('editbanner/{id}', [App\Http\Controllers\Admin\BannerController::class, 'editbanner'])->name('editbanner');
Route::post('updatebanner/{id}', [App\Http\Controllers\Admin\BannerController::class, 'updatebanner'])->name('updatebanner');
Route::get('deletebanner/{id}', [App\Http\Controllers\Admin\BannerController::class, 'deletebanner'])->name('deletebanner');


// Teams Routes
Route::get('team', [App\Http\Controllers\Admin\TeamController::class, 'team'])->name('team');
Route::get('createteam', [App\Http\Controllers\Admin\TeamController::class, 'create'])->name('createteam');
Route::post('storeteam', [App\Http\Controllers\Admin\TeamController::class, 'store'])->name('storeteam');
Route::get('editteam/{id}', [App\Http\Controllers\Admin\TeamController::class, 'edit'])->name('editteam');
Route::post('updateteam/{id}', [App\Http\Controllers\Admin\TeamController::class, 'update'])->name('updateteam');
Route::get('deleteteam/{id}', [App\Http\Controllers\Admin\TeamController::class, 'delete'])->name('deleteteam');

});





    Route::get('home',[HomeController::class,'index'])->name('user.dashboard');
    Route::get('playgames/{id}',[HomeController::class,'playgames'])->name('playgames');
    Route::get('profile',[HomeController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
    Route::get('wallet',[HomeController::class,'wallet'])->name('wallet');
    
Route::group(['middleware'=>['isUser','auth','PreventBackHistory']], function()
{
    Route::get('playerlist/{id}',[HomeController::class,'playerlist'])->name('playerlist');
    Route::get('pricelist/{id}',[HomeController::class,'pricelist'])->name('pricelist');
    Route::get('tournament/{id}', [HomeController::class, 'tournament'])->name('tournament');
    Route::get('wallet',[HomeController::class,'wallet'])->name('wallet');
    Route::get('/addwallet', [RazorpayController::class, 'addwallet'])->name('addwallet');
    Route::post('/create-order', [RazorpayController::class, 'createOrder'])->name('create.order');
    Route::post('/handle-payment', [RazorpayController::class, 'handlePayment'])->name('payment');
    Route::post('/deduct-balance', [HomeController::class, 'deductBalance'])->name('deductBalance');
    Route::post('/play-game', [HomeController::class, 'playGame'])->name('playGame');
    Route::get('/wallet/recharge', [RazorpayController::class, 'rechargeForm'])->name('razorpay.recharge');
    Route::post('/wallet/recharge', [RazorpayController::class, 'initiateRecharge']);
    Route::get('/wallet/payment/{orderId}', [RazorpayController::class, 'handlePayment'])->name('razorpay.payment');
    Route::post('/wallet/confirm-payment', [RazorpayController::class, 'confirmPayment'])->name('razorpay.confirm-payment');
    Route::get('/recharge', [RechargeController::class, 'index'])->name('recharge.index');
    Route::post('/recharge/process', [RechargeController::class, 'processRecharge'])->name('recharge.process');
    Route::post('/initiate-recharge', [RechargeController::class, 'initiateRecharge'])->name('initiate-recharge');

});

    
    
Route::get('/balance/{userId}', [RazorpayController::class, 'showBalanceForm'])->name('balance-form');
Route::post('/balance/{userId}', [RazorpayController::class, 'addBalance'])->name('add-balance');

    
    
    
    
    
    
    
    
    
    
    
    
    
    
