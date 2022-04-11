
@extends('.layouts/main')
@section('content')
	@section('page_title')
		Criar produto
	@endsection
    <div class="mb-3 col-12">
		@if ($errors->any())
			<div class="alert alert-danger">
				<strong>Erro ao criar produto</strong> 
				<ul>
					@foreach ($errors->all() as $error)
						<li> {{ $error }} </li>
					@endforeach
				</ul>
			</div>
    	@endif
		<form method="POST" action="{{ route('products.store') }}" class="align-center">
			@csrf
			<div class="row m-2">
				<label for="title" class="form-label">Titulo</label>
				<input type="text" class="form-control" name="title" id="title" placeholder="Nome do produto" required>
			</div>
            <div class="row m-2">
				<label for="description" class="form-label">descricao</label>
				<textarea type="text" class="form-control" name="description" id="description" placeholder="descricao"></textarea>
			</div>
            <div class="row m-2">
				<label for="image" class="form-label">imagem</label>
				<input type="file" class="form-control" name="image" id="image" placeholder="imagem" accept="image/png, image/jpeg" required>
			</div>
            <div class="row m-2">
				<label for="stock" class="form-label">estoque</label>
				<input type="number" class="form-control" name="stock" id="stock" placeholder="estoque" required>
			</div>
			<div class="row m-2 p-3">
				<button type="submit" class="btn btn-warning">
					Salvar
				</button>
			</div>
		</form>
	</div>

@endsection
