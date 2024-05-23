<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create([
            'title' => 'Dampak Positif dan Negatif Perkembangan Kecerdasan Buatan di Indonesia',
            'author' => 'I Made Surya Adi Palguna',
            'slug' => 'dampak-positif-dan-negatif-perkembangan-kecerdasan-buatan-di-indonesia',
            'body' => 'Artikel ini membahas tentang berbagai dampak positif dan negatif dari perkembangan kecerdasan buatan (AI) di Indonesia. Dampak positifnya meliputi peningkatan efisiensi dan produktivitas di berbagai sektor, seperti industri, kesehatan, dan pendidikan. Sedangkan dampak negatifnya, antara lain potensi hilangnya pekerjaan, bias algoritma, dan pelanggaran privasi.'
        ]);
        Post::create([
            'title' => 'Menjaga Kesehatan Mental di Era Digital',
            'author' => 'Ananda Putra',
            'slug' => 'menjaga-kesehatan-mental-di-era-digital',
            'body' => 'Artikel ini membahas tentang pentingnya menjaga kesehatan mental di era digital, di mana banyak orang menghabiskan waktu mereka di depan layar. Artikel ini juga memberikan tips untuk menjaga kesehatan mental, seperti membatasi waktu penggunaan media sosial, melakukan aktivitas fisik, dan mencari bantuan profesional jika diperlukan.'
        ]);
        Post::create([
            'title' => 'Peluang dan Tantangan Bisnis Online di Indonesia',
            'author' => 'I Made Surya Adi Palguna',
            'slug' => 'peluang-dan-tantangan-bisnis-online-di-indonesia',
            'body' => 'Artikel ini membahas tentang peluang dan tantangan bisnis online di Indonesia. Peluangnya meliputi pasar yang besar dan terus bertumbuh, kemudahan akses internet, dan biaya operasional yang relatif rendah. Tantangannya meliputi persaingan yang ketat, infrastruktur yang belum memadai, dan kepercayaan konsumen yang masih rendah terhadap transaksi online.'
        ]);
        Post::create([
            'title' => 'Pentingnya Pendidikan Karakter untuk Generasi Muda',
            'author' => 'Anak Agung Ngurah Frady Cakranegara',
            'slug' => 'pentingnya-pendidikan-karakter-untuk-generasi-muda',
            'body' => 'Artikel ini membahas tentang pentingnya pendidikan karakter untuk generasi muda. Pendidikan karakter bertujuan untuk membentuk individu yang berakhlak mulia, berintegritas, dan bertanggung jawab. Artikel ini juga memberikan contoh-contoh penerapan pendidikan karakter di sekolah.'
        ]);
        Post::create([
            'title' => 'Upaya Melestarikan Keanekaragaman Hayati di Indonesia',
            'author' => 'Ananda Putra',
            'slug' => 'upaya-melestarikan-keanekaragaman-hayati-di-indonesia',
            'body' => 'Artikel ini membahas tentang upaya melestarikan keanekaragaman hayati di Indonesia. Keanekaragaman hayati Indonesia sangat kaya, namun terancam oleh berbagai faktor, seperti deforestasi, perburuan liar, dan pencemaran lingkungan. Artikel ini memberikan contoh-contoh upaya pelestarian keanekaragaman hayati, seperti pembentukan kawasan lindung, edukasi masyarakat, dan penegakan hukum.'
        ]);
    }
}
