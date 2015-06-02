<html>

<h1>
	Exemple
</h1>
<ul>

	@foreach($ejercicios as $ejercicio)
		<li>
			{{$ejercicio->id.' '.$ejercicio->desc}}
		</li>
	@endforeach
</ul>
</html>