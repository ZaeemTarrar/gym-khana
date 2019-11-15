<?php
        
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateProductsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("products", function (Blueprint $table) {
                    $table->increments("id");
                    $table->integer("code")->nullable();$table->string("name")->nullable();$table->integer("purchase")->nullable();$table->integer("sale")->nullable();$table->integer("weight")->nullable();$table->string("color")->nullable();$table->string("brand")->nullable();$table->string("flavor")->nullable();$table->string("size")->nullable();$table->integer("stock")->nullable();$table->string("ingredients")->nullable();$table->string("model")->nullable();$table->date("manufacture")->nullable();$table->date("expiry")->nullable();$table->date("start")->nullable();$table->date("end")->nullable();$table->string("snap")->nullable();$table->string("shortdescription")->nullable();$table->string("description")->nullable();$table->boolean("active")->nullable();$table->integer("beds")->nullable();$table->string("statustype")->nullable();$table->integer("category_id")->unsigned()->default(0);$table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("products");
            }
        }
        