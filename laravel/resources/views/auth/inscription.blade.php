@extends("layouts.default")
@section("title","Inscription")
@section("content")
@endsection

<?php ?>
<main class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Inscription</h3>
                    <div class="card-body">
                        <form method="POST" action="{{route("connection.Post")}}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Nom"
                                       id="nom" class="form-control" name="nom"
                                       required autofocus>
                                @if ($errors->has('nom'))
                                    <span class="text-danger">
                                {{ $errors->first('nom') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="prenom"
                                       id="prenom" class="form-control" name="prenom"
                                       required autofocus>
                                @if ($errors->has('prenom'))
                                    <span class="text-danger">
                                {{ $errors->first('prenom') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email"
                                       id="email" class="form-control" name="email"
                                       required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">
                                {{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Mdp"
                                       id="mdp" class="form-control" name="mdp"
                                       required autofocus>
                                @if ($errors->has('mdp'))
                                    <span class="text-danger">
                                {{ $errors->first('mdp') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                            <label for="fonction-select"></label>
                            <select name="fonction" id="fonction-select">
                                <option value="">--Fonction--</option>
                                <option value="Professeur">Professeur</option>
                                <option value="Eleve">Elève</option>
                                <option value="AncientEleve">EleveAllumni</option>
                                <option value="Entreprise">Entreprise</option>
                                <option value="Professeur">Professeur</option>
                            </select>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit"
                                        class="btn btn-dark btn-block">Inscription</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>



