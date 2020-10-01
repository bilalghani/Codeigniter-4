<?php namespace App\Controllers;
 
use App\Models\Csv_Model;
use App\Controllers\BaseController;
class Csv_ajax extends BaseController
{
	


function savefile(){
helper(['form','url']);

		$db = \Config\Database::connect();

		$builder = $db->table('files-record');

		$model= new Csv_Model();

		if($this->request->getMethod()== 'post'){
			$file = $this -> request->getFile('csv_file');
			$name = $file->getName();
			if($file->move("csvfiles",$name)){
					$data=[
					'filename' => $file->getClientName().$file->getClientMimeType(),
					'filepath' =>'../public/csvfiles'
				];

				if($builder->insert($data)){
					 echo json_encode(array("status" => true, "message" => "file added"));
            } else {

                echo json_encode(array("status" => false, "message" => "Failed to add file"));
            }
			}
}


}
		


}