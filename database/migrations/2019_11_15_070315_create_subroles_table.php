<?php
        
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateSubrolesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("subroles", function (Blueprint $table) {
                    $table->increments("id");
                    $table->string("name");$table->integer("access")->nullable()->unsigned()->default(0);$table->boolean("active")->nullable()->unsigned()->default(1);$table->integer("role_id")->unsigned()->default(0);$table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("subroles");
            }
        }
        