<div>
	<h1>Listado de categorias</h1>
	<p>
		<a href='?menu=articulos&submenu=listado_js' title='Devuelve objeto json con una propiedad que contiene un array'>Listado en json</a> - 
		<a href='?menu=articulos&submenu=listado_js_array&nombre=a'  title='Devuelve un array que contiene objetos json'>Listado en json con array de articulos que contiene "a" en su nombre</a> - 
		<a href='?menu=articulos&submenu=listado_xml'>Listado en xml</a> - 
		<a href='?menu=articulos&submenu=listado_xls'>Descargar Listado en excel (.xls)</a>
		 - 
		<a href='?menu=articulos&submenu=listado_pdf'>Descargar pdf</a>
	</p>
	<table border='1'>
		<thead>
			<tr>
				<th>nombre</th>
				<th>descripcion</th>
				<th>acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($datos['filas'] as $fila)
			{
				echo "
					<tr>
						<td>{$fila['nombre']}</td>
						<td>{$fila['descripcion']}</td>
						<td>
					".\core\HTML_Tag::a_boton("boton", array("categorias", "form_modificar", $fila['id']), "modificar")
//							<a class='boton' href='?menu={$datos['controlador_clase']}&submenu=form_modificar&id={$fila['id']}' >modificar</a>
					.\core\HTML_Tag::a_boton("boton", array("categorias", "form_borrar", $fila['id']), "borrar").
//							<a class='boton' href='?menu={$datos['controlador_clase']}&submenu=form_borrar&id={$fila['id']}' >borrar</a>
						"</td>
					</tr>
					";
			}
			echo "
				<tr>
					<td colspan='2'></td>
						<td>"
			.\core\HTML_Tag::a_boton("boton", array("categorias", "form_insertar"), "insertar").
					"</td>
				</tr>
			";
			?>
		</tbody>
	</table>
</div>