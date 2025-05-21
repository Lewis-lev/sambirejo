$(document).ready(function () {
    $("#tkt").change(function () {
        var val = $(this).val();
        if (val == "Balkondes") {
            $("#jenis").html("<option value=''></option><option value='Family Room'>Family Room</option><option value='Couple Room'>Couple Room</option><option value='Extra Bed'>Extra Bed</option>");
        } else if (val == "Room Mahika") {
            $("#jenis").html("<option value=''></option><option  value='Couple Room Mahika'>Couple Room</option>");
        } else if (val == "Paket Study") {
            $("#jenis").html("<option value=''></option><option value='Paket Sambi 1'>Paket Sambi 1</option><option value='Paket Sambi 2'>Paket Sambi 2</option><option value='Paket Sambi 3'>Paket Sambi 3</option><option value='Paket Sambi A'>Paket Sambi A</option><option value='Paket Sambi B'>Paket Sambi B</option><option value='Paket Sambi C'>Paket Sambi C</option>");
        } else if (val == "Jeep Breksi") {
            $("#jenis").html("<option value=''></option><option value='Short Trip Atas'>Short Trip Atas</option><option value='Short Trip Bawah'>Short Trip Bawah</option><option value='Medium Trip'>Medium Trip</option><option value='Long Trip'>Long Trip</option>");
        } else if (val == "Camping Mahika") {
            $("#jenis").html("<option value=''></option><option value='Paket Mandiri'>Paket Mandiri</option><option value='Paket Relax'>Paket Relax</option><option value='Paket Regular'>Paket Regular</option><option value='Paket Medium'>Paket Medium</option><option value='Paket Premium'>Paket Premium</option><option value='Paket Campervan'>Paket Campervan</option>");
        }
    });
});