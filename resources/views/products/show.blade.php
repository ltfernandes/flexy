@extends('layouts.main')
@section('content')
    @section('page_title')
        Ver produto
    @endsection

    <div class="mb-3 col-xs-12 col-sm-12 col-md-12">
		<form method="POST" action="{{ route('products.update', $product->id) }}" class="align-center">
            @method("PUT")
			@csrf
			<div class="row m-2">
				<label for="title" class="form-label">Titulo</label>
				<input type="text" class="form-control" name="title" id="title" value="{{ $product->title }}">
			</div>
			
            <div class="row m-2">
				<label for="description" class="form-label">descricao</label>
				<textarea type="text" class="form-control" name="description" id="description">{{ $product->description }}</textarea>
			</div>
			
            <div class="row m-2">
				<label for="image" class="form-label">imagem</label>
				<input type="file" class="form-control" name="image" id="image" accept="image/png, image/jpeg" value="{{ $product->image }}">
			</div>
			
            <div class="row m-2">
				<label for="stock" class="form-label">estoque</label>
				<input type="number" class="form-control" name="stock" id="stock" value="{{ $product->stock }}">
			</div>
			<div class="row m-2 p-3">
                <div class="col-6">
                    <button type="submit" class="btn btn-warning">
                        Salvar alteraçoes
                    </button>
                </div>
			</div>
		</form>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
            @method("DELETE")
			@csrf
			<div class="row m-2 p-3">
                <div class="col-6">
                    <button type="submit" class="btn btn-danger">
                        Excluir produto
                    </button>
                </div>
            </div>
        </form>
	</div>

@endsection
