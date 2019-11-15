<?php

        namespace App;
        use Illuminate\Notifications\Notifiable;
            use Illuminate\Foundation\Auth\User as Authenticatable;
            class User extends Authenticatable
        {
            use Notifiable;
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = ["name","email","active","password",];
            protected $hidden = [
                    "password", "remember_token",
                ]; public function subrole() {return $this->belongsTo("App\Subrole");}public function role() {return $this->belongsTo("App\Role");}public function profile() {return $this->hasOne("App\Profile");}public function orderpacks() {return $this->hasMany("App\Orderpack");}public function attendances() {return $this->hasMany("App\Attendance");}public function leaves() {return $this->hasMany("App\Leave");}public function emp_payments() {return $this->hasMany("App\Emp_payment");}public function percentage() {return $this->belongsTo("App\Percentage");}
        }
        