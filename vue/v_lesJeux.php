<!-- page start-->
<div class="col-sm-6">
	<section class="panel">
		<div class="chat-room-head">
			<h3><i class="fa fa-angle-right"></i> Gérer les jeux</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-advance table-hover">
			<thead>
			  <tr class="tableau-entete">
                <th><i class="fa fa-bookmark"></i> Référence Jeux</th>
                <th><i class="fa fa-bookmark"></i> Libellé</th>
                <th><i class="fa fa-bookmark"></i> Identifiant Marque</th>
                <th><i class="fa fa-bookmark"></i> Identifiant Plateforme</th>
                <th><i class="fa fa-bullhorn"></i> Identifiant Pegi</th>
                <th><i class="fa fa-bookmark"></i> Identifiant Genre</th>
                <th><i class="fa fa-bookmark"></i> Prix </th>
                <th><i class="fa fa-bookmark"></i> Date Parution</th>
                <th></th>
			  </tr>
			</thead>
			<tbody>

			
			<!-- formulaire pour ajouter un nouveau-->
			<tr>
			<form action="index.php?uc=gererJeux" method="post">
                <td>Nouveau</td>
                <td>
					<input type="text" id="txtLibJeux" name="txtLibJeux" size="24" required minlength="4"  maxlength="24"  placeholder="Libellé" title="De 4 à 24 caractères"  />
                </td>
                <td>
					<input type="text" id="txtidmarqueJeux" name="txtidmarqueJeux" size="24" required minlength="0"  maxlength="24"  placeholder="idMarque" title="De 0 à 24 caractères"  />
                </td>
                <td>
					<input type="text" id="txtidplateformeJeux" name="txtidplateformeJeux" size="24" required minlength="0"  maxlength="24"  placeholder="idPlateforme" title="De 0 à 24 caractères"  />
                </td>
                <td>
					<input type="text" id="txtidpegiJeux" name="txtidpegiJeux" size="24" required minlength="0"  maxlength="24"  placeholder="idPegi" title="De 0 à 24 caractères"  />
                </td>
                <td>
					<input type="text" id="txtidgenreJeux" name="txtidgenreJeux" size="24" required minlength="0"  maxlength="24"  placeholder="idGenre" title="De 0 à 24 caractères"  />
                </td>
                <td>
					<input type="text" id="txtidprixJeux" name="txtidprixJeux" size="24" required minlength="0"  maxlength="24"  placeholder="idPrix" title="De 0 à 24 caractères"  />
                </td>
                <td>
					<input type="text" id="txtdateJeux" name="txtdateJeux" size="24" required minlength="0"  maxlength="24"  placeholder="date" title="De 0 à 24 caractères"  />
				</td>
				<td> 
					<button class="btn btn-primary btn-xs" type="submit" name="cmdAction" value="ajouterNouveauJeux" title="Enregistrer nouveau jeux"><i class="fa fa-save"></i></button>
					<button class="btn btn-info btn-xs" type="reset" title="Effacer la saisie"><i class="fa fa-eraser"></i></button>	
				</td>
			</form>
			</tr>
				
			<?php
			foreach ($tbJeux as $jeux) { 
			?>
			  <tr>
			  
				<!-- formulaire pour modifier et supprimer les -->
				<form action="index.php?uc=gererJeux" method="post">
				<td><?php echo $jeux->identifiant; ?><input type="hidden"  name="txtIdJeux" value="<?php echo $jeux->identifiant; ?>" /></td>
				<td><?php 
					if ($jeux->identifiant != $idJeuxModif) {
						echo $jeux->nom;
						?>
						</td><td>
							<?php if ($notification != 'rien' && $jeux->identifiant == $idJeuxNotif) {  
								echo '<button class="btn btn-success btn-xs"><i class="fa fa-check"></i>' . $notification . '</button>'; 
							
                            } ?>
                            </td>
                        <td>
                            <?php 
                            echo $jeux->idMarque
                            ?>
                        </td>
                        <td>
                            <?php 
                            echo $jeux->idPlateforme
                            ?>
                        </td>
                        <td>
                            <?php 
                            echo $jeux->idPegi
                            ?>
                        </td>
                        <td>
                            <?php 
                            echo $jeux->idGenre
                            ?>
                        </td>
                        
                        <td>
                            <?php 
                            echo $jeux->prix
                            ?>
                        </td>
                        
                        <td>
                            <?php 
                            echo $jeux->dateParution
                            ?>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-xs" type="submit" name="cmdAction" value="demanderModifierJeux" title="Modifier"><i class="fa fa-pencil"></i></button>
							<button class="btn btn-danger btn-xs" type="submit" name="cmdAction" value="supprimerJeux" title="Supprimer" onclick="return confirm('Voulez-vous vraiment supprimer ce jeux?');"><i class="fa fa-trash-o "></i></button>
                        </td>
					<?php
					}
					else {
						?><input type="text" id="txtLibJeux" name="txtLibJeux" size="24" required minlength="4"  maxlength="24"   value="<?php echo $jeux->libelle; ?>" />     
						</td>
						<td>		 
							<button class="btn btn-primary btn-xs" type="submit" name="cmdAction" value="validerModifierJeux" title="Enregistrer"><i class="fa fa-save"></i></button>
							<button class="btn btn-info btn-xs" type="reset" title="Effacer la saisie"><i class="fa fa-eraser"></i></button>				
							<button class="btn btn-warning btn-xs" type="submit" name="cmdAction" value="annulerModifierJeux" title="Annuler"><i class="fa fa-undo"></i></button>
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
    </section><!-- fin section -->
</div><!--fin div col-sm-6-->

