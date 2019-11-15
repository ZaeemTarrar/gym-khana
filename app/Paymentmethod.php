<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Paymentmethod extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["name","active",];
            public function payments() {return $this->belongsTo("App\Payments");}
        }
        