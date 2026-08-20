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
        // 1. Categories
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // 2. Programs (e.g. Kampus News, Creative Talk, Jurnalistik, Live Report)
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('thumbnail_url')->nullable();
            $table->string('broadcast_schedule')->nullable();
            $table->string('host_name')->nullable();
            $table->enum('status', ['Active', 'Completed', 'Upcoming'])->default('Active');
            $table->timestamps();
        });

        // 3. Videos / Broadcasts (YouTube Live & Recorded videos)
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->nullable()->constrained('programs')->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('youtube_id');
            $table->string('thumbnail_url')->nullable();
            $table->boolean('is_live')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->string('duration')->default('10:00');
            $table->unsignedBigInteger('views')->default(0);
            $table->timestamps();
        });

        // 4. News & Updates Articles
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('summary');
            $table->longText('content');
            $table->string('image_url')->nullable();
            $table->string('author_name')->default('Tim Redaksi BLTV');
            $table->boolean('is_featured')->default(false);
            $table->unsignedBigInteger('views')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        // 5. Running Text Ticker / Marquee
        Schema::create('tickers', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->string('link_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 6. Crew Registrations (Form Pendaftaran Anggota Baru)
        Schema::create('crew_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('nim');
            $table->string('major');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('division_interest');
            $table->text('reason');
            $table->enum('status', ['Pending', 'Reviewed', 'Accepted', 'Rejected'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crew_registrations');
        Schema::dropIfExists('tickers');
        Schema::dropIfExists('news');
        Schema::dropIfExists('videos');
        Schema::dropIfExists('programs');
        Schema::dropIfExists('categories');
    }
};
