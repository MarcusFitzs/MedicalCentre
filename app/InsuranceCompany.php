<?php
# @Date:   2019-10-29T16:13:44+00:00
# @Last modified time: 2019-10-29T21:41:42+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
    //assigning relationship with other tables
    public function insurances(){
      return $this->hasMany('App\Insurance');
    }
}
