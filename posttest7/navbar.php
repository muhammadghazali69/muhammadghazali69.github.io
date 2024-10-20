<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <script src="https://unpkg.com/feather-icons"></script>
    <nav class="navbar">
        <a href="#" class="navbar-logo">ELghaz<span>Joki</span></a>
        <div class="navbar-nav">
            <a href="dashboard.php#home">Home</a>
            <a href="dashboard.php#listjoki">List Joki</a>
            <a href="dashboard.php#pesanan">Pesan</a>
            <a href="dashboard.php#about">Tentang Saya</a>
        </div>
        <div class="navbar-extra">
            <a href="dashboard.php#listjoki" id="shop"><i data-feather="shopping-cart"></i></a>
            <a href="logout.php"><i data-feather="log-out"></i> </a>
            <a id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <button id="tema-change">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
            <path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
            <path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z" />
        </svg>
    </button>


    <script>
        feather.replace();
    </script>
</body>

</html>