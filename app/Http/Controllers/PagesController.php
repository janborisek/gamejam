<?php
    namespace App\Http\Controllers;

    class PagesController extends Controller {

        public function getIndex(){
            return view('welcome');
        }

        public function getSpored(){
            return view('spored');
        }

        public function getDogodek(){
            return view('dogodek');
        }

        public function getHome(){
            return view('home');
        }

        public function getSponzor(){
            return view('sponzor');
        }
    }
?>
