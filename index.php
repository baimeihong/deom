<?php 
$link = new PDO('mysql:host=127.0.0.1;dbname=1704phpA','root','root');
$sql="insert into admin(`name`,`account`) values";
for ($i=1; $i <=1000 ; $i++) { 
	$str ='sdsfgeretyhfgqwesdgfxcvvbdfgbndfbnfgfb';
	$account='';
	$name='';
	$account.=rand(10,20).'@'.'qq.'.'com';

	for ($j=0; $j <10 ; $j++) { 
		$name.=$str[rand(0,25)];
	}
	if ($i!=1000) {
		$sql.="('$name','$account'),";
	}else{
		$sql.="('$name','$account');";
	}
    
    echo "$sql";
}

 ?>