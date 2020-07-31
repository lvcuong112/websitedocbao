<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('name')->collation('utf8mb4_unicode_ci'); // tên sản phẩm
            $table->string('slug')->index()->collation('utf8mb4_unicode_ci');
            $table->string('image',255)->collation('utf8mb4_unicode_ci')->nullable(); // ảnh
            $table->integer('position')->default(0); // vị trí
            $table->integer('is_active')->default(1); // trạng thái
            $table->integer('views')->default(0); // lượng xem == khi click vào xem trong trang chủ
            $table->integer('category_id')->default(0); // id danh mục 
            $table->string('url')->nullable()->default(null); // link url tùy chỉnh
            $table->text('summary')->collation('utf8mb4_unicode_ci')->nullable(); // thông tin tóm tắt 
            $table->string('meta_title',255)->collation('utf8mb4_unicode_ci')->nullable(); // keyword for SEO
            $table->text('meta_description',255)->collation('utf8mb4_unicode_ci')->nullable(); // keyword for SEO
            $table->integer('user_id')->default(0); // ID user
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
        Schema::dropIfExists('news');
    }
}
