<html>

<h1>
	Exemple
</h1>
<ul>

	@foreach($acciones as $accion)
		<li>
			{{$accion->id.' '.$accion->desc}}
		</li>
	@endforeach
</ul>
</html>