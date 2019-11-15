<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Role extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["name","access","active",];
            public function subroles() {return $this->hasMany("App\Subrole");}public function users() {return $this->hasMany("App\User");}
        }
        