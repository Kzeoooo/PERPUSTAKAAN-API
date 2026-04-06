<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member; // Penting agar tidak error "Class not found"

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'name' => 'Budi Santoso',
                'member_code' => 'MBR-2025-001',
                'email' => 'budi@email.com',
                'phone' => '08123456789',
                'address' => 'Jl. Merdeka No. 10',
                'status' => 'active',
                'joined_at' => '2025-01-15',
            ],
            [
                'name' => 'Siti Aminah',
                'member_code' => 'MBR-2025-003',
                'email' => 'siti@email.com',
                'phone' => '08567891234',
                'address' => 'Jl. Pahlawan No. 5, Surabaya',
                'status' => 'active',
                'joined_at' => '2025-03-30',
            ],
        ];

        foreach ($members as $member) {
            Member::create($member);
        }
    }
}
