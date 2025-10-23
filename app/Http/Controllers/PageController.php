<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $films = [
        [
            'id' => 1,
            'title' => 'Spider-Man: Homecoming',
            'genre' => 'action, adventure, fiction',
            'year' => 2017,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Spider-Man: Homecoming adalah film pahlawan super Amerika tahun 2017 yang berdasarkan karakter Marvel Comics Spider-Man, diproduksi oleh Columbia Pictures, Marvel Studios, dan Pascal Pictures, dan didistribusikan oleh Sony Pictures Releasing.',
            'image' => 'images/spiderman-homecoming.jpg'
        ],
        [
            'id' => 2,
            'title' => 'Spider-Man: Far From Home',
            'genre' => 'action, adventure, fiction',
            'year' => 2019,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Peter Parker (Tom Holland) tengah mengunjungi Eropa untuk liburan panjang bersama temaan-temanya. Sayangnya , Parker tidak bisa dengan tenang menikmati liburannya, karena Nick Fury datang secara tiba-tiba di kamar hotelnya. Selama di Eropa pun Peter harus menghadapi banyak musuh mulai dari Hydro Man, Sandman dan Molten Man.',
            'image' => 'images/spiderman-far-from-home.jpg'
        ],
        [
            'id' => 3,
            'title' => 'Spider-Man: No Way Home',
            'genre' => 'action, adventure, fiction',
            'year' => 2021,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Pertama kalinya dalam sejarah layar lebar Spider-Man, identitas asli dari pahlawan nan ramah ini terbongkar, sehingga membuat tanggung jawabnya sebagai seorang berkekuatan super berbenturan dengan kehidupan normalnya, dan menempatkan semua orang terdekatnya dalam posisi paling terancam.',
            'image' => 'images/spiderman-no-way-home.jpg'
        ],
        [
            'id' => 4,
            'title' => 'Kraven the Hunter',
            'genre' => 'action, adventure, fiction',
            'year' => 2024,
            'price' => 'Rp 25.000',
            'status' => 'Available',
            'description' => 'Kraven the Hunter adalah sebuah film pahlawan super Amerika tahun 2023 berdasarkan karakter dari Marvel Comics, diproduseri oleh Columbia Pictures terkait dengan Marvel Entertainment. Didistribusikan Sony Pictures Releasing, dan dimaksudkan untuk menjadi film keempat dalam Sony Spider-Man Universe.',
            'image' => 'images/kraven-the-hunter.jpg'
        ],
        [
            'id' => 5,
            'title' => 'Morbius',
            'genre' => 'action, adventure, fiction',
            'year' => 2022,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Ahli biokimia Michael Morbius (Jared Leto) mencoba menyembuhkan dirinya sendiri dari penyakit darah langka, namun secara tidak sengaja ia menginfeksi tubuhnya dan berubah jadi mahluk yang menyerupai vampir.',
            'image' => 'images/morbius.jpg'
        ],
        [
            'id' => 6,
            'title' => 'Venom',
            'genre' => 'action, adventure, fiction',
            'year' => 2018,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Seorang jurnalis, Eddie Brock (Tom Hardy) ingin melakukan sebuah investasi kasus terhadap penemuan yang dipimpin oleh Dr. Carlton Drake (Riz Ahmed). Karena investigasinya, Eddie mengunjungi lab milik Dr. Calrlton Drake. Semuanya ditujukan untuk membuktikan bahwa Dr. Carlton Drake sedang sedang melakukan tindakan jahat menggunakan Symbiote.',
            'image' => 'images/venom.jpg'
        ],
        [
            'id' => 7,
            'title' => 'Venom: Let There Be Carnage',
            'genre' => 'action, adventure, fiction',
            'year' => 2021,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Setelah menjadi inang bagi symbiote Venom, Eddie Brock (Tom Hardy) berusaha untuk menyesuaikan diri dengan kehidupan barunya sebagai tuan rumah makhluk luar angkasa yang kuat tersebut. Namun, ketika pembunuh berantai Cletus Kasady (Woody Harrelson) menjadi inang bagi symbiote lain yang dikenal sebagai Carnage, Eddie dan Venom harus bekerja sama untuk menghentikan ancaman baru ini.',
            'image' => 'images/venom-let-there-be-carnage.jpg'
        ],
        [
            'id' => 8,
            'title' => 'Venom: The Last Dance',
            'genre' => 'action, adventure, fiction',
            'year' => 2024,
            'price' => 'Rp 25.000',
            'status' => 'Available',
            'description' => 'Venom: The Last Dance adalah sebuah film pahlawan super Amerika yang berdasarkan karakter Marvel Comics Venom, diproduksi oleh Columbia Pictures dan Marvel Entertainment, serta didistribusikan oleh Sony Pictures Releasing. Film ini merupakan sekuel dari Venom: Let There Be Carnage (2021) dan film ketiga dalam Sony\'s Spider-Man Universe.',
            'image' => 'images/venom-the-last-dance.jpg'
        ],
        [
            'id' => 9,
            'title' => 'The Avengers',
            'genre' => 'action, adventure, fiction',
            'year' => 2012,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Nick Fury (Samuel L. Jackson), direktur S.H.I.E.L.D., merekrut Tony Stark (Robert Downey Jr.), Steve Rogers (Chris Evans), Bruce Banner (Mark Ruffalo), Thor (Chris Hemsworth), Natasha Romanoff (Scarlett Johansson), dan Clint Barton (Jeremy Renner) untuk membentuk tim superhero yang dikenal sebagai The Avengers guna menghentikan Loki (Tom Hiddleston) yang berusaha menguasai Bumi dengan pasukan aliennya.',
            'image' => 'images/the-avengers.jpg'
        ],
        [
            'id' => 10,
            'title' => 'The Avengers: Age of Ultron',
            'genre' => 'action, adventure, fiction',
            'year' => 2015,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Setelah mengalahkan Loki dan pasukannya, The Avengers harus bersatu kembali untuk menghadapi ancaman baru yang muncul dari ciptaan Tony Stark, Ultron (James Spader), sebuah kecerdasan buatan yang berusaha memusnahkan umat manusia.',
            'image' => 'images/the-avengers-age-of-ultron.jpg'
        ],
        [
            'id' => 11,
            'title' => 'The Avengers: Infinity War',
            'genre' => 'action, adventure, fiction',
            'year' => 2018,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'The Avengers bergabung dengan Guardians of the Galaxy untuk menghadapi Thanos (Josh Brolin), seorang tiran intergalaksi yang berusaha mengumpulkan semua Infinity Stones guna mencapai kekuatan absolut dan menghapus setengah kehidupan di alam semesta.',
            'image' => 'images/the-avengers-infinity-war.jpg'
        ],
        [
            'id' => 12,
            'title' => 'The Avengers: Endgame',
            'genre' => 'action, adventure, fiction',
            'year' => 2019,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Setelah kehancuran yang disebabkan oleh Thanos, para pahlawan yang tersisa berusaha untuk membalikkan kerusakan tersebut dengan melakukan perjalanan waktu guna mengumpulkan Infinity Stones sebelum Thanos dapat menggunakannya lagi.',
            'image' => 'images/the-avengers-endgame.jpg'
        ],
        [
            'id' => 13,
            'title' => 'Iron Man',
            'genre' => 'action, adventure, fiction',
            'year' => 2008,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Setelah diculik oleh teroris, miliarder playboy Tony Stark (Robert Downey Jr.) membangun sebuah baju zirah berteknologi tinggi untuk melarikan diri. Kembali ke Amerika Serikat, ia memutuskan untuk menggunakan teknologi tersebut untuk melawan kejahatan sebagai Iron Man.',
            'image' => 'images/iron-man-1.jpg'
        ],
        [
            'id' => 14,
            'title' => 'Iron Man 2',
            'genre' => 'action, adventure, fiction',
            'year' => 2010,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Tony Stark (Robert Downey Jr.) menghadapi tantangan baru ketika ia harus melawan Ivan Vanko (Mickey Rourke), seorang penjahat yang memiliki teknologi serupa dengan Iron Man. Sementara itu, Stark juga harus menghadapi tekanan dari pemerintah yang ingin menguasai teknologi Iron Man.',
            'image' => 'images/iron-man-2.jpg'
        ],
        [
            'id' => 15,
            'title' => 'Iron Man 3',
            'genre' => 'action, adventure, fiction',
            'year' => 2013,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Tony Stark (Robert Downey Jr.) menghadapi ancaman baru ketika seorang teroris misterius yang dikenal sebagai Mandarin (Ben Kingsley) menyerang kehidupannya. Dalam menghadapi krisis ini, Stark harus menemukan cara untuk melindungi orang-orang terkasihnya dan mengatasi ketakutannya.',
            'image' => 'images/iron-man-3.jpg'
        ],
        [
            'id' => 16,
            'title' => 'Black Panther',
            'genre' => 'action, adventure, fiction',
            'year' => 2018,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Setelah kematian ayahnya, T\'Challa (Chadwick Boseman) kembali ke Wakanda untuk mengambil alih tahta sebagai raja dan Black Panther. Namun, ia harus menghadapi tantangan dari musuh lama dan baru yang mengancam keselamatan kerajaannya.',
            'image' => 'images/black-panther.jpg'
        ],
        [
            'id' => 17,
            'title' => 'Black Panther: Wakanda Forever',
            'genre' => 'action, adventure, fiction',
            'year' => 2022,
            'price' => 'Rp 25.000',
            'status' => 'Available',
            'description' => 'Setelah kematian T\'Challa, kerajaan Wakanda menghadapi ancaman baru dari musuh yang ingin mengambil alih sumber daya vibranium mereka. Para pemimpin Wakanda harus bersatu untuk melindungi tanah air mereka dan menghormati warisan Black Panther.',
            'image' => 'images/black-panther-wakanda-forever.jpg'
        ],
        [
            'id' => 18,
            'title' => 'Doctor Strange',
            'genre' => 'action, adventure, fiction',
            'year' => 2016,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Setelah kecelakaan mobil yang menghancurkan tangannya, ahli bedah saraf Dr. Stephen Strange (Benedict Cumberbatch) mencari penyembuhan di Nepal dan menemukan dunia sihir dan dimensi alternatif. Dengan bantuan mentor barunya, The Ancient One (Tilda Swinton), Strange belajar untuk menguasai seni mistis dan melindungi bumi dari ancaman magis.',
            'image' => 'images/doctor-strange.jpg'
        ],
        [
            'id' => 19,
            'title' => 'Doctor Strange in the Multiverse of Madness',
            'genre' => 'action, adventure, fiction',
            'year' => 2022,
            'price' => 'Rp 20.000',
            'status' => 'Available',
            'description' => 'Dr. Stephen Strange (Benedict Cumberbatch) menghadapi konsekuensi dari membuka multiverse dan harus berhadapan dengan ancaman baru yang mengancam realitas yang dikenal. Dengan bantuan Wanda Maximoff (Elizabeth Olsen), Strange harus menavigasi melalui berbagai dimensi untuk menyelamatkan dunia.',
            'image' => 'images/doctor-strange-in-the-multiverse-of-madness.jpg'
        ]
    ];

    // Form login
    public function showLogin(Request $req)
    {
        return view('login');
    }

    // Proses login
    public function doLogin(Request $req)
    {
        $username = $req->input('username', 'Tamu');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    // Dashboard
    public function dashboard(Request $req)
    {
        $username = $req->query('username', 'Tamu');
        $featured = $this->films;

        return view('dashboard', [
            'username' => $username,
            'featured' => $featured,
        ]);
    }

    // Pengelolaan
    public function pengelolaan(Request $req)
    {
        $username = $req->query('username', null);

        return view('pengelolaan', [
            'username' => $username,
            'films' => $this->films,
        ]);
    }

    // Profil pengguna
    public function profile(Request $req)
    {
        $username = $req->query('username', 'Tamu');
        $profile = [
            'username' => $username,
            'email' => strtolower($username) . '*********@gmail.com',
            'member_since' => '2024-01-15',
        ];

        return view('profile', compact('profile'));
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}
