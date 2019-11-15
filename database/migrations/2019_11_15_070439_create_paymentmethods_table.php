<?php
        
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreatePaymentmethodsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("paymentmethods", function (Blueprint $table) {
                    $table->increments("id");
                    $table->string("name");$table->boolean("active")->default(1);$table->integer("payments_id")->unsigned()->default(0);$table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("paymentmethods");
            }
        }
        