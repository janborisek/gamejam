<?php
    namespace App\Http\Controllers;

    class PagesController extends Controller {

        public function Index(){
            return view('welcome');
        }

        public function Spored(){
            return view('spored');
        }

        public function Dogodek(){
            return view('dogodek');
        }

        public function Home(){
            return view('home');
        }

        public function Sponzor(){
            return view('sponzor');
        }
    }
?>
