<?php
        
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateProfilesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("profiles", function (Blueprint $table) {
                    $table->increments("id");
                    $table->string("firstname")->nullable();$table->string("lastname")->nullable();$table->string("contact")->nullable()->unique();$table->string("cnic")->nullable()->unique();$table->string("gender")->nullable();$table->string("qualification")->nullable();$table->string("profession")->nullable();$table->string("snap")->nullable();$table->string("account no")->nullable()->unique();$table->string("cnc")->nullable();$table->integer("user_id")->unsigned()->default(0);$table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("profiles");
            }
        }
        