<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/paket.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ;?></title>
</head>

<body>

    <div class="menu">
        <ul>
            <li><button class="btn bold" style="background: #95d5ff" id="btn-balkondes">Paket Balkondes</button></li>
            <li><button class="btn bold" id="btn-rmahika_kb">Mahika Ayu dan Kopi Breksi</button></li>
            <li><button class="btn bold" id="btn-paket_std">Paket Study</button></li>
            <li><button class="btn bold" id="btn-jbreksi">Paket Jeep Breksi</button></li>
            <li><button class="btn bold" id="btn-cmahika">Camping Mahika Ayu</button></li>
        </ul>
    </div>

        <img src="img/tiket.png" id="tiket-img" alt="" class="display-none">

            <div class="img-wrapper" id="balkondes">
                <img src="img/paket/balkondes/balkondes1.webp" alt="">
                <img src="img/paket/balkondes/balkondes2.webp" alt="">
            </div>
            
            <div class="img-wrapper display-none" id="rmahika_kb">
                <img src="img/paket/rmahika_kb/rmahika_kb1.webp" alt="">
                <img src="img/paket/rmahika_kb/rmahika_kb2.webp" alt="">
            </div>
            
            <div class="img-wrapper display-none" id="paket_std">
                <img src="img/paket/paket_std/paket_std1.webp" alt="">
                <img src="img/paket/paket_std/paket_std2.webp" alt="">
                <img src="img/paket/paket_std/paket_std3.webp" alt="">
            </div>

            <div class="img-wrapper display-none" id="jbreksi">
                <img src="img/paket/jbreksi/jbreksi.webp" alt="">
            </div>

            <div class="img-wrapper display-none" id="cmahika">
                <img src="img/paket/cmahika/cmahika1.webp" alt="">
                <img src="img/paket/cmahika/cmahika2.webp" alt="">
            </div>

            <a href="https://wa.me/6282133578825" class="wa-button" id="wa-balkondes" target="_blank">
                <button class="btn">
                    <i class="fa fa-whatsapp"></i> Contact WA
                </button>
            </a>

            <a href="https://wa.me/6281328512722" class="wa-button display-none" id="wa-rmahika_kb" target="_blank">
                <button class="btn">
                    <i class="fa fa-whatsapp"></i> Contact WA
                </button>
            </a>

            <a href="https://wa.me/6282133309120" class="wa-button display-none" id="wa-paket_std-r" target="_blank">
                <button class="btn">
                    <i class="fa fa-whatsapp"></i> Contact WA (Romi)
                </button>
            </a>
            <a href="https://wa.me/6282226110203" class="wa-button display-none" id="wa-paket_std-p" target="_blank">
                <button class="btn">
                    <i class="fa fa-whatsapp"></i> Contact WA (Pras)
                </button>
            </a>

            <a href="https://wa.me/6281328306603" class="wa-button display-none" id="wa-jbreksi-1" target="_blank">
                <button class="btn">
                    <i class="fa fa-whatsapp"></i> Contact WA (1)
                </button>
            </a>
            <a href="https://wa.me/6281297452713" class="wa-button display-none" id="wa-jbreksi-2" target="_blank">
                <button class="btn">
                    <i class="fa fa-whatsapp"></i> Contact WA (2)
                </button>
            </a>

            <a href="https://wa.me/6281393783502" class="wa-button display-none" id="wa-cmahika" target="_blank">
                <button class="btn">
                    <i class="fa fa-whatsapp"></i> Contact WA
                </button>
            </a>

        <div class="text-center" id="btn-pesan1">
            <button class="btn text-center bold pesan" id="pesan1">
                Pesan Sekarang
            </button> 
        </div>
        <div class="text-center display-none" id="btn-pesan2">
            <button class="btn text-center bold pesan" id="pesan2">
                Pesan Sekarang
            </button> 
        </div>
        <div class="text-center display-none" id="btn-pesan3">
            <button class="btn text-center bold pesan" id="pesan3">
                Pesan Sekarang
            </button> 
        </div>
        <div class="text-center display-none" id="btn-pesan4">
            <button class="btn text-center bold pesan" id="pesan4">
                Pesan Sekarang
            </button> 
        </div>
        <div class="text-center display-none" id="btn-pesan5">
            <button class="btn text-center bold pesan" id="pesan5">
                Pesan Sekarang
            </button> 
        </div>

        <dialog id="form1">
        <form id="form-input1" action="save" methhod="post">

            <table>
                <tr class="display-none">
                    <td><label for="kode"></label></td>
                    <td><input type="text" name="kode" id="kode1" value="P<?php 
                            helper('text');
                            $code = random_string('numeric', 5);
                            echo $code;?>
                    "></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td><input type="text" name="nama" id="nama" ></td>
                </tr>
                <tr>
                    <td><label for="no_hp">No Whatsapp</label></td>
                    <td><input type="number" name="no_hp" id="no_hp" ></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email" ></td>
                </tr>
                <tr>
                    <td>Paket</td>
                    <td>
                        <label for="tiket">
                            <input type="text" name="tiket" id="tiket1" value="Balkondes" readonly>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td>
                        <label for="jenis">
                            <select name="jenis" id="jenis1">
                                <option value="Family Room">Family Room</option>
                                <option value="Couple Room">Couple Room</option>
                                <option value="Extra Bed">Extra Bed</option>
                            </select>
                        </label>
                    </td>
                </tr>
            </table>
            <div class="text-center">
                <button class="btn bold" id="submit" type="submit">Submit</button>
            </div>
        </form>

        </dialog>

        <dialog id="form2">
        <form id="form-input2" action="save" methhod="post">

            <table>
                <tr class="display-none">
                    <td><label for="kode"></label></td>
                    <td><input type="text" name="kode" id="kode2" value="P<?php 
                            helper('text');
                            $code = random_string('numeric', 5);
                            echo $code;?>
                    "></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td><input type="text" name="nama" id="nama" ></td>
                </tr>
                <tr>
                    <td><label for="no_hp">No Whatsapp</label></td>
                    <td><input type="number" name="no_hp" id="no_hp" ></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email" ></td>
                </tr>
                <tr>
                    <td>Paket</td>
                    <td>
                        <label for="tiket">
                            <input type="text" name="tiket" id="tiket2" value="Room Mahika" readonly>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td>
                        <label for="jenis">
                            <select name="jenis" id="jenis2">
                                <option value="Couple Room">Couple Room</option>
                            </select>
                        </label>
                    </td>
                </tr>
            </table>
            <div class="text-center">
                <button class="btn bold" id="submit" type="submit">Submit</button>
            </div>
        </form>

        </dialog>

        <dialog id="form3">
        <form id="form-input3" action="save" methhod="post">

            <table>
                <tr class="display-none">
                    <td><label for="kode"></label></td>
                    <td><input type="text" name="kode" id="kode3" value="P<?php 
                            helper('text');
                            $code = random_string('numeric', 5);
                            echo $code;?>
                    "></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td><input type="text" name="nama" id="nama" ></td>
                </tr>
                <tr>
                    <td><label for="no_hp">No Whatsapp</label></td>
                    <td><input type="number" name="no_hp" id="no_hp" ></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email" ></td>
                </tr>
                <tr>
                    <td>Paket</td>
                    <td>
                        <label for="tiket">
                            <input type="text" name="tiket" id="tiket3" value="Paket Study" readonly>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td>
                        <label for="jenis">
                            <select name="jenis" id="jenis3">
                                <option value="Paket Sambi 1">Paket Sambi 1</option>
                                <option value="Paket Sambi 2">Paket Sambi 2</option>
                                <option value="Paket Sambi 3">Paket Sambi 3</option>
                                <option value="Paket Sambi A">Paket Sambi A</option>
                                <option value="Paket Sambi B">Paket Sambi B</option>
                                <option value="Paket Sambi C">Paket Sambi C</option>
                            </select>
                        </label>
                    </td>
                </tr>
            </table>
            <div class="text-center">
                <button class="btn bold" id="submit" type="submit">Submit</button>
            </div>
        </form>
        </dialog>

        <dialog id="form4">
        <form id="form-input4" action="save" methhod="post">

            <table>
                <tr class="display-none">
                    <td><label for="kode"></label></td>
                    <td><input type="text" name="kode" id="kode4" value="P<?php 
                            helper('text');
                            $code = random_string('numeric', 5);
                            echo $code;?>
                    "></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td><input type="text" name="nama" id="nama" ></td>
                </tr>
                <tr>
                    <td><label for="no_hp">No Whatsapp</label></td>
                    <td><input type="number" name="no_hp" id="no_hp" ></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email" ></td>
                </tr>
                <tr>
                    <td>Paket</td>
                    <td>
                        <label for="tiket">
                            <input type="text" name="tiket" id="tiket4" value="Jeep Breaksi" readonly>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td>
                        <label for="jenis">
                            <select name="jenis" id="jenis4">
                                <option value="Short Trip Atas">Short Trip Atas</option>
                                <option value="Short Trip Bawah">Short Trip Bawah</option>
                                <option value="Medium Trip">Medium Trip</option>
                                <option value="Long Trip">Long Trip</option>
                            </select>
                        </label>
                    </td>
                </tr>
            </table>
            <div class="text-center">
                <button class="btn bold" id="submit" type="submit">Submit</button>
            </div>
        </form>
        </dialog>
        
        <dialog id="form5">
        <form id="form-input5" action="save" methhod="post">

            <table>
                <tr class="display-none">
                    <td><label for="kode"></label></td>
                    <td><input type="text" name="kode" id="kode5" value="P<?php 
                            helper('text');
                            $code = random_string('numeric', 5);
                            echo $code;?>
                    "></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td><input type="text" name="nama" id="nama" ></td>
                </tr>
                <tr>
                    <td><label for="no_hp">No Whatsapp</label></td>
                    <td><input type="number" name="no_hp" id="no_hp" ></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email" ></td>
                </tr>
                <tr>
                    <td>Paket</td>
                    <td>
                        <label for="tiket">
                            <input type="text" name="tiket" id="tiket5" value="Camping Mahika Ayu" readonly>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td>
                        <label for="jenis">
                            <select name="jenis" id="jenis5">
                                <option value="Paket Mandiri">Paket Mandiri</option>
                                <option value="Paket Relax">Paket Relax</option>
                                <option value="Paket Regular">Paket Regular</option>
                                <option value="Paket Medium">Paket Medium</option>
                                <option value="Paket Premium">Paket Premium</option>
                                <option value="Paket Campervan">Paket Campervan</option>
                            </select>
                        </label>
                    </td>
                </tr>
            </table>
            <div class="text-center">
                <button class="btn bold" id="submit" type="submit">Submit</button>
            </div>
        </form>
        </dialog>
        
    <script src="js/menu-paket.js"></script>
    <script src="js/form-pesan.js"></script>
    <script src="js/jspdf.js"></script>

</body>

</html>