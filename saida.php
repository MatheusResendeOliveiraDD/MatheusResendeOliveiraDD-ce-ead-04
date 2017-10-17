<?php 
    //recebe os valores do formulário
    $criaNum = $_POST["criaNum"];
    $ateNum = $_POST["ateNum"];
    $multNum = $_POST["multNum"];
    $multAte = $_POST["multAte"];

?>



<!doctype html>
<html>
<head>  
        <title> Gerador de tabuadas </title>    
        <meta charset="utf-8">
    <!-- Última versão CSS compilada e minificada -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
	<!-- Última versão JavaScript compilada e minificada -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

	<style>
		p,table{
			text-align: center;
		}
		table{
			background-color: rgba(0, 0, 0, 0.09);
		}
	</style>
</head>
<body>
<br>
<div class="container">
	<?php for($multiplicando=$multNum; $multiplicando<=$multAte; $multiplicando++){ ?>
		<label>
			<p>Tabuada do  <?php  echo $multiplicando ?></p>
		    <table  class="table  table-sm">
				<thead class="thead-inverse">
				  <tr>
				    <th>Fórmula</th>
				    <th></th>
				    <th>Valor</th>
				  </tr>
		        </thead>
		        <tbody>
		    <?php for($multiplicador=$criaNum; $multiplicador<=$ateNum; $multiplicador++){ ?>

			      <tr>
			        <td><?php  echo $multiplicador . " x " . $multiplicando ?></td>
			        <td>=</td>
			        <td><?php  echo ($multiplicador * $multiplicando) ?></td>
			      </tr>  
		    <?php  } ?>
		        </tbody>
		    </table> 
		</label>  
    <?php } ?>
</div>    
</body>
</html>




