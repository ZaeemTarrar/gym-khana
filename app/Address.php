<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Address extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["postalcode","house","street","town","city","province","country",];
            public function profile() {return $this->belongsTo("App\Profile");}
        }
        