<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Notificationtype extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["name","active",];
            public function notifications() {return $this->hasMany("App\Notification");}
        }
        