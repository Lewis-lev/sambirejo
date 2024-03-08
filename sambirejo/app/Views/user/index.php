<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/sambirejo.jpg">
    <title><?= $judul ;?></title>
</head>

    <div class="foto-wrapper">
        <div class="foto" id="container">
            <div class="card" style="margin-left: 150px;"></div>
            <div class="card"><img src="img/amphiteater-1.jpg" alt=""></div>
            <div class="card"><img src="img/cafe-breksi-1.jpeg" alt=""></div>
            <div class="card"><img src="img/cafe-breksi-5.jpeg" alt=""></div>
            <div class="card"><img src="img/hut-desa-min.jpg" alt=""></div>
            <div class="card"><img src="img/jeep.jpg" alt=""></div>
            <div class="card"><img src="img/mahika-ayu-1.jpeg" alt=""></div>
            <div class="card"><img src="img/taman-batu-1.jpg" alt=""></div>
            <div class="card"><img src="img/watutapak-1.jpg" alt=""></div>
            <div class="card" style="margin-right: 150px;"></div>
        </div>
        <div class="slide-button">
            <button type="button" id="slideLeft" name="button" style="margin-right: 200px"><i
                    class="fa-solid fa-arrow-left"></i></button>
            <button type="button" id="slideRight" name="button" style="margin-left: 200px"><i
                    class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>

    <div class="upper-wrapper">

        <div class="video-wrapper">
            <iframe width="800" height="400" src="https://www.youtube.com/embed/0ea7WTL0fBg?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <!-- <div class="pesan-wrapper">
            <div class="kiri">
                
            </div>
            <div class="kanan">
            
            </div>
        </div> -->

        <div class="aktivitas">
            <h2>Agenda</h2>
            <div class="agenda-wrapper">
                <div id="card1" class="agenda-card card1">

                </div>
                <div id="card2" class="agenda-card card2">

                </div>
                <div id="card3" class="agenda-card card3">

                </div>
            </div>
        </div>
    </div>

    <dialog id="modal1" class="dialog">
        <div class="desk" style="height: 100px;">
            Penanaman 5000 bibit pohon
            di Taman Wisata Tebing Breksi dalam rangka Jaksa Peduli Lingkungan
        </div>
    </dialog>

    <dialog id="modal2" class="dialog">
        <div class="desk" style="height: 100px;">
            <p>
                KIM Sambirejo mengajak warga Kalurahan Sambirejo untuk bergabung melaksakan
                kegiatan SENAM SEHAT dalam rangka Semarak 17 Agustus di halaman kantor Kalurahan Sambirejo
            </p>
        </div>
    </dialog>

    <dialog id="modal3" class="dialog">
        <div class="desk" style="height: 200px;">
            <p>
                Untuk meningkatkan kreativitas dan keterampilan, pokja 3 TP PKK Kalurahan Sambirejo mengadakan
                pelatihan
                membatik kepada ibu-ibu Kalurahan Sambirejo. <br>
                Pelatihan ini dilaksanakan di aula Kantor Kalurahan Sambirejo.
                Pelatihan membatik ini menggunakan teknik batik jumputan. Batik jumputan merupakan teknik membatik
                yang
                dikerjakan dengan cara ikat celup
            </p>
        </div>
    </dialog>

    <div class="content-wrapper">
        <h2 class="name">Daya Tarik Wisata</h2>
        <div class="foto-content" id="wisata-container">
            <div class="card" id="tebingb">
                <img src="img/wisata/tebing_breksi.webp" alt="">
                <div class="text">Tebing Breksi</div>
            </div>
            <div class="card" id="watutapak">
                <img src="img/wisata/watu_tapak.webp" alt="">
                <div class="text">Watu Tapak</div>
            </div>
            <div class="card" id="paralayang">
                <img src="img/wisata/bukit_paralayang.webp" alt="">
                <div class="text">Bukit Paralayang</div>
            </div>
            <div class="card" id="riyadi">
                <img src="img/wisata/spot_riyadi.webp" alt="">
                <div class="text">Spot Riyadi</div>
            </div>
            <div class="card" id="watupayung">
                <img src="img/wisata/watu_payung.webp" alt="">
                <div class="text">Watu Payung</div>
            </div>
            <div class="card" id="barong">
                <img src="img/wisata/candi_barong.webp" alt="">
                <div class="text">Candi Barong</div>
            </div>
            <div class="card" id="ijo">
                <img src="img/wisata/candi_ijo.webp" alt="">
                <div class="text">Candi Ijo</div>
            </div>
            <div class="card" id="candari">
                <img src="img/wisata/candari.webp" alt="">
                <div class="text">Candari</div>
            </div>
        </div>
        <div class="content-button">
            <button class="left" type="button" id="wisata-slideLeft" name="button"><i
                    class="fa-solid fa-arrow-left"></i></button>
            <button class="right" type="button" id="wisata-slideRight" name="button"><i
                    class="fa-solid fa-arrow-right"></i></button>
        </div>
        <dialog class="dialog" id="dialog-tebingb">
            <h2>Tebing Breksi</h2>
            <hr>
            <div class="desk">
                Pada mulanya Tebing Breksi adalah abu dari Gunung Api Nglanggeran dalam erupsinya berpuluh-puluh
                juta
                tahun yang lalu.
                Waktu berlalu menyebabkan abu mengendap dan menjadi lumpur yang lalu mengeras menjadi batuan, ini
                adalah
                awal mula dari Tebing Breksi.
                Tebing Breksi menyediakan pemandangan yang akan memanjakan mata anda, dengan sejarah yang
                mengesankan
                yang akan menambah wawasan anda.
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-watutapak">
            <h2>Watu Tapak</h2>
            <hr>
            <div class="desk">
                Anda jenuh di kamar dan ingin mencari suasana alam untuk bersantai? Watu Tapak adalah tempat yang
                cocok
                untuk anda.
                Berada di daerah Sambirejo, Yogyakarta, Watu Tapak menyediakan tempat untung camping dengan suasana
                alam
                dan pemandangan yang indah
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-paralayang">
            <h2>Bukit Paralayang</h2>
            <hr>
            <div class="desk">
                Bukit Paralayang adalah tempat santai yang sangat cocok jika anda ingin menikmati indahnya sunset
                bersama teman atau kekasih.
                Dengan harga yang terjangkau dan medan yang mudah untuk ditempuh, ini menjadi pilihan yang cocok
                untuk
                menjadi tempat wisata
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-riyadi">
            <h2>Spot Riyadi</h2>
            <hr>
            <div class="desk">
                Anda menikmati pemandangan dari ketinggian? Maka Spot Riyadi akan menjadi pilihan yang pas,
                berlokasi di Dusun Dawangsari, Desa Sambirejo, Kecamatan Prambanan, Kabupaten Sleman, Provinsi
                Daerah
                Istimewa Yogyakarta.
                Anda dapat melihat indahnya kota dan juga Candi Perambanan dari atas sana.
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-watupayung">
            <h2>Watu Payung</h2>
            <hr>
            <div class="desk">
                Watu Payung Turunan menjadi obyek wisata yang sedang naik daun di Yogyakarta berkat keindahan yang
                di
                tawarkan.
                Sempat viral di media sosial membuat destinasi wisata Geoforest Watu Payung Turunan ramai di
                kunjungi
                wisatawan.
                Baik wisatawan lokal maupun luar Jogja yang penasaran akan keindahannya.
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-barong">
            <h2>Candi Barong</h2>
            <hr>
            <div class="desk">
                Candi Barong terletak di Dusun Candisari, Desa Sambirejo, Kecamatan Prambanan, Kabupaten Sleman,
                Daerah
                Istimewa Yogyakarta.
                Secara geografis, Candi Barong terletak di suatu perbukitan kapur, sawah tadah hujan dan tanah yang
                relatif kurang subur, dengan ketinggian 199,27 m dpl dan pada koordinat 110º 2’ 343” BT dan 7º 46’
                16”
                LS.
                Penamaan Candi Barong oleh penduduk setempat berkaitan erat dengan adanya hiasan kala pada
                masing-masing
                sisi tubuh candi.
                Hiasan semacam ini menyerupai gambaran barongan.
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-ijo">
            <h2>Candi Ijo</h2>
            <hr>
            <div class="desk">
                Candi Ijo dibangun sekitar abad ke-9, di sebuah bukit yang dikenal dengan Bukit Hijau atau Gumuk Ijo
                yang ketinggiannya sekitar 410 m di atas permukaan laut.
                Karena ketinggiannya, maka bukan saja bangunan candi yang bisa dinikmati tetapi juga pemandangan
                alam di
                bawahnya berupa teras-teras seperti di daerah pertanian dengan kemiringan yang curam.
                Meski bukan daerah yang subur, pemandangan alam di sekitar candi sangat indah untuk dinikmati.
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-candari">
            <h2>Candari</h2>
            <hr>
            <div class="desk">
                Candari merupakan resto yang berada di sebuah bukit yang ada di bagian barat Jogja.
                Atau lebih tepatnya berada di sebelah selatan dari Candi Prambanan.
                Dibuka sejak awal tahun 2022 lalu tempat ini cukup menyita perhatian. Pasalnya pemandangan yang
                disajikan sangat memanjakan mata.
                Selain itu desainya juga aesthetic, sangat fotoable.
            </div>
        </dialog>
    </div>

    <div class="content-wrapper">
        <h2 class="name">Kuliner</h2>
        <div class="foto-content" id="kuliner-container">
            <div class="card" id="breksi">
                <img src="img/kuliner/cafe _breksi.webp" alt="">
                <div class="text">Cafe Breksi</div>
            </div>
            <div class="card" id="balkondes">
                <img src="img/kuliner/balkondes.webp" alt="">
                <div class="text">Balkondes</div>
            </div>
            <div class="card" id="lesung">
                <img src="img/kuliner/lesung_cafe_and _resto.webp" alt="">
                <div class="text">Lesung Cafe</div>
            </div>
            <div class="card" id="watulangit">
                <img src="img/kuliner/watu_langit_coffee_and_resto.webp" alt="">
                <div class="text">Watu Langit Cafe</div>
            </div>
            <div class="card" id="abhayagiri">
                <img src="img/kuliner/abhayagiri_restaurant.webp" alt="">
                <div class="text">Abhayagiri</div>
            </div>
        </div>
        <div class="content-button">
            <button type="button" id="kuliner-slideLeft" name="button"><i class="fa-solid fa-arrow-left"></i></button>
            <button type="button" id="kuliner-slideRight" name="button"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
        <dialog class="dialog" id="dialog-breksi">
            <h2>Cafe Breksi</h2>
            <hr>
            <div class="desk">
                Cafe Breksi menyediakan menu spesial khusus untuk anda.
                Menu kopi pilihan dan makanan khas cafe breksi.
                Untuk harganya masih bisa dibilang terjangkau untuk semua kalangan.
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-balkondes">
            <h2>Balkondes</h2>
            <hr>
            <div class="desk">
                Balkondes Sambirejo adalah resto dan penginapan dengan desain semi tradisional.
                Beragam ruangan yang ada seperti: Joglo Ayodya, limasan Wismamitra, ruang rapat Dasarata, dan
                penginapan.
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-lesung">
            <h2>Lesung Cafe</h2>
            <hr>
            <div class="desk">
                <div class="desk">
                    Lesung Cafe and Resto Jogja merupakan cafe atau resto yang terletak berdekatan dengan Candi Ijo,
                    yang mempunyai suasana atau konsep yang menghadirkan keselarasan alam dan budaya.
                    Tentunya tempat tersebut juga mempunyai area yang sejuk terlihat dari gambar – gambar yang
                    terdapat
                    di artikel ini akan memberikan ketenangan dan kenyamanan saat berada di tempat tersebut.
                    Cocok untuk Anda yang ingin berkunjung bersama keluarga, pasangan maupun teman Anda untuk
                    bersantai
                    menikmati Alam dari tempat tersebut.
                </div>
        </dialog>
        <dialog class="dialog" id="dialog-watulangit">
            <h2>Watu Langit Cafe</h2>
            <hr>
            <div class="desk">
                Watu Langit Jogja merupakan destinasi wisata kuliner di Jogja yang belakangan ini terus meningkatkan
                kepopulerannya.
                Di mana wisata ini ditujukan bagi pengunjung yang ingin berwisata kuliner sembari berwisata kuliner
                sembari bersantai menikmati keindahan alam, khususnya di malam hari.
                Sajian pemandangan khas dataran tinggi menjadikan objek wisata ini terkenal di kalangan masyarakat
                sekitar maupun wisatawan lokal.
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-abhayagiri">
            <h2>Abhayagiri</h2>
            <hr>
            <div class="desk">
                Abhayagiri Restaurant merupakan restaurant yang dikenal berkat konsep natural dan masih bernuansa
                alam
                yang diusung oleh pihak pengelola.
                Di Abhayagiri Restaurant Jogja ini kalian juga dimanjakan dengan pemandangan asri yang terbentang
                luas.
                Tempat ini memang dibuat senyaman mungkin dan sejuk karena pepohonan hijau sehingga nuansa sejuk
                tercipta disini.
            </div>
        </dialog>
    </div>

    <div class="content-wrapper">
        <h2 class="name">Homestay & Hotel</h2>
        <div class="foto-content" id="penginapan-container">
            <div class="card" id="nisa">
                <img src="img/hotel/nisa_homestay.webp" alt="">
                <div class="text">Nisa Homestay</div>
            </div>
            <div class="card" id="lestari">
                <img src="img/hotel/lestari_homestay.webp" alt="">
                <div class="text">Lestari Homestay</div>
            </div>
            <div class="card" id="hs_balkondes">
                <img src="img/hotel/homestay_balkondes.webp" alt="">
                <div class="text">Homestay Balkondes</div>
            </div>
            <div class="card" id="aramanta">
                <img src="img/hotel/hotel_amaranta.webp" alt="">
                <div class="text">Hotel Aramanta</div>
            </div>
        </div>
        <div class="content-button">
            <button type="button" id="penginapan-slideLeft" name="button"><i
                    class="fa-solid fa-arrow-left"></i></button>
            <button type="button" id="penginapan-slideRight" name="button"><i
                    class="fa-solid fa-arrow-right"></i></button>
        </div>
        <dialog class="dialog" id="dialog-nisa">
            <h2>Nisa Homestay</h2>
            <hr>
            <div class="desk">
            Nglengkong, RT 003, RW.018, Sambirejo, Kec. Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-lestari">
            <h2>Lestari Homestay</h2>
            <hr>
            <div class="desk">
            Gunungsari, RT.07/RW.16, Gn. Sari, Sambirejo, Kec. Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55572
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-hs_balkondes">
            <h2>Homestay Balkondes</h2>
            <hr>
            <div class="desk">
            Kawasan Tebing Breksi Yogyakarta, Gn. Sari, Sambirejo, Kec. Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55572
            </div>
        </dialog>
        <dialog class="dialog" id="dialog-aramanta">
            <h2>Hotel Aramanta</h2>
            <hr>
            <div class="desk">
            Dawangsari 02/03 No. 45, Sambirejo, Prambanan, Sleman Regency, Special Region of Yogyakarta 55572
            </div>
        </dialog>
        
    </div>
    

    <script type="text/javascript" src="js/h-scrollbutton.js"></script>
    <script type="text/javascript" src="js/onclick-toogle.js"></script>
    <script type="text/javascript" src="js/modal.js"></script>
    <script type="text/javascript"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript">
    // $(document).ready(function () {
    //   $(wisata).on('change', function () {
    //     $(".foto").hide()
    //     $("#" + $(this).val()).fadeIn(700);
    //   }).change();
    // });
    </script>