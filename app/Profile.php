<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Profile extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["firstname","lastname","contact","cnic","gender","qualification","profession","snap","account no","cnc",];
            public function user() {return $this->belongsTo("App\User");}public function address() {return $this->hasOne("App\Address");}
        }
        