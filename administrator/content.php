<?php 
//apabila belum login
if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
    echo "<link href='http://fonts.googleapis.com/css?family=Creepster|Audiowide' rel='stylesheet' type='text/css'>
        <link href=\"css/error.css\" rel='stylesheet' type=\"text/css\" />
<p class=\"error-code\">
    404
</p>

<p class=\"not-found\">Not<br/>Found</p>

<div class=\"clear\"></div>
<div class=\"content\">
    The page your are looking for is not found.
    <br>
    <a href=\"index.php\">Go Back</a>
    or
    <br>
    <br>
</div>";
}
else{
    include "config/inc.connection.php";
    include "config/inc.library.php";
    //page beranda
    if($_GET['module']=='beranda'){
        if($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' ){
                include "modul/mod_beranda/beranda.php";
        }
    }
    
    //halaman modul
    elseif($_GET['module']=='modul'){
        if($_SESSION['leveluser']=='admin' ){
            include "modul/mod_modul/modul.php";
        }
    }
    
    //halaman user
    elseif($_GET['module']=='user'){
        if($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
            include "modul/mod_user/user.php";
        }
    }
    
    //halaman kategori
    elseif($_GET['module']=='kategori'){
        if($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
            include "modul/mod_kategori/kategori.php";
        }
    }
    
    elseif($_GET['module']=='siswa' ){
        if($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
            include "modul/mod_siswa/siswa.php";
        }
    }
    
    //halaman penerbit 
    elseif ($_GET['module']=='penerbit') {
        if($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
            include "modul/mod_penerbit/penerbit.php";
        }
    }
    
    //halaman buku 
    elseif($_GET['module']=='buku'){
        if($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
            include "modul/mod_buku/buku.php";
        }
    }
    
    //pengadaan 
    elseif($_GET['module']=='pengadaan'){
        if($_SESSION['leveluser']=='admin'){
            include "modul/mod_pengadaan/pengadaan.php";
        }
    }

    //peminjaman
    elseif($_GET['module']=='peminjaman'){
        if($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
            include "modul/mod_peminjaman/peminjaman.php"; 
        }
    }
    
    elseif($_GET['module']=='pengembalian'){
        if($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
            include "modul/mod_pengembalian/pengembalian.php";
        }
    }
    elseif($_GET['module']=='datapinjam'){
        if($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
            include "modul/mod_datapinjam/datapinjam.php";
        }
    }
    //laporan per siswa
    elseif($_GET['module']=='lap_persiswa'){
        if($_SESSION['leveluser']=='admin'){
            include "modul/mod_lappersiswa/lap_persiswa.php";
        }
    }
    
    //lap bulan
    elseif($_GET['module']=='lap_bulan'){
        if($_SESSION['leveluser']=='admin'){
            include "modul/mod_lapbulan/lap_bulan.php";
        }
    }
    
    elseif($_GET['module']=='grafik'){
        if($_SESSION['leveluser']=='admin'){
            include "modul/mod_grafik/grafik.php";
        }
    }
    
    else{
        echo "<meta http-equiv='refresh' content='0; url=error.php'>";
    }
    
}