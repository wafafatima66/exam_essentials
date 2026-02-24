<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class RestrictedAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::where('email', 'restricted@admin.com')->first();
        if (!$admin) {
            $admin = new Admin();
            $admin->name = 'Restricted Admin';
            $admin->email = 'restricted@admin.com';
            $admin->status = 'enable';
            $admin->admin_type = 'restricted_admin';
            $admin->password = Hash::make('password');
            $admin->save();
            $this->command->info('Restricted Admin created successfully.');
        } else {
            $this->command->info('Restricted Admin already exists.');
        }
    }
}
