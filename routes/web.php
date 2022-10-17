<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BioSpecimenRequestController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Livewire\FilterBiospecimenComponent;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth', 'role:guest']], function () {
    Route::get('account', [App\Http\Controllers\WebController::class, 'account'])->name('myaccount');
    Route::get('account/requests', [App\Http\Controllers\WebController::class, 'myRequests'])->name('myrequests');
    Route::get('account/requests/{id}', [App\Http\Controllers\WebController::class, 'myRequest'])->name('myrequest');
    Route::post('account/update/{user}', [App\Http\Controllers\Auth\RegisteredUserController::class, 'update'])->name('updateguest');
    Route::resource('guestusers', RegisteredUserController::class);
});
Route::get('home', [App\Http\Controllers\WebController::class, 'index']);
Route::get('/', [App\Http\Controllers\WebController::class, 'index']);
Route::get('web', [App\Http\Controllers\WebController::class, 'index']);
Route::get('faq', [App\Http\Controllers\WebController::class, 'faq']);
Route::get('contact', [App\Http\Controllers\WebController::class, 'contact']);
Route::get('projects/', [App\Http\Controllers\WebController::class, 'Allprojects']);

Route::get('sars-cov-2/', [App\Http\Controllers\WebController::class, 'cov19'])->name('covid19');

//Route::get('biospecimens/filter/{specimentype}', FilterBiospecimenComponent::class)->name('biospecimenfilter');
Route::get('biospecimens/filter/{specimentype}', [BioSpecimenRequestController::class, 'filter'])->name('biospecimenfilter');
Route::post('biospecimens/filter/{specimentype}', [BioSpecimenRequestController::class, 'filter'])->name('biospecimenfilter');
Route::resource('biospecimenrequests', BioSpecimenRequestController::class);

Route::get('project/view/{code}/{name}', [App\Http\Controllers\WebController::class, 'projectDeatiled']);
Route::get('project/view/{code}/{name}/{specimen}', [App\Http\Controllers\WebController::class, 'tissueProjectDeatiled']);

Route::get('biospecimens/', [App\Http\Controllers\WebController::class, 'biospecimen']);
Route::get('biospecimens/specimenType/{id}', [App\Http\Controllers\WebController::class, 'biospecimenType']);
Route::get('biospecimens/all/{specimen}/{project}', [App\Http\Controllers\WebController::class, 'bioAll']);
Route::get('biospecimens/view/{id}/{name}', [App\Http\Controllers\WebController::class, 'bioDeatiled']);

Route::get('tissues/specimenType/{id}', [App\Http\Controllers\WebController::class, 'tissueProSampleType']);
Route::get('tissues/', [App\Http\Controllers\WebController::class, 'tissues']);
Route::get('tissues/all/{specimen}/{project}', [App\Http\Controllers\WebController::class, 'tissueAll']);
Route::get('tissues/view/{id}/{name}', [App\Http\Controllers\WebController::class, 'tissueDeatiled']);

Route::get('organs/specimenType/{id}', [App\Http\Controllers\WebController::class, 'tissueProSampleType']);
Route::get('organs/', [App\Http\Controllers\WebController::class, 'organs']);
Route::get('organs/all/{specimen}/{project}', [App\Http\Controllers\WebController::class, 'tissueAll']);
Route::get('organs/view/{id}/{name}', [App\Http\Controllers\WebController::class, 'tissueDeatiled']);

Route::get('cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::post('cart/add', [App\Http\Controllers\CartController::class, 'store']);
Route::get('/cart/delete/{cart}', [App\Http\Controllers\CartController::class, 'destroy']);
Route::post('/request/add', [App\Http\Controllers\SpecimenRequestController::class, 'store']);
Route::get('/request/view/{id}', [App\Http\Controllers\WebController::class, 'viewRequest']);
Route::post('/request/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store2'])->name('Reqregister');

//-------------------------user subscription-----------------------------------------------
Route::post('user/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');
Route::post('user/contact', [ContactMessageController::class, 'store'])->name('contact');

//------------------------------------Admin Login Routes------------------------------------------------------
Route::group(['namespace' => 'catalogue', 'middleware' => ['auth', 'role:admin|superadmin|user'], 'prefix' => 'catalogue'], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard2', [App\Http\Controllers\DashboardController::class, 'index2']);
    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index']);
    Route::get('/projects/new/{id}', [App\Http\Controllers\ProjectController::class, 'create']);
    Route::post('/projects/add', [App\Http\Controllers\ProjectController::class, 'store']);
    Route::get('/projects/delete/{id}', [App\Http\Controllers\ProjectController::class, 'destroy']);
    Route::post('/projects/update/{id}', [App\Http\Controllers\ProjectController::class, 'update']);

    //----------------------------------------country routes--------------------------
    Route::post('/countries/add', [App\Http\Controllers\CountryController::class, 'store']);
    Route::get('/countries/delete/{id}', [App\Http\Controllers\CountryController::class, 'destroy']);

    //----------------------------------------sites routes--------------------------
    Route::post('/sites/add', [App\Http\Controllers\CollectionSiteController::class, 'store']);
    Route::get('/sites/delete/{id}', [App\Http\Controllers\CollectionSiteController::class, 'destroy']);

    //----------------------------------------objectives routes--------------------------
    Route::post('/objectives/add', [App\Http\Controllers\ProjectObjectiveController::class, 'store']);
    Route::get('/objective/delete/{id}', [App\Http\Controllers\ProjectObjectiveController::class, 'destroy']);

    //-----------------------------sp types------------------------------------------------------
    Route::get('/specimentypes', [App\Http\Controllers\SpecimenTypeController::class, 'index']);
    Route::post('/specimenTypes/add', [App\Http\Controllers\SpecimenTypeController::class, 'store']);
    Route::get('/specimenTypes/delete/{id}', [App\Http\Controllers\SpecimenTypeController::class, 'destroy']);
    Route::post('specimenTypes/update/{id}', [App\Http\Controllers\SpecimenTypeController::class, 'update']);

    //-----------------------------BiospecimenController------------------------------------------------------
    Route::get('/biospecimens', [App\Http\Controllers\BiospecimenController::class, 'index']);
    Route::get('/biospecimen/new', [App\Http\Controllers\BiospecimenController::class, 'create']);
    Route::post('/biospecimen/add', [App\Http\Controllers\BiospecimenController::class, 'store']);
    Route::get('/biospecimen/edit/{id}', [App\Http\Controllers\BiospecimenController::class, 'edit']);
    Route::get('/biospecimen/show/{id}', [App\Http\Controllers\BiospecimenController::class, 'show']);
    Route::get('/biospecimen/view/{id}', [App\Http\Controllers\BiospecimenController::class, 'showIntel']);
    Route::get('/biospecimens/type/{id}', [App\Http\Controllers\BiospecimenController::class, 'bioSpecific']);
    Route::get('/biospecimens/imports/{id}', [App\Http\Controllers\BiospecimenController::class, 'showimports']);
    Route::get('/biospecimen/delete/{id}', [App\Http\Controllers\BiospecimenController::class, 'destroy']);
    Route::post('biospecimen/update/{id}', [App\Http\Controllers\BiospecimenController::class, 'update']);
    Route::get('/getProject', [App\Http\Controllers\BiospecimenController::class, 'getProject'])->name('getProject');
    Route::post('/biospecimen/import', [App\Http\Controllers\BiospecimenController::class, 'import'])->name('import_bio');
    Route::get('/biospecimen/import-batch', [App\Http\Controllers\BiospecimenController::class, 'importBatchs']);
    //-----------------------------OrganController------------------------------------------------------
    Route::get('/organs', [App\Http\Controllers\OrganController::class, 'index']);
    Route::get('/organs/new', [App\Http\Controllers\OrganController::class, 'create']);
    Route::post('/organs/add', [App\Http\Controllers\OrganController::class, 'store']);
    Route::post('/organs/import', [App\Http\Controllers\OrganController::class, 'import'])->name('import_organ');
    Route::get('/organs/imports/{id}', [App\Http\Controllers\OrganController::class, 'showimports']);
    Route::get('/organs/import-batch', [App\Http\Controllers\OrganController::class, 'importBatchs']);

    //-----------------------------tissuesController------------------------------------------------------
    Route::get('/tissues', [App\Http\Controllers\TissueController::class, 'index']);
    Route::get('/tissues/new', [App\Http\Controllers\TissueController::class, 'create']);
    Route::post('/tissues/add', [App\Http\Controllers\TissueController::class, 'store']);
    Route::get('/tissues/edit/{id}', [App\Http\Controllers\TissueController::class, 'edit']);
    Route::get('/tissues/show/{id}', [App\Http\Controllers\TissueController::class, 'show']);
    Route::get('/tissues/view/{id}', [App\Http\Controllers\TissueController::class, 'showIntel']);
    Route::get('/tissues/type/{id}', [App\Http\Controllers\TissueController::class, 'tissueProSpecific']);
    Route::get('/tissues/imports/{id}', [App\Http\Controllers\TissueController::class, 'showimports']);
    Route::get('/tissues/delete/{id}', [App\Http\Controllers\TissueController::class, 'destroy']);
    Route::post('tissues/update/{id}', [App\Http\Controllers\TissueController::class, 'update']);
    Route::post('/tissues/import', [App\Http\Controllers\TissueController::class, 'import'])->name('import_tissue');
    Route::get('/tissues/import-batch', [App\Http\Controllers\TissueController::class, 'importBatchs']);

    Route::get('/requests', [App\Http\Controllers\SpecimenRequestController::class, 'index']);
    Route::get('/request/view/{id}', [App\Http\Controllers\SpecimenRequestController::class, 'show']);

    //----------------------------------------import routes---------------------------------------------------

    Route::post('/import_process', [App\Http\Controllers\BiospecimenController::class, 'processImport'])->name('import_process');
});
require __DIR__.'/auth.php';
