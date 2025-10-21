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
            'fullname' => $username === 'Tamu' ? 'Pengguna Tamu' : ucfirst($username),
            'email' => strtolower($username) . '@example.com',
            'member_since' => '2024-01-15',
        ];

        return view('profile', compact('profile'));
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}
