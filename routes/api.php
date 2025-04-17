<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthAPIController;
use App\Http\Controllers\API\Admin\BlogAPIController;
use App\Http\Controllers\API\Admin\FontAPIController;
use App\Http\Controllers\API\Admin\GroupAPIController;
use App\Http\Controllers\API\Admin\VcardAPIController;
use App\Http\Controllers\API\RegistrationAPIController;
use App\Http\Controllers\API\Admin\EnquiryAPIController;
use App\Http\Controllers\API\Admin\ProductAPIController;
use App\Http\Controllers\API\Admin\ServiceAPIController;
use App\Http\Controllers\API\Admin\SettingAPIController;
use App\Http\Controllers\API\Admin\AppointmentAPIController;
use App\Http\Controllers\API\Admin\SocialLinksAPIController;
use App\Http\Controllers\API\Admin\TestimonialsAPIController;
use App\Http\Controllers\API\SuperAdmin\ProfileAPIController;
use App\Http\Controllers\API\Admin\BusinessHoursAPIController;
use App\Http\Controllers\API\SuperAdmin\DashboardAPIController;
use App\Http\Controllers\API\Admin\SubscriptionPlanAPIController;
use App\Http\Controllers\API\Admin\VcardAppointmentAPIController;
use App\Http\Controllers\API\Admin\BusinessAPIController as AdminBusinessAPIController;
use App\Http\Controllers\API\Admin\DashboardAPIController as AdminDashboardAPIController;
use App\Http\Controllers\API\Admin\PrivacyAndTermAPIController;
use App\Http\Controllers\API\SuperAdmin\GroupsAPIController as SuperAdminGroupsAPIController;
use App\Http\Controllers\API\SuperAdmin\VcardsAPIController as SuperAdminVcardsAPIController;
use App\Http\Controllers\API\SuperAdmin\BusinessAPIController as SuperAdminBusinessAPIController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', [RegistrationAPIController::class, 'register']);
Route::post('login', [AuthAPIController::class, 'login']);
Route::post(
    '/forgot-password',
    [AuthAPIController::class, 'sendPasswordResetLinkEmail']
)->middleware('throttle:5,1')->name('password.email');
Route::post(
    '/password',
    [AuthAPIController::class, 'resetPassword']
)->middleware('throttle:5,1')->name('set.password');
Route::post('/reset-password', [AuthAPIController::class, 'changePassword'])->name('password.reset');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthAPIController::class, 'logout']);

    Route::middleware('role:super_admin')->group(function () {

        //Super Admin Dashboard
        Route::get('dashboard', [DashboardAPIController::class, 'index']);
        Route::get('income-chart', [DashboardAPIController::class, 'incomeChartData']);
    });

    Route::prefix('admin')->middleware('role:admin')->group(function () {

        //Admin Dashboard
        Route::get('dashboard', [AdminDashboardAPIController::class, 'index']);
        Route::get('today-appointment', [AdminDashboardAPIController::class, 'todayAppointment']);
        Route::get('income-chart', [AdminDashboardAPIController::class, 'incomeChartData']);

        //Appointments
        Route::get('appointment', [AppointmentAPIController::class, 'appointmentsData']);
        Route::get('appointment/{scheduleAppointments}', [AppointmentAPIController::class, 'appointment']);
        Route::post('appointment-completed/{scheduleAppointmentsId}', [AppointmentAPIController::class, 'appointmentCompleted']);
        Route::delete('appointment-delete/{scheduleAppointments}', [AppointmentAPIController::class, 'deleteAppointment']);

        //Setting
        Route::get('settings-edit', [SettingAPIController::class, 'editSettings']);
        Route::post('settings-update', [SettingAPIController::class, 'updateSettings']);

        //Enquiry
        Route::get('enquiries', [EnquiryAPIController::class, 'enquiryData']);
        Route::get('enquiries/{enquiry}', [EnquiryAPIController::class, 'enquiry']);
        Route::delete('enquiries-delete/{enquiry}', [EnquiryAPIController::class, 'deleteEnquiry']);

        //Vcard
        Route::post('create-vcard', [VcardAPIController::class, 'vcardCreate']);
        Route::post('vcard/{vcard}', [VcardAPIController::class, 'vcardBasicDetails']);
        Route::get('vcard', [VcardAPIController::class, 'vcardData']);
        Route::get('vcard/{vcard}', [VcardAPIController::class, 'vcard']);
        Route::delete('vcard-delete/{vcard}', [VcardAPIController::class, 'deleteVcard']);
        Route::get('vcard-appointment/{vcard}', [VcardAPIController::class, 'appointmentVcard']);
        Route::get('vcard-enquires/{vcard}', [VcardAPIController::class, 'enquiresVcard']);
        Route::post('vcard/template/{vcard}', [VcardAPIController::class, 'vcardTemplate']);
        Route::get('vcard-basic-details/{vcard}', [VcardAPIController::class, 'getVcardBasicDetails']);
        Route::get('vcard-templates/{vcard}', [VcardAPIController::class, 'getVcardTemplate']);

        //Groups
        Route::post('groups-create', [GroupAPIController::class, 'groupCreate']);
        Route::get('groups', [GroupAPIController::class, 'groupData']);
        Route::delete('group-delete/{groupId}', [GroupAPIController::class, 'deleteGroup']);

        //BusinessCard
        Route::post('business-cards-create', [AdminBusinessAPIController::class, 'creatBusinessCard']);
        Route::get('business-cards', [AdminBusinessAPIController::class, 'businessCardData']);

        //Subscription Plan
        Route::get('subscription-plan', [SubscriptionPlanAPIController::class, 'subscriptionPlan']);
        Route::get('payment-is-pending', [SubscriptionPlanAPIController::class, 'paymentStatus']);
        Route::post('plans-buy/{plan}', [SubscriptionPlanAPIController::class, 'buyPlan']);

        //User Delete
        Route::delete('/delete-user/{user}', [AuthAPIController::class, 'userDelete']);

        //vCard Business Hours
        Route::post('business-hours', [BusinessHoursAPIController::class, 'store']);
        Route::get('business-hours/{vcard}', [BusinessHoursAPIController::class, 'getBusinessHours']);

        //vCard Product
        Route::post('products', [ProductAPIController::class, 'store']);
        Route::post('products/{product}', [ProductAPIController::class, 'update']);
        Route::get('products/{product}', [ProductAPIController::class, 'show']);
        Route::get('vcard-products/{vcard}', [ProductAPIController::class, 'getVcardProducts']);
        Route::delete('products/{product}', [ProductAPIController::class, 'destroy']);
        Route::get('currency-list',[ProductAPIController::class, 'getCurrencyList']);

        //vCard Services
        Route::post('services', [ServiceAPIController::class, 'store']);
        Route::post('services/{service}', [ServiceAPIController::class, 'update']);
        Route::get('services/{service}', [ServiceAPIController::class, 'show']);
        Route::get('vcard-services/{vcard}', [ServiceAPIController::class, 'getVcardProducts']);
        Route::delete('services/{service}', [ServiceAPIController::class, 'destroy']);


        //vCard social links
        Route::post('social-links', [SocialLinksAPIController::class, 'store']);
        Route::get('social-links/{vcard}', [SocialLinksAPIController::class, 'getSocialLinks']);

        //vCard Advanced Settings
        Route::post('advanced-settings', [VcardAPIController::class, 'storeAdvanceDetails']);
        Route::get('advanced-settings/{vcard}', [VcardAPIController::class, 'getAdvanceDetails']);

        //vCard Appoitment
        Route::post('vcard-appointments', [VcardAppointmentAPIController::class, 'storeAppoitmentSchedule']);
        Route::get('vcard-appointments/{vcard}', [VcardAppointmentAPIController::class, 'getAppoitmentSchedule']);

        //vCard Testimonials 
        Route::get('testimonials/{testimonials}', [TestimonialsAPIController::class, 'show']);
        Route::get('vcard-testimonials/{vcard}', [TestimonialsAPIController::class, 'getVcardTestimonials']);
        Route::post('testimonials', [TestimonialsAPIController::class, 'store']);
        Route::post('testimonials/{testimonials}', [TestimonialsAPIController::class, 'update']);
        Route::delete('testimonials/{testimonials}', [TestimonialsAPIController::class, 'destroy']);

        //vCard Blogs 
        Route::get('blogs/{blog}', [BlogAPIController::class, 'show']);
        Route::get('vcard-blogs/{vcard}', [BlogAPIController::class, 'getVcardBlogs']);
        Route::post('blogs', [BlogAPIController::class, 'store']);
        Route::post('blogs/{blog}', [BlogAPIController::class, 'update']);
        Route::delete('blogs/{blog}', [BlogAPIController::class, 'destroy']);

        //vCard Fonts
        Route::get('fonts/{vcard}', [FontAPIController::class, 'getVcardFonts']);
        Route::post('fonts', [FontAPIController::class, 'store']);
        Route::get('fonts', [FontAPIController::class, 'getFontList']);

        //vCard Privacy Policies
        Route::get('privacy-policies/{vcard}', [PrivacyAndTermAPIController::class, 'getPrivacyPolicy']);
        Route::post('privacy-policies', [PrivacyAndTermAPIController::class, 'storePrivacyPolicy']);

         //vCard Terms & Conditions
         Route::get('terms-conditions/{vcard}', [PrivacyAndTermAPIController::class, 'getTermsConditions']);
         Route::post('terms-conditions', [PrivacyAndTermAPIController::class, 'storeTermsConditions']);

         //Enquires
         Route::get('enquires', [VcardAPIController::class, 'enquiresData']);
         Route::get('enquires/{enquire}', [VcardAPIController::class, 'getEnquiresDetails']);
         Route::delete('enquires/{enquire}', [VcardAPIController::class, 'deleteEnquiry']);

    });

    //Vcards
    Route::get('vcard', [SuperAdminVcardsAPIController::class, 'vcardsData']);
    Route::get('vcard/{vcard}', [SuperAdminVcardsAPIController::class, 'vcard']);
    Route::get('vcard-qrcode/{vcard}', [SuperAdminVcardsAPIController::class, 'qrcodeVcard']);

    //Profile
    Route::get('profile-edit', [ProfileAPIController::class, 'editProfile']);
    Route::post('profile-update', [ProfileAPIController::class, 'updateProfile']);
    Route::post('language-update', [ProfileAPIController::class, 'updateLanguage']);

    //Groups
    Route::post('groups-create', [SuperAdminGroupsAPIController::class, 'groupCreate']);
    Route::get('groups', [SuperAdminGroupsAPIController::class, 'groupData']);
    Route::delete('group-delete/{groupId}', [SuperAdminGroupsAPIController::class, 'deleteGroup']);

    //BusinessCard
    Route::post('business-cards-create', [SuperAdminBusinessAPIController::class, 'createBusinessCard']);
    Route::get('business-cards', [SuperAdminBusinessAPIController::class, 'businessCardData']);
});
