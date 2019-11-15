<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Subrole extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["name","access","active",];
            public function role() {return $this->belongsTo("App\Role");}public function users() {return $this->hasMany("App\User");}
        }
        