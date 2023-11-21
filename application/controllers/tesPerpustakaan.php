<?php
defined('BASEPATH') or exit('No direct script access allowed');
class tesPerpustakaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('perpustakaan');
    }
    function index()
    {
        $this->perpustakaan->buku();
    }
}