<?php
// deklarasi variabel untuk switch 
$action = @$_GET['action'];

switch ($action) {
        // tambah ada 
    case 'home':
        require_once 'default.php';
        break;
    case 'profile':
        require_once 'profile.php';
        break;
    case 'fungsi':
        require_once 'fungsi.php';
        break;
    case 'struktur':
        require_once 'struktur.php';
        break;
    case 'visimisi':
        require_once 'visimisi.php';
        break;
    case 'alurpermohonan':
        require_once 'alurpermohonan.php';
        break;
    case 'formpermohonan':
        require_once 'formpermohonan.php';
        break;
    case 'hak-pemohon-informasi':
        require_once 'hak-pemohon-informasi.php';
        break;
    case 'alur-keberatan':
        require_once 'alur-keberatan.php';
        break;
    case 'form-keberatan':
        require_once 'form-keberatan.php';
        break;
    case 'tata-cara-penyelesaian-sengketa':
        require_once 'tata-cara-penyelesaian-sengketa.php';
        break;
    case 'undang-undang':
        require_once 'undang-undang.php';
        break;
    case 'regulasi-pemerintah':
        require_once 'regulasi-pemerintah.php';
        break;
    case 'regulasi-ki':
        require_once 'regulasi-ki.php';
        break;
    case 'regulasi-sekolah':
        require_once 'regulasi-sekolah.php';
        break;

    case 'sop-pengelolaan-permohonan-informasi':
        require_once 'sop-pengelolaan-permohonan-informasi.php';
        break;
    case 'sop-pengelolaan-keberatan-atas-informasi':
        require_once 'sop-pengelolaan-keberatan-atas-informasi.php';
        break;
    case 'sop-penanganan-sengketa-informasi-publik':
        require_once 'sop-penanganan-sengketa-informasi-publik.php';
        break;
    case 'sop-penetapan-dan-pemutakhiran-dip':
        require_once 'sop-penetapan-dan-pemutakhiran-dip.php';
        break;
    case 'sop-uji-konsekuensi':
        require_once 'sop-uji-konsekuensi.php';
        break;
    case 'sop-pendokumentasian-informasi-publik':
        require_once 'sop-pendokumentasian-informasi-publik.php';
        break;
    case 'sop-pendokumentasian-informasi-yg-dikecualikan':
        require_once 'sop-pendokumentasian-informasi-yg-dikecualikan.php';
        break;
    case 'sop-layanan-publik-smkn-1-bukittinggi':
        require_once 'sop-layanan-publik-smkn-1-bukittinggi.php';
        break;
    case 'sop-maklumat-smkn-1-bukittinggi':
        require_once 'sop-maklumat-smkn-1-bukittinggi.php';
        break;
    case 'sop-pengumuman-smkn-1-bukittinggi':
        require_once 'sop-pengumuman-smkn-1-bukittinggi.php';
        break;
    case 'sk_ppid':
        require_once 'sk_ppid.php';
        break;
    case 'regulasi':
        require_once 'regulasi.php';
        break;

    case 'dokumen-sekolah':
        require_once 'dokumen-sekolah.php';
        break;
    case 'laporan':
        require_once 'laporan.php';
        break;
    case 'maklumat-pelayanan':
        require_once 'maklumat-pelayanan.php';
        break;
    case 'survey-layanan-publik':
        require_once 'survey-layanan-publik.php';
        break;
        // tampil
        // tampilan default bila parameter $_GET['action'] tidak ada
    default:

        include 'home.php';
}
