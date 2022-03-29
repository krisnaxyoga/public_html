<?php /* Template Name: FAQ */ ?>
<?php get_header(); ?>
<!-- banner starts -->
<div class="banner d-flex align-items-center light-grey-bg">

    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('landing_v2.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
            </ol>
        </div>
    </nav>


    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>Apa yang bisa kami bantu hari ini?</h1>
            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                <img src="<?php echo $soms_redux['nwq999']['url']; ?>" alt="Home banner image" class="img-fluid">
                </div>
                <!-- End of .img-container -->
            </div>
            <!-- End of .col-lg-7 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</div>
<!-- End of .banner -->

<section class="section mb-5">
    <div class="container">
        <div class="row gap-y mb-5">
            <div class="col-lg-12 b-md-l order-lg-2">
                <h3 class="light">Umum</h3>
                <hr class="mb-4">
                <div class="accordion accordion-clean" id="faqs-accordion">
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q1"><i class="fas fa-angle-down angle mr-3"></i>Apa kegunaan dari aplikasi Refeed?</a></div>
                        <div id="v1-q1" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Refeed berfungsi menyediakan minishop dan membantu otomasi proses jual beli kamu. Jadi kamu tidak pelu selalu terikat dengan smartphone atau gadget untuk membalas pesan dari customer.</div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q2"><i class="fas fa-angle-down angle mr-3"></i>Apa saja yang bisa saya lakukan dengan Refeed?</a></div>
                        <div id="v1-q2" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Kamu bisa membuat mini shop sendiri tanpa ribet, membuat voucher belanja dan melakukan flash sale. Bukan hanya itu, kamu juga bisa melakukan pemeriksaan dengan memanfaatkan google analytics dan melakukan optimasi Instagram dengan auto follow, auto unfollow dan auto like . Refeed juga mendukung fitur facebook messenger chatbot dan whatsapp chatbot yang akan segera dirilis.</div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q3"><i class="fas fa-angle-down angle mr-3"></i>Bagaimana mengenai keamanan dan privasi data saya?</a></div>
                        <div id="v1-q3" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Refeed menjamin keamanan dan kerahasiaan riwayat transaksi kamu karena setiap proses dilakukan atas konfirmasi user.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="row gap-y my-5">
            <div class="col-lg-12 b-md-l order-lg-2">
                <h3 class="light">Penggunaan</h3>
                <hr class="mb-4">
                <div class="accordion accordion-clean" id="faqs-accordion">
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#a1-q1"><i class="fas fa-angle-down angle mr-3"></i>Bagaimana caranya mendaftar Refeed.id?</a></div>
                        <div id="a1-q1" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Kamu hanya perlu mengunjungi Daftar <a href="https://refeed.id" target="_blank">https://refeed.id</a> dan memilih menu daftar. Lengkapi data yang diminta dan kamu siap membuat minishopmu.</div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#a1-q2"><i class="fas fa-angle-down angle mr-3"></i>Bagaimana caranya menggunakan fitur lengkap Refeed.id?</a></div>
                        <div id="a1-q2" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Kamu bisa memilih paket selain starter.</div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#a1-q3"><i class="fas fa-angle-down angle mr-3"></i>Saya memilih paket starter, namun ingin merubahnya menjadi paket berbayar. Bagaimana caranya?</a></div>
                        <div id="a1-q3" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Masuk ke billing akun, lalu pilih paket yang ingin dipakai.</div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#a1-q4"><i class="fas fa-angle-down angle mr-3"></i>Bagaimana jika saya belum melakukan pembayaran saat sudah jatuh tempo apakah toko saya akan ditutup?</a></div>
                        <div id="a1-q4" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Tidak, tapi kamu tidak akan bisa melakuan transaksi apapun. Jadi sebaiknya lakukan pembayaran tepat waktu agar tetap bisa melakukan transaksi.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row gap-y mt-5">
            <div class="col-lg-12 b-md-l order-lg-2">
                <h3 class="light">Pembayaran</h3>
                <hr class="mb-4">
                <div class="accordion accordion-clean" id="faqs-accordion">
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#b1-q1"><i class="fas fa-angle-down angle mr-3"></i>Apakah aplikasi Refeed ini berbayar?</a></div>
                        <div id="b1-q1" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Ya, kamu harus membayar biaya aktifasi untuk paket selain starter dan membayar biaya transaksi sukses sebesar Rp. 1500 dan fee payment gateway.
                            <br> <a href="https://ipaymu.com/layanan/" target="_blank">Fee Transaksi iPaymu</a></div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#b1-q2"><i class="fas fa-angle-down angle mr-3"></i>Apa yang dibutuhkan untuk melakukan transaksi di Refeed?</a></div>
                        <div id="b1-q2" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Kamu perlu memiliki akun iPaymu untuk melakukan transaksi di Refeed. tenang saja, kamu sudah secara otomatis terdaftar di iPaymu saat mendaftar di Refeed. periksa kembali email pemberitahuan yang dikirim oleh Refeed untuk memastikan apakah kamu sudah terdaftar di iPaymu.</div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#b1-q3"><i class="fas fa-angle-down angle mr-3"></i>Apa itu iPaymu?</a></div>
                        <div id="b1-q3" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">iPaymu adalah suatu cara pembayaran online yang berfungsi untuk memudahkan pengguna dalam bertransaksi dengan menggunakan layanan internet.</div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#b1-q4"><i class="fas fa-angle-down angle mr-3"></i>Bagaimana cara mendaftar iPaymu?</a></div>
                        <div id="b1-q4" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Kamu secara otomatis sudah memiliki akun iPaymu. Pastikan untuk memeriksa emailmu. Atau kunjungi <a href="https://ipaymu.com/" target="_blank">https://ipaymu.com/</a> dan klik button Daftar Sekarang pada laman tersebut.</div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#b1-q5"><i class="fas fa-angle-down angle mr-3"></i>Apakah Customer juga harus memiliki akun iPaymu untuk bisa bertransaksi di Refeed.id?</a></div>
                        <div id="b1-q5" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body">Tidak.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<style>
        .term-title {
            font-size: 1.8rem;
            line-height: 3.2rem;
            font-weight: 300;
        }
    </style>
<?php get_footer(); ?>