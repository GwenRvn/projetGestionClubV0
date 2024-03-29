@extends("layout.master")
@section('title')
   Contact
@endsection
@section('content')
<div class="container-fluid py-2 d-flex align-items-center" style="min-height: 100vh">
        <div class="row">
            <div class="col-lg-6 bg-white m-3">
                <h1 style="text-align: center; font-size: 50px; margin-top: 80px; margin-bottom: 80px"><strong>Ia ora na, vous souhaitez nous contacter ?</strong></h1>
                <h2 style="font-size: 25px; margin-left: 250px; margin-bottom: 20px"><strong>Nos contacts téléphoniques :</strong></h2>
                    <p style="font-size: 15px; margin-left: 290px; margin-bottom: 10px">Polynésie française : (+689)  87 78 78 98</p>
                    <p style="font-size: 15px; margin-left: 275px; margin-bottom: 45px">France métropolitaine : (+33) 06 21 54 65 32</p>
                <h2 style="font-size: 25px; margin-left: 295px; margin-bottom: 20px"><strong>Notre adresse mail :</strong></h2>
                    <p style="font-size: 15px; margin-left: 330px; margin-bottom: 45px">lyceedudiademe@gmail.com</p>
            </div>

            <div class="col-lg-5 bg-white m-3" style="background: radial-gradient(circle, rgba(10,180,170,20) 0%, rgba(0,71,102,1) 100%); margin: auto 20%; border-radius: 2em;">

                <div class="container">

                    <div class="row mx-auto">

                        <div class="col-xl-12 offset-xl-2 py-5 m-0">

                            <h1 class="mb-lg-5 mb-md-5 mb-sm-5 text-white">Demande d'informations</h1>


                            <form id="contact-form" method="post" action="contact.php" role="form">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group text-white">
                                                <label for="form_name">Nom *</label>
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Veuillez entrer votre nom *" required="required" data-error="Votre nom est obligatoire.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-white">
                                                <!--Champ prénom-->
                                                <label for="form_lastname">Prénom *</label>
                                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Veuillez entre votre prénom *" required="required" data-error="Votre prénom est obligatoire.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group text-white">
                                                <!--Champ e-mail-->
                                                <label for="form_email">Email *</label>
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Veuillez entrer votre email *" required="required" data-error="Un email valid est obligatoire.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-white">
                                                <!--Champ téléphone-->
                                                <label for="form_tel">Numéro de téléphone</label>
                                                <input id="form_tel" type="tel" name="tel" class="form-control" placeholder="Veuillez entrer votre numéro de téléphone">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group text-white">
                                                <!--Champ message-->
                                                <label for="form_message">Message *</label>
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Votre Message *" rows="4" required="required" data-error="Veuillez remplir le champ Message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <!--Bouton envoyer-->
                                            <input type="submit" class="btn btn-success btn-send mb-md-3" value="Envoyer">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-white">
                                            <p>
                                                <!--Commentaire de précision-->
                                                <strong>*</strong> Ces champs sont obligatoires.</p>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <!-- /.8 -->

                    </div>
                    <!-- /.row-->

                </div>
                <!-- /.container-->

            </div>
        </div>
    </div>
@endsection
