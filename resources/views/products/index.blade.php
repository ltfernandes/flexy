
@extends('.layouts/main')
@section('content')
	@section('page_title')
		Produtos
	@endsection
	<div class="col-xs-12 col-sm-12 col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Titulo</th>
					<th scope="col">Descricao</th>
					<th scope="col">Imagem</th>
					<th scope="col">Estoque</th>
					<th scope="col"></th>
				</tr>
			</thead>
			@foreach ($products as $product)
			<tbody>
				<tr>
					<th scope="row">{{ $product->id }}</th>
					<td>{{ $product->title }}</td>
					<td>{{ $product->description }}</td>
					<td>{{ $product->image }}</td>
					<td>{{ $product->stock }}</td>
					<td><a href="/products/{{ $product->id }}">Editar</a></td>
				</tr>
			@endforeach
		</table>
	</div>

@endsection
