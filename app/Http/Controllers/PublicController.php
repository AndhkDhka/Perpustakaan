<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function home()
    {
        return view('public.home');
    }

    public function profil()
    {
        return view('public.profil');
    }

    public function kepalaSekolah()
    {
        return view('public.kepala-sekolah');
    }

    public function visi()
    {
        return view('public.visi-misi');
    }

    public function ppdb()
    {
        return view('public.ppdb');
    }
}
