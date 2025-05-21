<style>
    ul li a[href="simulasi"] {
    color: white;
  }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/simulasi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title><?= $judul ;?></title>
</head>

<body>
      
        <form id="cartForm">
            <table border="2">
                <tr>
                    <td colspan="2">Anggaran</td>
                    <td><input type="number" name="jml_ung" step="0.01" min="0" id="jml_ung" placeholder="Rp 0,00"></td>
                </tr>
                <tr>
                    <td>Paket</td>
                    <td>
                        <select name="tiket" id="tkt">
                            <option value="Balkondes">Balkondes</option>
                            <option value="Room Mahika">Room Mahika</option>
                            <option value="Paket Study">Paket Study</option>
                            <option value="Jeep Breksi">Jeep Breksi</option>
                            <option value="Camping Mahika">Camping Mahika Ayu</option>
                        </select>
                    </td>
                    <td rowspan="2"><input type="number" step="0.01" min="0" name="harga" id="harga" placeholder="Rp 0,00" readonly></td>
                </tr>
                <tr id="paket-balkondes">
                    <td>Jenis</td>
                    <td>
                        <select name="paket" id="jenis">
                            <option value=""></option>
                            <option value="Family Room">Family Room</option>
                            <option value="Couple Room">Couple Room</option>
                            <option value="Extra Bed">Extra Bed</option>
                        </select>
                    </td>
                <!-- </tr>
                <tr id="paket-rmahika" class="display-none">
                    <td>Jenis</td>
                    <td>
                        <select name="paket" id="mhk">
                            <option value=""></option>
                            <option value="couple">Couple Room</option>
                        </select>
                    </td>
                </tr>
                <tr id="paket-study" class="display-none">
                    <td>Jenis</td>
                    <td>
                        <select name="paket" id="std">
                            <option value=""></option>
                            <option value="paket_sambi_1">Paket Sambi 1</option>
                            <option value="paket_sambi_2">Paket Sambi 2</option>
                            <option value="paket_sambi_3">Paket Sambi 3</option>
                            <option value="paket_sambi_a">Paket Sambi A</option>
                            <option value="paket_sambi_b">Paket Sambi B</option>
                            <option value="paket_sambi_c">Paket Sambi C</option>
                        </select>
                    </td>
                </tr>
                <tr id="paket-jeep" class="display-none">
                    <td>Jenis</td>
                    <td>
                        <select name="paket" id="breksi">
                            <option value=""></option>
                            <option value="short_trip_atas">Short Trip Atas</option>
                            <option value="short_trip_bawah">Short Trip Bawah</option>
                            <option value="medium_trip">Medium Trip</option>
                            <option value="long_trip">Long Trip</option>
                        </select>
                    </td>
                </tr>
                <tr id="paket-cmahika" class="display-none">
                    <td>Jenis</td>
                    <td>
                        <select name="paket" id="ma">
                            <option value=""></option>
                            <option value="paket_mandiri">Paket Madiri</option>
                            <option value="paket_relax">Paket Relax</option>
                            <option value="paket_regular">Paket Reguler</option>
                            <option value="paket_medium">Paket Medium</option>
                            <option value="paket_premium">Paket Premium</option>
                            <option value="paket_campervan">Paket Campervan</option>
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <td>Berapa Lama</td>
                    <td>
                        <input type="number" value="1" id="duration" class="duration" placeholder="Hari"></td>
                        <td>Hari</td>
                </tr>
                <tr>
                    <td colspan="2">Jumlah</td>
                    <td><input type="text" name="jml" step="0.01" min="0" id="jml" placeholder="Rp 0,00" readonly></td>
                    <td class="display-none" ><input type="number" name="price" step="0.01" min="0" id="price" placeholder="Rp 0,00" readonly></td>
                </tr>
                <tr>
                    <td colspan="2">Sisa</td>
                    <td><input type="text" name="kmbl" step="0.01" min="0" id="kmbl" placeholder="Rp 0,00" readonly></td>
                </tr>
            </table>
        </form>

        <div class="text-center button" id="btn-pesan1">
            <button class="btn button-b btn-cart text-center bold pesan" onclick="addToCart()" style="font-size: 18px;">
                Tambah ke keranjang <i class="fa fa-cart-shopping" style="font-weight: bold; font-size: 27px;"></i>
            </button> 
        </div>

        <table id="cartTable" border="1">
            <tr>
                <th>No</th>
                <th>Pesanan</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
            <tr>
                <td colspan="3">Total</td>
                <td></td>
            </tr>
        </table>

        <div class="text-center button" id="btn-pesan1">
            <a href="https://wa.me/6282226110203" target="_black">
                <button class="btn button-b text-center bold pesan" style="font-size: 18px;">
                    Contact WA <i class="fa fa-whatsapp" style="font-weight: bold; font-size: 27px;"></i>
                </button> 
            </a>
        </div>
        
        <script src="js/select.js"></script>
        <script src="js/simulasi.js"></script>
        <script>
        var cartItems = [];

        function addToCart() {
            var form = document.getElementById("cartForm");
            var ticket = form.tiket.value;
            var package = form.jenis.value;
            var duration = form.duration.value;
            var price = form.price.value;

            var order = "<strong>" + ticket + "</strong>" + " | " + "<strong>" + package + "</strong>" + " | " + "<strong>" + duration + " Hari" + "</strong>";

            var item = {
                order: order,
                price: price
            };

            cartItems.push(item);
            renderCartItems();
            resetForm();
        }

        function deleteItem(index) {
            cartItems.splice(index, 1);
            renderCartItems();
        }

        function renderCartItems() {
            var cartTable = document.getElementById("cartTable");
            var total = 0;

            // Clear previous table data
            while (cartTable.rows.length > 1) {
                cartTable.deleteRow(1);
            }

            // Add items to the table
            for (var i = 0; i < cartItems.length; i++) {
                var item = cartItems[i];
                var row = cartTable.insertRow(i + 1);
                var numberCell = row.insertCell(0);
                var orderCell = row.insertCell(1);
                var priceCell = row.insertCell(2);
                var actionCell = row.insertCell(3);

                numberCell.innerHTML = i + 1;
                orderCell.innerHTML = item.order;
                priceCell.innerHTML = item.price;

                var deleteButton = document.createElement("button");
                deleteButton.innerHTML = "Delete";
                deleteButton.classList.add("btn-delete");
                (function (i) {
                    deleteButton.addEventListener("click", function () {
                        deleteItem(i);
                    });
                })(i);
                actionCell.appendChild(deleteButton);

                total += parseFloat(item.price);
            }

            // Add total row
            var totalRow = cartTable.insertRow(cartItems.length + 1);
            var totalCell = totalRow.insertCell(0);
            totalCell.colSpan = 2;
            totalCell.innerHTML = "Total";
            var totalAmountCell = totalRow.insertCell(1);
            totalAmountCell.innerHTML = total.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
        }

        function resetForm() {
            var form = document.getElementById("cartForm");
            form.reset();
        }
    </script>

</body>

</html>