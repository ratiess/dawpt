<?php

Admin::model('\dietasrec')->title('Dietas Recomendadas')->columns(function ()
{
	Column::string('desc', 'desc');
	Column::string('clase', 'clase');
	Column::string('usuario.dni', 'Usuarios');
	Column::string('imc.numero', 'Imc');

})->form(function ()
{
	FormItem::text('desc', 'desc');
	FormItem::text('clase', 'clase');
	FormItem::select('usuarios_id', 'Usuarios')->list('\usuario');
	FormItem::select('imc_id', 'ID Imc')->list('\imc');
});
