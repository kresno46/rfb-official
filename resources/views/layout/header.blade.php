<?php
use Illuminate\Support\Facades\DB;
use App\Nav_model;
$site                 = DB::table('konfigurasi')->first();
// Produk
$myproduk             = new Nav_model();
$nav_kategori_produk  = $myproduk->nav_produk();
// Nav profil
$myprofil             = new Nav_model();
$nav_profil           = $myproduk->nav_profil();
?>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ asset('/') }}"><span>
          <img src="{{ asset('public/upload/image/'.$site->logo) }}" alt="Nitrico" style="min-height: 50px; width: auto;">
        </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{ asset('/') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
            <li class="active"><a href="{{ asset('/') }}">Home</a></li>
            <li><a href="{{ asset('berita') }}">News</a></li>
            <li class="drop-down"><a href="{{ asset('profil') }}review">Profile</a>
              <ul>
                <?php foreach($nav_profil as $nav_profil) { ?>
                <li><a href="{{ asset('berita/read/'.$nav_profil->slug_berita) }}"><?php echo $nav_profil->judul_berita ?></a></li>
                <?php } ?>
              </ul>
            </li>
           
            <li class="drop-down"><a href="{{ asset('produk') }}">Products</a>
              <ul>
                <?php foreach($nav_kategori_produk as $nkp) { ?>
                <li><a href="{{ asset('produk/kategori/'.$nkp->slug_kategori_produk) }}"><?php echo $nkp->nama_kategori_produk ?></a></li>
                <?php } ?>
                <li><a href="#"><hr style="margin: 0; padding: 0;"></a></li>
                <li><a href="{{ asset('produk') }}">All Products</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#">Info & Activities</a>
              <ul>
                
                <li><a href="{{ asset('video') }}">Youtube Video</a></li>
                <li><a href="{{ asset('galeri') }}">Image Gallery</a></li>
                <li><a href="{{ asset('download') }}">Download File</a></li>
              </ul>
            </li>
            <li><a href="{{ asset('kontak') }}">Contact Us</a></li>
              <li>
                  <a href="{{ asset('pemesanan') }}" class="orange" title="Form Pemesanan"><div class="belanja"><i class=""></i> Registration</div></a>
              </li>
                     
            
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header --><!-- ======= Hero Section ======= -->