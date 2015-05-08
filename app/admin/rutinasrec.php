<?php

Admin::model('\rutinasrec')->title('RutinasRecomendadas')->columns(function ()
{
	Column::string('desc', 'Descripcion');
	Column::string('clase', 'Clase');
	Column::string('usuario.dni', 'Usuarios');
	Column::string('imc.numero', 'Imc');


})->form(function ()
{
	FormItem::text('desc', 'Descripcion');
	FormItem::text('clase', 'Clase');
	FormItem::select('usuarios_id', 'Usuarios')->list('\usuario');
	FormItem::select('imc_id', 'ID Imc')->list('\imc');
});
