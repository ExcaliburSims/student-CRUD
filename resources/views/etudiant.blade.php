@extends('layouts.master')

@section('contenu')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-2">Liste des étudiants inscrits</h3>
        <div class="d-flex justify-content-between mb-2">
            {{$etudiants ->links()}}
            <div>
                <a href="{{route('etudiant.create')}}" class="btn btn-primary">Ajouter un nouvel étudiant</a>
            </div>
        </div>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etudiant)
                    <tr>
                        <th scope="row">{{ $loop ->index + 1 }}</th>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->classe ->libelle }}</td>
                        <td>
                            <a href="#" class="btn btn-info">Editer</a>
                            <a href="#" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
