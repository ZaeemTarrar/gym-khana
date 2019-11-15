<?php
        
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateNotificationsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("notifications", function (Blueprint $table) {
                    $table->increments("id");
                    $table->string("message")->nullable();$table->string("title");$table->integer("notificationtype_id")->unsigned()->default(0);$table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("notifications");
            }
        }
        