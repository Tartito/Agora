<!-- page start-->
<div class="col-sm-48">
	<section class="panel">
		<div class="chat-room-head">
			<h3><i class="fa fa-angle-right"></i> Gérer les Pegis</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-advance table-hover">
			<thead>
			  <tr class="tableau-entete">
				<th class="col-sm-1"><i class="fa fa-bullhorn"></i> Identifiant</th>
				<th class="col-sm-1"><i class="fa fa-bookmark"></i> Description</th>
                <th class="col-sm-4"><i class="fa fa-bookmark"></i> Age</th>
				<th></th>
			  </tr>
			</thead>
			<tbody>
			<!-- formulaire pour ajouter un nouveau genre-->
			<tr>
			<form action="index.php?uc=gererPegi" method="post">
				<td>Nouveau</td>
				<td>
					<input type="text" id="txtdescPegi" name="txtdescPegi" size="100" required minlength="4"  maxlength="1000"  placeholder="description" title="De 4 à 24 caractères"  />
				</td>
                <td>
					<input type="number" id="txtageLimite" name="txtageLimite" size="10" required minlength="0"  maxlength="1"  placeholder="age" title="De 0 à 4 caractères"  />
				</td>
				<td> 
					<button class="btn btn-primary btn-xs" type="submit" name="cmdAction" value="ajouterNouveauPegi" title="Enregistrer nouveau pegi"><i class="fa fa-save"></i></button>
					<button class="btn btn-info btn-xs" type="reset" title="Effacer la saisie"><i class="fa fa-eraser"></i></button>	
				</td>
			</form>
			</tr>
				
			<?php
			foreach ($tbPegi as $pegi) { 
			?>
			  <tr>
			  
				<!-- formulaire pour modifier et supprimer les genres-->
				<form action="index.php?uc=gererPegi" method="post">
				<td><?php echo $pegi->identifiant; ?><input type="hidden"  name="txtidPegi" value="<?php echo $pegi->identifiant; ?>" /></td>
				<td><?php 
					if ($pegi->identifiant != $idPegiModif) {
                        echo $pegi->descPegi;
			
                      
						?>
						</td><td>
							<?php if ($notification != 'rien' && $pegi->identifiant == $idPegiNotif) {  
								echo '<button class="btn btn-success btn-xs"><i class="fa fa-check"></i>' . $notification . '</button>'; 
							
							} ?>
		
                      <?php  echo $pegi->ageLimite;
						?>
						</td><td>
							<?php if ($notification != 'rien' && $pegi->identifiant == $idPegiNotif) {  
								echo '<button class="btn btn-success btn-xs"><i class="fa fa-check"></i>' . $notification . '</button>'; 
							
							} ?>
							<button class="btn btn-primary btn-xs" type="submit" name="cmdAction" value="demanderModifierPegi" title="Modifier"><i class="fa fa-pencil"></i></button>
							<button class="btn btn-danger btn-xs" type="submit" name="cmdAction" value="supprimerPegi" title="Supprimer" onclick="return confirm('Voulez-vous vraiment supprimer ce pegi?');"><i class="fa fa-trash-o "></i></button>
						</td>
					

					<?php
					}
					
					else {
						?><td>
						<input type="text" id="txtdescPegi" name="txtdescPegi" size="24" required minlength="4"  maxlength="24"   value="<?php echo $pegi->descPegi; ?>" />     
						
                        <input type="text" id="txtageLimite" name="txtageLimite" size="24" required minlength="4"  maxlength="24"   value="<?php echo $pegi->ageLimite; ?>" />     
						</td>
						<td>		 
							<button class="btn btn-primary btn-xs" type="submit" name="cmdAction" value="validerModifierPegi" title="Enregistrer"><i class="fa fa-save"></i></button>
							<button class="btn btn-info btn-xs" type="reset" title="Effacer la saisie"><i class="fa fa-eraser"></i></button>				
							<button class="btn btn-warning btn-xs" type="submit" name="cmdAction" value="annulerModifierPegi" title="Annuler"><i class="fa fa-undo"></i></button>
						</td>				
					<?php
					}				
					?>
				</form>
				
			  </tr>  
			<?php
			}
			?>
			</tbody>
		  </table>
			  	  
		</div><!-- fin div panel-body-->
    </section><!-- fin section genres-->
</div><!--fin div col-sm-6-->

