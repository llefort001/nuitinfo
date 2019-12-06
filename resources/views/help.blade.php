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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
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

    @isset($response)
        {{$response}}
    @endisset

    @empty($response)
        <form action="{{route("postHelpForm")}}" method="post" class="form-example">
            @csrf
            <div class="form-group">
                <div class="banner">
                    <h1>Questionnaire</h1>
                </div>
                <br/>
                <p>Essayez de répondre avec le moins de retenu possible</p>
                <br/>
                <div class="item">
                    <label for="id">ID étudiant<span>*</span></label>
                    <input class="form-control input-sm col-lg-2" id="id" type="text"   name="id" required/>
                </div>
                <div class="item">
                    <label for="name">Nom<span>*</span></label>
                    <input class="form-control input-sm col-lg-2" id="name" type="text" name="name"required />
                </div>
                <div class="item ">
                    <label for="prenom">Prénom<span>*</span></label>
                    <input class="form-control input-sm col-lg-2" id="input-sm" type="text"   name="prenom" required/>
                </div>
                <div class="item">
                    <label for="phone">Téléphone<span></span></label>
                    <input class="form-control col-lg-2" id="phone" type="tel"   name="phone"/>
                </div>
                <br>
                <div class="question">
                    <label>Avez-vous des difficultés à réaliser vos demandes APL/bourses ?</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label class="form-control" for="radio_15" class="radio"><span>Oui</span></label>
                        </div>
                        <div>
                            <input  class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Non</span></label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="question">
                    <label>Avez-vous des problèmes financiers ?</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label class="form-control" for="radio_15" class="radio"><span>Oui</span></label>
                        </div>
                        <div>
                            <input   class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Non</span></label>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div>
                            <input class="form-control" type="checkbox" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Avez-vous des difficultés à payer votre loyer ?</span></label>
                        </div>
                        <div>
                            <input class="form-control" type="checkbox" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Avez-vous des difficultés à payer les transports ?</span></label>
                        </div>
                        <div>
                            <input class="form-control"  type="checkbox" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Avez-vous des difficultés à vous acheter à manger ?</span></label>
                        </div>
                        <div>
                            <input class="form-control"  type="checkbox" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Avez-vous des difficultés à réaliser des dépenses de loisirs</span></label>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <label>Avez-vous du mal à réaliser les demandes de logement au crous?</label>
                    <div class="question-answer row">
                        <div >
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label class="form-control" for="radio_15" class="radio"><span>Oui</span></label>
                        </div>
                        <div class="offset-lg-1">
                            <input class="form-control"  type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Non</span></label>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <label>Combien vous reste t-il après vos dépenses obligatoires ?</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label class="form-control" for="radio_15" class="radio"><span>En dessous de -10€</span></label>
                        </div>
                        <div>
                            <input class="form-control"  type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Entre 0 et 10€</span></label>
                        </div>
                        <div>
                            <input class="form-control"  type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Entre 10 et 50€</span></label>
                        </div>
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control"  for="radio_16" class="radio"><span>Entre 50 et 100€</span></label>
                        </div>
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Plus de 100€</span></label>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <label>Vous sentez vous dépassé par les demandes réalisées ?</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label class="form-control" for="radio_15" class="radio"><span>Oui</span></label>
                        </div>
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Non</span></label>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <label>Quelle est votre état mental compte tenu des demandes à réaliser ?</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label class="form-control" for="radio_15" class="radio"><span>Très mauvaise</span></label>
                        </div>
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Mauvaise</span></label>
                        </div>
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Bonne <span></label>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <label for="visit">Dites nous en plus :</label>
                    <br>
                    <textarea class="col-lg-7" id="visit" rows="3"></textarea>
                </div>
                <br>
                <h2>Problèmes personnels</h2>
                <div class="question">
                    <label>Quelle est votre état mental compte tenu des demandes à réaliser ?</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label class="form-control" for="radio_15" class="radio"><span>Très mauvais</span></label>
                        </div>
                        <div>
                            <input class="form-control"  type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Mauvais</span></label>
                        </div>
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Bon <span></label>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <label>Vous sentez-vous en forme physiquement ?</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label class="form-control" for="radio_15" class="radio"><span>Oui</span></label>
                        </div>
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Non</span></label>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <label>Notez votre motivation de 1 à 10</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="number" name="quantity" min="1" max="10" />

                        </div>
                    </div>
                </div>
                <div class="question">
                    <label>Ressentez-vous une pression sociale familiale ou étudiante ?</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label class="form-control" for="radio_15" class="radio"><span>Tout le temps</span></label>
                        </div>
                        <div>
                            <input class="form-control"  type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Souvent</span></label>
                        </div>
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>De temps en temps <span></label>
                        </div>
                        <div>
                            <input class="form-control"  type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Jamais <span></label>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <label>Ressentez vous des difficultés scolaires ?</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label class="form-control" for="radio_15" class="radio"><span>Très mauvaise</span></label>
                        </div>
                        <div>
                            <input class="form-control"  type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Mauvaise</span></label>
                        </div>
                        <div>
                            <input  class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Bonne <span></label>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <label>Vous sentez vous en danger ?</label>
                    <div class="question-answer row">
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                            <label  class="form-control" for="radio_15" class="radio"><span>Oui</span></label>
                        </div>
                        <div>
                            <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                            <label class="form-control" for="radio_16" class="radio"><span>Non</span></label>
                        </div>
                    </div>

                    <div class="question">
                        <label>Pensez-vous avoir besoin de consulter un psychologue rapidement ?</label>
                        <div class="question-answer row">
                            <div>
                                <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                                <label class="form-control" for="radio_15" class="radio"><span>Oui</span></label>
                            </div>
                            <div>
                                <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                                <label class="form-control" for="radio_16" class="radio"><span>Non</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="question">
                        <label>Vous sentez-vous triste ?</label>
                        <div class="question-answer row">
                            <div>
                                <input class="form-control" type="radio" value="none" id="radio_15" name="contact"/>
                                <label class="form-control" for="radio_15" class="radio"><span>Tout le temps</span></label>
                            </div>
                            <div>
                                <input class="form-control"  type="radio" value="none" id="radio_16" name="contact"/>
                                <label class="form-control" for="radio_16" class="radio"><span>Souvent</span></label>
                            </div>
                            <div>
                                <input class="form-control" type="radio" value="none" id="radio_16" name="contact"/>
                                <label class="form-control" for="radio_16" class="radio"><span>De temps en temps <span></label>
                            </div>
                            <div>
                                <input class="form-control"  type="radio" value="none" id="radio_16" name="contact"/>
                                <label class="form-control" for="radio_16" class="radio"><span>Jamais<span></label>
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class="item">
                        <label for="visit">Dites nous en plus :</label>
                        <br>
                        <textarea class="col-lg-7" id="visit" rows="3"></textarea>
                    </div>
                </div>
                <input type="submit" value="Envoyer le formulaire">
            </div>
        </form>
    @endempty
@endsection
