<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Payment extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["payment",];
            public function paymentmethod() {return $this->belongsTo("App\Paymentmethod");}public function orderpack() {return $this->belongsTo("App\Orderpack");}
        }
        