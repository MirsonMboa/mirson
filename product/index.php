
<?php
include_once ("../header.php");
include_once("../db.php");

?>



<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Dashboard</h4>
						<div class="btn-group btn-group-page-header ml-auto">
							<button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-ellipsis-h"></i>
							</button>
							<div class="dropdown-menu">
								<div class="arrow"></div>
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							</div>
						</div>
					</div>
					
                    
			<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lista dos Produtos</h4>
                    <a href=""><button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Add Usuarios</button></a>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Cod</th>
                          <th> Nome </th>
                          <th> Preço</th>
						              <th> Acção </th>
                        </tr> 
                      </thead>
					  
					  		<?php 
							 // faz a seleção do dados na Tabela	
								$data = mysqli_query($conectar, "SELECT * FROM products");
							 // lista os dados
								while($value = mysqli_fetch_array($data)){
									
									
							?>	
                                        
            <tbody>
                        <tr class="table-info">
                          <td> <?php echo $value['id'] ?></td>
                          <td> <?php echo $value['cod'] ?> </td>
                          <td> <?php echo $value['name'] ?> </td>
                          <td> <?php echo $value['price'] ?></td>
						  
						  <!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
						  <td>
							<a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"> Editar </a> - 
							<a class="btn btn-sm btn-danger " href="product/deleteQuery.php?id=<?php echo $value['id']; ?>">Apagar</a>
						  </td>
                        </tr>
						<?php  }?>	
           </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>					
			        </div>
			    </div>
			
		    </div>
   </div> 
			
 
<?php
include_once("../footer.php");
?>