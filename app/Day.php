<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Day extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["name","active",];
            public function slots() {return $this->hasMany("App\Slot");}
        }
        