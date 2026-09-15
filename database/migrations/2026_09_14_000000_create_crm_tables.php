<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations for Promo Geely BSD CRM.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 30)->index();
            $table->string('email')->nullable();
            $table->string('city')->default('BSD City Tangerang');
            $table->string('model_interest'); // Geely EX5, Geely EX2, Starray EM-i
            $table->enum('stage', ['new', 'testdrive', 'negotiation', 'won', 'lost'])->default('new')->index();
            $table->string('source')->default('Website Promo Geely BSD');
            $table->string('budget_plan')->nullable(); // Cash, Kredit DP 20%, etc.
            $table->text('notes')->nullable();
            $table->foreignId('assigned_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('last_contacted_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('test_drives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lead_id')->constrained('leads')->cascadeOnDelete();
            $table->string('car_model'); // Geely EX5, Geely EX2, Starray EM-i
            $table->dateTime('scheduled_at')->index();
            $table->string('venue')->default('Showroom Geely BSD City');
            $table->enum('status', ['Pending', 'Confirmed', 'Completed', 'Cancelled'])->default('Pending');
            $table->string('test_plate')->nullable(); // Contoh: B 1999 GEV
            $table->string('sales_pic')->default('Chanda Satya');
            $table->text('feedback_notes')->nullable();
            $table->timestamps();
        });

        Schema::create('credit_simulations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lead_id')->nullable()->constrained('leads')->nullOnDelete();
            $table->string('customer_name');
            $table->string('phone', 30);
            $table->string('car_model');
            $table->decimal('down_payment', 15, 2);
            $table->integer('tenor_months'); // 12, 24, 36, 48, 60
            $table->decimal('monthly_installment', 15, 2);
            $table->string('preferred_leasing')->default('Maybank Finance');
            $table->enum('status', ['Baru', 'Proses Survey', 'Disetujui', 'Ditolak'])->default('Baru');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('credit_simulations');
        Schema::dropIfExists('test_drives');
        Schema::dropIfExists('leads');
    }
};