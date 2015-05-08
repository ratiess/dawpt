<?php

Admin::model('\dieta')->title('Dietas')->columns(function ()
{
	Column::string('desc', 'Descripción');
	Column::string('votos', 'Votos');
	Column::string('nota', 'Nota');
	Column::string('siguiendo', 'Siguiendo');
	Column::string('clase', 'Objetivo');
	Column::string('usuario.dni', 'Usuarios');
	Column::string('dietasrec.desc', 'Descripción_Dieta');

})->form(function ()
{
	FormItem::text('desc', 'Descripción');
	FormItem::text('votos', 'Votos');
	FormItem::text('nota', 'Nota');
	FormItem::text('siguiendo', 'Siguiendo');
	FormItem::text('clase', 'Objetivo');
	FormItem::select('usuarios_id', 'Usuarios')->list('\usuario')->required();
	FormItem::select('dietasrec_id', 'Descripción_Dieta')->list('\dietasrec')->required();
});
