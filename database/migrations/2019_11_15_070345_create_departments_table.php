<?php
        
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateDepartmentsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("departments", function (Blueprint $table) {
                    $table->increments("id");
                    $table->string("name")->nullable();$table->string("description")->nullable();$table->string("snap")->nullable();$table->string("type")->nullable();$table->date("opening")->nullable();$table->date("closing")->nullable();$table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("departments");
            }
        }
        