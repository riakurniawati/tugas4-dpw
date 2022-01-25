<?php
namespace App\Http\Controllers;

class HomeController extends Controller{

    function showBeranda(){
        return view('admin.beranda');
    }

    function showProduk(){
        return view('admin.produk.index');
    }

    function showtemplate(){
        return view('admin.template.app');
    }

     function showkategori(){
        return view('admin.kategori.index');
    }  
    
}