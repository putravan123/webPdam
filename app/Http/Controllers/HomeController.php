<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\BiografiDireksi;
use App\Models\Slide;
use App\Models\Hukum;
use App\Models\Keuangan;
use App\Models\Manajemen;
use App\Models\Pelayanan;
use App\Models\Registrasi;
use App\Models\Struktur;
use App\models\TeamMember;
use App\Models\Teknis;

class HomeController extends Controller
{

    public function home()
    {
        $slides = Slide::all();
        $abouts = About::all();
        $blogs = Blog::all();
        $teamMembers = TeamMember::all();
        
        return view('home.template.app', compact('slides','abouts','blogs', 'teamMembers'));
    }

    public function berita ()
    {
        $blogs = Blog::paginate(9);
        return view('home.template.berita', compact('blogs'));
    }

    public function contact ()
    {
        return view('home.template.contact');
    }

    public function visi()
    {
        return view('home.template.visis.visimisi');
    }
    public function struktur()
    {
        $strukturs = Struktur::all();
        return view('home.template.setruktur.struktur', compact('strukturs'));
    }
    public function hukum()
    {
        $hukum = Hukum::all();
        return view('home.template.hukum.hukum', compact('hukum'));
    }

    public function galeri()
    {
        $galeris = TeamMember::paginate(9);
        return view('home.template.galeris.galeri', compact('galeris'));
    }
    public function pelayanan()
    {
        $layanan = Pelayanan::paginate(9);
        return view('home.template.pelayanan.pelayanan', compact('layanan'));
    }

    public function teknis()
    {
        $teknis = Teknis::paginate(9);
        return view('home.template.teknis.tekinis', compact('teknis'));
    }

    public function manajemen()
    {
        $manajemen = Manajemen::paginate(9);
        return view('home.template.manajemen.manajemen', compact('manajemen'));
    }

    public function keuangan()
    {
        $keuangan = Keuangan::paginate(9);
        return view('home.template.keuangan.keuangan', compact('keuangan'));
    }
    public function registrasi()
    {
        $registrasis = Registrasi::paginate(9);
        return view('home.template.registrasi.registrasi', compact('registrasis'));
    }

    public function biografi_direksi()
    {
        $biografi_direksi = BiografiDireksi::paginate(9);
        return view('home.template.Biografi-Direksi.index', compact('biografi_direksi'));
    }
}
