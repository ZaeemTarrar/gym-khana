<?php

        namespace App;
        use Illuminate\Database\Eloquent\Model;class Slot extends Model
        {
            
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["starting","ending","status",];
            public function day() {return $this->belongsTo("App\Day");}
        }
        