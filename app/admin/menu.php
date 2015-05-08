<?php
/*
 * Describe your menu here.
*/
 
Admin::menu()->url('/')->label('Home')->icon('fa-dashboard')->uses('\SleepingOwl\Admin\Controllers\DummyController@getIndex');
Admin::menu()->label('Menu')->icon('fa-book')->items(function (){

Admin::menu('\accione');
Admin::menu('\alimento');
Admin::menu('\dieta');
Admin::menu('\dietasrec');
Admin::menu('\rutina');
Admin::menu('\rutinasrec');
Admin::menu('\imc');
Admin::menu('\usuario');

});





