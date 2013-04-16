<div class="grid_4">
	<div class="box"> 
		<h2> 
			<a id="toggle-infocadastro">Informações</a> 
		</h2> 
		<div class="block" id="infocadastro"> 
			<p></p> 
		</div> 
	</div>
</div>
<?php if ($metas != 0): ?>
<div class="grid_12">
	<div class="box">
		<h2>
			<a href="#" id="toggle-tables">POSTOS</a>
		</h2>
		<div class="block" id="tables">

			<table class="list" width="100%" cellpadding="0" cellspacing="0" border="0">
				<col /><col /><col />
				<thead>
				<tr class="heading">
					<td class="h" title="Name">REGIÃO</td>
					<td class="h" title="Name">META</td>
					<td class="h" title="Name">TRANSPORTADAS</td>
					<td class="h" title="Name">FALTAM</td>
					<td class="h" title="Name">PERCENTUAL</td>
				</tr>
				</thead>
				<tbody>
					<tr class="tr">
						<td>NORTE</td>
						<td><?php echo $metas['meta_norte']->metas_valor; ?></td>
						<td><?php echo $metas['norte']->total; ?></td>
						<td><?php echo $metas['meta_norte']->metas_valor - $metas['norte']->total; ?></td>
						<td><?php echo number_format((100 * $metas['norte']->total) / $metas['meta_norte']->metas_valor, 2, '.', '') . '%'; ?></td>
					</tr>

					<tr class="tr">
						<td>NORDESTE</td>
						<td><?php echo $metas['meta_nordeste']->metas_valor; ?></td>
						<td><?php echo $metas['nordeste']->total; ?></td>
						<td><?php echo $metas['meta_nordeste']->metas_valor - $metas['nordeste']->total; ?></td>
						<td><?php echo number_format((100 * $metas['nordeste']->total) / $metas['meta_nordeste']->metas_valor, 2, '.', '') . '%'; ?></td>
					</tr>

					<tr class="tr">
						<td>CENTRO-OESTE</td>
						<td><?php echo $metas['meta_centro_oeste']->metas_valor; ?></td>
						<td><?php echo $metas['centro_oeste']->total; ?></td>
						<td><?php echo $metas['meta_centro_oeste']->metas_valor - $metas['centro_oeste']->total; ?></td>
						<td><?php echo number_format((100 * $metas['centro_oeste']->total) / $metas['meta_centro_oeste']->metas_valor, 2, '.', '') . '%'; ?></td>
					</tr>

					<tr class="tr">
						<td>SUDESTE</td>
						<td><?php echo $metas['meta_sudeste']->metas_valor; ?></td>
						<td><?php echo $metas['sudeste']->total; ?></td>
						<td><?php echo $metas['meta_sudeste']->metas_valor - $metas['sudeste']->total; ?></td>
						<td><?php echo number_format((100 * $metas['sudeste']->total) / $metas['meta_sudeste']->metas_valor, 2, '.', '') . '%'; ?></td>
					</tr>

					<tr class="tr">
						<td>SUL</td>
						<td><?php echo $metas['meta_sul']->metas_valor; ?></td>
						<td><?php echo $metas['sul']->total; ?></td>
						<td><?php echo $metas['meta_sul']->metas_valor - $metas['sul']->total; ?></td>
						<td><?php echo number_format((100 * $metas['sul']->total) / $metas['meta_sul']->metas_valor, 2, '.', '') . '%'; ?></td>
					</tr>


				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- <div class="grid_12">
<P>REGIAO META FEITA % FALTA</P>
<p>NORTE | <?php echo $meta_norte->metas_valor; ?> | <?php echo $norte->total; ?> | <?php echo (100 * $norte->total) / $meta_norte->metas_valor. '%'; ?> | <?php echo $meta_norte->metas_valor - $norte->total; ?></p>
<p>NORDESTE | <?php echo $meta_nordeste->metas_valor; ?> | <?php echo $nordeste->total; ?> | <?php echo (100 * $nordeste->total) / $meta_nordeste->metas_valor. '%'; ?> | <?php echo $meta_nordeste->metas_valor - $nordeste->total; ?></p>
<p>CENTRO-OESTE | <?php echo $meta_centro_oeste->metas_valor; ?> | <?php echo $centro_oeste->total; ?> | <?php echo (100 * $centro_oeste->total) / $meta_centro_oeste->metas_valor. '%'; ?> | <?php echo $meta_centro_oeste->metas_valor - $sul->total; ?></p>
<p>SUDESTE | <?php echo $meta_sudeste->metas_valor; ?> | <?php echo $sudeste->total; ?> | <?php echo (100 * $sudeste->total) / $meta_sudeste->metas_valor. '%'; ?> | <?php echo $meta_sudeste->metas_valor - $sudeste->total; ?></p>
<p>SUL | <?php echo $meta_sul->metas_valor; ?> | <?php echo $sul->total; ?> | <?php echo (100 * $sul->total) / $meta_sul->metas_valor. '%'; ?> | <?php echo $meta_sul->metas_valor - $sul->total; ?></p>
</div> -->
<?php endif ?>