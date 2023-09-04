<?php

use App\Mail\ContactFormNotification;
use App\Models\ContactFormSubmission;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('about');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/services/ac', function () {
    return view('services/ac');
});

Route::get('/services/appliances', function () {
    return view('services/appliances');
});

Route::post('/contact', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => [
            'required',
            'max:255',
        ],
        'email' => [
            'required_without:phone',
            'max:255',
            'nullable',
            'email:strict,dns,spoof',
        ],
        'phone' => [
            'required_without:email',
            'max:12',
            'nullable',
            'regex:^\d{3}(-)?\d{3}(-)?\d{4}^',
        ],
        'message' => [
            'required',
            'max:65535',
        ],
    ], [
        'name.required' => 'We need your name so that we can properly address you!',
        'email.required_without' => 'An email address is required if no phone number is provided.',
        'phone.required_without' => 'A phone number is required if no email address is provided.',
        'message.required' => 'We need some context -- don\'t be shy!',
        'email.email' => 'This looks like an invalid email address...',
        'phone.regex' => 'This looks like an invalid phone number...',
        'max' => 'This field must have a value less than :max characters in length.',
    ]);

    $validated = $validator->passes();
    if ($validated) {
        $contactFormSubmission = new ContactFormSubmission();
        $contactFormSubmission->name = ucwords(strtolower($validator->validated()['name']));
        $contactFormSubmission->email = $validator->validated()['email'];
        $contactFormSubmission->phone = preg_replace('/^(\d{3})(\d{3})(\d{4})$/', '+1 $1-$2-$3', str_replace('-', '', $validator->validated()['phone']));
        $contactFormSubmission->message = $validator->validated()['message'];
        $contactFormSubmission->save();

        Mail::to('nathanielbradleyrobb@gmail.com')->send(new ContactFormNotification(
            $contactFormSubmission->name,
            $contactFormSubmission->email,
            $contactFormSubmission->phone,
            $contactFormSubmission->message
        ));

        return response()->json([
            'is_success' => $validated,
            'errors' => [],
        ]);
    }

    return response()->json([
        'is_success' => $validated,
        'errors' => $validator->errors(),
    ]);
});
