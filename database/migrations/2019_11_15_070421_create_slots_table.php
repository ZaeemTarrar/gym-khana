<?php
        
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateSlotsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("slots", function (Blueprint $table) {
                    $table->increments("id");
                    $table->date("starting");$table->date("ending");$table->string("status");$table->integer("day_id")->unsigned()->default(0);$table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("slots");
            }
        }
        