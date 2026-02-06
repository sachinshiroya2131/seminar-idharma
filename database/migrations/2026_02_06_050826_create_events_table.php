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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();

            $table->text('description')->nullable();

            $table->dateTime('start_datetime');
            $table->dateTime('end_datetime');

            $table->string('venue')->nullable();
            $table->string('city')->nullable();

            $table->boolean('is_online')->default(false);
            $table->string('meeting_url')->nullable();

            $table->integer('capacity')->nullable();
            $table->decimal('price', 10, 2)->default(0);

            $table->dateTime('registration_deadline')->nullable();

            $table->string('banner')->nullable();

            $table->enum('status', [
                'draft',
                'published',
                'cancelled',
                'completed'
            ])->default('draft');

            $table->foreignId('organizer_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
