@extends('layouts.admin')
@section('content')

<div class="container">

    <h1 style="text-align: center, mb-5, mt-5">Liste des articles</h1>
    <table class="table  w-100 table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Artiste</th>
                <th>Annee de fabrication</th>
                <th>Date d'acquisistion</th>
                <th>Prix estimé</th>
                <th  style="width: 20rem" >Description</th>
                <th>Photo</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($oeuvres as $oeuvre)
                <tr>
                    <td>{{ $oeuvre->titre }}</td>
                    <td>{{ $oeuvre->artiste }}</td>
                    <td>{{ $oeuvre->annee_fabrication }}</td>
                    <td>{{ $oeuvre->date_d_acquisition }}</td>
                    <td>{{ $oeuvre->prix_estimé }}</td>
                    <td class="text-nowrap">{{oeuvre->description }}</td>
                    <td>{{ $oeuvre->photo }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('admin.oeuvres.modifier', $categorie->id) }}" class=" btn btn-primary">Modifier</a>
                        <form action="{{ route('admin.oeuvres.supprimer', $categorie->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette categorie ?');">
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
