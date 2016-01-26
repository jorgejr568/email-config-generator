<?php
session_start();
require_once 'fun.php';
$fun=new fun();
if($_SESSION['login_tutorial_hostnet']['status']=='ADMIN'){
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
 <meta charset="utf-8">
	<?php
		$fun->headers();
	?>
	<title>Notifica&ccedil;&otilde;es</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12"><?php $fun->menu();?></div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 content">
				<h2>Notifica&ccedil;&otilde;es</h2><hr>
				<?php
				$fun->event();
					$fun->conectaMysqli();
					$res=$fun->executaSQL("SELECT * FROM SYS_movimentacoes ORDER BY id DESC");
					$fun->fechaMysqli();
					if(mysqli_num_rows($res)==0){
						?>
						<div class="alert alert-info">N&atilde;o possui nenhuma notifica&ccedil;&atilde;o no momento</div>
						<?php
					}
					else{
						for($i=0;$i<mysqli_num_rows($res);$i++){
							$not=mysqli_fetch_array($res);
							?>
							<div class="alert alert-info"><a href="delete_notificacao?n=<?php echo MD5($not[0]);?>" class="close" data-dismiss='alert'>&times;</a><?php echo $not[1];?></div>

							<?php
						}
						unset($res,$not);
						?>
						<a href="delete_notificacao?n=<?php echo MD5('%');?>" class='btn btn-danger btn-block'>Limpar notificações</a>
						<?php
					}

				?>
			</div>
			<div class="col-md-3">			
</div>
		</div>
	</div>
</body>
</html>
<?php
}
else{
	$fun->saiDaqui();
}