<body>
    <div class="menu-1">
        <ul>
            <li style="float:left"><a class="active" href="/admin"><b>Desa Wisata Sambirejo</b></a></li>
            <li><a class="logout" href="logout">Log Out</a></li>
            <li><a href="status">Sudah membayar</a></li>
            <li><a href="status1">Belum membayar</a></li>
            <li><a href="kunjungan">Sudah berkunjungan</a></li>
            <li><a href="kunjungan1">Belum berkunjungan</a></li>
        </ul>
    </div>

    <?= view($page_konten, $add_data); ?>

    <footer class="sambirejo-footer">
        <div class="outter">
            <div class="text">
                <br>
                <br>
                2022 - All rights reserved. Sambirejo
            </div>
        </div>
    </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js">
    </script>
    <script src="js/data-tables.js"></script>


</body>

</html>