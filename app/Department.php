<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Department extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["name","description","snap","type","opening","closing",];
            public function services() {return $this->hasMany("App\Service");}
        }
        