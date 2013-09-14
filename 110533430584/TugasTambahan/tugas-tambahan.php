<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Program Aritmatika</title>
</head>
<style type="text/css">



#title{
	background: #FFFFFF;
	margin-top:10px;
	width:48%;
	height:70px;
	margin-left:1.7%;
	position:fixed;
	z-index:1;
}

h1{
	color:#5555;
	text-decoration:overline;  
	align: center
}

h3{
	color:#ffffff;
	margin-top:50px;
	position:fixed; 
	margin-left:22%;
}

.equal:hover{
	cursor:pointer; 
}

#bil1, #bil2, #hasil{
	height:40px;
	width:175px;
	font-size:20px; 
	color:#0099FF; 
}

#operator,#equal{
	height:40px;
	width:50px;
	font-size:30px;
}

</style>

<body bgcolor="pink">

        <div id="title" align="center">
    	<h1>Kalkulator Sederhana</h1>
            <table width="80%" align="center" style=" color:#0099FF; background:#ffffff; padding:5px; margin-top:40px; border-radius:10px;">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            	<tr align="center" style="color:#0099FF;">
                	<td width="10%" style="background:#666666"><input  id="bil1" type="number" name="bil1" 
                    value="<?php

							echo isset($_POST['bil1'])?$_POST['bil1'] : '';
						?>" required placeholder="Masukkan Angka" /></td> 
                        
                    <td width="5%" style="background:#666666">
                    <select id="operator" name="operator">
                    	<option></option>
                    	<option value="*" 
						<?php if (isset($_POST['operator']) && $_POST['operator']=='*')
						{
							echo "selected";
						} ?>>*</option>
                        <option value="/"  
						<?php if (isset($_POST['operator']) && $_POST['operator']=='/') 
						{
							echo "selected";
						} ?>>/</option>
                        <option value="+"  
						<?php if (isset($_POST['operator']) && $_POST['operator']=='+') 
						{
							echo "selected";
						} ?>>+</option>
                        <option value="-"  
						<?php if (isset($_POST['operator']) && $_POST['operator']=='-')
						{
							echo "selected";
						} ?>>-</option>
                    </select>
                    	
                    </td>
                    <td width="10%" style="background:#666666"><input id="bil2" type="number" name="bil2" value="<?php
							echo isset($_POST['bil2'])?$_POST['bil2'] : '';
						?>" required placeholder="Masukkan Angka" /></td> 
                    
					 <?php
					 	
                        if(isset($_POST['bil1']) or isset($_POST['bil2']) ){
                        $bil1 = $_POST['bil1']; 
                        $bil2 = $_POST['bil2']; 
                        }else{
                        $bil1 = "0"; 
                        $bil2 = "0";
                        }
						
                        if(isset($_POST['operator'])){
                        $operator =$_POST['operator'];
                        }else{
                        $operator ="0";
                        }
                        switch($operator){
						case "+":
                            $hasil = $_POST["bil1"] + $_POST["bil2"];
                        	break;
                        case "-":
                            $hasil = $_POST["bil1"] - $_POST["bil2"];
                        	break;
                        case "*":
                            $hasil = $_POST["bil1"] * $_POST["bil2"];
                        	break;
                        case "/":
                            $hasil = $_POST["bil1"] / $_POST["bil2"];
                       		break;
						default :
							break;
                        }
                    ?>
                    
                    <td width="5%"style="background:#666666"><input id="equal" type="submit" class="equal" value="=" name="equal" /></td>
                    <td width="10%" style="background:#666666"><input id="hasil" type="text" name="hasil" value="<?php echo $hasil;?>" placeholder="Hasil" /></td>
                </tr>
            </form>
            </table>
    	</div>
    </div>
</body>
</html>
