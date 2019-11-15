<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Service extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["name","description","cost","bookingcost","snap","active",];
            public function department() {return $this->belongsTo("App\Department");}
        }
        