
<form method='post' action="?menu=<?php echo $datos['controlador_clase']; ?>&submenu=validar_<?php echo $datos['controlador_metodo']; ?>" >
	<input id='id' name='id' type='hidden' value='<?php echo \core\Array_Datos::values('id', $datos); ?>' />
	Categoría: <select id='album' name='album' />
		<?php 
			if (\core\Distribuidor::get_metodo_invocado() == "form_insertar") {
				echo "<option >Elige una categría</option>\n";
			}
			foreach ($datos['discos'] as $disco) {
				$selected = (\core\Array_Datos::values('album', $datos) == $disco['nombre']) ? " selected='selected' " : "";
				echo "<option $selected>{$disco['nombre']}</option>\n";
			}
		?>
	</select>
	<?php echo \core\HTML_Tag::span_error('album', $datos); ?>
	<br />
	Artista: <input id='artista' name='artista' type='text' size='100'  maxlength='100' value='<?php echo \core\Array_Datos::values('artista', $datos); ?>'/>
	<?php echo \core\HTML_Tag::span_error('artista', $datos); ?>
	<br />
	Precio: <input id='precio' name='precio' type='text' size='20'  maxlength='20' value='<?php echo \core\Array_Datos::values('precio', $datos); ?>'/>
	<?php echo \core\HTML_Tag::span_error('precio', $datos); ?>
	<br />
	Fecha de lanzamiento: <input id='fecha_lanzamiento' name='fecha_lanzamiento' type='text' size='20'  maxlength='20' value='<?php echo \core\Array_Datos::values('fecha_lanzamiento', $datos); ?>'/>
	<?php echo \core\HTML_Tag::span_error('fecha_lanzamiento', $datos); ?>
	<br />
	<?php echo \core\HTML_Tag::span_error('errores_validacion', $datos); ?>
	
	<input type='submit' value='Enviar'>
	<input type='reset' value='Limpiar'>
	<button type='button' onclick='location.assign("?menu=articulos&submenu=index");'>Cancelar</button>
</form>
