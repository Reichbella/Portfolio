<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/moi.JPG">
    <title>Portfolio</title>
</head>
<body>
    <header id="header">
        <nav>
            <h2>Portfo<span>lio</span></h2>
            <ul>
                <li>
                    <a href="#header">Accueil</a>
                </li>
                <li>
                    <a href="#about">A propos</a>
                </li>
                <li>
                    <a href="#skills">Competences</a>
                </li>
                <li>
                    <a href="#realisations">Mes réalisations</a>
                </li>
                <li>
                    <a href="#footer">Contact</a>
                </li>
            </ul>
        </nav>
        
        <div class="info">
            <!-- <h4>Bienvenue sur mon portfolio</h4> -->
            <br><br><br><br><br>
            <h4>Salut, je m'appelle</h4>
            <h1>BELLA Reich</h1>
            <h4>Je suis Développeur Web</h4>
            <div class="compte">
                <p>reichbedelbella@gmail.com</p>
                <p>+2120620012887</p>
                <p>suivez moi sur</p>
                <a href="https://x.com/reichbedelbella?s=21&t=taCcJ9PDyXmeLuAq2CJarw"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/reich.bela?mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a>
                <a href="https://instagram.com/reich_officiel?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </header>

    <section class="moi" id="about">
        <div class="about">
            <img src="css/moi.png" alt="">
            <div class="bio">
                <h2>A propos</h2>
                <h5>Pationné par le monde de l'informatique depuis mon jeune âge, j'ai acquis des compétences solides dans le domaine
                     du Développement Web notament en PHP, C#, ASP.NET, Java, Javasript, Sql Server, MySQl... <br>
                    J'ai également eu l'occasion de mettre en pratique mes compétences au cours des projets académiques, personnels et
                    professionnels. Ce qui m'a permis de développer ma créativité et ma capacité à resoudre des problèmes informatique complexes.
                </h5>
            </div>
        </div>
    </section>

    <section class="comp" id="skills">
        <h1 class="competences">Mes compétences</h1><br>
        <div class="skills">
            <div>
                <h3>Front-End </h3>
                <p> <img src="images/html.png" alt=""> HTML</p>
                <p> <img src="images/css.png" alt=""> CSS</p>
                <p> <img src="images/js.png" alt=""> JAVASCRIPT</p>
                <p>.</p>
            </div>
            <div>
                <h3>Back-End </h3>
                <p> <img src="images/csharp.png" alt=""> C#</p>
                <p> <img src="images/asp.net_.webp" alt=""> ASP.NET</p>
                <p> <img src="images/php.png" alt=""> PHP</p>
                <p> <img src="images/java.png" alt=""> JAVA</p>
            </div>
            <div>
                <h3>Bases de données</h3>
                <p> <img src="images/sql.png" alt=""> SQL</p>
                <p> <img src="images/mysql.png" alt=""> MYSQL</p>
                <p> <img src="images/plsql.png" alt=""> PL/SQL</p>
                <p>.</p>
            </div>
            <div>
                <h3>Autres</h3>
                <p> <img src="images/access.png" alt=""> ACCESS</p>
                <p> <img src="images/excel.png" alt=""> EXCEL</p>
                <p> <img src="images/word.png" alt=""> WORD</p>
                <p> <img src="images/powerpoint.png" alt=""> POWERPOINT</p>
            </div>
        </div>
    </section>

    <section class="realisations" id="realisations">
        <h1>Mes réalisations</h1>
        <div class="projet">
            <div class="pharmashop">
                <img src="images/pharmashop.PNG" alt="">
                <p>Pharmashop est une plateforme créée dans le but d'aider les personnes dans le besoin c'est à dire, les personnes 
                    agées, les personnes ne pouvant pas se déplacer ou qui n'ont pas le temps tout simplement afin de passer leurs 
                    commande sans pourtant bouger de chez eux.</p>
            </div>
            <div class="techmasters">
                <img src="images/techmasters.png" alt="">
                <p>TechMasters est une application web pour une agence qui se spécialise sur la réparation, la maintenance 
                    informatique et la création des sites web. Cette application a été concu avec ASP.NET <br>
                Il existe aussi une version desktop concu avec C#</p>
            </div>
            <div class="cesa">
                <img src="images/techmasters.png" alt="">
            </div>
        </div>
    </section>

    <footer id="footer">
        <h3>Vous voulez en savoir plus?</h3>
        <h4>Contactez moi</h4>
        <form action="connexion.php" method="post" class="form" onsubmit="return Valider()">
            <input type="text" name="nom" id="nom" placeholder="Votre Nom..." required><br><br>
            <input type="email" name="email" id="email" placeholder="Votre Email..." required><br><br>
            <textarea name="message" id="message" cols="30" rows="8" placeholder="Votre Message..."></textarea><br><br>
            <button type="submit" >Envoyer</button>
        </form>
        
    </footer>

</body>
</html>

<script>
    function Valider(){
        var nom = document.getElementById('nom').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;

        if(nom !== "" && email !== "" && message !== ""){
            alert('Votre message a été envoyé avec succès.');
            return true;
        }
    }
</script>