@extends('layouts.admin')
@section('content')

<div class="container">

    <h1 style="text-align: center, mb-5, mt-5">Liste des articles</h1>
    <table class="table  w-100 table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th  style="width: 20rem" >Description</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie)
                <tr>
                    <td>{{ $categorie->nom }}</td>
                    <td class="text-nowrap">{{$categorie->description }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('admin.categories.modifier', $categorie->id) }}" class=" btn btn-primary">Modifier</a>
                        <form action="{{ route('admin.categories.supprimer', $categorie->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette categorie ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
