<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

    public function __construct(){
          parent::__construct();
    }

    /*
    |
    | START FUNCTION IN THIS CONTROLLER
    |
    */

    /*
    |  Structure View
    |
    |  $this->load->view('website/_template/header'); -->head (must - include css main)
    |  $this->load->view('website/ujian/css'); --> css additional (flexible)
    |  $this->load->view('website/_template/content'); --> content body (must)
    |  $this->load->view('website/_template/menu'); --> Header menu main (flexible - can replace)
    |  $this->load->view('website/ujian/content_dashboard'); --> content web (must)
    |  $this->load->view('website/_template/js_main'); --> js main (must)
    |  $this->load->view('website/ujian/js'); --> js additional (flexible)
    |  $this->load->view('website/_template/footer'); --> content body (must)
    |
    |  EDIT CODE DIBAWAH INI UNTUK MENGGANTI STRUKTUR PEMANGGILAN VIEW / DESIGN
    |
    */

    private function _generate_view($view, $data){
        $this->load->view('website/_template/header', $data['title_header']);
        $this->load->view($view['css_additional']);
        $this->load->view('website/_template/content');
        $this->load->view($view['menu_header']);
        $this->load->view($view['content'], $data['content']);
        $this->load->view('website/_template/js_main');
        $this->load->view($view['js_additional']);
        $this->load->view('website/_template/footer');
    }

    /*
    |
    | END FUNCTION IN THIS CONTROLLER
    |
    */

    public function index(){
        //for passing data to view
        $data['content'] = [];
        $data['title_header'] = ['title' => 'Ujian Online'];

        //for load view
        $view['css_additional'] = 'website/user/ujian/css';
        $view['menu_header'] = 'website/_template/menu_ujian';
        $view['content'] = 'website/user/ujian/content';
        $view['js_additional'] = 'website/user/ujian/js';

        //get function view website
        $this->_generate_view($view, $data);
    }

    public function designtwo(){
        //for passing data to view
        $data['content'] = [];
        $data['title_header'] = ['title' => 'Ujian Online'];

        //for load view
        $view['css_additional'] = 'website/user/ujian/css';
        $view['menu_header'] = 'website/_template/menu_ujian';
        $view['content'] = 'website/user/ujian/content2';
        $view['js_additional'] = 'website/user/ujian/js';

        //get function view website
        $this->_generate_view($view, $data);
    }

    public function mulai_ujian(){
        //for passing data to view
        $data['content'] = [];
        $data['title_header'] = ['title' => 'Persiapan dan Petunjuk Pengerjaan'];

        //for load view
        $view['css_additional'] = 'website/user/ujian/css';
        $view['menu_header'] = 'website/_template/menu_empty';
        $view['content'] = 'website/user/ujian/mulai_ujian/content';
        $view['js_additional'] = 'website/user/ujian/mulai_ujian/js';

        //get function view website
        $this->_generate_view($view, $data);
    }

}