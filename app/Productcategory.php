<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Productcategory extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["name","snap","description","active",];
            public function products() {return $this->hasMany("App\Product");}
        }
        