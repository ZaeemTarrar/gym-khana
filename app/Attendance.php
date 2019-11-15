<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Attendance extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["date","start","end","status",];
            public function user() {return $this->belongsTo("App\User");}
        }
        