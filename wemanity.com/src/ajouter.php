<?php 
require('entete.php');
?>
    <article>
        <main class="container">
            <div class="add-candidature">
                <h1 class="head-one">
                   Offres d'Emploi
                </h1>
                <div>
                    <?php
                        if(isset($_POST['submit'])){
                            $query = new Query();
                            $values = array(
                                'fullname' => $database->escape_string($_POST['name']), 
                                'email' => $database->escape_string( $_POST['email']), 
                                'category' =>  $database->escape_string($_POST['cat']), 
                                'city' =>  $database->escape_string($_POST['city']), 
                                'curriculumVitae' =>  $database->escape_string($_FILES['cv']['tmp_name']), 
                                'body' =>  $database->escape_string($_POST['desc'])
                            );
                            if($query->insert($values)){
                                echo '<div class="container alert-success">Candidature ajoutée avec succés.</div>';
                            }else{
                                echo '<div class="container alert-danger">Une erreur est survenue réessayer plutard!</div>';
                            }
                        }
                    ?>
                    <form method="post" action="ajouter.php">
                        <div class="form-group">
                            <label for="name" sr-only="">Nom & Prénom*
                            </label>
                            <input type="text" name="name" placeholder="Nom & Prénom" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" sr-only="">Email*
                            </label>
                            <input type="email" name="email" required="" placeholder="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cat" sr-only="">Catégorie*
                            </label>
                            <select name="cat" id="cat" class="form-control" required="">
                                <option disabled="" selected="">Séléctionner une catégorie</option>
                                <option value="SM">Scrum Master</option>
                                <option value="analyste">Analyste</option>
                                <option value="developpeur">Développeur</option>
                                <option value="TM">Team leader</option>
                                <option value="testeur">Testeur</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city" sr-only="">Ville*
                            </label>
                            <select name="city" id="city" class="form-control" required="">
                                <option disabled="" selected="">Séléctionner une ville</option>
                                <option value="meknes">Meknes</option>
                                <option value="rabat">Rabat</option>
                                <option value="casablanca">Casablanca</option>
                                <option value="tanger">Tanger</option>
                                <option value="fes">Fes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cv" sr-only="">Curriculum Vitae*
                            </label>
                            <input type="file" name="cv" required="" placeholder="curriculumVitae" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="desc" sr-only="">Description*
                            </label>
                            <textarea name="desc" id="" cols="30" required="" rows="10" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn-primary" value="Valider">
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </article>
<?php require('footer.php');?>