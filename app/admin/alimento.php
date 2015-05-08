<?php

Admin::model('\alimento')->title('Alimentos')->columns(function ()
{
	Column::string('desc', 'Descripción');
	Column::string('dieta.desc', 'Dieta');
	Column::string('dietasrec.desc', 'Dieta_Recomendada');
	
	
})->form(function ()
{
	FormItem::text('desc', 'Descripción');
	FormItem::select('dietas_id', 'Dieta')->list('\dieta');
	FormItem::select('dietasrec_id', 'Descripción_Dieta')->list('\dietasrec');

});