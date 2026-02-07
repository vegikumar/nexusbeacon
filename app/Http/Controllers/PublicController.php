<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() { return view('home'); }
    public function blog() { return view('blog'); }
    public function caseStudies() { return view('case-studies'); }
    public function careers() { return view('careers'); }
    public function contact() { return view('contact'); }
    public function converse() { return view('converse'); }
    public function convert() { return view('convert'); }
    public function about() { return view('about'); }
    public function connect() { return view('connect'); }
    public function brochure() { return view('brochure'); }
    public function corporateDeck() { return view('corporate-deck'); }
}
