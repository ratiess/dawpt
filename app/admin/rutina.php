<?php

Admin::model('\rutina')->title('Rutinas')->columns(function ()
{
	Column::string('nota', 'Nota');
	Column::string('votos', 'Votos');
	Column::string('desc', 'Desc');
	Column::string('siguiendo', 'Siguiendo');
	Column::string('clase', 'Clase');
	Column::string('usuario.dni', 'Usuarios');

})->form(function ()
{
	FormItem::text('nota', 'Nota');
	FormItem::text('votos', 'Votos');
	FormItem::text('desc', 'Desc');
	FormItem::text('siguiendo', 'Siguiendo');
	FormItem::text('clase', 'Clase');
	FormItem::select('usuarios_id', 'Usuarios')->list('\usuario');
});
