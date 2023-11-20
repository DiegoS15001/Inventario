<?php
ob_start();
session_start();
include('inc/header.php');
include 'Inventory.php';
$inventory = new Inventory();
$inventory->checkLogin();
?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/common.js"></script>
<div class="container">
	<?php include("menus.php"); ?>		
	<div class="col-lg-12">						
					<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">												
							<h3 class="card-title">Inventario Actual</h3>	
						</div>												
						<div class="col-sm-12 table-responsive">
							<table id="inventoryDetails" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Número</th>
										<th>Nombre y SKU</th>
										<th>Stock Inicial</th>
										<th>Stock Recibido</th>
										<th>Productos Vendidos</th>
										<th>Stock Disponible</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>	
		</div>
	</div>
</div>	
<?php include('inc/footer.php'); ?>