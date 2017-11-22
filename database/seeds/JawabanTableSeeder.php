<?php

use Illuminate\Database\Seeder;

class JawabanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questions_options')->insert([
        'id'=> '1',
        'option'=>'Mencari kambing hitam penyebab masalah',
        'correct'=>0,
        'question_id'=> 1,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '2',
        'option'=>'Akan bertanggung jawab',
        'correct'=>1,
        'question_id'=> 1,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '3',
        'option'=>'Membiarkan masalah tetap berlangsung',
        'correct'=>0,
        'question_id'=> 1,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '4',
        'option'=>'Melihat dulu adakah orang lain yang bersalah',
        'correct'=>0,
        'question_id'=> 1,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '5',
        'option'=>'Mungkin ada pihak lain harus bertanggungjawab',
        'correct'=>0,
        'question_id'=> 1,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '6',
        'option'=>'Saya menugaskan pembuatan laporan kepada anak buah',
        'correct'=>0,
        'question_id'=> 2,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '7',
        'option'=>'Saya bersama anak buah menyusun laporan ',
        'correct'=>0,
        'question_id'=> 2,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '8',
        'option'=>'Saya sendiri yang menyusun laporan sebab tak ingin ada kesalahan yang dibuat oleh anak buah',
        'correct'=>1,
        'question_id'=> 2,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '9',
        'option'=>'Laporan harus dibuat oleh sekretaris',
        'correct'=>0,
        'question_id'=> 2,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '10',
        'option'=>'Tim khusus harus dibentuk untuk membuat laporan tersebut',
        'correct'=>0,
        'question_id'=> 2,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '11',
        'option'=>'Jujur mengatakan pada atasan tugasnya terlalu berat',
        'correct'=>0,
        'question_id'=> 3,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '12',
        'option'=>'Meminta keringanan',
        'correct'=>0,
        'question_id'=> 3,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '13',
        'option'=>'Meminta rekan kerja membantu',
        'correct'=>0,
        'question_id'=> 3,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '14',
        'option'=>'Berusaha menyelesaikan sebaik-baiknya',
        'correct'=>1,
        'question_id'=> 3,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '15',
        'option'=>'Menolak dan berterus terang tugasnya terlalu berat',
        'correct'=>0,
        'question_id'=> 3,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '16',
        'option'=>'Mengkonfirmasi untuk mendapatkan kebenaran ',
        'correct'=>1,
        'question_id'=> 4,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '17',
        'option'=>'Mengkonfirmasi jika saya dirugikan',
        'correct'=>0,
        'question_id'=> 4,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '18',
        'option'=>'Mengkonfirmasi jika selisih harga terlalu tinggi',
        'correct'=>0,
        'question_id'=> 4,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '19',
        'option'=>'Abaikan saja karena bukan kesalahan saya',
        'correct'=>0,
        'question_id'=> 4,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '20',
        'option'=>'Abaikan saja karena mungkin harganya telah berubah',
        'correct'=>0,
        'question_id'=> 4,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '21',
        'option'=>'Segera melakukan perbaikan atas draft laporan dan mengajukan kembali',
        'correct'=>0,
        'question_id'=> 5,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '22',
        'option'=>'Menyalahkan rekan sejawat yang sama-sama mengerjakannya',
        'correct'=>0,
        'question_id'=> 5,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '23',
        'option'=>'Menerima penolakan tetapi tidak melakukan tindak lanjut',
        'correct'=>0,
        'question_id'=> 5,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '24',
        'option'=>' Berusaha mencari alasan seperti sedikitnya waktu untuk mengerjakannya',
        'correct'=>0,
        'question_id'=> 5,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '25',
        'option'=>'Menerima penolakan dan berusaha memperbaiki',
        'correct'=>1,
        'question_id'=> 5,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '26',
        'option'=>'Diam-diam menyimpan kendaraan tersebut karena tidak seorang pegawaipun yang tahu kalau saya menggunakannya',
        'correct'=>0,
        'question_id'=> 6,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '27',
        'option'=>'Membawa kendaraan tersebut ke bengkel, melaporkan kejadian tersebut kepada pimpinan serta menyerahkan segala keputusan kepada pimpinan ',
        'correct'=>1,
        'question_id'=> 6,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '28',
        'option'=>'Mencoba memperbaiki sendiri kendaraan tersebut',
        'correct'=>0,
        'question_id'=> 6,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '29',
        'option'=>'Melaporkan kejadian tersebut kepada pimpinan dan siap menerima hukuman/petunjuk dari pimpinan',
        'correct'=>0,
        'question_id'=> 6,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '30',
        'option'=>'Membawa kendaraan tersebut ke bengkel atas biaya pribadi dan mengembalikannya dengan diam-diam',
        'correct'=>0,
        'question_id'=> 6,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '31',
        'option'=>'Membantah secara tegas agar pada kesempatan lain agar pimpinan tidak semena-mena menyalahkan',
        'correct'=>0,
        'question_id'=> 7,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '32',
        'option'=>'Diam saja, karena membantah hanya akan menambah rumit permasalahan',
        'correct'=>0,
        'question_id'=> 7,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '33',
        'option'=>'Menerima teguran tersebut dan mencoba menjadikannya sebagai pelajaran berharga, tetapi tetap melaporkan pegawai lain yang turut bersalah agar mereka juga memperbaiki kesalahan ',
        'correct'=>1,
        'question_id'=> 7,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '34',
        'option'=>'Membantah dan mengadukan pegawai lain yang juga bersalah agar mereka juga bisa belajar dari kejadian ini',
        'correct'=>0,
        'question_id'=> 7,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '35',
        'option'=>'Menerima teguran tersebut dan mecoba menjadikannya sebagai pelajaran berharga tanpa perlu mengadukan pegawai lain yang turut bersalah',
        'correct'=>0,
        'question_id'=> 7,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '36',
        'option'=>'Melihat situasi terlebih dulu. Jika memungkinkan, maka saya tolong',
        'correct'=>1,
        'question_id'=> 8,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '37',
        'option'=>'Langsung pulang saja karena bagaimanapun juga kondisi badan saya sangat lelah sekali',
        'correct'=>0,
        'question_id'=> 8,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '38',
        'option'=>'Pergi saja karena sudah ada orang yang mendekati korban tersebut, pastilah sudah ada yang menolong',
        'correct'=>0,
        'question_id'=> 8,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '39',
        'option'=>'Melihat sepintas, apakah korbannya parah. Jika parah, akan saya tolong ',
        'correct'=>0,
        'question_id'=> 8,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '40',
        'option'=>'Langsung pulang saja, paling-paling hanya rekayasa komplotan perampok jalanan yang sedang melakukan aksinya.',
        'correct'=>0,
        'question_id'=> 8,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '41',
        'option'=>'Berterus terang telah menggunakan fasilitas telepon di luar pekerjaan kantor ',
        'correct'=>1,
        'question_id'=> 9,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '42',
        'option'=>'Seharusnya organisasi menyelesaikan pembayaran saja karena anggaran masih tersedia',
        'correct'=>0,
        'question_id'=> 9,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '43',
        'option'=>'Sebaiknya atasan bertanya kepada setiap pegawai untuk mengetahui siapa saja yang menggunakan telepon di luar pekerjaan kantor',
        'correct'=>0,
        'question_id'=> 9,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '44',
        'option'=>'Seharusnya organisasi tidak perlu membesar-besarkan masalah ini karena masih banyak hal penting lainnya yang harus diselesaikan',
        'correct'=>0,
        'question_id'=> 9,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '45',
        'option'=>'Jika pimpinan membuktikan bahwa saya menggunakan telepon untuk urusan pribadi, saya akan mengundurkan diri',
        'correct'=>0,
        'question_id'=> 9,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '46',
        'option'=>'Tetap saya selesaikan karena itu tanggungjawab saya ',
        'correct'=>1,
        'question_id'=> 10,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '47',
        'option'=>'Daripada saya stress, lebih baik saya minta orang lain yang mengerjakan',
        'correct'=>0,
        'question_id'=> 10,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '48',
        'option'=>'Saya berhak memprotes kepada atasan ',
        'correct'=>0,
        'question_id'=> 10,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '49',
        'option'=>' Saya selesaikan meskipun terasa berat hati',
        'correct'=>0,
        'question_id'=> 10,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '50',
        'option'=>'Saya meminta tolong rekan kerja untuk menyelesaikan',
        'correct'=>0,
        'question_id'=> 10,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '51',
        'option'=>'Saya tidak dapat dipersalahkan',
        'correct'=>0,
        'question_id'=> 11,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '52',
        'option'=>'Itu tidak termasuk dalam tanggungjawab saya',
        'correct'=>0,
        'question_id'=> 11,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '53',
        'option'=>'Anak buah itu harus bertanggungjawab atas semuanya',
        'correct'=>0,
        'question_id'=> 11,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '54',
        'option'=>'Bagaimanapun juga, sebagai pimpinan proyek sayapun turut bertanggungjawab ',
        'correct'=>1,
        'question_id'=> 11,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '55',
        'option'=>'Hal itu menjadi kekeliruan anak buah saya semata',
        'correct'=>0,
        'question_id'=> 11,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '56',
        'option'=>'Ikut melakukannya karena bagaimanapun juga kawan-kawan kantor juga melakukannya',
        'correct'=>0,
        'question_id'=> 12,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '57',
        'option'=>'Melakukannya hanya jika terpaksa membutuhkan uang tambahan untuk keperluan keluarga, sebab gaji kantor memang kecil',
        'correct'=>0,
        'question_id'=> 12,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '58',
        'option'=>'Terkadang saja melakukan hal tersebut',
        'correct'=>0,
        'question_id'=> 12,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '59',
        'option'=>'Berusaha semampunya untuk tidak melakukannya',
        'correct'=>0,
        'question_id'=> 12,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '60',
        'option'=>'Tidak ingin melakukannya sama sekali',
        'correct'=>1,
        'question_id'=> 12,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '61',
        'option'=>'Saya memberikan obat tersebut kepadanya, toh tak ada yang tahu',
        'correct'=>0,
        'question_id'=> 13,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '62',
        'option'=>'Saya ragu-ragu keputusan apa yang saya ambil',
        'correct'=>0,
        'question_id'=> 13,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '63',
        'option'=>'Saya berkonsultasi kepada rekan sejawat dulu',
        'correct'=>0,
        'question_id'=> 13,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '64',
        'option'=>'Saya menolaknya dengan mantap',
        'correct'=>1,
        'question_id'=> 13,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '65',
        'option'=>'Saya menerima uang tersebut dan memberikan obatnya',
        'correct'=>0,
        'question_id'=> 13,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '66',
        'option'=>'Dalam hati tidak menyetujui hal tersebut',
        'correct'=>0,
        'question_id'=> 14,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '67',
        'option'=>'Hal tersebut sering terjadi di kantor manapun',
        'correct'=>0,
        'question_id'=> 14,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '68',
        'option'=>'Mengingatkan dan melaporkan kepada yang berwenang ',
        'correct'=>1,
        'question_id'=> 14,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '69',
        'option'=>'Tidak ingin terlibat dalam proses rekayasa tersebut',
        'correct'=>0,
        'question_id'=> 14,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '70',
        'option'=>'Hal semacam itu memang sudah menjadi tradisi yang tidak baik di Indonesia',
        'correct'=>0,
        'question_id'=> 14,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '71',
        'option'=>'Mentoleransi sebab baru kali ini Andi melakukannya',
        'correct'=>0,
        'question_id'=> 15,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '72',
        'option'=>'Rekan kerja yang lain juga melakukannya, jadi tidaklah mengapa',
        'correct'=>0,
        'question_id'=> 15,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '73',
        'option'=>'Mengingatkan dan menegur',
        'correct'=>0,
        'question_id'=> 15,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '74',
        'option'=>'Menegur dan melaporkan apa adanya kepada atasan',
        'correct'=>1,
        'question_id'=> 15,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '75',
        'option'=>'Menanyakan kepadanya mengapa dia melakukan hal tersebut',
        'correct'=>0,
        'question_id'=> 15,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '76',
        'option'=>'Berusaha menghindari rekan yang membujuk untuk mengetahui hasil keputusan rapat',
        'correct'=>0,
        'question_id'=> 16,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '77',
        'option'=>'Dengan bangga saya akan menceritakan kepada rekan sejawat saya hasil keputusan rapat',
        'correct'=>0,
        'question_id'=> 16,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '78',
        'option'=>'Memberitahukan anggota keluarga tentang hasil keputusan rapat',
        'correct'=>0,
        'question_id'=> 16,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '79',
        'option'=>'Memberitahu sahabat saya dikantor tentang hasil keputusan rapat',
        'correct'=>0,
        'question_id'=> 16,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '80',
        'option'=>'Tidak akan membocorkan hasil keputusan rapat karena bukan wewenang saya',
        'correct'=>1,
        'question_id'=> 16,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '81',
        'option'=>'Saya akan menjaga kerahasiaan permasalahan yang terjadi dan mencoba memberikan alternatif solusi kepada pimpinan',
        'correct'=>1,
        'question_id'=> 17,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '82',
        'option'=>'Seharusnya pimpinan puncak dapat menindak tegas yang terlibat dalam masalah ini',
        'correct'=>0,
        'question_id'=> 17,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '83',
        'option'=>'Tidak memperquestion_idkan masalah tersebut karena bukan bagian tugas saya',
        'correct'=>0,
        'question_id'=> 17,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '84',
        'option'=>'Pastikan bahwa kepala keuangan bertanggungjawab penuh terhadap masalah ini',
        'correct'=>0,
        'question_id'=> 17,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '85',
        'option'=>'Perlu membeberkan permasalah kepada seluruh jajaran organisasi',
        'correct'=>0,
        'question_id'=> 17,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '86',
        'option'=>'Beribadah',
        'correct'=>1,
        'question_id'=> 18,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '87',
        'option'=>'Tugas',
        'correct'=>0,
        'question_id'=> 18,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '88',
        'option'=>'Kewajiban',
        'correct'=>0,
        'question_id'=> 18,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '89',
        'option'=>'Kebutuhan',
        'correct'=>0,
        'question_id'=> 18,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '90',
        'option'=>'Mencari uang untuk nafkah',
        'correct'=>0,
        'question_id'=> 18,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '91',
        'option'=>'Menerima tawaran tersebut, sebab persaingan memang sangat ketat',
        'correct'=>0,
        'question_id'=> 19,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '92',
        'option'=>'Mempertimbangkan terlebih dahulu segala sesuatunya',
        'correct'=>0,
        'question_id'=> 19,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '93',
        'option'=>'Mencoba terlebih dahulu dengan cara resmi sebelum melalui cara seperti itu',
        'correct'=>0,
        'question_id'=> 19,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '94',
        'option'=>'Menolaknya. Karena saya ingin diterima dengan cara yang sah, bukan dengan suap, agar rezki saya sebagai Karyawan nanti tetap halal',
        'correct'=>1,
        'question_id'=> 19,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '95',
        'option'=>'Meminta pertimbangan orangtua dan pihak-pihak yang lebih berpengalaman',
        'correct'=>0,
        'question_id'=> 19,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '96',
        'option'=>'Karena banyak yang melakukannya, mungkin hal itu tidaklah mengapa',
        'correct'=>0,
        'question_id'=> 20,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '97',
        'option'=>'Banyak yang melakukannya sehingga sayapun juga melakukannya',
        'correct'=>0,
        'question_id'=> 20,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '98',
        'option'=>'Demi toleransi, saya ikut melakukannya',
        'correct'=>0,
        'question_id'=> 20,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '99',
        'option'=>'Saya tidak melakukannya agar dinilai sebagai staf yang rajin oleh atasan',
        'correct'=>0,
        'question_id'=> 20,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '100',
        'option'=>'Saya tetap mengikuti aturan yang berlaku sehingga tetap pulang sesuai jadwal',
        'correct'=>1,
        'question_id'=> 20,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '101',
        'option'=>'Sayapun tidak boleh melakukan kekeliruan tersebut ',
        'correct'=>1,
        'question_id'=> 21,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '102',
        'option'=>'Karena saya atasannya, peraturan tersebut tidak berlaku bagi saya sendiri',
        'correct'=>0,
        'question_id'=> 21,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '103',
        'option'=>'Saya sesekali melakukan kekeliruan tersebut',
        'correct'=>0,
        'question_id'=> 21,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '104',
        'option'=>'Peraturan tersebut khusus untuk pegawai setingkat dia',
        'correct'=>0,
        'question_id'=> 21,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '105',
        'option'=>'Lebih baik saya tidak melakukan kekeliruan tersebut',
        'correct'=>0,
        'question_id'=> 21,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '106',
        'option'=>'Maka saya langsung saja mem-print di kantor',
        'correct'=>0,
        'question_id'=> 22,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '107',
        'option'=>'Saya mem-print di kantor namun dengan memakai kertas saya sendiri',
        'correct'=>0,
        'question_id'=> 22,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '108',
        'option'=>'Saya mem-print di kantor namun menunggu setelah jam kerja selesai',
        'correct'=>0,
        'question_id'=> 22,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '109',
        'option'=>'Saya mem-print di rumah saja memakai printer sendiri ',
        'correct'=>1,
        'question_id'=> 22,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '110',
        'option'=>'Saya mem-print di kantor pada saat printer tidak dipakai',
        'correct'=>0,
        'question_id'=> 22,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '111',
        'option'=>'Sayapun tidak akan mematuhi peraturan yang sangat sulit untuk dipatuhi itu',
        'correct'=>0,
        'question_id'=> 23,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '112',
        'option'=>'Jika hanya saya yang mematuhi peraturan tersebut, maka percuma saja',
        'correct'=>0,
        'question_id'=> 23,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '113',
        'option'=>'Saya akan terus mematuhi peraturan tersebut meskipun sebagian besar melanggarnya',
        'correct'=>0,
        'question_id'=> 23,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '114',
        'option'=>'Saya mematuhi peraturan tersebut dan berusaha mengajak pegawai lain untuk turut mematuhinya ',
        'correct'=>1,
        'question_id'=> 23,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '115',
        'option'=>'Sebaiknya peraturan yang sulit seperti itu harus dirubah',
        'correct'=>0,
        'question_id'=> 23,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '116',
        'option'=>'Tidak bertindak apapun, cukup dengan mengikuti jalannya arus',
        'correct'=>0,
        'question_id'=> 24,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '117',
        'option'=>'Mengusahakan keterlibatan pegawai dalam pengambilan keputusan ',
        'correct'=>1,
        'question_id'=> 24,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '118',
        'option'=>'Mengabaikan saja',
        'correct'=>0,
        'question_id'=> 24,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '119',
        'option'=>'Melakukan apa saja yang dapat dikerjakan utuk membuat pegawai merasa peting dan dilibatkan',
        'correct'=>0,
        'question_id'=> 24,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '120',
        'option'=>'Mengingatkan pentingnya batas waktu dan tugas kepada atasan',
        'correct'=>0,
        'question_id'=> 24,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '121',
        'option'=>'Merasa sangat kecewa',
        'correct'=>0,
        'question_id'=> 25,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '122',
        'option'=>'Mencoba mencari alternatif usulan lain yang lebih tepat untuk diajukan lagi',
        'correct'=>1,
        'question_id'=> 25,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '123',
        'option'=>'Merasa kecewa tetapi berusaha melupakan penolakan tersebut',
        'correct'=>0,
        'question_id'=> 25,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '124',
        'option'=>'Bersikeras memberikan alasan dan pembenaran atas usulan tersebut sampai dapat meyakinkan atasan saya',
        'correct'=>0,
        'question_id'=> 25,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '125',
        'option'=>'Membiarkan saja',
        'correct'=>0,
        'question_id'=> 25,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '126',
        'option'=>'Mengambil keputusan meskipun tanpa petunjuk atasan selama tidak bertentangan dengan kebijakan umum pimpinan',
        'correct'=>1,
        'question_id'=> 26,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '127',
        'option'=>'Tidak berani mengambil keputusan tanpa petunjuk atasan saya',
        'correct'=>0,
        'question_id'=> 26,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '128',
        'option'=>'Ragu‐ragu dalam mengambil keputusan tanpa petunjuk atasan saya',
        'correct'=>0,
        'question_id'=> 26,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '129',
        'option'=>'Menunda‐nunda pengambilan keputusan tanpa petunjuk atasan saya',
        'correct'=>0,
        'question_id'=> 26,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '230',
        'option'=>'Mengambil keputusan tanpa petunjuk atasan karena keadaan sangat mendesak',
        'correct'=>0,
        'question_id'=> 26,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '131',
        'option'=>'Berminat mengajukan suatu ide kegiatan yang akan dilaksanakan meskipun nantinya ide tersebut tidak diterima ',
        'correct'=>1,
        'question_id'=> 27,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '132',
        'option'=>'Tidak berminat sama sekali untuk mengajukan suatu ide kegiatan',
        'correct'=>0,
        'question_id'=> 27,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '133',
        'option'=>'Akan mengajukan suatu ide kegiatan jika diminta oleh pimpinan',
        'correct'=>0,
        'question_id'=> 27,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '134',
        'option'=>'Mungkin berminat untuk mengajukan suatu ide kegiatan yang akan dilaksanakan tergantung situasi dan kondisi',
        'correct'=>0,
        'question_id'=> 27,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '135',
        'option'=>'Ragu‐ragu untuk mengajukan suatu ide kegiatan karena akan kecewa jika tidak diterima',
        'correct'=>0,
        'question_id'=> 27,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '136',
        'option'=>'Bagaimanapun juga publik berhak tahu, oleh karenanya saya beberkan masalah internal tersebut kepada publik',
        'correct'=>0,
        'question_id'=> 28,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '137',
        'option'=>'Saya berusaha memberikan gagasan pemecahan masalah kepada pimpinan, sambil menjaga kerahasiaan masalah internal ini ',
        'correct'=>1,
        'question_id'=> 28,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '138',
        'option'=>'Biarlah pimpinan yang mengambil keputusan',
        'correct'=>0,
        'question_id'=> 28,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '139',
        'option'=>'Saya tentu saja berusaha menjaga keamanan posisi saya agar tidak terusik',
        'correct'=>0,
        'question_id'=> 28,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '140',
        'option'=>'Saya berusaha agar diri saya jangan sampai terkena imbasnya',
        'correct'=>0,
        'question_id'=> 28,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '141',
        'option'=>'Lebih baik saya diam karena yang lainpun juga diam saja',
        'correct'=>0,
        'question_id'=> 29,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '142',
        'option'=>'Saya menuliskan ke secarik kertas mengenai kancing tersebut lalu saya serahkan kepada Pak Benny ',
        'correct'=>1,
        'question_id'=> 29,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '143',
        'option'=>'Meskipun hal itu mengganggu jalannya presentasi namun saya tak mau ambil resiko dengan memberitahunya',
        'correct'=>0,
        'question_id'=> 29,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '144',
        'option'=>'Saya takut Pak Benny tersinggung, jadi tak ada alasan untuk saya memberitahunya',
        'correct'=>0,
        'question_id'=> 29,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '145',
        'option'=>'Semoga Pak Benny sadar dengan sendirinya',
        'correct'=>0,
        'question_id'=> 29,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '146',
        'option'=>'Saya meminta maaf dan mengatakan yang sebenarnya bahwa saya tidak punya uang untuk dipinjamkan',
        'correct'=>0,
        'question_id'=> 30,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '147',
        'option'=>'Saya pinjamkan sisa uang saya yang sedikit tersebut',
        'correct'=>0,
        'question_id'=> 30,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '148',
        'option'=>'Saya menolak meminjamkan uang saya, karena itu hanya cukup untuk kebutuhan sehari-hari',
        'correct'=>0,
        'question_id'=> 30,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '149',
        'option'=>'Saya akan memberikan solusi dengan membantunya meminjam uang dari kawan lain ',
        'correct'=>1,
        'question_id'=> 30,
      ]);
      DB::table('questions_options')->insert([
        'id'=> '150',
        'option'=>'Saya menyarankan agar dia meminjam dari orang lain',
        'correct'=>0,
        'question_id'=> 30,
      ]);
    }
}
