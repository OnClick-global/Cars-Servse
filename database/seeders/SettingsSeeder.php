<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Setting::create([
            'key' => 'name_ar',
            'value' => '',
        ]);
        $admin = Setting::create([
            'key' => 'name_en',
            'value' => '',
        ]);
        $admin = Setting::create([
            'key' => 'Adress_ar',
            'value' => '',
        ]);
        $admin = Setting::create([
            'key' => 'Adress_en',
            'value' => '',
        ]);
        $admin = Setting::create([
            'key' => 'phone1',
            'value' => '',
        ]);
        $admin = Setting::create([
            'key' => 'phone2',
            'value' => '',
        ]);
        $admin = Setting::create([
            'key' => 'Email',
            'value' => '',
        ]);
        $admin = Setting::create([
            'key' => 'Whatsapp',
            'value' => '',
        ]);
        $admin = Setting::create([
            'key' => 'facebook',
            'value' => '',
        ]);
        $admin = Setting::create([
            'key' => 'twitter',
            'value' => '',
        ]);
    }
}
