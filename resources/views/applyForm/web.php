<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\View;
use app\Http\livewire;
use app\Http\livewire\Counter;
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

/*Route::get('/', function () {
    return view('front_end/index');
});*/

Auth::routes();
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});

Artisan::command('logs:clear', function () {

    exec('rm -f ' . storage_path('logs/*.log'));

    exec('rm -f ' . base_path('*.log'));

    $this->comment('Logs have been cleared!');
})->describe('Clear log files');

Route::view('contact-us','applyForm.apply_view');

Route::view('contact-us-db','applyForm.apply_view');

Route::view('contact-us-test','applyForm.apply_form_demo');

Route::view('apply-form','apply_form_demo');

Route::view('apply-new','apply_now_view');

Route::view('bl-apply','front_end/LoanPages/BussinessLoan/bl_apply_form');
Route::view('bl-apply-test','front_end/LoanPages/BussinessLoan/bl_apply_form_view');

Route::view('pl-page','front_end/Pages/indexPage/index');

Route::view('pl-loan-page','front_end.Pages.PersonalLoan.personal_loan_view');

Route::get('/log-clear', function () {
    Artisan::call('logs:clear');
});

Route::get('cibil-first',function(){
  
    // return view('cibilform/checkmobile');
    return view('cibilform/cibilwithheader');

});

Route::get('cibil-first-header',function(){
  
    return view('cibilform/checkmobile');

});

Route::post('submitDebitCardData',[App\Http\Controllers\FrontendController::class,'submitDebitCardData'])->name('submitDebitCardData');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/loan-list', [App\Http\Controllers\HomeController::class, 'loan_list'])->name('loan-list');
    Route::get('detail-loan/{id}', [App\Http\Controllers\HomeController::class, 'detail_loan'])->name('detail-loan');
    Route::get('/page-list', [App\Http\Controllers\HomeController::class, 'page_list'])->name('page-list');
    Route::get('/create-page/{id}', [App\Http\Controllers\HomeController::class, 'create_page'])->name('create-page');
    Route::put('update-page/{id}', [App\Http\Controllers\HomeController::class, 'updatePage'])->name('update-page');
    Route::get('/view-page/{id}', [App\Http\Controllers\HomeController::class, 'view_page'])->name('view-page');
    Route::get('/create-slider', [App\Http\Controllers\HomeController::class, 'create_slider'])->name('create-slider');
    Route::get('/slider-list', [App\Http\Controllers\HomeController::class, 'slider_list'])->name('slider-list');
    Route::post('insert-slider', [App\Http\Controllers\HomeController::class, 'insert_slider'])->name('insert-slider');
    Route::get('delete-slider/{id}', [App\Http\Controllers\HomeController::class, 'delete_slider'])->name('delete-slider');
    Route::get('edit-slider/{id}', [App\Http\Controllers\HomeController::class, 'edit_slider'])->name('edit-slider');
    Route::put('update-slider/{id}', [App\Http\Controllers\HomeController::class, 'updateSlider'])->name('update-slider');
    Route::get('view-slider/{id}', [App\Http\Controllers\HomeController::class, 'view_slider'])->name('view-slider');


    Route::get('/service-list', [App\Http\Controllers\HomeController::class, 'service_list'])->name('service-list');
    Route::get('/create-service', [App\Http\Controllers\HomeController::class, 'create_service'])->name('create-service');
    Route::post('insert-service', [App\Http\Controllers\HomeController::class, 'insert_service'])->name('insert-service');
    Route::get('delete-service/{id}', [App\Http\Controllers\HomeController::class, 'delete_service'])->name('delete-service');
    Route::get('edit-service/{id}', [App\Http\Controllers\HomeController::class, 'edit_service'])->name('edit-service');
    Route::put('update-service/{id}', [App\Http\Controllers\HomeController::class, 'updateService'])->name('update-service');
    Route::get('view-service/{id}', [App\Http\Controllers\HomeController::class, 'view_service'])->name('view-service');


    Route::get('/compare-list', [App\Http\Controllers\HomeController::class, 'compare_list'])->name('compare-list');
    Route::get('/create-compare', [App\Http\Controllers\HomeController::class, 'create_compare'])->name('create-compare');
    Route::post('insert-compare', [App\Http\Controllers\HomeController::class, 'insert_compare'])->name('insert-compare');
    Route::get('delete-compare/{id}', [App\Http\Controllers\HomeController::class, 'delete_compare'])->name('delete-compare');
    Route::get('edit-compare/{id}', [App\Http\Controllers\HomeController::class, 'edit_compare'])->name('edit-compare');
    Route::put('update-compare/{id}', [App\Http\Controllers\HomeController::class, 'update_compare'])->name('update-compare');
    Route::get('/loan-management', [App\Http\Controllers\HomeController::class, 'loan_management'])->name('loan-management');
    Route::post('update-loan-management', [App\Http\Controllers\HomeController::class, 'updateloanmanagement'])->name('update-loan-management');
});
Route::group(['middleware' => 'guest'], function () {

    // Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('page-content-list', [App\Http\Controllers\UpdateContentController::class, 'pageContentList'])->name('content-list');
    Route::get('page-content-add', [App\Http\Controllers\UpdateContentController::class, 'pageContentAdd'])->name('content-add');
    Route::get('page-content-edit/{id}', [App\Http\Controllers\UpdateContentController::class, 'pageContentEdit'])->name('content-edit');
    Route::get('admin-login', [App\Http\Controllers\UpdateContentController::class, 'index']);
    Route::post('update-content-form', [App\Http\Controllers\UpdateContentController::class, 'formUpdate']);
    Route::post('content-form-insert', [App\Http\Controllers\UpdateContentController::class, 'formInsert']);
});
Route::get('/test-header', [App\Http\Controllers\FrontendController::class, 'indexHeader'])->name('test-header');

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::get('/faqs', [App\Http\Controllers\FrontendController::class, 'faqs'])->name('faqs');
Route::get('/check-cibil-score', [App\Http\Controllers\FrontendController::class, 'CheckCibilScore'])->name('check-cibil-score');
Route::get('/why-choose-us', [App\Http\Controllers\FrontendController::class, 'WhyChooseUs'])->name('why-choose-us');



Route::get('/personal-loan', [App\Http\Controllers\FrontendController::class, 'PersonalLoan'])->name('personal-loan');
Route::get('/business-loan', [App\Http\Controllers\FrontendController::class, 'BusinessLoan'])->name('business-loan');
Route::get('/home-loan', [App\Http\Controllers\FrontendController::class, 'HomeLoan'])->name('home-loan');
Route::get('/car-loan', [App\Http\Controllers\FrontendController::class, 'CarLoan'])->name('car-loan');
Route::get('/credit-cards', [App\Http\Controllers\FrontendController::class, 'CreditCards'])->name('credit-cards');
Route::get('/debit-cards', [App\Http\Controllers\FrontendController::class, 'DebitCards'])->name('debit-cards');
Route::get('/fixed-deposit', [App\Http\Controllers\FrontendController::class, 'FixedDeposit'])->name('fixed-deposit');
Route::get('/mutual-funds', [App\Http\Controllers\FrontendController::class, 'MutualFunds'])->name('mutual-funds');
Route::get('/creditcards-continue', [App\Http\Controllers\FrontendController::class, 'CreditcardsContinue'])->name('creditcards-continue');
Route::get('/thank-you', [App\Http\Controllers\FrontendController::class, 'ThankYou'])->name('thank-you');
Route::post('create-personal-loan', [App\Http\Controllers\FrontendController::class, 'createEmployee'])->name('create-personal-loan');
Route::post('create-business-loan', [App\Http\Controllers\FrontendController::class, 'createBusinessLoan'])->name('create-business-loan');
Route::post('create-home-loan', [App\Http\Controllers\FrontendController::class, 'createHomeLoan'])->name('create-home-loan');
Route::post('create-car-loan', [App\Http\Controllers\FrontendController::class, 'createCarLoan'])->name('create-car-loan');
Route::post('create-credit-loan', [App\Http\Controllers\FrontendController::class, 'createCreditLoan'])->name('create-credit-loan');
Route::post('create-fixed-loan', [App\Http\Controllers\FrontendController::class, 'createFixedDepositLoan'])->name('create-fixed-loan');
Route::post('compare-interest-rate', [App\Http\Controllers\FrontendController::class, 'CompareInterestRate'])->name('compare-interest-rate');


Route::get('ifsc', [App\Http\Controllers\FrontendController::class, 'IfscPage'])->name('ifsc');

Route::view('header','front_end.HeaderFile.nav_header');

Route::view('test-pesonal-loan','front_end.infoPage.personal_loan_view');

Route::get('/cal-personal-loan', function () {
    // return view('front_end/cal-personal-loan');
    return view('front_end/calculatorPage/personal_loan_view');
})->name('cal-personal-loan');

Route::get('/cal-test', function () {
    // return view('front_end/cal-personal-loan');
    return view('CalculatorPage/test_cal_view');
})->name('cal-test');


Route::get('/cal-business-loan', function () {
    // return view('front_end/cal-business-loan');
    return view('front_end/calculatorPage/cal-business-loan');
})->name('cal-business-loan');

Route::get('/cal-home-loan', function () {
    // return view('front_end/cal-home-loan');
    return view('front_end/calculatorPage/cal-home-loan');
})->name('cal-home-loan');

Route::get('/cal-car-loan', function () {
    //calculatorPage
    // return view('front_end/cal-car-loan');
    return view('front_end/calculatorPage/cal-car-loan');
})->name('cal-car-loan');

Route::get('/sip-calculator', function () {
    return view('front_end/sip-calculator');
})->name('sip-calculator');

Route::get('/gst-calculator', function () {
    //calculatorPage
    // return view('front_end/gst-calculator');
    return view('front_end/calculatorPage/gst-calculator');
})->name('gst-calculator');

Route::get('/fd-calculator', function () {
    return view('front_end/fd-calculator');
})->name('fd-calculator');

Route::get('/ppf-deposit', function () {
    // return view('front_end/ppf-deposit');
    return view('front_end/calculatorPage/ppf-deposit');
})->name('ppf-deposit');

Route::get('/mutual-fund-calculator', function () {
    return view('front_end/mutual-fund-calculator');
})->name('mutual-fund-calculator');

Route::get('/term-and-conditions', function () {
    return view('front_end/term-and-conditions');
})->name('term-and-conditions');

Route::get('/privacy-policy', function () {
    return view('front_end/privacy-policy');
})->name('privacy-policy');

// Route::get('/loan-against-property', function () {
//     return view('front_end/loan-against-property');
// })->name('loan-against-property');

Route::get('/loan-against-property', function () {
    return view('front_end/Pages/loan-against-property');
})->name('loan-against-property');


Route::get('/livewire-test',function(){
    //   return "hellow";
    return view('front_end/livewire_test');
})->name('livewire-test');

Route::get('/livewire',function(){
    //   return "hellow";
    return view('front_end/livewire_test2');
})->name('livewire-test-2');

Route::get('/contact-form',function(){
    //   return "hellow";
    return view('front_end/contact_form_test');
})->name('contact-form');

Route::get('/demo-livewire',function(){
    //   return "hellow";
    return view('front_end/demo_livewire');
})->name('demo-livewire');
