<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/simulasi.css">
    <title>Add to Cart</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }

        .display-none {
            display: none;
        }
    </style>
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
                    <select name="tiket" id="tiket">
                        <option value="balkondes">Balkondes</option>
                        <option value="room_mahika">Room Mahika</option>
                        <option value="paket_study">Paket Study</option>
                        <option value="jeep_breksi">Jeep Breksi</option>
                        <option value="camping_mahika">Camping Mahika Ayu</option>
                    </select>
                </td>
                <td rowspan="2"><input type="number" step="0.01" min="0" name="harga" id="harga" placeholder="Rp 0,00" readonly></td>
            </tr>
            <tr id="paket-balkondes">
                <td>Jenis</td>
                <td>
                    <select name="paket" id="blk">
                        <option value=""></option>
                        <option value="family">Family Room</option>
                        <option value="couple">Couple Room</option>
                        <option value="extra">Extra Bed</option>
                    </select>
                </td>
            </tr>
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
                        <option value="paket_mandiri">Paket Mandiri</option>
                        <option value="paket_relax">Paket Relax</option>
                        <option value="paket_regular">Paket Reguler</option>
                        <option value="paket_medium">Paket Medium</option>
                        <option value="paket_premium">Paket Premium</option>
                        <option value="paket_campervan">Paket Campervan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Berapa Lama</td>
                <td>
                    <input type="number" value="1" id="duration" class="duration" placeholder="Hari">
                </td>
                <td>Hari</td>
            </tr>
            <tr>
                <td colspan="2">Jumlah</td>
                <td><input type="text" name="jml" step="0.01" min="0" id="jml" placeholder="Rp 0,00" readonly></td>
            </tr>
            <tr>
                <td colspan="2">Sisa</td>
                <td><input type="text" name="kmbl" step="0.01" min="0" id="kmbl" placeholder="Rp 0,00" readonly></td>
            </tr>
        </table>
    </form>
    <div class="text-center button" id="btn-pesan1">
            <button class="btn btn-cart text-center bold pesan" onclick="addToCart()" style="font-size: 18px;">
                Tambah ke keranjang <i class="fa fa-cart-shopping" style="font-weight: bold; font-size: 27px;"></i>
            </button> 
        </div>

    <table id="cartTable" border="1">
        <tr>
            <th>No</th>
            <th>Pesanan</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td colspan="3">Total</td>
            <td>200.000</td>
        </tr>
    </table>

    <script>
        var cartItems = [];

        function addToCart() {
            var form = document.getElementById("cartForm");
            var ticket = form.tiket.value;
            var package = "";
            var duration = form.duration.value;
            var price = form.jml.value;

            switch (ticket) {
                case "balkondes":
                    package = form.blk.value;
                    break;
                case "room_mahika":
                    package = form.mhk.value;
                    break;
                case "paket_study":
                    package = form.std.value;
                    break;
                case "jeep_breksi":
                    package = form.breksi.value;
                    break;
                case "camping_mahika":
                    package = form.ma.value;
                    break;
            }

            var order = ticket + " | " + package + " | " + duration + " Hari";

            var item = {
                order: order,
                price: price
            };

            cartItems.push(item);
            renderCartItems();
            resetForm();
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

                numberCell.innerHTML = i + 1;
                orderCell.innerHTML = item.order;
                priceCell.innerHTML = item.price;

                total += parseInt(item.price);
            }

            // Add total row
            var totalRow = cartTable.insertRow(cartItems.length + 1);
            var totalCell = totalRow.insertCell(0);
            totalCell.colSpan = 2;
            totalCell.innerHTML = "Total";
            var totalAmountCell = totalRow.insertCell(1);
            totalAmountCell.innerHTML = total;
        }

        function resetForm() {
            var form = document.getElementById("cartForm");
            form.reset();
        }
    </script>
</body>
</html>
