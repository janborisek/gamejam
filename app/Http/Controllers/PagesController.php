<?php
    namespace App\Http\Controllers;

    class PagesController extends Controller {

        public function getIndex(){
            return view('welcome');
        }

        public function getPrijava(){
            return view('prijava');
        }

        public function postPrijava(){

        }

        public function getDogodek(){
            return view('dogodek');
        }
    }
?>
