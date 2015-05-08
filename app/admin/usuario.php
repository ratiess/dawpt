<?php

Admin::model('\usuario')->title('Usuarios')->columns(function ()
{
	Column::string('email', 'Email');
	Column::string('dni', 'DNI');
	Column::string('nombre', 'Nombre');
	Column::string('apellidos', 'Apellidos');
	Column::string('password', 'Contraseña');

})->form(function ()
{	
	FormItem::text('email', 'Email');
	FormItem::text('dni', 'DNI');
	FormItem::text('nombre', 'Nombre');
	FormItem::text('apellidos', 'Apellidos');
	FormItem::text('password', 'Contraseña');
});
