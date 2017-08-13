<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Createpdf extends CI_Controller {


public function pdf()
{
    $this->load->helper('pdf_helper');
    /*
        ---- ---- ---- ----
        your code here
        ---- ---- ---- ----
    */
        $data = "fitri semangat"; 	
    $this->load->view('admin/print', $data);
}


}
?>