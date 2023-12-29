<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->string('order_number')->unique();
            // $table->unsignedBigInteger('user_id')->nullable();
            // $table->float('sub_total');
            // $table->unsignedBigInteger('shipping_id')->nullable();
            // $table->float('coupon')->nullable();
            // $table->float('total_amount');
            // $table->integer('quantity');
            // $table->enum('payment_method',['cod','paypal','bkash'])->default('cod');
            // $table->string('txn_phone')->nullable();
            // $table->string('txn_id')->nullable();
            // $table->enum('payment_status',['paid','unpaid'])->default('unpaid');
            // $table->enum('status',['new','process','delivered','cancel'])->default('new');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            // $table->foreign('shipping_id')->references('id')->on('shippings')->onDelete('SET NULL');
            // $table->string('first_name');
            // $table->string('last_name');
            // $table->string('email');
            // $table->string('phone');
            // $table->string('country');
            // $table->string('post_code')->nullable();
            // $table->text('address1');
            // $table->text('address2')->nullable();

            $table->string('fname');
            $table->string('email');
            // $table->string('phone');
            $table->string('country');
            $table->string('billing_address');
            $table->string('city');
            $table->string('zipcode');
            $table->string('phone')->default(0123456);
            $table->string('total_ammount')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_number')->nullable();
            $table->string('txn_id')->nullable();
            $table->string('remember')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
