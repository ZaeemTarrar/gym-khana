<?php
        
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateAddressesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("addresses", function (Blueprint $table) {
                    $table->increments("id");
                    $table->integer("postalcode")->nullable()->default(0);$table->string("house")->nullable();$table->string("street")->nullable();$table->string("town")->nullable();$table->string("city")->nullable();$table->string("province")->nullable();$table->string("country")->nullable();$table->integer("profile_id")->unsigned()->default(0);$table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("addresses");
            }
        }
        