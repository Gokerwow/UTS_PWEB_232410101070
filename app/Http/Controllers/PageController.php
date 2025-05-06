<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function showlogin() {
        return view('login');
    }

    private function getUsers()
    {
        return [
            ['id' => 1, 'username' => 'Karina Aespa', 'email' => 'karina@aespa.com', 'avatar' => 'images/avatars/karina.jpg'],
            ['id' => 2, 'username' => 'Winter Aespa', 'email' => 'winter@aespa.com', 'avatar' => 'images/avatars/winter.jpg'],
            ['id' => 3, 'username' => 'Giselle Aespa', 'email' => 'giselle@aespa.com', 'avatar' => 'images/avatars/giselle.jpg'],
            ['id' => 4, 'username' => 'Ningning Aespa', 'email' => 'ningning@aespa.com', 'avatar' => 'images/avatars/ningning.jpg'],
            ['id' => 5, 'username' => 'Jihyo TWICE', 'email' => 'jihyo@twice.com', 'avatar' => 'images/avatars/jihyo.jpg'],
            ['id' => 6, 'username' => 'Sana TWICE', 'email' => 'sana@twice.com', 'avatar' => 'images/avatars/sana.jpg'],
            ['id' => 7, 'username' => 'Ryujin ITZY', 'email' => 'ryujin@itzy.com', 'avatar' => 'images/avatars/ryujin.jpg'],
            ['id' => 8, 'username' => 'Yuna ITZY', 'email' => 'yuna@itzy.com', 'avatar' => 'images/avatars/yuna.jpg'],
            ['id' => 9, 'username' => 'Chaeryeong ITZY', 'email' => 'chaeryeong@itzy.com', 'avatar' => 'images/avatars/chaeryeong.jpg'],
            ['id' => 10, 'username' => 'Yeji ITZY', 'email' => 'yeji@itzy.com', 'avatar' => 'images/avatars/yeji.jpg'],
        ];
    }

    private function getStreamingData()
    {
        return  [
            [
                'title' => 'Attack on Titan',
                'thumbnail' => 'images/thumbnails/aot.jpg',
                'desc' => 'Di dunia yang dipenuhi ancaman dari makhluk raksasa yang disebut Titan, umat manusia berlindung di balik tembok besar untuk bertahan hidup. Cerita mengikuti Eren Yeager dan rekan-rekannya yang berjuang menyingkap misteri Titan dan kebebasan di luar tembok.',
                'episodes' => 75,
                'minute_per_episode' => 24,
                'types' => 'anime',
                'genres' => ['Action', 'Drama', 'Fantasy'],
                'views' => '12.000.000',
                'likes' => '950.000',
                'comments' => '85.000'
            ],
            [
                'title' => 'Squid Game',
                'thumbnail' => 'images\Thumbnails\squidgame.jpg',
                'desc' => 'Ratusan peserta dengan latar belakang ekonomi sulit ikut serta dalam serangkaian permainan mematikan demi hadiah uang besar. Di balik permainannya yang menyeramkan, tersimpan pesan sosial yang tajam tentang utang, kemiskinan, dan keputusasaan.',
                'episodes' => 9,
                'minute_per_episode' => 55,
                'types' => 'k-drama',
                'genres' => ['Thriller', 'Drama', 'Survival'],
                'views' => '18.000.000',
                'likes' => '1.400.000',
                'comments' => '120.000'
            ],
            [
                'title' => 'Now You See Me 2',
                'thumbnail' => 'images\Thumbnails\nowyouseeme2.jpg',
                'desc' => 'Ketika seorang anak hilang secara misterius, kota kecil Hawkins berubah menjadi medan misteri yang mengerikan. Sebuah dunia alternatif yang disebut "The Upside Down" terungkap, penuh dengan makhluk jahat dan eksperimen rahasia pemerintah.',
                'episodes' => 34,
                'minute_per_episode' => 50,
                'types' => 'movie',
                'genres' => ['Sci-Fi', 'Horror', 'Mystery'],
                'views' => '22.000.000',
                'likes' => '1.700.000',
                'comments' => '200.000'
            ],
            [
                'title' => 'To Be Hero X',
                'thumbnail' => 'images\Thumbnails\tobeherox.jpg',
                'desc' => 'Seorang gadis kecil bernama Chihiro tersesat di dunia roh setelah orang tuanya berubah menjadi babi. Ia harus bekerja di pemandian milik penyihir Yubaba sambil mencari cara untuk menyelamatkan keluarganya dan kembali ke dunia nyata.',
                'episodes' => 1,
                'minute_per_episode' => 125,
                'types' => 'anime',
                'genres' => ['Fantasy', 'Adventure', 'Animation'],
                'views' => '10.000.000',
                'likes' => '800.000',
                'comments' => '60.000'
            ],
            [
                'title' => 'Jujutsu Kaisen',
                'thumbnail' => 'images\Thumbnails\jjk.jpg',
                'desc' => 'Yuji Itadori terlibat dalam dunia kutukan setelah menelan benda terkutuk, membawa roh terkutuk Sukuna dalam tubuhnya. Ia bergabung dengan sekolah Jujutsu untuk mengalahkan kutukan jahat dan menyelamatkan dunia dari kehancuran.',
                'episodes' => 47,
                'minute_per_episode' => 23,
                'types' => 'anime',
                'genres' => ['Action', 'Supernatural', 'Dark Fantasy'],
                'views' => '15.000.000',
                'likes' => '1.100.000',
                'comments' => '90.000'
            ]
        ];
    }

    private function getRecentActivities($users)
    {
        return [
            [
                'username' => $users[0]['username'],
                'user_email' => $users[0]['email'],
                'avatar' => $users[0]['avatar'],
                'activity_type' => 'uploaded',
                'content_type' => 'Anime',
                'content_title' => 'Ayanokoji VS Ryuuuen',
                'timestamp' => '24-10-2024',
            ],
            [
                'username' => $users[2]['username'],
                'user_email' => $users[2]['email'],
                'avatar' => $users[2]['avatar'],
                'activity_type' => 'commented',
                'content_type' => 'K-Drama',
                'content_title' => 'Crash Landing on You',
                'timestamp' => '01-01-2025',
            ],
            [
                'username' => $users[5]['username'],
                'user_email' => $users[5]['email'],
                'avatar' => $users[5]['avatar'],
                'activity_type' => 'subscribed',
                'content_type' => 'Channel',
                'content_title' => 'AnimeNime',
                'timestamp' => '28-04-2025',
            ],
            [
                'username' => $users[7]['username'],
                'user_email' => $users[7]['email'],
                'avatar' => $users[7]['avatar'],
                'activity_type' => 'reported',
                'content_type' => 'Video',
                'content_title' => 'Inappropriate Content Alert',
                'timestamp' => '27-04-2025',
            ],
            [
                'username' => $users[3]['username'],
                'user_email' => $users[3]['email'],
                'avatar' => $users[3]['avatar'],
                'activity_type' => 'shared',
                'content_type' => 'Video',
                'content_title' => 'Top 10 Anime Openings',
                'timestamp' => '25-04-2025',
            ],
            [
                'username' => $users[8]['username'],
                'user_email' => $users[8]['email'],
                'avatar' => $users[8]['avatar'],
                'activity_type' => 'commented',
                'content_type' => 'Anime',
                'content_title' => 'Naruto vs Sasuke Final Battle',
                'timestamp' => '23-04-2025',
            ],
            [
                'username' => $users[9]['username'],
                'user_email' => $users[9]['email'],
                'avatar' => $users[9]['avatar'],
                'activity_type' => 'reported',
                'content_type' => 'User',
                'content_title' => 'User: TrollMaster99',
                'timestamp' => '21-04-2025',
            ],
            [
                'username' => $users[1]['username'],
                'user_email' => $users[1]['email'],
                'avatar' => $users[1]['avatar'],
                'activity_type' => 'uploaded',
                'content_type' => 'K-Drama',
                'content_title' => 'Vincenzo Final Episode',
                'timestamp' => '20-04-2025',
            ],
            [
                'username' => $users[5]['username'],
                'user_email' => $users[5]['email'],
                'avatar' => $users[5]['avatar'],
                'activity_type' => 'subscribed',
                'content_type' => 'Channel',
                'content_title' => 'Korean Series HD',
                'timestamp' => '18-04-2025',
            ],
            [
                'username' => $users[6]['username'],
                'user_email' => $users[6]['email'],
                'avatar' => $users[6]['avatar'],
                'activity_type' => 'shared',
                'content_type' => 'Video',
                'content_title' => 'Levi vs Beast Titan',
                'timestamp' => '17-04-2025',
            ],
        ];
    }

    public function getPageTitles() {
        return [
            'Dashboard' => "Here is today's report and performances",
            'Content' => "You Can Manage Your Content Here",
            'Profile' => "Manage your personal profile",
            'Settings' => "Configure your system settings",
        ];
    }

    public function showHomepage(Request $request) {
        $pageTitles = $this->getPageTitles();
        $pageTitle = 'Profile';
        $users = $this->getUsers();
        $streamingData = $this->getStreamingData();
        $recentActivities = $this->getRecentActivities($users);
        $username = $request->query('username');
        $password = $request->query('password');
        return view('homepage', compact('username', 'password', 'streamingData', 'recentActivities', 'pageTitles', "pageTitle"));
    }

    public function showProfile(Request $request) {
        $pageTitles = $this->getPageTitles();
        $pageTitle = 'Profile';
        $users = $this->getUsers();
        $streamingData = $this->getStreamingData();
        $recentActivities = $this->getRecentActivities($users);
        $username = $request->query('username');
        $password = $request->query('password');
        return view('profile', compact('username', 'password', 'streamingData', 'recentActivities', 'pageTitles', "pageTitle"));
    }

    public function showPengelolaan(Request $request) {
        $pageTitles = $this->getPageTitles();
        $pageTitle = 'Content';
        $users = $this->getUsers();
        $streamingData = $this->getStreamingData();
        $recentActivities = $this->getRecentActivities($users);
        $username = $request->query('username');
        $password = $request->query('password');
        return view('pengelolaan', compact('username', 'password', 'streamingData', 'recentActivities', 'pageTitles', "pageTitle"));
    }

    public function showDashboard(Request $request) {
        $pageTitles = $this->getPageTitles();
        $pageTitle = 'Dashboard';
        $users = $this->getUsers();
        $streamingData = $this->getStreamingData();
        $recentActivities = $this->getRecentActivities($users);
        $username = $request->query('username');
        $password = $request->query('password');
        return view('dashboard', compact('username', 'password', 'streamingData', 'recentActivities', 'pageTitles', "pageTitle"));
    }

    public function login(Request $request) {
        $request->validate([
            'username'=>'required|min:3|max:10',
            'password'=>'required|min:4|max:20'
        ]);
        $username = $request->input('username');
        $password = $request->input('password');
        return redirect()->route('dashboard', compact('username', 'password'));
    }
}
