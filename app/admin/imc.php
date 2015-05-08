<?php

Admin::model('\imc')->title('IMC')->columns(function ()
{
	Column::string('numero', 'Numero');
	Column::string('texto', 'Texto');

})->form(function ()
{
	FormItem::text('numero', 'Numero');
	FormItem::text('texto', 'Texto');
});
