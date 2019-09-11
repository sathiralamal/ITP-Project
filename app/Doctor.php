<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    // a doctor visits patient many days
    public function visitingdays()
    {
        return $this->hasMany('App\VisitingDay');
    }

    // a doctor has many contact numbers
    public function doctorcontacts()
    {
        return $this->hasMany('App\DoctorContact');
    }

    // a doctor has many appointments(with patients)
    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    // a doctor has many notices
    public function notices()
    {
        return $this->hasMany('App\Notice');
    }

    // a doctor has many articles
    public function articles()
    {
        return $this->hasMany('App\Article');
    }



}
