<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil ID user yang sedang login

        // Waktu saat ini
        $now = now();

        DB::table('general_settings')->insert([
            [
                'name_setting' => 'logo',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo-berakhlak',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_footer',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_dinas_terkait_1',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_dinas_terkait_2',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_dinas_terkait_3',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_dinas_terkait_4',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_dinas_terkait_5',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_dinas_terkait_6',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_dinas_terkait_7',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_dinas_terkait_8',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_dinas_terkait_9',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_dinas_terkait_10',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_dinas_terkait_1',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_dinas_terkait_2',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_dinas_terkait_3',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_dinas_terkait_4',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_dinas_terkait_5',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_dinas_terkait_6',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_dinas_terkait_7',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_dinas_terkait_8',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_dinas_terkait_9',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_dinas_terkait_10',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_lapor',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'logo_pesduk',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_lapor',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'link_pesduk',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'text_lapor',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'text_pesduk',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'text_pengaduan',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'text_copyright',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'contact_alamat',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'contact_email',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'contact_telpon',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name_setting' => 'contact_wa',
                'value' => '-',
                'created_by' => 0,
                'updated_by' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // ... tambahkan entri lain sesuai kebutuhan Anda
        ]);
    }
}
