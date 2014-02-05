
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
	Nombre: <input id='nombre' name='nombre' type='text' size='100'  maxlength='100' value='<?php echo \core\Array_Datos::values('nombre', $datos); ?>'/>
	<?php echo \core\HTML_Tag::span_error('nombre', $datos); ?>
	<br />
	Precio: <input id='precio' name='precio' type='text' size='20'  maxlength='20' value='<?php echo \core\Array_Datos::values('precio', $datos); ?>'/>
	<?php echo \core\HTML_Tag::span_error('precio', $datos); ?>
	<br />
	Unidades en Stock: <input id='unidades_stock' name='unidades_stock' type='text' size='20'  maxlength='20' value='<?php echo \core\Array_Datos::values('unidades_stock', $datos); ?>'/>
	<?php echo \core\HTML_Tag::span_error('unidades_stock', $datos); ?>
	<br />
	<?php echo \core\HTML_Tag::span_error('errores_validacion', $datos); ?>
	
	<input type='submit' value='Enviar'>
	<input type='reset' value='Limpiar'>
	<button type='button' onclick='location.assign("?menu=articulos&submenu=index");'>Cancelar</button>
</form>
