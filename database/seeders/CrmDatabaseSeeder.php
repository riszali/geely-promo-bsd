<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Lead;
use App\Models\TestDrive;
use App\Models\CreditSimulation;
use App\Models\WebsiteVisit;
use Illuminate\Support\Facades\Hash;

class CrmDatabaseSeeder extends Seeder
{
    /**
     * Bersihkan data dummy lama dan siapkan akun resmi dealer murni 0 data.
     */
    public function run(): void
    {
        // 1. Bersihkan seluruh data dummy yang tersimpan sebelumnya
        TestDrive::query()->delete();
        CreditSimulation::query()->delete();
        Lead::query()->forceDelete();
        WebsiteVisit::query()->delete();

        // 2. Akun Resmi Senior Sales Consultant Chanda Satya
        User::firstOrCreate(
            ['email' => 'chanda.satya@geelybsd.id'],
            [
                'name'     => 'Chanda Satya',
                'password' => Hash::make('geelybsd2026'),
            ]
        );

        // 3. Akun Resmi Branch Manager BSD
        User::firstOrCreate(
            ['email' => 'manager.bsd@geelyindonesia.id'],
            [
                'name'     => 'Bambang Sudiro',
                'password' => Hash::make('geelybsd2026'),
            ]
        );
    }
}