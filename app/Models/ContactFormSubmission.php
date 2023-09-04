<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactFormSubmission extends Model
{
    protected $table = "contact_form_submission";
    public $timestamps = false;

    public function save(array $options = [])
    {
        $this->recorded_at = $this->freshTimestampString();
        parent::save();
    }
}
