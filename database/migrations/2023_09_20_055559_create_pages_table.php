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
        Schema::create('pages', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('author_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->uuid('pagecategory_id');
            $table->text('content');
            $table->string('image')->nullable();
            $table->text('video')->nullable();
            $table->text('caption_video')->nullable();
            $table->boolean('status');
            $table->boolean('masterstatus')->default(false);
            $table->integer('view_count')->default(0);
            $table->uuid('updated_by')->nullable();
            $table->uuid('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->primary('id');

            $table->foreign('author_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('pagecategory_id')->references('id')->on('pagecategories')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
