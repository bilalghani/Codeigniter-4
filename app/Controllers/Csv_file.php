<?php namespace App\Controllers;
 
use App\Models\Csv_Model;
class Csv_file extends BaseController
{
	


	function handleajaxrequest(){

		
	}




	function store(){
	// $model= new Csv_Model();
	// 	$data['csv'] = $model->getCsvData();
		
		
		echo view('templates/header');

		echo view('/csv_data');

		echo view('templates/footer');



		// $validated = $this->validate([
		// 	'files-record' => [
		// 		'uploaded[file]',
		// 		'mime_in[file,image/jpg,file/csv,csv,image/png]',
		// 		'max_size[file,4096]',
		// 	]
		// ]);

		// $response = [

		// 	'success' => false,
		// 	'data' => '',
		// 	'msg' => 'file has been uploaded successfully'
		// ];

		
			


			

			









		//////////////////////////////////

// 		$model= new Csv_Model();
// 		$data['csv'] = $model->getCsvData();
		
		
// 		echo view('templates/header',$data);

// 		echo view('/csv_data');

// 		echo view('templates/footer');


// if($this->request->getMethod()== 'post'){

// 	$file = $this->request->getFile('csv_file');


// 	$name = $file->getName();
// 	if($file->move("csvfiles",$name)){
// 		echo "<h1> file upload and moved</h1>";
// 	}else{
// 		echo "<h1> failed to moved</h1>";
// 	}
// }


}




}