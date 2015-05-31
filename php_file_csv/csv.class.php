<?php
/**
 * csv.class.php
 * 
 */

class Csv
{	// class begin
	// ------------------------------------------------------------------------
	private $fileResource;

	// ------------------------------------------------------------------------

	/**
	 * construct
	 */
	public function __construct()
	{
	}
	// ------------------------------------------------------------------------
	/**
	 * 读取CSV数据 read csv file
	 * @param string $csvFileName 文件路径
	 * @return array $result
	 */
	public function getCsvData( $csvFileName='' ){
		//打开文件
		$this->fileResource = $this->openFile($csvFileName,'r');

		if( $this->fileResource === false ){
			return false;
		}

		$result = array();
	    while ( ($data = fgetcsv($this->fileResource, 1000, ",")) !== FALSE ) {
	        $result[] = $data;
	    }

	   	return $result;
	}
	// ------------------------------------------------------------------------
	/**
	 * 写入CSV
	 * @param string $fileName
	 * @param array $data
	 * @return int
	 */
	public function putCsvData($fileName='', array $data=array() )
	{	
		if(empty($fileName)){
			$fileName = 'filename_'.date('YmdHis').'.csv';
		}
		if( $data ){
			return false;
		}
		$this->fileResource = $this->openFile($fileName,'w');
		
		if( $this->fileResource === false ){
			return false;
		}
		return fputcsv($this->fileResource, $data);
	}
	// ------------------------------------------------------------------------
	/**
	 * 打开文件资源 Open File Resource
	 * @param string $fileName
	 * @param string $mode
	 * @return resource $fileResource
	 */
	public function openFile($fileName="", $mode='w'){
		if( ! is_file($fileName) ){
			return false;
		}
		return $this->fileResource = fopen($fileName, $mode);
	}

	// ------------------------------------------------------------------------
	
	/**
	 * 导入CSV
	 * @param array $data
	 * @return int
	 */
	public function export($data)
	{
		fputcsv($this->fileResource, $data);
	}
	// ------------------------------------------------------------------------

	/**
	 * 导出CSV
	 * @return array
	 */
	public function import()
	{
		$tmp = array();
		while($data = fgetcsv($this->fileResource))
		{
			$tmp[] = $data;
		}
		return $tmp;
	}
	// ------------------------------------------------------------------------

	//fwrite($handle, mb_convert_encoding(implode(',', $title), 'gbk', 'utf-8')."\r\n");
	private function downloadAsCsvFile(array &$csv_array, $file_name) {
		header('Content-type: application/csv');
        header('Content-Transfer-Encoding: binary; charset=utf-8');
		header("Content-Disposition: attachment; filename={$file_name}.csv");
        $fp = fopen("php://output", 'w');

        //生成bom头
        fputs($fp, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
        foreach ($csv_array as $row) {
			fputcsv($fp, $row);
		}
		exit();
	}

	// ------------------------------------------------------------------------
	
	private function downloadAsTxtFile(array &$array, $file_name) {
		header("Content-Disposition: attachment; filename={$file_name}.txt");
		header("Content-Type: charset=utf-8");
        $fp = fopen("php://output", 'w');

        //生成bom头
        fputs($fp, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
        foreach ($array as $row) {
			$line = implode("\t", $row)."\n";
			fputs($fp, $line, strlen($line));
        }
		exit();
	}

	// ------------------------------------------------------------------------

}	// class end