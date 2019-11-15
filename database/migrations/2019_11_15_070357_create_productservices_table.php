<?php
        
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateProductservicesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("productservices", function (Blueprint $table) {
                    $table->increments("id");
                    $table->string("name");$table->string("description")->nullable();$table->integer("cost")->default(0);$table->integer("bookingcost")->default(0);$table->string("snap");$table->boolean("active")->default(1);$table->integer("product_id")->unsigned()->default(0);$table->integer("department_id")->unsigned()->default(0);$table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("productservices");
            }
        }
        