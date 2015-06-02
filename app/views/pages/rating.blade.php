<html>

<h1>
	Exemple
</h1>
<ul>

<<<<<<< HEAD
	@foreach($ejercicios as $ejercicio)
		<li>
			{{$ejercicio->id.' '.$ejercicio->desc}}
=======
	@foreach($acciones as $accion)
		<li>
			{{$accion->id.' '.$accion->desc}}
>>>>>>> origin/master
		</li>
	@endforeach
</ul>
</html>