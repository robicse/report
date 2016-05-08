<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Report extends Controller_Application {
	
	public function action_doctorreport()
	{
		// set connection dateTime file
		$this->template->scripts=array('dateTimeCust.js','jquery.bdt.js','jquery.table2excel.js');
		
		// select data 
		$data = ORM::factory('doctorreport')->find_all();
		
		$this->template->Page_Title = 'Page Title';
		$this->template->mainContent = view::factory('report/doctorreport')
										->bind('data',$data);
		
	}
	
	public function action_pdf()
	{								
		// select data 
		$data = ORM::factory('doctorreport')->find_all();
										
		//exit;
		/*-- pdf start --*/
		require('modules/plugins/pdf/fpdf.php');
		require('modules/plugins/pdf/class.php');

		$pdf=new PDF();
		//Column titles
		//$header=array('CustomerID','Name','Email','Country Code','Budget','Used');
		$header=array('ID','Created Time','Caller Number','Caller Name','Baby Name','DOB','Age on Today','Address','Division','Source','Dr. Call Type','Prescript');
		
		//Data loading
		$resultData = array();
		//$result = mysqli_fetch_array($connection,$data);
		foreach($data as $row){
			array_push($resultData,$row);
		}
		
		$pdf->SetFont('Arial','',7);

		//*** Table 1 ***//
		$pdf->AddPage();
		//$pdf->Image('logo.gif',80,8,33);
		//$pdf->Ln(35);
		$pdf->BasicTable($header,$resultData);

		//$pdf->Output("shotdev/mypdf.pdf","F");
		$pdf->Output('result.pdf', 'D');
	}
	
	public function action_xls()
	{
		// set connection dateTime file
		$this->template->scripts=array('dateTimeCust.js','jquery.bdt.js','jquery.table2excel.js','excelDownload.js');
		
		// select data 
		$data = ORM::factory('doctorreport')->find_all();
		
		$this->template->Page_Title = 'Page Title';
		$this->template->mainContent = view::factory('report/doctorreport')
										->bind('data',$data);
		
	}
	
	public function action_xls1()
	{
		// set connection dateTime file
		$this->template->scripts=array('dateTimeCust.js','jquery.bdt.js');
		
		// select data 
		$data = ORM::factory('doctorreport')->find_all();
		
		$this->template->Page_Title = 'Page Title';
		$this->template->mainContent = view::factory('report/doctorreport')
										->bind('data',$data);
		
		//require('phpexcel/config/phpexcel.php');
		require_once('Classes/PHPExcel.php');
		//excel
		$objPHPExcel = new PHPExcel();
 
		//$objPHPExcel->set_data($sh, false);
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objSheet = $objPHPExcel->setActiveSheetIndex(0);
		
		$objSheet->setTitle('My sales report');
		// write header
		
		header("Content-Type:application/vnd.ms-excel;");
		header("Content-Disposition: attachment; filename=abc.xls"); 
		header("Cache-Control: max-age=0");


		$objSheet->getCell('A1')->setValue('SL NO');
		$objSheet->getCell('B1')->setValue('created_time');
		/* $objSheet->getCell('C1')->setValue('Employee Salary	');
		$objSheet->getCell('D1')->setValue('Employee Age');
		$objSheet->getCell('E1')->setValue('Apps Name');
		$objSheet->getCell('F1')->setValue('Cur Res. Addr.');
		$objSheet->getCell('G1')->setValue('Upd. Res. Addr.');
		$objSheet->getCell('H1')->setValue('Apps Address');
		$objSheet->getCell('I1')->setValue('Appnt. Date');
		$objSheet->getCell('J1')->setValue('Appnt. Time');
		$objSheet->getCell('K1')->setValue('Voice Log'); */
		
		for($i=0;$i<sizeof($data);$i++){
		//Write data
			$k = $i+1;
			$j= $i+2;
			$objSheet->getCell('A'.$j)->setValue($k);
			$objSheet->getCell('B'.$j)->setValue($data[$i]['created_time']);
			/* $objSheet->getCell('D'.$j)->setValue($data[$i]['employee_salary	']);
			$objSheet->getCell('C'.$j)->setValue($data[$i]['employee_age']);
			
			$objSheet->getCell('E'.$j)->setValue($data[$i]['appname']);
			$objSheet->getCell('F'.$j)->setValue($data[$i]['addressline1']);
			$objSheet->getCell('H'.$j)->setValue($data[$i]['addressOne']);
			$objSheet->getCell('H'.$j)->setValue($data[$i]['appaddress']);
			$objSheet->getCell('I'.$j)->setValue($data[$i]['appointmentdate']);
			$objSheet->getCell('J'.$j)->setValue($data[$i]['appointmenttime']);
			$objSheet->getCell('K'.$j)->setValue($data[$i]['logFileUrl']); */
		}
		
		$objWriter->save('php://output');
		
		//--------excel
		
	}
	
}