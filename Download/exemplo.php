<?php
/*
$link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>
*/

class File{
	private $link;

   public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;

      
    }

	public function criarImg(){

	$link = $this->getLink();

	$content = file_get_contents($link);

	$parse = parse_url($link);

	$basename = basename($parse["path"]);

	$file = fopen($basename, "w+");

	fwrite($file, $content);

	fclose($file);

	return $basename;

	}

	public function exibirImg(){
		$file = $this->criarImg();

		return $file;



	}
}
	$file = new File();
	$file->setLink("https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png");
	$file->criarImg();
	$img = $file->exibirImg();


	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

</head>
<body>
	<img  id ="img" src="<?=$img?>" alt="">
</body>
</html>


