<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Orderpack extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["sku","totalprice","approval",];
            public function department() {return $this->belongsTo("App\Department");}public function service() {return $this->belongsTo("App\Service");}public function orders() {return $this->hasMany("App\Order");}public function user() {return $this->belongsTo("App\User");}public function slot() {return $this->belongsTo("App\Slot");}public function orderstatus() {return $this->belongsTo("App\Orderstatus");}
        }
        