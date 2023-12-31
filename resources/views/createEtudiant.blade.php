@extends('layouts.master')

@section('contenu')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-2">Ajout nouvel étudiant</h3>
        <div class="mt-4">
            <form style="width: 65%;" method="post" action="{{route('etudiant.ajouter')}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nom de l'étudiant</label>
                  <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Prenom de l'étudiant</label>
                  <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Classe</label>
                    <select class="form-control">
                        <option value=""></option>
                        @foreach ($classes as $classe )
                            <option value="{{$classe->id}}">{{$classe->libelle}}</option>
                        @endforeach
                      </select>
                  </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="{{route('etudiant')}}" class="btn btn-danger">Annuler</a>
            </form>
        </div>
    </div>
@endsection
