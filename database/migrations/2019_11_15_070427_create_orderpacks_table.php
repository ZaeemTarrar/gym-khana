<?php
        
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateOrderpacksTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("orderpacks", function (Blueprint $table) {
                    $table->increments("id");
                    $table->string("sku");$table->integer("totalprice");$table->boolean("approval")->default(1);$table->integer("department_id")->unsigned()->default(0);$table->integer("service_id")->unsigned()->default(0);$table->integer("user_id")->unsigned()->default(0);$table->integer("slot_id")->unsigned()->default(0);$table->integer("orderstatus_id")->unsigned()->default(0);$table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("orderpacks");
            }
        }
        