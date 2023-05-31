<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Layanan::create([
            'name' => "Pijat Refleksi",
            'desc' => "Membantu mengurangi stres",
            'serve' => "Pijat refleksi dengan menekan bagian tertentu pada telapak kaki yang akan memengaruhi bagian tubuh lainnya dan memperlancar sirkulasi darah.",
            'illust' => "https://pbs.twimg.com/media/FsXGEV-aAAACajK?format=png&name=small",
            'foto' => "https://res.cloudinary.com/dk0z4ums3/image/upload/v1625856540/attached_image/ini-manfaat-pijat-refleksi-yang-bisa-anda-dapatkan.jpg",
        ]);
        Layanan::create([
            'name' => "Pijat Tradisional",
            'desc' => "Meredakan nyeri otot",
            'serve' => "Perawatan pijat menggunakan minyak atau krim yang dioleskan pada kulit untuk menyegarkan tubuh serta menghilangkan stres dengan relaksasi.",
            'illust' => "https://pbs.twimg.com/media/FsXDmMTagAAHrU9?format=png&name=small",
            'foto' => "https://asset-a.grid.id/crop/0x0:0x0/945x630/photo/2023/02/24/istock-474641678jpg-20230224020440.jpg",
        ]);
        Layanan::create([
            'name' => "Head & Back",
            'desc' => "Meningkatkan sirkulasi darah",
            'serve' => "Massage di area punggung dan kepala agar lebih relax dan nyaman.",
            'illust' => "https://pbs.twimg.com/media/FsXDo9XaAAIpcpb?format=png&name=360x360",
            'foto' => "https://s3-publishing-cmn-svc-prd.s3.ap-southeast-1.amazonaws.com/article/6fH5lGMgzwbcrqNyrT7GE/original/081625400_1641358809-Titik_Pijat_yang_Ampuh_Atasi_Sakit_Kepala_Anda.jpg",
        ]);
        Layanan::create([
            'name' => "Healing Coin",
            'desc' => "Memperkuat sistem imun",
            'serve' => "Terapi alternatif tradisional dengan koin yang digosokkan pada permukaan kulit untuk mengurangi keluhan badan lemas, pegal, dan linu.",
            'illust' => "https://pbs.twimg.com/media/FsXDsmzaIAETEGB?format=png&name=small",
            'foto' => "https://asset.kompas.com/crops/NOJ-dKhwpwhTdKORqU2US8XR--8=/0x0:743x495/750x500/data/photo/2022/10/25/635765d84133d.png",
        ]);
        Layanan::create([
            'name' => "Healing Cup",
            'desc' => "Membantu mengurangi berbagai rasa sakit",
            'serve' => "Perawatan terapi alternatif dengan menaruh gelas kaca pada kulit yang akan menarik kulit untuk memperlancar sirkulasi darah dan membantu mengatasi berbagai penyakit.",
            'illust' => "https://pbs.twimg.com/media/FsXDmMeakAcHLsG?format=png&name=small",
            'foto' => "https://res.cloudinary.com/dk0z4ums3/image/upload/v1638927800/attached_image/mengenal-terapi-bekam-dan-manfaatnya-bagi-kesehatan.jpg",
        ]);
        Layanan::create([
            'name' => "Tui-na Massage",
            'desc' => "Mengendurkan otot-otot yang tegang",
            'serve' => "Perawatan dengan menaruh tekanan pada meridian, titik-titik akupuntur, dan sekelompok otot serta saraf untuk mengatasi penyumbatan.",
            'illust' => "https://pbs.twimg.com/media/FsXDmMIaYAAEYmV?format=png&name=small",
            'foto' => "https://pereaclinic.com/wp-content/uploads/2022/07/Tuina-massage-scaled.jpg",
        ]);
        Layanan::create([
            'name' => "Yuka Spa",
            'desc' => "Menyegarkan kulit dan tubuh",
            'serve' => "Perawatan spa yang terdiri dari massage dan lulur untuk mengangkat sel kulit mati.",
            'illust' => "https://pbs.twimg.com/media/FsXDo6WaMAAhbwe?format=png&name=small",
            'foto' => "https://medicaltourism.id/wp-content/uploads/2022/04/Batangeh-Spa-Tradisional-ala-Minangkabau-@himsaifanah-1024x683-1.jpg",
        ]);
        Layanan::create([
            'name' => "Naoki Spa",
            'desc' => "Melemaskan dan merilekskan tubuh",
            'serve' => "Perawatan spa yang terdiri dari massage dan body steam, dengan beragam pilihan aroma scrub.",
            'illust' => "https://pbs.twimg.com/media/FsXDo43aAAAQiGp?format=png&name=small",
            'foto' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9PMEl7YvKQa2GXE6VuL3AVoLPw961gWlqN95nl_M740FiYwSt7dejKAm8arVzezrWyqw&usqp=CAU",
        ]);
        Layanan::create([
            'name' => "Totok Wajah",
            'desc' => "Mengatasi sakit kepala",
            'serve' => "Pengobatan dengan memberikan tekanan di titik-titik tertentu pada wajah.",
            'illust' => "https://pbs.twimg.com/media/FsXDo73aMAAe1Je?format=png&name=small",
            'foto' => "https://ilovelife.co.id/blog/wp-content/uploads/2015/10/totok-wajah-1.jpg",
        ]);
    }
}
