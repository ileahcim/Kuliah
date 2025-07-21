<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\DB;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contact_messages')->delete();

        ContactMessage::create([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'subject' => 'Pertanyaan tentang Modifikasi',
            'message' => 'Halo, saya ingin bertanya tentang biaya modifikasi untuk Toyota Supra. Terima kasih.',
            'is_read' => false,
        ]);
    }
}