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
        ],
        'email' => [
            'required_without:phone',
            'nullable',
            'email:strict,dns,spoof',
        ],
        'phone' => [
            'required_without:email',
            'nullable',
            'regex:^\d{3}(-)?\d{3}(-)?\d{4}^',
        ],
        'message' => [
            'required',
        ],
    ], [
        'name.required' => 'We need to know your name to address you properly!',
        'email.required_without' => 'An email address is required if no phone number is provided.',
        'email.email' => 'This looks like an invalid email address...',
        'phone.required_without' => 'A phone number is required if no email address is provided.',
        'phone.regex' => 'This looks like an invalid phone number...',
        'message.required' => 'We need to know what you want to talk about. Don\'t be shy!',
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
