<?php /* Template Name: tosman */ ?>
<?php get_header(); ?>
<div class="banner d-flex align-items-center light-grey-bg">

    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('landing_v2.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">TOS Export</li>
            </ol>
        </div>
    </nav>


    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>Syarat dan Ketentuan Umum Jasa Layanan Export</h1>
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
    <div class="container mb-5">
        <div class="row gap-y mb-5">
            <div class="col-lg-12 b-md-l order-lg-2">
                <div class="accordion accordion-clean" id="faqs-accordion">
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-qx1"><i class="fas fa-angle-down angle mr-3"></i>Definisi</a></div>
                        <div id="v1-qx1" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <ol type="1">
                                    <li>Definisi berikut berlaku untuk syarat dan ketentuan yang tercantum di bawah ini:</li>
                                    <ul>
                                        <li>“barang” berarti objek atau benda apa pun yang akan dikirim atau pengembalian berdasarkan Jasa Layanan apa pun namun tidak termasuk barang-barang demikian yang dilarang berdasarkan syarat dan ketentuan ini termasuk barang-barang yang dikecualikan sesuai dengan daftar Item Yang Dilarang dari Perjanjian ini;</li>
                                        <li>"Pelanggan" berarti pelanggan yang menggunakan Jasa Layanan (sebagaimana didefinisikan di bawah) dan jika pelanggan tersebut merupakan suatu korporasi, istilah "Pelanggan" mencakup entitas apa pun atau entitas-entitas yang diberikan wewenang oleh korporasi tersebut untuk mendapatkan manfaat dari Jasa Layanan sebagaimana ditentukan dalam Perjanjian;</li>
                
                                    </ul>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q1"><i class="fas fa-angle-down angle mr-3"></i>Jadwal Pembayaran</a></div>
                        <div id="v1-q1" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <p>Jadwal pembayaran tergantung pada jenis jasa layanan yang diperoleh. Semua jasa layanan REFEED mengeluarkan invoice dua kali sebulan dan dikeluarkan setiap tanggal 15 dan 30. Tempo yang disepakati adalah 15 hari setelah invoice diterima oleh customer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q2"><i class="fas fa-angle-down angle mr-3"></i>Ketentuan Pembayaran</a></div>
                        <div id="v1-q2" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <ol type="1">
                                    <li>Sebagai imbalan untuk hasil-hasil pekerjaan REFEED sebagaimana diuraikan dalam dokumen ini, Merchant setuju untuk membayar kepada REFEED Biaya-Biaya sesuai dengan Perjanjian ini.</li>
                                    <li>Pembayaran akan jatuh tempo, tiga puluh hari sejak tanggal faktur REFEED.</li>
                                    <li>Jumlah pengiriman uang yang diterima REFEED harus mencerminkan jumlah total keseluruhan dalam invoice dan  Faktur termasuk semua pajak yang disebutkan.</li>
                                    <li>Jika Merchant gagal untuk melakukan pembayaran yang jatuh tempo kepada Pemasok berdasarkan Kontrak sampai dengan tanggal jatuh tempo, Merchant harus membayar bunga atas jumlah yang lewat jatuh tempo sejak tanggal jatuh tempo sampai dengan pembayaran jumlah yang lewat jatuh tempo tersebut, baik sebelum atau setelah penilaian. Bunga akan bertambah setiap hari sebesar 2% per bulan.</li>
                                    <li>Jika Merchant gagal membayar jumlah apapun yang jatuh tempo dalam waktu tiga puluh hari setelah pemberitahuan tertulis, REFEED berhak untuk menghentikan pelaksanaan pengiriman berdasarkan Perjanjian ini dan kembali melakukan pengiriman jika pembayaran telah diterima oleh PT. Dwitama Global Persada.</li>
                                    <li>Tarif logistik (B2C) ditagih per pesanan, berat aktual atau berat volumetrik (1/5000) mana yang lebih tinggi, sebagaimana diukur oleh REFEED (kecuali ditentukan lain), dan penentuan berat tersebut oleh REFEED bersifat final dan konklusif.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q3"><i class="fas fa-angle-down angle mr-3"></i>Pajak</a></div>
                        <div id="v1-q3" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <ol type="1">
                                    <li>Beban yang disebutkan dalam Perjanjian ini tidak termasuk tarif yang berlaku untuk Pajak Barang dan Jasa (PPH) di Indonesia. Tagihan akan mencakup PPH yang harus dibayar untuk jasa layanan yang diberikan.</li>
                                    <li>Merchant setuju membayar REFEED untuk pajak tambahan lainnya yang ditimbulkan oleh Merchant kepada REFEED yang memberikan jasa layanannya.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q4"><i class="fas fa-angle-down angle mr-3"></i>Tidak Ada Bujukan Terhadap Karyawan</a></div>
                        <div id="v1-q4" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <p>Merchant setuju, baik secara sadar ataupun tidak sadar membujuk dan atau mempekerjakan karyawan REFEED untuk keperluan perusahaan dan atau usaha individu yang dimiliki oleh Merchant selama pelaksanaan Perjanjian ini berlangsung dan satu tahun setelah pengakhiran perjanjian ini tanpa persetujuan tertulis dari REFEED.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q5"><i class="fas fa-angle-down angle mr-3"></i>Kewajiban Merchant</a></div>
                        <div id="v1-q5" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <ol type="1">
                                    <li>Merchant akan memberikan satu kontak utama yang dimana melaluinya semua umpan balik dapat diterima dan dikomunikasikan antara kedua belah pihak supaya komunikasi dapat terjalin dengan baik.</li>
                                    <li>Tim Merchant setuju untuk menanggapi semua komunikasi dalam maximal dua (2) hari kerja dan turut bekerja sama dengan REFEED selama seluruh jasa layanan berlangsung untuk mencapai tujuan bersama dalam melakukan pengiriman yang tepat waktu.</li>
                                    <li>Merchant wajib untuk membayar semua jumlah tagihan yang jatuh tempo kepada REFEED pada saat diminta. Beban untuk Jasa Layanan yang berlaku. Untuk informasi lebih lanjut, mohon minta kartu tarif melalui email di support@refeed.id.</li>
                                    <li>Merchant akan bertanggung jawab atas segala biaya dan/atau pengeluaran apa pun dalam bentuk apa pun. Termasuk pada beban penyimpanan, bea cukai dan pajak, biaya pengambilan barang dan biaya administrasi sehubungan dengan jasa layanan yang dilakukan dan/atau penerima menolak atau untuk membayar beban, biaya, atau pengeluaran tersebut termasuk pembatalan yang berhubungan dengan pengembalian pengiriman barang.</li>
                                    <li>Merchant akan bertanggung jawab atas semua beban, biaya atau pengeluaran dalam bentuk apa pun, termasuk tetapi tidak terbatas pada beban penyimpanan, bea dan pajak, biaya pengambilan dan administrasi sehubungan dengan pembatalan Jasa Layanan atau pengembalian (karena kegagalan pengiriman atau lainnya) dari barang apa pun.</li>
                                    <li>Merchant akan bertanggung jawab atas semua beban VAT yang dikenakan oleh otoritas pemerintah yang relevan;</li>
                                    <li>Merchant akan menanggung dan membebaskan REFEED setiap saat dari dan terhadap semua tuntutan, klaim, tindakan, proses, beban, ongkos kirim, biaya atau pengeluaran, termasuk pada penyimpanan, bea dan pajak, biaya pengambilan dan administrasi (termasuk biaya hukum pada umumnya) yang ditimbulkan, dialami, atau ditanggung oleh REFEED sehubungan dengan jasa layanan yang dilakukan berdasarkan Perjanjian ini.</li>
                                    <li>Merchant akan memastikan bahwa setiap barang dikemas dalam wadah, pembungkus atau penutup yang cukup kuat sesuai dengan isinya, dan agar tidak ada bagian dari isi tersebut yang dapat dipindahkan tanpa harus merusak atau merobek wadah, pembungkus atau penutupnya atau merobek dua permukaan perekat secara paksa, atau merusak segel;</li>
                                    <li>Merchant akan memastikan semua isi barang dikemas secara memadai untuk melindungi dari kerusakan selama proses pengiriman dan khususnya, tidak terbatas pada:</li>
                                        <ul>
                                            <li>barang yang bersifat mudah pecah harus dikemas dalam wadah yang cukup kuat dan harus dikelilingi dalam wadah tersebut dengan bahan yang memadai dan sesuai untuk melindungi barang tersebut dari benturan keras, tekanan dan ketukan yang terhadapnya barang pos biasanya terpapar dalam pengiriman, dan barang tersebut harus dilengkapi dengan tulisan " BARANG MUDAH PECAH, JANGAN DIBANTING " yang ditulis secara mencolok dalam huruf kapital di muka sampul di atas alamat dari penerima;</li>
                                            <li>barang yang dapat rusak dengan ditekuk harus dikemas dalam wadah yang cukup kuat untuk mencegah barang tersebut ditekuk atau rusak dalam pengiriman dan bungkusan tersebut harus dilengkapi dengan tulis, "JANGAN DITEKUK" yang ditulis secara mencolok dalam huruf kapital di permukaan sampul di atas alamat dari penerima;</li>
                                        </ul>
                                    <li>Merchant akan memastikan barang-barang yang dilarang oleh hukum apapun yang berlaku di Indonesia dan negara tujuan. Pengiriman tersebut tidak diserahkan kepada REFEED;</li>
                                    <li>Merchant akan memastikan bahwa nama, alamat dan nomor telepon pengirim dan penerima dilengkapi secara akurat. Untuk barang-barang yang ditujukan kepada perusahaan, nama perusahaan, alamat, nama penerima, serta departemen/bagian dimana penerima berada harus disediakan untuk memastikan penyerahan barang yang tepat waktu;</li>
                                    <li>Merchant akan memastikan bahwa suatu barang mematuhi batasan ukuran dan berat yang berlaku di negara tujuan yang berlaku terhadap Jasa Layanan tertentu dengan mana barang tersebut akan dikirimkan.</li>
                                    <li>Merchant akan memastikan bahwa setiap barang yang akan dikirim ditujukan secara akurat ke alamat terdaftar yang sah, ekspor dari Indonesia ke negara tujuan Asia Tenggara, Australia, Hong Kong, Taiwan, Jepang dan Korea Selatan; dan</li>
                                    <li>Merchant akan memastikan bahwa tidak akan mengirimkan barang dengan tujuan yang tidak dapat dijangkau oleh REFEED, sebagaimana dapat diubah dari waktu ke waktu (jika relevan).</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q6"><i class="fas fa-angle-down angle mr-3"></i>Mediasi, Penyelesaian Sengketa dan Arbitrase</a></div>
                        <div id="v1-q6" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <ol type="1">
                                    <li>REFEED dan Merchant masing-masing akan menunjuk seorang wakil dengan pengalaman yang sesuai untuk menjadi representative dalam pertemuan tatap muka dan penanggung jawab selama durasi Perjanjian.</li>
                                    <li>Para pihak, termasuk para wakil, akan bertemu secara teratur pada waktu dan lokasi yang disepakati bersama untuk membahas masalah yang timbul sehubungan dengan pelaksanaan Perjanjian ini antara REFEED dan Merchant.</li>
                                    <li>Jika terdapat masalah yang tidak dapat diselesaikan pada saat pertemuan berlangsung, masing-masing pihak akan menunjuk seorang eksekutif perusahaan yang akan bertemu untuk menyelesaikan masalah tersebut.</li>
                                    <li>Jika timbul sengketa berdasarkan Perjanjian ini, para pihak sepakat untuk menyelesaikan sengketa dengan bantuan seorang mediator yang disepakati bersama di Indonesia. Para pihak harus membagi biaya dan fee secara setara diluar fee penasihat hukum dan pengacara terkait dengan mediasi ini.</li>
                                    <li>Jika terbukti tidak ada solusi yang memuaskan pada saat mediasi dilakukan, masing-masing pihak sepakat untuk menyerahkan sengketa tersebut untuk diselesaikan melalui arbitrase sesuai dengan Undang-Undang Arbitrase Indonesia, namun dengan ketentuan, jika terdapat sengketa yang timbul berdasarkan Perjanjian ini, para pihak akan berusaha untuk menyelesaikan sengketa tersebut secara damai diantara mereka. Dalam hal para pihak gagal mencapai kesepakatan untuk solusi damai, sengketa ini harus ditentukan oleh arbitrase sebagaimana disebutkan di atas.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q7"><i class="fas fa-angle-down angle mr-3"></i>Fee Hukum</a></div>
                        <div id="v1-q7" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <p>Jika diperlukan tindakan hukum untuk menegakkan Perjanjian ini, pihak yang menang berhak biaya, dan pengeluaran hukum yang wajar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q8"><i class="fas fa-angle-down angle mr-3"></i>Pengakhiran Perjanjian</a></div>
                        <div id="v1-q8" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <ol type="1">
                                    <li>Masing-masing pihak memiliki hak untuk mengakhiri Perjanjian ini dengan pemberitahuan tertulis kepada pihak lain, jika salah satu pihak telah secara material melanggar kewajiban apapun dalam Perjanjian ini dan jika pelanggaran tersebut tetap tidak diperbaiki dalam waktu tiga puluh hari setelah pemberitahuan tertulis diberikan.</li>
                                    <li>Jika REFEED mengakhiri Perjanjian ini karena kesalahan yang dilakukan oleh Merchant, semua dari hal dibawah ini akan berlaku:</li>
                                        <ul>
                                            <li>Merchant harus segera menghentikan penggunaan sistem apapun yang diberikan kepada Merchant oleh REFEED;</li>
                                            <li>Semua jumlah tagihan atau yang masih harus dibayarkan kepada REFEED berdasarkan Perjanjian ini, akan menjadi jatuh tempo dan wajib dibayarkan secepatnya dengan batas waktu 7 hari kerja terhitung dari berakhirnya perjanjian;</li>
                                        </ul>
                                    <li>Merchant dapat mengakhiri Perjanjian ini untuk kenyamanannya setelah tiga puluh hari dengan pemberitahuan tertulis terlebih dahulu kepada REFEED. Setelah pengakhiran tersebut, semua jumlah yang terutang kepada REFEED berdasarkan Perjanjian ini untuk pekerjaan yang diterima akan segera menjadi jatuh tempo dan wajib dibayarkan.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q9"><i class="fas fa-angle-down angle mr-3"></i>Keadaan Memaksa</a></div>
                        <div id="v1-q9" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <ol type="1">
                                    <li>Force Majeure diklasifikasikan sebagai bencana alam, tindakan atau kebijakan dari pemerintah setelah tanggal Perjanjian ini, masalah listrik, kebakaran, banjir, peristiwa alam, sengketa buruh, kerusuhan, perang dan virus penyakit yang mewabah.</li>
                                    <li>REFEED tidak akan bertanggung jawab atas keterlambatan atau kesalahan dalam pelaksanaan dan/atau tidak adanya pelaksanaan darinya, karena sebab-sebab diluar kendalinya secara wajar ("Force majeure event") dan berhak atas perpanjangan waktu yang wajar untuk memperbaiki keterlambatan tersebut atau kegagalan pelaksanaannya.</li>
                                    <li>REFEED akan memberikan pemberitahuan atau informasi kepada Merchant sesegera mungkin setelah mengetahui terjadinya force majeure event dan akan menginformasikan Merchant estimasi berapa lama hal tersebut diperkirakan akan berlanjut.</li>
                                    <li>Jika force majeure event mencegah pengiriman Proposal dan/atau "Dukungan Teknis" selama lebih dari 60 hari, Merchant dapat mengikuti prosedur yang ditetapkan untuk pengakhiran Perjanjian ini.</li>
                                    <li>Untuk mengurangi konsekuensi dari force majeure event, Merchant direkomendasikan untuk memiliki rencana pemulihan bencana yang melindungi semua peralatan dan/atau perangkat lunak yang digunakan oleh REFEED dalam pengiriman. REFEED juga harus memiliki rencana pemulihan dari bencana yang dapat melindungi peralatan apapun yang digunakan oleh REFEED dalam memenuhi Perjanjian ini.</li>
                                    <li>Meskipun terjadi force majeure event dalam bentuk apapun, Merchant akan tetap bertanggung jawab untuk membayar REFEED sesuai dengan haknya dari Biaya-Biaya yang sebagaimana disebutkan dalam perjanjian ini, yang mana REFEED terus lakukan sesuai dengan Perjanjian selama durasi dari force majeure event tersebut.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q10"><i class="fas fa-angle-down angle mr-3"></i>Pembatasan Tanggung Jawab</a></div>
                        <div id="v1-q10" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <ol type="1">
                                    <li>Dalam hal apa pun REFEED tidak akan bertanggung jawab kepada Merchant atas kerugian bisnis, peluang, laba atau ganti rugi khusus atau konsekuensial dari Merchant, bahkan jika REFEED telah diberitahukan tentang kemungkinan ganti rugi tersebut.</li>
                                    <li>Total tanggung jawab REFEED berdasarkan Perjanjian ini untuk ganti rugi, biaya dan pengeluaran, terlepas dari sebabnya, tidak akan melebihi maksimum sebesar USD 50,00 atau USD 10,00 per kg, mana yang lebih rendah (untuk pengiriman domestik Indonesia), dan maksimum sebesar USD 100,00 atau USD 10,00 per kg, mana yang lebih rendah (untuk pengiriman internasional), per faktur komersial dengan kurs IDR 14.500 per USD 1.</li>
                                    <li>REFEED tidak akan bertanggung jawab atas klaim atau tuntutan apa pun yang diajukan terhadap Merchant oleh pihak ketiga mana pun termasuk klaim atau tuntutan terkait dengan hak cipta, rahasia dagang, atau hak kepemilikan lainnya, dan kemudian hanya sebagaimana ditentukan dalam Perjanjian ini.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q11"><i class="fas fa-angle-down angle mr-3"></i>Pemberitahuan</a></div>
                        <div id="v1-q11" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <ol type="1">
                                    <li>Tidak ada persetujuan, penerimaan, penghilangan, perizinan atau komunikasi lain sesuai dengan Perjanjian ini yang akan sah kecuali dibuat secara tertulis, hal tersebut harus dilampirkan pada Perjanjian ini jika ada hal yang  ngin dirubah dalam isi perjanjian ini dan harus disepakati oleh kedua belah pihak dengan tanda tangan olah pihak yang ditunjuk oleh masingmasing pihak.</li>
                                    <li>Pemberitahuan atau komunikasi lainnya (tidak termasuk pembayaran) dari pihak manapun diwajibkan untuk mengirimkannya kepada pihak lain dan akan dianggap telah terkirim jika pihak lainnya telah menerimanya sesuai dengan alamat yang tertera pada perjanjian ini sesuai dengan beberapa ketentuan ini:</li>
                                        <ul>
                                            <li>Pada hari penerimaan jika diserahkan secara langsung; </li>
                                            <li>Pada hari kerja berikutnya jika dikirimkan dengan transmisi faksimili dimana pengirim memiliki konfirmasi mesin bahwa faksimili ditransmisikan ke nomor faks yang benar yang tercantum di bawah ini; </li>
                                            <li>Empat hari kerja setelah pengiriman pos jika dikirim melalui surat pos kelas satu, yang terjamin dan mendapatkan tanda terima atau bukti penerimaan barang.</li>
                                            <li>Pada hari penerimaan jika dikirimkan melalui pengiriman kilat semalam.</li>
                                        </ul>
                                    <li>Pemberitahuan atau komunikasi lainnya kepada REFEED berdasarkan Perjanjian ini akan dikirim ke kantor Refeed sebagai berikut:</li>
                                        <p class="bold">PT. Marketbiz Jendela Digital</p>
                                        <p>Ditujukan kepada: Operasional Manager,</p>
                                        <p>Jl. P.B Sudirman Gg I Al-Amin No.3 Denpasar 80113</p>
                                    <li>Tanpa mengurangi ketentuan dalam Bagian 3, REFEED dapat mengubah alamat untuk pengiriman pemberitahuan dari pihak lain dengan memberikan pemberitahuan tertulis kepada pihak lain mengenai perubahan tersebut sebelum alamat baru tersebut berlaku.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header"><a href="#" class="card-title btn term-title" data-toggle="collapse" data-target="#v1-q12"><i class="fas fa-angle-down angle mr-3"></i>Ketentuan Lain-Lain</a></div>
                        <div id="v1-q12" class="collapse" data-parent="#faqs-accordion">
                            <div class="card-body py-0">
                                <ol type="1">
                                    <li>Subkontraktor. REFEED berhak dan Merchant menyetujui penggunaan Subkontraktor REFEED untuk membantu dalam penyediaan Perjanjian ini sebagaimana dianggap tepat oleh REFEED menurut kebijaksanaannya tanpa pemberitahuan kepada Merchant.</li>
                                    <li>Tidak ada publikasi. Perjanjian ini tidak memberikan hak kepada Merchant untuk menggunakannya dalam media iklan, publikasi, promosi, pemasaran, atau kegiatan lainnya, nama, merek dagang, nama dagang, atau tandatanda lain apapun dari REFEED kecuali disetujui secara tertulis. Masing-masing pihak tidak boleh mengungkapkan ketentuan-ketentuan dan keberadaan Perjanjian ini tanpa terlebih dahulu memperoleh persetujuan tertulis dari pihak lainnya, kecuali agar REFEED dapat menambahkan nama Merchant ke daftar Merchant di situs webnya, alat/media pemasaran dan publikasi lain yang dianggap sesuai dan wajar.</li>
                                    <li>Tidak ada pengalihan. Tunduk pada penunjukkan subkontraktor REFEED, tidak ada pihak yang dapat mengalihkan hak atau kewajiban apapun tanpa persetujuan tertulis terlebih dahulu dari pihak lainnya.</li>
                                    <li>Waiver. Kegagalan pihak manapun untuk menggunakan haknya manapun berdasarkan Perjanjian ini tidak merupakan atau tidak akan dianggap sebagai pengesampingan atau pelepasan hak-hak tersebut.</li>
                                    <li>Judul. Judul-judul dalam Perjanjian ini hanya untuk memudahkan para pihak, dan sama sekali tidak dimaksudkan untuk mendefinisikan atau ai dengan hokum Indonesia dan para pihak di Pengadilan Hukum Indonesia.</li>
                                    <li>Seluruh perjanjian. Perjanjian ini dan semua dokumen yang tergabung merupakan keseluruhan perjanjian antara REFEED dan Merchant terkait dengan materi pokok Perjanjian dan menggantikan komunikasi, pernyataan atau perjanjian apapun sebelumnya atau secara simultan berkenaan dengan Perjanjian ini, baik lisan maupun tulisan. Amandemen apa pun (termasuk tanpa batasan "Pesanan Pembelian Merchant" dan lain lain) terhadap Perjanjian ini harus dibuat secaratertulis dan ditandatangani oleh wakil resmi dari REFEED dan Merchant.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <p>Dengan ini Saya telah membaca, memahami dan menyetujui hal-hal yang tercantum pada Syarat dan Ketentuan Pengguna Refeed.id, dan Saya tidak berkeberatan apabila Refeed.id menggunakan data personal Saya berupa alamat e-mail/nomor handphone untuk kepentingan pengiriman informasi seperti newsletter, brosur, dan lain-lain.</p>
            </div>
        </div>
    </div>
</section><!-- ./FAQs - Other channels -->
    <style>
        .term-title {
            font-size: 1.8rem;
            line-height: 3.2rem;
            font-weight: 300;
        }
    </style>
<?php get_footer(); ?>