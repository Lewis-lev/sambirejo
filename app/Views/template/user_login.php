</head>

<body>
    <div class="menu-1">
        <ul>
            <li style="float:left"><a class="active" href="/user"><b>Desa Wisata Sambirejo</b></a></li>
            <li><a class="login" href="login">Logout</a></li>
            <li><a href="user/contact">Contact</a></li>
            <li><a href="user/profile">Profil</a></li>
            <li><a href="user/lokasi">Lokasi</a></li>
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

</body>

</html>