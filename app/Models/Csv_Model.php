<?php namespace App\Models;

use CodeIgniter\Model;


class Csv_Model extends Model{
	
protected $table = "filesrecord";
    protected $allowedFields = [
        "filename", 
        "filepath"
    ];
	// public function getCsvData(){

	// $csvdata=array();
	// $row = 1;
	// if (($handle = fopen("../public/csvfiles/data.csv", "r")) !== FALSE) {
 //    	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    	
 //        	$num = count($data);
      
 //        	$row++;
      
 //        	for ($c=0; $c < $num; $c++) {
 //            	$csvdata[$row][$c] = $data[$c];
 //        		}

 //    		}
 //    	return $csvdata;
 //    	fclose($handle);
	// 	}

	// }

	
}