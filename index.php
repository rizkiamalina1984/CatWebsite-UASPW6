<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
    <title>Cat Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #fec7d7">

    <!--NavBar-->
    <div class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#" onclick="toggleProfiles()">
                <img src="img/logo usu.jpg" alt="Bootstrap" width="70" height="64">
            </a>
            <center>
                <div class="gif-container"></div>
                <span class="navbar-title"><img src="img/kuceng2.gif" alt="GIF" class="gif-image"> Kerajaan Kucing</span>
            </center>
            <div class="menu-links">
                <a href="#" onclick="scrollToSection('welcome-section')">Beranda</a>
                <a href="#welcome-section" onclick="scrollToSection('welcome-section')">Tentang Kucing</a>
                <a href="#cats-section" onclick="scrollToSection('cats-section')" onclick="showAboutCats()">Ras - Ras Kucing</a>
                <a href="/UASLAB/login.php">Masuk</a>
            </div>
        </div>
    </div>

    <br>
    <!--Judul Halaman-->
    <h1 id="welcome-section" class="h1">Selamat Datang di Kerajaan Kucing</h1>

    <!--Tabel Kucing-->
    <div class="container main-content">
        <div class="row">
            <!-- Tabel kucing di sebelah kiri -->
            <div class="col-md-6 table-container">
                <table class="cat-table">
                    <tr>
                        <td>
                            <img src="img/tips.jpg" alt="Cat 1" class="cat-image">
                            <p>
                                <p>Ingin melengkapi kebutuhan kucing anda?</p>
                                <button onclick="redirectToShop()" class="custom-button">
                            <span style="font-size: 16px;">Klik disini!</span>
                        </button>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- Tabel informasi kucing di sebelah kanan -->
            <div class="col-md-6 table-container">
                <table class="info-table">
                    <tr>
                        <td>
                            <br>
                            <h2>Kucing?</h2>
                            <p><br> Kucing merupakan salah satu hewan kesayangan yang perlu mendapat perhatian untuk dipelihara dan dikembangbiakkan, sebagai hewan kesayangan, kucing mempunyai daya tarik tersendiri karena bentuk tubuh, mata dan warna bulu
                                yang beraneka ragam. Kucing dalam bahasa latinnya Felis silvestris catus, adalah sejenis karnivora.</p>
                            <hr>
                            <p>Ingin tahu lebih banyak tentang karakteristik dan tips merawat kucing?</p>
                            <button onclick="goToNextPage('shop.html')" class="custom-button">
                            <span style="font-size: 16px;">Klik disini!</span>
                        </button>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <br>
    <!--Judul Tabel Informasi Kucing-->
    <h1 id="cats-section">Ras - Ras Kucing</h1>

    <br>
    <!--Tabel Informasi Kucing-->
    <div class="cat-container">
        <div class="cat-table">
            <img src="img/kucing-domestik.jpg" alt="Kucing Domestik" class="cat-image">
            <p class="cat-name">Domestik</p>
            <p>Kucing domestik atau kucing kampung mempunyai karakter yang setia, memiliki sifat cukup aktif, dan senang bermain di lingkungan baru. Jenis kucing ini mudah kamu temui di mana pun kamu berada. Jika kamu memutuskan untuk mengadopsi kucing kampung
                liar, sebaiknya periksakan terlebih dulu ke dokter hewan agar terjamin kesehatannya.</p>
        </div>

        <div class="cat-table">
            <img src="img/kucing-persia.jpg" alt="Kucing Persia" class="cat-image">
            <p class="cat-name">Persia</p>
            <p>Kucing persia termasuk salah satu jenis kucing yang paling banyak dipelihara. Karakteristik rambut panjang, lebat, berwajah bulat, dan hidungnya yang pesek membuat banyak orang menjadi gemas melihatnya. Jika memutuskan untuk memelihara jenis
                ini, kamu harus menyisihkan anggaran lebih banyak untuk perawatannya. Pasalnya, kamu harus memerhatikan kesehatan hewan dan kebersihannya secara keseluruhan.</p>
        </div>

        <div class="cat-table">
            <img src="img/kucing-anggora.jpg" alt="Kucing Anggora" class="cat-image">
            <p class="cat-name">Anggora</p>
            <p> Kucing yang berasal dari Turki ini memiliki bulu yang seputih salju. Banyak orang kesulitan membedakan antara kucing Anggora dan Persia. Namun, salah satu ciri yang bisa menjadi pembeda keduanya adalah Persia biasanya berbadan gemuk, sedangkan
                Anggora cenderung memiliki ukuran tubuh yang lebih kurus. Selain cantik dan berbulu indah, Anggora juga sangat aktif dan lincah. </p>
        </div>

        <div class="cat-table">
            <img src="img/kucing-siam.jpg" alt="Kucing 4" class="cat-image">
            <p class="cat-name">Siam</p>
            <p>Kucing Siam atau yang dikenal dengan Siamese berasal dari Thailand. Hewan ini memiliki tubuh yang ramping, ekor panjang, mata biru, berbulu pendek, dan memiliki warna gelap di bagian muka, kaki, telinga, serta ekor. Selain sangat bersahabat
                dengan manusia, hewan satu ini juga memiliki suara yang lembut, cerdas, dan lincah.</p>
        </div>

        <div class="cat-table">
            <img src="img/Kucing-maine-coon.jpg" alt="Kucing Maine Coon" class="cat-image">
            <p class="cat-name">Maine Coon</p>
            <p>Maine Coon menjadi jenis kucing yang bersahabat meski memiliki tubuh yang sangat besar. Meski terlihat menyeramkan karena ukuran tubuhnya 2-3 kali lipat kucing biasa, Maine Coon memiliki pembawaan yang sangat ramah. Bobot tubuh kucing betina
                mencapai 6 kilogram. Sedangkan bobot kucing jantan Maine Coon mencapai 8 kilogram.</p>
        </div>

        <div class="cat-table">
            <img src="img/kucing-ragdoll-1.jpg" alt="Kucing Ragdoll" class="cat-image">
            <p class="cat-name">Ragdoll</p>
            <p>Jenis kucing yang satu ini dikenal akan sifatnya yang lembut dan santai, serta suka mengikuti ke manapun majikannya pergi. Mereka suka berada di pangkuan majikannya dan gemar menyapa anggota keluarga yang pulang ke rumah. Menariknya, mereka
                bisa belajar bermain tangkap seperti anjing. Temperamennya juga manis, sehingga Ragdolls bisa rukun dengan kucing dan anjing lain.</p>
        </div>

        <div class="cat-table">
            <img src="img/Sphynx.jpg" alt="Kucing Sphynx" class="cat-image">
            <p class="cat-name">Sphynx</p>
            <p>Penampilannya yang unik karena tidak berbulu membuat banyak orang tertarik dengan hewan yang satu ini. Sphynx dikenal sebagai kucing yang ramah, supel dan cerdas. Mereka juga sangat suka menjadi pusat perhatian. Hewan ini bahkan bisa membuat
                masalah hanya untuk mendapatkan perhatian dari kamu. Namun, kecintaan mereka pada perhatian membuat Sphynx juga bisa menjadi hewan yang sangat penyayang. Mereka selalu ingin menghabiskan waktu bersama kamu atau pamer di depan kamu. </p>
        </div>

        <div class="cat-table">
            <img src="img/Scottish-fold.jpg" alt="Kucing Scottish Fold" class="cat-image">
            <p class="cat-name">Scottish Fold</p>
            <p>Ciri yang paling mencolok dari kucing Scottish Fold adalah telinganya yang kecil dan terlipat rapat ke depan untuk menutupi lubang telinga. Ujung telinganya juga membulat. Scottish Fold berukuran sedang dengan bentuk badan yang kokoh. Kepalanya
                bulat dengan bantalan kumis yang jelas, terletak di leher mereka yang pendek. Mereka memiliki mata yang besar dengan ekspresi manis. Rambut dari kucing jenis Scottish Fold pendek dan padat dan datang dalam berbagai warna serta pola.
            </p>
        </div>

        <div class="cat-table">
            <img src="img/British-shorthair.jpg" alt="Kucing British-shorthair" class="cat-image">
            <p class="cat-name">British Shorthair</p>
            <p>British shorthair adalah salah satu ras kucing Inggris tertua yang memiliki sifat yang tenang dan pendiam. Bentuk mukanya yang bulat dengan pipi yang chubby dan mata yang bulat membuat kucing ini sangat menggemaskan, sehingga tidak heran bila
                banyak orang ingin memeliharanya. </p>
        </div>

        <div class="cat-table">
            <img src="img/kucing-birman-1.jpg" alt="Kucing Birman" class="cat-image">
            <p class="cat-name">Birman</p>
            <p>Mata birunya yang cantik dan rambut yang panjang membuat Birman menjadi salah satu kucing primadona yang digemari banyak orang. Mereka juga sangat manis, lembut dan mudah bergaul. Hewan ini senang bersama orang-orang dan mereka pandai bersosialisasi
                dengan manusia serta hewan lainnya. Birman juga santai dan sabar, yang menjadikannya pilihan tepat untuk keluarga dengan anak-anak. Selain itu, meskipun mereka menyukai perhatian, kucing ini umumnya pendiam.</p>
        </div>

        <div class="cat-table">
            <img src="img/kucing-abyssinian-1.jpg" alt="Kucing Abyssinian" class="cat-image">
            <p class="cat-name">Abyssinian</p>
            <p>Abyssinian adalah kucing elegan berukuran sedang dengan badan yang kuat, lentur, serta kaki yang ramping dan panjang. Mereka memiliki kepala bundar berbentuk baji dengan rumbai kecil di ujung telinganya, serta sepasang mata berbentuk kacang
                almond. Rambut-rambut kucing Abyssinian pendek dan padat, serta terlihat tebal karena terdapat beragam warna di tiap helainya. Warna yang paling terkenal adalah kemerahan tetapi ada juga warna lainnya.</p>
        </div>

        <div class="cat-table">
            <img src="img/Tonkinese.jpg" alt="Kucing Tonkinese" class="cat-image">
            <p class="cat-name">Tonkinese</p>
            <p>Tonkinese adalah campuran antara kucing Siamese dan Burmese. Jenis kucing Tonkinese adalah kucing Oriental berukuran sedang dengan kepala bulat lembut dengan telinga lebar. Memiliki mata lebih terbuka daripada bentuk Oriental klasik biasanya
                dan berwarna hijau hingga biru muda. Tubuhnya kokoh, kencang dan berotot. Rambut kucing Tonkinese pendek dan terasa halus dan lembut. Wajah, telinga, kaki dan ekor lebih gelap dari tubuhnya dan menyatu dengan warna tubuh. Jenis kucing
                Tonkinese hadir dalam berbagai warna.</p>
        </div>

        <div class="cat-table">
            <img src="img/Devon-rex.jpg" alt="Kucing Devon Rex" class="cat-image">
            <p class="cat-name">Devon Rex</p>
            <p>Walau ada yang menyebutnya mirip alien, tetapi banyak juga yang menggemari jenis kucing devon rex. Ciri uniknya adalah bentuk telinganya yang menyerupai segitiga. Jangan terkecoh dengan penampilannya yang agak creepy, karena kucing ini penuh
                semangat dan senang berinteraksi dengan anak-anak.</p>
        </div>

        <div class="cat-table">
            <img src="img/kucing-american-shorthair.jpg" alt="Kucing American Shorthair" class="cat-image">
            <p class="cat-name">American Shorthair</p>
            <p>Karakteristik kucing yang satu ini yaitu mudah beradaptasi dengan lingkungan, senang bermain, dan punya naluri berburu yang kuat. Kelebihan lainnya adalah bulunya yang pendek, tebal, dan tidak mudah rontok sehingga mudah dirawat. Cukup menyisir
                bulunya dua kali seminggu untuk membersihkan kotoran dan sel-sel kulit mati. </p>
        </div>

        <div class="cat-table">
            <img src="img/kucing-manx.jpg" alt="Kucing Manx" class="cat-image">
            <p class="cat-name">Manx</p>
            <p>Manx punya karakter yang lembut dan suka bermain, terutama permainan lempar bola. Apabila Si Kecil senang memeluk dan bersentuhan dengan hewan peliharaan, kucing Manx adalah pilihan tepat. Sebab, mereka sangat senang berinteraksi dengan majikannya</p>
        </div>

        <div class="cat-table">
            <img src="img/kucing-bengal.jpg" alt="Kucing Bengal" class="cat-image">
            <p class="cat-name">Bengal</p>
            <p>Kucing yang menyerupai macan tutul mini ini juga bisa menjadi teman yang energik untuk Si Kecil. Pasalnya, mereka sangat lincah dan tidak mudah bosan. Bengal juga mudah terhibur dengan berbagai jenis mainan. Perawatannya pun tergolong praktis
                karena kucing ini berbulu pendek, mirip dengan kucing domestik. Bedanya, Bengal punya tubuh yang lebih besar karena posturnya tegap.</p>
        </div>

        <div class="cat-table">
            <img src="img/himalaya.jpg" alt="Kucing Himalaya" class="cat-image">
            <p class="cat-name">Himalaya</p>
            <p>Kucing ras jenis ini merupakan hasil persilangan antara anjing Siam dan Persia. Kucing Himalaya pada dasarnya manis, suka bermain, dan tidak asing dengan pangkuan hangat. Dengan penampilannya yang memikat (wajah bulat, mata biru, mulut cemberut,
                dan hidung pesek), dan temperamen yang menyenangkan, membuatnya menjadi pilihan favorit kucing ras untuk dipelihara</p>
        </div>

        <div class="cat-table">
            <img src="img/kucingnorwegia.jpg" alt="Kucing Norwegian" class="cat-image">
            <p class="cat-name">Norwegian</p>
            <p>Kucing Norwegian adalah jenis hewan berbulu dengan ukuran besar dan sifatnya yang penyayang. Hewan ini juga dijuluki Wegies oleh para penggemar ras ini. Memang, jenis kucing ini telah termasuk populer di seluruh dunia dan bahkan di negara
                asalnya. </p>
        </div>

        <div class="cat-table">
            <img src="img/american-wirehair.jpg" alt="Kucing American Wirehair" class="cat-image">
            <p class="cat-name">American Wirehair</p>
            <p>Seperti namanya, American Wirehire memiliki ciri khas pada rambutnya. Kucing berukuran besar ini memiliki rambut kucing berukuran besar ini memiliki rambut kasar dan terlihat seperti kawat - setiap rambut berukuran pendek - mediumnya tipis
                dan berkerut atau bengkok. Terkadang kumisnya juga berbentuk keriting. Bentuk sempurna rambut "wiring" hanya akan muncul saat kucing tersebut menyentuh usia dewasa, anak kucing American Wirehair yang memiliki rambut yang sangat keriting
                biasanya akan berubah menjadi bergelombang ketika dewasa alih-alih berambut keriting seperti kawat, dan sebaliknya. Kucing ini memiliki beberapa warna, motif, dan pola. </p>
        </div>

        <div class="cat-table">
            <img src="img/balinese.jpg" alt="Kucing Balinese" class="cat-image">
            <p class="cat-name">Balinese</p>
            <p>Kucing Balinese adalah kucing cantik elegan berukuran sedang dengan tubuh ramping seperti ras Siamese. Tubuhnya ramping dan anggun dan kepalanya berprofil lurus dengan telinga lebar yang terkadang memiliki rumbai. Mereka memiliki rambut yang
                lembut seperti sutra yang panjangnya dapat mencapai satu hingga beberapa sentimeter, dan rambut-rambut itu berbaring datar di tubuh mereka. Ekornya panjang dan dihiasi dengan rambut-rambut yang lebih panjang lagi. Kucing Balinese tidak
                memiliki lapisan rambut bawah dan oleh sebab itu dikategorikan sebagai 'semi-longhair'. Matanya berwarna biru cerah dan berbentuk oriental. Rambutnya memiliki titik-titik berwarna senada (di telinga, wajah, tungkai, kaki dan ekor) dan
                mirip dengan ras Siamese.
            </p>
        </div>
    </div>
    </div>

    <br>
    <!-- Footer -->
    <div class="footer" id="footerid">
        KYLA ZAHRA WINNETOU 221401106
        <br /> RIZKI AMALINA TRIWAHYUNI 221401123
        <br /> UTS Pemrograman Website 6
        <br> Gambar referensi diambil dari Google dan Pinterest.
    </div>

    <!--Java Script-->

    <script>
        // Informasi Diri Di Logo Usu
        function toggleProfiles() {
            alert("\nNama: Rizki Amalina\nNIM: 221401123\n\n\nNama: Kyla Zahra\nNIM: 221401106")
        }

        // Agar Navbar Sticky
        window.addEventListener('scroll', handleScroll);
        window.onscroll = function() {
            myFunction()
        };

        function handleScroll() {}

        var navbar = document.querySelector('.navbar');
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("fixed");
            } else {
                navbar.classList.remove("fixed");
            }
        }
    </script>

    <!--Java Script Next Page dan Redirect to Other Page-->
    <script>
        function goToNextPage() {
            // Redirect to the next page
            window.location.href = "page2.html";
        }

        // redirect to shop.html
        function redirectToShop() {
            window.location.href = 'shop.html';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>