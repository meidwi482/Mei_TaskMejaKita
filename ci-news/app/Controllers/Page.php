<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		echo view("about");
	}
    
    public function contact()
{
	$data['name'] = "Petani Kode";
	echo view("contact", $data);
}
    public function faqs()
	{
		echo view("Faqs");
	}

}