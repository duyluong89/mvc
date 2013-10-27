<?php
class upload {
	public $_folderName;
	public $_dataInfo;
	public $_fileName;
	private $_fileType;
	public function __construct() {
		$this->_folderName = "";
		$this->_dataInfo = array ();
	}
	
	/**
	 *
	 * @return the $_fileType
	 */
	public function getFileType() {
		return $this->_fileType;
	}
	
	/**
	 *
	 * @param field_type $_fileType        	
	 */
	public function setFileType($_fileType) {
		$this->_fileType = $_fileType;
	}
	
	/**
	 *
	 * @return the $_fileName
	 */
	public function getFileName() {
		return $this->_fileName;
	}
	
	/**
	 *
	 * @param field_type $_fileName        	
	 */
	public function setFileName($_fileName) {
		$this->_fileName = $_fileName;
	}
	public function start() {
		if (isset ( $_FILES )) {
			$file = $_FILES [$this->getFileName ()];
			$tmp_name = $file ['tmp_name'];
			switch ($this->getFileType ()) {
				case UPLOAD_TYPE_IMAGE :
					$this->upload_type_image($tmp_name);
					break;
				case UPLOAD_TYPE_DOC :
					break;
				case UPLOAD_TYPE_VIDEO :
					break;
				default :
					break;
			}
		}
	}
	private function upload_type_image($tmp_name) {
		move_uploaded_file ( $tmp_name, "" );
		if (is_uploaded_file ( $tmp_name )) {
			
		}
	}
	private function getExtension($str) {
	
		$i = strrpos($str,".");
		if (!$i) { return ""; }
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
	}
}
/*
 *  define ("MAX_SIZE","400");

 $errors=0;
 
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
        $image =$_FILES["file"]["name"];
 $uploadedfile = $_FILES['file']['tmp_name'];

  if ($image) 
  {
  $filename = stripslashes($_FILES['file']['name']);
        $extension = getExtension($filename);
  $extension = strtolower($extension);
 if (($extension != "jpg") && ($extension != "jpeg") 
&& ($extension != "png") && ($extension != "gif")) 
  {
echo ' Unknown Image extension ';
$errors=1;
  }
 else
{
   $size=filesize($_FILES['file']['tmp_name']);
 
if ($size > MAX_SIZE*1024)
{
 echo "You have exceeded the size limit";
 $errors=1;
}
 
if($extension=="jpg" || $extension=="jpeg" )
{
$uploadedfile = $_FILES['file']['tmp_name'];
$src = imagecreatefromjpeg($uploadedfile);
}
else if($extension=="png")
{
$uploadedfile = $_FILES['file']['tmp_name'];
$src = imagecreatefrompng($uploadedfile);
}
else 
{
$src = imagecreatefromgif($uploadedfile);
}
 
list($width,$height)=getimagesize($uploadedfile);

$newwidth=60;
$newheight=($height/$width)*$newwidth;
$tmp=imagecreatetruecolor($newwidth,$newheight);

$newwidth1=25;
$newheight1=($height/$width)*$newwidth1;
$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,
 $width,$height);

imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1, 
$width,$height);

$filename = "images/". $_FILES['file']['name'];
$filename1 = "images/small". $_FILES['file']['name'];

imagejpeg($tmp,$filename,100);
imagejpeg($tmp1,$filename1,100);

imagedestroy($src);
imagedestroy($tmp);
imagedestroy($tmp1);
}
}
}
//If no errors registred, print the success message

 if(isset($_POST['Submit']) && !$errors) 
 {
   // mysql_query("update SQL statement ");
  echo "Image Uploaded Successfully!";

 }
 * 
 * */