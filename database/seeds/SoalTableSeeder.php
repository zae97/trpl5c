<?php

use Illuminate\Database\Seeder;

class SoalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questions')->insert([
        'id'=> 1,
        'question_text'=>'Ketika muncul suatu masalah dalam pekerjaan yang kebetulan ada kaitannya dengan hal-hal yang menjadi kewajiban saya, maka saya …',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 2,
        'question_text'=>'Ketua panitia kegiatan harus membuat laporan pertanngunganswer_explanation. Sebagai ketua, maka ',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 3,
        'question_text'=>' Jika diberikan tugas kantor yang berat oleh atasan, maka saya',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 4,
        'question_text'=>'Ketika berbelanja di minimarket, kasir melakukan kesalahan penghitungan. Maka sikap saya adalah….. ',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 5,
        'question_text'=>'Draft laporan yang dibuat oleh tim kerja saya ditolak oleh atasan karena dianggap kurang layak. Sikap saya adalah …',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 6,
        'question_text'=>'Saya menggunakan kendaraan dinas tanpa sepengetahuan Kepala Kendaraan pada Hari Libur. Secara tidak sengaja saya menabrakkan kendaraan tersebut. Tindakan saya adalah:',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 7,
        'question_text'=>'Saya mendapat teguran langsung dari pimpinan atas kesalahan yang bukan hanya saya seorang diri sebagai pelakunya. Reaksi saya adalah …',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 8,
        'question_text'=>'Suatu hari, Anda pulang jam 01. 00 WIB dinihari menuju rumah dalam kondisi tubuh yang sangat lelah. Di jalan anda mendapati ada kecelakaan…',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 9,
        'question_text'=>'Pada akhir bulan, tagihan rekening telepon kantor mengalami lonjakan menjadi sebesar Rp.21.000.000,- dari yang biasanya tidak pernah melebihi Rp. 15.000.000,-. Setelah dilakukan pengecekan ternyata banyak nomor telepon yang dihubungi tidak memiliki hubungan kerja dengan organisasi. Jajaran pimpinan kemudian memanggil semua pegawai untuk melakukan pengecekan dan penyelesaian masalah tersebut. Sebenarnya saya termasuk pegawai yang menggunakan telepon untuk urusan pribadi. Respon saya adalah …',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 10,
        'question_text'=>'ika ada tugas yang kurang menyenangkan, ',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 11,
        'question_text'=>'Ketika proyek kerja yang saya pimpin tidak memberikan hasil optimal gara-gara ada satu anak buah saya yang melakukan kesalahan, maka?',
        'answer_explanation'=>'',
        'topic_id'=>1
      ]);
      DB::table('questions')->insert([
        'id'=> 12,
        'question_text'=>'Hampir semua pegawai di kantor instansi saya meminta uang tanda terimakasih atas pengurusan surat ijin tertentu. Namun menurut peraturan kantor, hal itu tidaklah diperbolehkan, maka saya',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 13,
        'question_text'=>'Anda adalah seorang karyawan apotek. Seorang pembeli ingin membeli obat-obatan tertentu yang harus menggunakan resep dokter karena bisa membahayakan kesehatan. Dia tidak mempunyai resep itu. Namun pembeli tersebut memaksa ingin membelinya dan dia memberikan sejumlah uang kepada agar mau memberikan obat tersebut. Apa yang anda lakukan ?',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 14,
        'question_text'=>'KAtasan anda melakukan rekayasa laporan keuangan kantor, maka anda ',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 15,
        'question_text'=>'Andi, teman karib anda, melakukan kecurangan absensi. Maka anda',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 16,
        'question_text'=>'Saya ditugaskan pimpinan untuk menjadi notulen dalam rapat Badan Pertimbangan Jabatan dan Kepangkatan. Respon saya adalah …',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 17,
        'question_text'=>'Organisasi sedang mengalami permasalahan internal seputar manajemen keuangan. Pendapat saya terhadap kondisi ini adalah …',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 18,
        'question_text'=>'Bagi saya, bekerja adalah…',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 19,
        'question_text'=>'Seorang oknum staf HRD Perusahaan menawarkan bantuan kepada saya, untuk bisa diterima menjadi karyawan ditempat tersebut dengan cara memberikan dana dengan jumlah tertentu. Sikap saya adalah ',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 20,
        'question_text'=>'Sebagian rekan kerja pulang 20 menit lebih awal dari jadwal yang seharusnya, bagaimana dengan anda ',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 21,
        'question_text'=>'Saya sering mengingatkan bawahan saya untuk tidak melakukan kekeliruan pekerjaan kantor',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 22,
        'question_text'=>'Ketika di kantor, saya tiba-tiba ingin mem-print 3 lembar data-data pribadi, yang tidak ada hubungannya dengan pekerjaan',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 23,
        'question_text'=>'Ketika banyak pegawai di kantor saya tidak mematuhi peraturan tentang larangan penggunaan fasilitas internet kantor untuk keperluan pribadi, pendapat saya',
        'answer_explanation'=>'',
        'topic_id'=>2
      ]);
      DB::table('questions')->insert([
        'id'=> 24,
        'question_text'=>'Kinerja organisasi berjalan cukup efisien, namun pimpinan terkesan mengontrol situasi dengan sangat ketat. Sikap saya adalah …',
        'answer_explanation'=>'',
        'topic_id'=>3
      ]);
      DB::table('questions')->insert([
        'id'=> 25,
        'question_text'=>'Saya mengajukan suatu usulan untuk atasan saya namun usulan tersebut menurut atasan saya kurang tepat. Sikap saya adalah …',
        'answer_explanation'=>'',
        'topic_id'=>3
      ]);
      DB::table('questions')->insert([
        'id'=> 26,
        'question_text'=>'Saya ditugaskan di front office untuk melayani tamu pimpinan. Pada saat pimpinan saya tidak berada di tempat dan ada tamu pimpinan yang memerlukan keputusan segera, sedangkan atasan tidak dapat dihubungi, maka sikap saya adalah …',
        'answer_explanation'=>'',
        'topic_id'=>3
      ]);
      DB::table('questions')->insert([
        'id'=> 27,
        'question_text'=>'Pimpinan kantor menggelar rapat kerja membahas penyusunan rencana kerja untuk tahun anggaran depan. Setiap pegawai diharapkan mempersiapkan usulan untuk kegiatan tahun depan. Respon saya...',
        'answer_explanation'=>'',
        'topic_id'=>3
      ]);
      DB::table('questions')->insert([
        'id'=> 28,
        'question_text'=>'Organisasi saya sedang mengalami masalah internal, sikap saya',
        'answer_explanation'=>'',
        'topic_id'=>3
      ]);
      DB::table('questions')->insert([
        'id'=> 29,
        'question_text'=>'Ketika sedang melakukan presentasi, kancing baju Pak Benny, yang juga atasan anda, terlepas satu buah di bagian perut. Hal ini sangat mengganggu jalannya presentasi. Namun tampaknya tak ada yang berani memberitahu Pak Benny. Bagaimana sikap anda ?',
        'answer_explanation'=>'',
        'topic_id'=>3
      ]);
      DB::table('questions')->insert([
        'id'=> 30,
        'question_text'=>'Seorang kawan memiliki isteri yang akan melahirkan, dan karena tidak memiliki biaya Rumah Sakit, maka dia meminjam uang dari anda, padahal uang anda hanya cukup untuk kebutuhan sehari-hari. ',
        'answer_explanation'=>'',
        'topic_id'=>3
      ]);
    }
}
