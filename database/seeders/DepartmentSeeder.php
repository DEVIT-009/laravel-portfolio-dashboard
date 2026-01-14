<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Human Resources',
                'description' => 'Handles recruitment and employee welfare',
                'created_by' => 'system',
            ],
            [
                'name' => 'Finance',
                'description' => 'Manages company finances',
                'created_by' => 'system',
            ],
            [
                'name' => 'IT',
                'description' => 'Responsible for systems and infrastructure',
                'created_by' => 'system',
            ],
            [
                'name' => 'Marketing',
                'description' => 'Handles marketing and branding',
                'created_by' => 'system',
            ],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
