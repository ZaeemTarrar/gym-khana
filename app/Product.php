<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Product extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["code","name","purchase","sale","weight","color","brand","flavor","size","stock","ingredients","model","manufacture","expiry","start","end","snap","shortdescription","description","active","beds","statustype",];
            public function category() {return $this->belongsTo("App\Category");}public function productservices() {return $this->hasMany("App\Productservice");}
        }
        