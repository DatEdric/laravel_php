<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();

            // Tạo khóa ngoại category_id tham chiếu đến cột id trong bảng categories
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
              // Xóa khóa ngoại trước để xóa cột category_id
            $table->dropForeign(['category_id']);

            // Xóa cột category_id
            $table->dropColumn('category_id');
        });
    }
};
