<x-layout title="Nova Série">

    <form action="{{ route('series.store') }}" method="post">
        @csrf
    
        <div class="row mb-3">
            <div class="col-8">
                
                <label for="nome" class="form-label">Nome:</label>
                <input type="text"
                    autofocus
                    id="nome"
                    name="nome"
                    class="form-control"
                    value="{{ old('nome') }}">
            </div>

            <div class="col-2">
                <label for="seasonsQty" class="form-label">N Temporadas:</label>
                <input type="text"
                    id="seasonsQty"
                    name="seasonsQty"
                    class="form-control"
                    value="{{ old('seasonsQty') }}">
            </div>

            <div class="col-2">
                <label for="episodePerSeason" class="form-label">Ep / Temporada:</label>
                <input type="text"
                    id="episodePerSeason"
                    name="episodePerSeason"
                    class="form-control"
                    value="{{ old('episodePerSeason') }}">
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
    
</x-layout>
