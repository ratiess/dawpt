<?php

Admin::model('\accione')->title('Acciones')->columns(function ()
{
	Column::string('desc', 'Descripción');
	Column::string('series', 'Series');
	Column::string('rep', 'Repeticiones');
	Column::string('dias', 'Dias');
	Column::string('rutinasrec.desc', 'Rutinas_Recomendadas');
	Column::string('rutina.desc', 'Rutinas');

})->form(function ()
{
	FormItem::text('desc', 'Descripción');
	FormItem::text('series', 'Series');
	FormItem::text('rep', 'Repeticiones');
	FormItem::text('dias', 'Dias');
	FormItem::select('rutinasrec_id', 'Rutinas_Recomendadas')->list('\rutinasrec');
	FormItem::select('rutinas_id', 'Rutinas')->list('\rutina');


});
