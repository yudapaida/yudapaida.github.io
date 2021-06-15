<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('page/login');
    }

    public function pegawai()
    {
        return view('page/pegawai');
    }

    public function status()
    {
        return view('page/status');
    }

    public function login()
    {
        return view('page/login');
    }

    public function bangpeg()
    {
        return view('page/bangpeg');
    }

    public function permohonan()
    {
        return view('page/permohonan');
    }

    public function cutiTahunan()
    {
        return view('page/cuti/cutitahunan');
    }

    public function cutiAlasanPenting()
    {
        return view('page/cuti/cutialasanpenting');
    }

    public function cutiSakit()
    {
        return view('page/cuti/cutisakit');
    }

    public function cutiMelahirkan()
    {
        return view('page/cuti/cutimelahirkan');
    }

    public function cutiBesar()
    {
        return view('page/cuti/cutibesar');
    }

    public function cutiDiluarTanggungan()
    {
        return view('page/cuti/cutidiluartanggungan');
    }

    public function proses()
    {
        return view('page/proses');
    }

    public function selesai()
    {
        return view('page/selesai');
    }
}
