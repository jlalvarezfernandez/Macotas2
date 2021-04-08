<?php


add_action('admin_menu', 'register_custom_submenu');

function register_custom_submenu()
{
	add_submenu_page('edit.php?post_type=mascota', __('Generador de QR', 'qrmascotas'), __('Generador de QR', 'qrmascotas'), 'administrator', 'qr_generator_subpage', 'qr_generator_subpage');
}

function qr_generator_subpage()
{ ?>
	<?php if (!isset($_POST['generator-launch'])) : ?>
		<h1>Generador de códigos QR</h1>
		<div class="form-generator">
			<form action="" method="post">
				<fieldset>
					<div>
						<label>Mascotas a Generar</label>
						<select id="amount" name="amount">
							<option value="1" id="1">1</option>
							<option value="2" id="2">2</option>
							<option value="3" id="3">3</option>
							<option value="4" id="4">4</option>
							<option value="5" id="5">5</option>
							<option value="6" id="6">6</option>
							<option value="7" id="7">7</option>
							<option value="8" id="8">8</option>
							<option value="9" id="9">9</option>
							<option value="10" id="10">10</option>
						</select>
					</div>
					<div>
						<label>Tamaño QR</label>
						<select id="size" name="size">
							<option value="100x100" id="100">100x100</option>
							<option value="150x150" id="150">150x150</option>
						</select>
					</div>
					<input type="hidden" id="generator-launch" name="generator-launch" value="true">
					<br>
					<button type="submit" onclick="return confirm('¿Estás seguro de generar estas mascotas?')">Generar</button>
				</fieldset>
			</form>
		</div>
	<?php else : ?>
		<h1>Códigos Generados</h1>
		<div class="noprint">
			<?php
			$pets = array();
			for ($i = 1; $i <= $_POST['amount']; $i++) {
				$pet = up_generar_mascota();
				$pets[] = $pet;
				echo 'Se ha generado la mascota con id ' . $pet['id'] . ' con el slug ' . $pet['slug'] . '<br>';
			}
			?>
		</div>
		<div>
			<h2> QR generados: <button onclick="printDiv('printMe')">Imprimir códigos QR</button></h2>
			<script>
				function printDiv(divName) {
					var printContents = document.getElementById(divName).innerHTML;
					var originalContents = document.body.innerHTML;
					document.body.innerHTML = printContents;
					window.print();
					document.body.innerHTML = originalContents;
				}
			</script>
			<div id="printMe" style="display: flex; flex-wrap: wrap;">
				<?php foreach ($pets as $petqr) : ?>
					<div class="qr">
						<table>
							<tr>
								<td>
									<?php $url = 'https://api.qrserver.com/v1/create-qr-code/?data=' . home_url() . '/mascotas/' . $petqr['slug'] . '&amp;size=' . $_POST['size']; ?>
									<img src="<?= $url; ?>">
								</td>
							</tr>
							<tr>
								<td><?php echo  $petqr['slug']; ?></td>
							</tr>
						</table>
					</div>
					<style>
						.qr {
							display: flex;
							margin: 20px;
							text-align: center;
						}
					</style>
				<?php endforeach; ?>
			</div>
			<style>
				@media print {
				/* 	#adminmenumain {
						display: none;
					} */

					.noprint {
						display: none;
					}

					.printMe {
						width: 100vw;
						height: 100vh;
						position: absolute;
						top: 0;
						left: 0;
						height: auto;
						
					}

				}
			</style>
		</div>
	<?php endif; ?>
<?php
}
