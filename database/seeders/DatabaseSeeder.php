<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\MedicineCategory;
use App\Models\Medicine;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. إضافة قسمين تجريبيين
        $dept1 = Department::create(['department_name' => 'Cardiology']);
        $dept2 = Department::create(['department_name' => 'Pediatrics']);

        // 2. إضافة مستخدم ودكتور
        $userDoctor = User::create([
            'username' => 'dr_ahmed',
            'password' => bcrypt('password123'),
            'role' => 'doctor',
        ]);

        Doctor::create([
            'user_id' => $userDoctor->user_id,
            'department_id' => $dept1->department_id,
            'fname' => 'Ahmed',
            'lname' => 'Ali',
            'specialization' => 'Cardiologist',
            'phone' => '01000000001',
            'consultation_fee' => 300.00,
        ]);

        // 3. إضافة مستخدم ومريض
        $userPatient = User::create([
            'username' => 'patient_mohamed',
            'password' => bcrypt('password123'),
            'role' => 'patient',
        ]);

        Patient::create([
            'user_id' => $userPatient->user_id,
            'first_name' => 'Mohamed',
            'last_name' => 'Hassan',
            'phone' => '01100000002',
            'age' => 30,
            'gender' => 'Male',
            'address' => 'Cairo, Egypt',
        ]);

        // 4. إضافة فئة أدوية ودواء
        $cat = MedicineCategory::create([
            'category_name' => 'Painkillers',
            'description' => 'Medications for pain relief',
        ]);

        Medicine::create([
            'medicine_name' => 'Panadol Extra',
            'category_id' => $cat->category_id,
            'description' => '500mg tablets',
            'price' => 25.50,
            'stock_quantity' => 100,
        ]);
    }
}