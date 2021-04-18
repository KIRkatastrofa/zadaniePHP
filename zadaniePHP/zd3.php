<a href="index.html"><button>В меню</button></a>

<?php
class zd1
{
	function RandomA($a)
    {
        $a=rand(1,10);
		echo $a;
    }
    function RandomB($b)
    {
        $b=rand(11,20);
		echo $b;
    }
    function sqaud()
    {
		$sum=$_POST["a"]*$_POST["b"];
        echo $sum;
    }
}
class zd2
{
	function sqaudshare()
    {
		$R=$_POST["Radius"];
		$fd = fopen("zadanie3_2.txt", 'w') or die("не удалось создать файл");
		$str = "Радиус:". $R."\n";
		fputs($fd, $str);
		$str = "Площадь:". 4*M_PI*pow($R,2);
		fputs($fd, $str);
		fclose($fd);
		echo "Файл записан!";
	}
}

class zd3
{
	function Atriangle()
    {
		$fd = fopen("zadanie3_3.txt", "r")or die("не удалось открыть файл");
		$array = null;
		if ($fd) {
		while (($buffer = fgets($fd)) !== false) {
        $array[] = $buffer;
		}
		fclose($fd);
		}
		echo $array[0];
	}
	function Htriangle()
    {
		$fd = fopen("zadanie3_3.txt", "r")or die("не удалось открыть файл");
		$array = null;
		if ($fd) {
		while (($buffer = fgets($fd)) !== false) {
        $array[] = $buffer;
		}
		fclose($fd);
		}
		echo $array[1];
	}
	function sqaudtriangle()
    {
		echo ($_POST["aa"]*$_POST["hh"])/2;
	}
}
//кнопки-1
if (isset($_POST['zd1'])) 
{
	$zd1= new zd1();
	$nameclass_a="RandomA";
	$nameclass_b="RandomB";
}
if (isset($_POST['zd1_O'])) 
{
	$zd1= new zd1();
	$nameclass="sqaud";
}
//кнопки-2
if (isset($_POST['zd2'])) 
{
	$zd2= new zd2();
	$nameclass="sqaudshare";
}
//кнопки-3
if (isset($_POST['zd3'])) 
{
	$zd3= new zd3();
	$nameclassA="Atriangle";
	$nameclassH="Htriangle";
	$nameclass="sqaudtriangle";
}
?>
<h1>Площадь прямоугольника</h1>
<form method="POST">
	<input type="text" id="n2" name="a" value="<?php if (isset($_POST['zd1'])) 
{echo $zd1->$nameclass_a($a);}?>" maxlength=2>
	<label for="n2"><span></span>A</label><br> 
	<input type="text" id="n3" name="b" value="<?php if (isset($_POST['zd1'])) 
{echo $zd1->$nameclass_b($b);}?>" maxlength=2>
	<label for="n3"><span></span>B</label><br>
	<input type="submit" name="zd1" value="задать рандомные значения">
	<input type="submit" name="zd1_O" value="Найти площадь прямоугольника">
	<input type="text" value="<?php if (isset($_POST['zd1_O'])) {echo $zd1->$nameclass();}?>">
<form>
<h1>Площадь круга</h1>
<form method="POST">
<input type="text" id="n1" name="Radius" maxlength=2>
	<label for="n1"><span></span>Радиус</label><br> 
	<input type="text" id="n2" value="<?php if (isset($_POST['zd2'])) 
{echo $zd2->$nameclass();}?>" maxlength=2>
	<label for="n2"><span></span>Ответ</label><br> 
	<input type="submit" name="zd2" value="Записать значение в файл">
<form>
<h1>Площадь треугольника</h1>
<form method="POST">
	<input type="text" id="n2" name="aa" value="<?php if (isset($_POST['zd3'])) 
{echo $zd3->$nameclassA();}?>" maxlength=2>
	<label for="n2"><span></span>Основание</label><br> 
<input type="text" id="n3" name="hh" value="<?php if (isset($_POST['zd3'])) 
{echo $zd3->$nameclassH();}?>" maxlength=2>
	<label for="n2"><span></span>Высота</label><br> 
<input type="text" id="n4" value="<?php if (isset($_POST['zd3'])) 
{echo $zd3->$nameclass();}?>" maxlength=2>
	<label for="n2"><span></span>Площадь</label><br> 
	<input type="submit" name="zd3" value="получить значение из файла">
<form>
	