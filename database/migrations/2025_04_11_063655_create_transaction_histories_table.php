<?php

// database/migrations/xxxx_xx_xx_create_transaction_histories_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('transaction_histories', function (Blueprint $table) {
            $table->id();  // Transaction ID (auto increment)
            $table->string('ma_ve');
            $table->string('phong_chieu');
            $table->date('ngay_chieu');
            $table->time('gio_chieu');
            $table->integer('gia_ve');
            $table->datetime('ngay_dat_ve');
            $table->string('trang_thai_ve');
            $table->string('phim');
            $table->string('ma_ghe');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_histories');
    }
}

