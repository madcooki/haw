<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ContactFormSubmission extends Model
{
    protected $table = "contact_form_submission";
    public $timestamps = false;

    public function save(array $options = [])
    {
        $this->created_at = Carbon::now();
        parent::save();
    }
}
