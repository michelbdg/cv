<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cv</title>
</head>
<body>
    <div class="container">
        <div class="bloc-1">
            <div class="coordonnees">
                <p>
                    <a href="mailto:bondongamichel@gmail.com">bondongamichel@gmail.com</a>
                </p>
                <p>
                    33 rue Carême Prenant<br>
                    22ans<br>
                    Permis B<br>
                    Véhicule personnel<br>
                    Argenteuil<br>
                    <i class="fa-solid fa-phone">0784780157</i>
                    <i class="bi bi-telephone-fill"></i>
                    
                </p>
            </div>
            <div class="langue">
                <h2>Langues</h2>
                <label for="progress">Anglais</label><br>
                <progress id="progress" max="100" value="30"></progress>
            </div>
            <div class="centre-interet">
                <h2>Centres d'intérêt</h2>
                <p>
                    <h4>Tennis de table</h4>
                    J'ai pratiqué durant 4 années (3ème départemental de l'Hérault).
                </p>
                <p>
                    <h4>Football</h4>
                    Je pratiques depuis l'âge de 10 ans.
                </p>
                <p>
                    <h4>Athlétisme</h4>
                    J'ai pratiqué durant 4 années (3ème départemental de l'Hérault).
                </p>
            </div>
            <div>
                <h2>Réseaux sociaux</h2>
                <ul>
                    <a href="https://www.linkedin.com/in/michel-bondonga-a25a41233"><li>Linkedin</li></a>
                    <a href="https://instagram.com/michelbdg?igshid=YmMyMTA2M2Y="><li>Instagram</li></a>
                </ul>
            </div>
            <div class="formulaire">
                <fieldset>
                    <legend>Contact</legend>
                    <form action="contact.php" method="post"><br>
                    <label for="entreprise">Entreprise</label><br>
                    <input type="text" name="entreprise" id="entreprise"><br>
                    <label for="name">Nom</label><br>
                    <input type="text" name="name" id="name"><br>
                    <label for="firstname">Prénom</label><br>
                    <input type="text" name="firstname" id="firstname"><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email"><br>
                    <label for="tel">Téléphone</label><br>
                    <input type="tel" name="tel" id="tel"><br>
                    <label for="message">Message</label><br>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea><br>  
                    <input type="submit" value="Envoyer">
                    </form>
                </fieldset>
            </div>
        </div>
        <div class="bloc-2">
            <h1>Michel-Marie Bondonga</h1>
            <h2>Recherche stage dans le développement web</h2>
            <div class="motivation">
                <p>
                    Pourquoi ? Afin de découvrir les aspects du métier de développeur web, de consolider mon idée de projet professionnel dans cette voie et acquérir de nouvelles compétences. Je suis motivé, persévérant et réactif. Au cours de ma précédente formation, j'ai pu développer des compétences solides en matière de langages informatiques. Je suis convaincu que mon parcours académique et mes compétences professionnelles font de moi un candidat idéal. . 
                </p>
            </div>
            <div class="diplome">
                <h2>Diplômes et Formations</h2>
                <ul>
                    <div class="diplome-1">
                        <h3><li>Titre Professionnel de Développeur Web et Webmobile (niveau 5)</li></h3>
                        <p>
                            De février 2023 à juillet 2023 Digital Academy Insy2s Cergy-Pontoise
                        </p> 
                    </div>
                    <div class="diplome-1">
                        <h3><li>Formation développeur web</li></h3> 
                        <p>
                        De septembre 2022 à janvier 2023 Philliance formation  Evry-courouronnes
                        </p>
                    </div>
                    <div class="diplome-1">
                        <h3><li>Bac STMG</li></h3>
                        <p>
                        De 2016 à janvier 2020 Lycée Louis Feuillade  Lunel
                        </p>
                    </div>
                </ul>
            </div>
            <div class="experience">
                <h2>Expériences professionnelles</h2>
                <ul>
                    <div class="diplome-1">
                        <h3><li>Equipier polyvalent</li></h3>
                        <p>
                            De janvier 2022 à août 2022 McDonald's Evry-Courcouronnes
                        </p>
                    </div>
                    <div class="diplome-1">
                        <h3><li>Prospecteur agricole</li></h3>
                        <p>
                            De mars 2021 à juin 2021 Fedon Gard Saint-Gilles
                        </p>
                    </div>
                    <div class="diplome-1">
                    <h3><li>Equipier polyvalent</li></h3>
                        <p>
                            D'octobre 2018 à décembre 2019 McDonald's Lunel
                        </p>
                    </div>
                </ul>
            </div>
            <div class="profil">
                <h2>Profil</h2>
                <ul>
                    <li>Persévérance</li>
                    <li>Gestion du stress</li>
                    <li> Réactivité</li>
                    <li> Esprit d'équipe</li>
                    <li>Adaptabilité</li>
                </ul>
            </div>
            <div class="informatique">
                <h2>Informatique</h2>
                <ul>
                    <li>T
                        <h5>Traiter l'information (collecter, classer et mettre a jour)</h5>
                        <progress id="progress" max="100" value="70"></progress>
                    </li>
                    <li>
                        <h5>Jquery</h5>
                        <progress id="progress" max="100" value="10"></progress>
                    </li>
                    <li>
                    <h5>Boostrap</h5>
                        <progress id="progress" max="100" value="40"></progress>
                    </li>
                    <li>
                    <h5>PHP</h5>
                        <progress id="progress" max="100" value="30"></progress>
                    </li>
                    <li>
                    <h5>MySQL</h5>
                        <progress id="progress" max="100" value="35"></progress>
                    </li>
                    <li>
                    <h5>HTLM5 et CSS3</h5>
                        <progress id="progress" max="100" value="80"></progress>
                    </li>
                    <li>
                    <h5>JavaScript</h5>
                        <progress id="progress" max="100" value="15"></progress>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>