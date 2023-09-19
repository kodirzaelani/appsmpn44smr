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
        Schema::create('downloads', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('author_id');
            $table->uuid('downloadcategory_id')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('attach')->nullable();
            $table->string('image')->nullable();
            $table->text('urlcontent')->nullable(); // url google drive
            $table->text('linkdownload')->nullable(); // id link download google drive
            $table->boolean('status')->default(true);
            $table->integer('view_count')->default(0);
            $table->uuid('updated_by')->nullable();
            $table->uuid('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->primary('id');

            $table->foreign('author_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('downloadcategory_id')->references('id')->on('downloadcategories')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('downloads');
    }
};
