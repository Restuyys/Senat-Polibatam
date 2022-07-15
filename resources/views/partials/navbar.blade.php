 <!--NAVBAR-->

 <nav class="navbar  sticky-top navbar-expand-lg navbar-dark navbar-inverse ">
        <div class="container-fluid">
            <a class="navbar-brand fs-4 " href="#">
                <img src="img/senatlogo1.png" alt="logo" height="70">
            </a>
            <div class="container-{breakpoint}" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{($title === "BERANDA") ? 'active' : ''}}" aria-current="page" href="/">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{($title === "TENTANG") ? 'active' : ''}}" href="/tentang">TENTANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{($title === "STRUKTUR") ? 'active' : ''}}" href="/struktur">STRUKTUR ORGANISASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{($title === "PRODUK SENAT") ? 'active' : ''}} " href="/produksenat">PRODUK SENAT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{($title === "PROGRAM KERJA") ? 'active' : ''}}" href="/programkerjasenat">PROGRAM KERJA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{($title === "PROSES BISNIS SENAT") ? 'active' : ''}}" href="/bisnissenat">PROSES BISNIS SENAT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{($title === "ASPIRASI SENAT") ? 'active' : ''}}" href="/aspirasisenat">ASPIRASI SENAT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>