<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Productservice extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["name","description","cost","bookingcost","snap","active",];
            public function product() {return $this->belongsTo("App\Product");}public function department() {return $this->belongsTo("App\Department");}
        }
        