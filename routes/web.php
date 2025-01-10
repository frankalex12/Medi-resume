<?php

use App\Http\Controllers\Allergiecontroller;
use App\Http\Controllers\Antecedentcontroller;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Centre\ConsultationCentreController;
use App\Http\Controllers\Centre\patientsCentreController;
use App\Http\Controllers\Centre\PersonnelsController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\GroupeSpecialiteController;
use App\Http\Controllers\HopitalController;
use App\Http\Controllers\Parametrescontroller;
use App\Http\Controllers\PatientrController;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\PersonnelDashboardController;
use App\Http\Controllers\PersonnelsSanitaireController;
use App\Http\Controllers\QuatierController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SousCategorieController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\VilleController;
use App\Models\Allergie;
use App\Models\Categorie;
use GuzzleHttp\Promise\Create;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', function () {
    return view('welcome');
});

// Auth
Route::get('logout', [LogoutController::class,'logout'])->name('logout');
Route::get('/login',[loginController::class,'loginCreate'])->name('login');
Route::post('/login/verification',[loginController::class,'login'])->name('login.verif');
Route::get('/register/choose', [ loginController::class,'choose'])->name('register.chose');


// Admin dashboard
// Route::view('/admin/home','Admin.layouts');
Route::get('/admin/home', [DashboardAdminController::class,'index'] )->name('Admin.dashboard');
// localisation
Route::resource('Admin/pays', PaysController::class);
Route::resource('Admin/region', RegionController::class);
Route::resource('Admin/departement', DepartementController::class);
Route::resource('Admin/ville', VilleController::class);
Route::resource('Admin/quartier',QuatierController::class);
// centre hospitalier
Route::resource('Admin/categorie', CategorieController::class);
Route::resource('Admin/souscategorie', SousCategorieController::class);
Route::resource('Admin/groupespecialite',GroupeSpecialiteController::class);
Route::resource('Admin/specialite',SpecialiteController::class);
Route::get('Admin/hopitals', [HopitalController::class,'index'])->name('hopitals.index');
Route::get('Admin/patient', [PatientrController::class,'adminPatient'])->name('admin.patient');
Route::get('Admin/patient/{id}', [PatientrController::class,'showadminPatient'])->name('admin.patient.show');
Route::get('Admin/hopitals/{id}', [HopitalController::class,'show'])->name('admin.hopitals.show');
Route::resource('Admin/personnels', PersonnelsSanitaireController::class);//revoir

// Route::post('hopital/register-infos', [HopitalController::class,'infos'])->name('infos.store')->middleware('hopital.register');
// Route::post('hopitals/{id}', [HopitalController::class,'show'])->name('admin.hopitals.update');







// HOPITAL register
Route::get('hopital/create', [HopitalController::class,'create'])->name('hopital.create');
Route::post('hopital/store', [HopitalController::class,'store'])->name('hopitals.store');
Route::get('hopital/create-continu', [HopitalController::class,'continuCreate'])->name('hopitals.continu.create');
Route::post('hopital/store-continu', [HopitalController::class,'continuStore'])->name('hopitals.continu.store');
Route::get('hopital/indic', [HopitalController::class,'indicatif'])->name('hopitals.indic');
// hopitals dashboard
Route::get('/hopitals/home', [HopitalController::class,'hopital'])->name('hopitals.dashboard');
Route::get('/hopitals/home/personnel', [PersonnelsController::class, 'index'])->name('hopitals.home.personnel');
Route::get('/hopitals/home/personnel/add', [PersonnelsController::class, 'add'])->name('hopitals.home.personnel.add');
Route::post('/hopitals/home/personnel/add', [PersonnelsController::class, 'affecter'])->name('hopitals.home.personnel.affecter');
Route::get('/hopitals/home/patient', [patientsCentreController::class, 'index'])->name('hopitals.home.patient');
Route::get('/hopitals/home/consultation', [ConsultationCentreController::class, 'index'])->name('hopitals.home.consultaion');
Route::get('/hopitals/showPersonnel/{id}', [HopitalController::class,'showPersonnel'])->name('admin.hopitals.showPersonnel');
Route::get('/hopitals/showPatient/{id}', [HopitalController::class,'showPatient'])->name('admin.hopitals.showPatient');
// hopital

//





// user register
Route::get('user/register', [RegisterController::class,'create'])->name('user.register');
Route::post('user/store', [RegisterController::class,'store'])->name('user.store');
Route::get('user/register/create-continu', [RegisterController::class,'continuCreate'])->name('user.continu.create');
Route::post('user/register/store-continu', [RegisterController::class,'continuStore'])->name('user.continu.store');
Route::get('user/indic', [RegisterController::class,'indicatif'])->name('user.indic');
// user dashboard
Route::get('/user/home', [PatientrController::class,'home'])->name('user.dashboard');
Route::resource('/user/home/allergie', Allergiecontroller::class);
Route::resource('/user/home/antecedent',Antecedentcontroller::class);
Route::resource('/user/home/parametre',Parametrescontroller::class);
Route::get('/user/home/Consultation', [ConsultationController::class, 'index'])->name('user.dashboard.Consultation');
Route::get('/user/home/Consultation/show/{id}', [ConsultationController::class, 'show'])->name('user.dashboard.Consultation.show');
Route::get('/user/home/profil/{id}', [ConsultationController::class, 'profil'])->name('user.dashboard.profil.show');
// user
//


// personnel dashboard
Route::get('/personnel/home',[PersonnelDashboardController::class,'dashboard'])->name('personnel.dashboard');
Route::get('/personnel/searchs',[PersonnelDashboardController::class,'searchs'])->name('personnel.searchs.patient');
Route::get('/personnel/consultations',[PersonnelDashboardController::class,'historiqueConsultation'])->name('personnel.historiqueConsultations');
Route::get('/personnel/home/Consultation/show/{id}', [PersonnelDashboardController::class, 'show'])->name('personnel.dashboard.Consultation.show');
Route::get('/personnel/dossier/{id}',[PersonnelDashboardController::class,'storeDossier'])->name('personnel.historiqueDossier');
Route::get('/personnel/consultations/int/{id}',[PersonnelDashboardController::class,'consultaition'])->name('personnel.consultaition');
Route::put('/personnel/consultations/int/{id}',[PersonnelDashboardController::class,'store'])->name('personnel.consultaition.store');
Route::post('/personnel/consultations',[PersonnelDashboardController::class,'patient'])->name('personnel.patient');
Route::get('/personnel/consultations/profil/{id}',[PersonnelDashboardController::class,'profil'])->name('personnel.patient.voirPatient');


// personnel

// consultaition
