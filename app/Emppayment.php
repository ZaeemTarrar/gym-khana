<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Emppayment extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["payment",];
            public function user() {return $this->belongsTo("App\User");}public function paymentmethod() {return $this->belongsTo("App\Paymentmethod");}
        }
        