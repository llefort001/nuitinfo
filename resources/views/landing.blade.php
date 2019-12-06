@extends('layouts.nomenu', ['page' => __('Landing')])



@section('content')
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container" >
            <a class="navbar-brand" href="#">need</a>
            <button class="navbar-toggler"   type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Need c'est quoi ? <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://mes-aides.gouv.fr/">Vérifies tes droits </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Echange</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("aide")}}">Aide</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="row">
        <div class="video_pres col-lg-8 offset-2">
            <video controls width="100%" src="{{ asset('/videos/VIRTUAL RECRUIT.mp4') }}">

            </video>
        </div>
    </div>
    <div class="row">
        <div class="text_presentation col-xs-12 col-md-6 col-lg-4 offset-md-1">
            <h2 class="alert alert-success" role="alert">NEED</h2>
            <p>Créé à l’aube 2018, Need est un service d’aide pour les étudiants de toutes les universités & écoles privées françaises. Alors que la précarité étudiante cristallisait les débats depuis plusieurs mois, l’équipe de Need se devait de proposer une solution durable.
                <br> <br>
                L’objectif est de simplifier et dédramatiser les démarches administratives liées à la création de dossiers d’aide. Notre équipe se compose d’un groupe d’anciens étudiants qui souhaitaient s’engager contre les problèmes de précarités étudiante. Nos expériences personnelles nous permettent de nous placer en tant que premiers médiateurs entre les étudiants et les services de prestations sociales…
                <br><br>
                À travers un algorithme de classification des profils, notre système hiérarchise et priorise les demandes. D’un côté, les profils précaires bénéficieront d’une aide automatisée. De l’autre, les profils jugés en situation de précarité urgente bénéficieront d’un système d’alerte qui s’accompagnera d’une mise en relation directe les services d’aides sociales.
            </p>
        </div>
        <div class="image_presentation col-xs-12 col-md-6 col-lg-4 offset-md-2">
            <img src="{{ asset('/images/VIRTUAL RECRUIT_Plan de travail 1-01.png')}}" alt="Image de presentation de NEED">
        </div>
    </div>
    <div class="row">
        <div class="verif col-xs-12 offset-md-4 col-md-4">
            <h2 class="alert alert-info" role="alert">Vérifies tes droits</h2>
        </div>
    </div>
    <div class="row">
        <div class="valeurs col-lg-8 offset-md-2">
            <h2 class="alert alert-success" role="alert">Nos valeurs</h2>
            <p>Lors de leurs différents parcours scolaires, les 6 fondateurs de Need ont rencontrés des problématiques communes.
                <br><br>
                En effet certains avaient des difficultés à financer leurs études et n’avaient aucune idée des aides adaptées à leurs situations.
                Pendant que d’autres avaient des difficultés à effectuer les longues démarches administratives nécessaires pour l’obtention de leurs aides.
                <br><br>
                Ils ont alors décidé de créer Need afin que les étudiants actuels et les futurs puissent profiter d’une plateforme, simple rapide et efficace !
            </p>
        </div>
    </div>
    <div class="row">
        <div class="partenaire_title col-xs-12 offset-md-4 col-md-4">
            <h2 class="alert alert-info" role="alert">Nos partenaires</h2>
        </div>
    </div>
    <div class="row">
        <div class="partenaire col-xs-12 col-md-6 col-lg-2 offset-md-1">
            <img src="" alt="Partenaire 1">
        </div>
        <div class="partenaire col-xs-12 col-md-6 col-lg-2 offset-lg-1">
            <img src="" alt="Partenaire 2">
        </div>
        <div class="partenaire col-xs-12 col-md-6 col-lg-2 offset-lg-1">
            <img src="" alt="Partenaire 3">
        </div>
        <div class="partenaire col-xs-12 col-md-6 col-lg-2 offset-lg-1">
            <img src="" alt="Partenaire 4">
        </div>
    </div>
    <div class="row">
        <div class="find_us col-xs-12 offset-md-4 col-md-4">
            <h2 class="alert alert-info" role="alert">Nous trouver</h2>
        </div>
    </div>
    <div class="row">
        <div class="informations_to_find col-xs-12 col-md-6 col-lg-4 offset-md-1">
            <h2 class="alert alert-success" role="alert">Localisation</h2>
            <p>
                351 Cours de la Liberation <br><br> 33400 Talence
            </p>
        </div>
        <div class="map_to_find_us col-xs-12 col-md-6 col-lg-4 offset-md-2">
            <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2710.207049454749!2d-1.5729033!3d47.2125309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ec0fcda6c4cb%3A0xd620ca38dafa1e9a!2s2+Rue+La+Motte+Picquet%2C+44100+Nantes!5e0!3m2!1sfr!2sfr!4v1423244007186" width="600" height="450" frameborder="0"></iframe>

        </div>
    </div>
    <script type="text/javascript"
            id="botcopy-embedder-d7lcfheammjct"
            class="botcopy-embedder-d7lcfheammjct"
            data-botId="5de9f22a2d639aaf3c0e9b20"
    >
        var s = document.createElement('script');
        s.type = 'text/javascript'; s.async = true;
        s.src = 'https://widget.botcopy.com/js/injection.js';
        document.getElementById('botcopy-embedder-d7lcfheammjct').appendChild(s);
    </script>
@endsection
