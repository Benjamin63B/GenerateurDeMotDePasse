<html>
    <head>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    	<link rel="icon" href="favicon.ico" />
        <script>
		function generate(l) {
			if (typeof l==='undefined')
        {var l= document.getElementById("8").value; }
			/* c : chaîne de caractères alphanumérique */
			var alphabetique='abcdefghijknopqrstuvwxyzACDEFGHJKLMNPQRSTUVWXYZ12345679',
			n=alphabetique.length,
			/* p : chaîne de caractères spéciaux */
			otherChars='!@#$+-*&_',
			o=otherChars.length,
			r='',
			n=alphabetique.length,
			/* s : determine la position du caractère spécial dans le mdp */
			s=Math.floor(Math.random() * (otherChars.length-1));

		    for(var i=0; i<l; ++i){
		        if(s == i){
		        	/* on insère à la position donnée un caractère spécial aléatoire */
			        r += otherChars.charAt(Math.floor(Math.random() * o));
		        }else{
		        	/* on insère un caractère alphanumérique aléatoire */
			        r += alphabetique.charAt(Math.floor(Math.random() * n));
		        }
		    }
		    return r;
		}

		/* exemple de fonction generation de mdp dans un form (utilise JQuery) */
		$(document).ready(function() {
			/* on détècte un des champ du formulaire contient une class "gen", on insèrera un bouton dans sa div parent qui appelera la fonction generate() */
			if($('form input.gen').length){
				$('form input.gen').each(function(){
					$('<span class="generate" style="cursor:pointer"><i class="fa fa-fw fa fa-random"></i></span>').appendTo($(this).parent());
				});
			}
			
			/* évènement click sur un element de class "generate" > appelle la fonction generate() */
		    $(document).on('click','.generate', function(e){
		        e.preventDefault();
		        /* ajout du mot de passe + changement du paramètre type de password vers text (pour lisibilité) */
		        $(this).parent().children('input').val(generate()).attr('type','text');
			});
		}); 

		</script>
		<title>Générateur - 👍</title>
    </head>
    	<style>
@import url('https://fonts.googleapis.com/css?family=Lato');

		body{
    font-family: 'Lato', sans-serif;
		}

/* Particle container. */
#particle-container {
    position: absolute;
    width: 100%;
    height: 100%;
}

body{
  margin:0;
  padding:0;
  background:#ACE6FF;
}

#clouds{
  background:url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/56901/bg-clouds.png") repeat 0 0 transparent;
  width:100%;
  height:190px;
}

.navbar .navbar-brand {
  font-size: 30px;
 
}
.navbar .nav-item {
  padding: 10px 10px;
}
.navbar .nav-link {
  font-size: 20px;
  margin-left: 5px;
 
}

</style> 


    <body>
<div id="clouds">
<nav class="navbar sticky-top navbar-expand-lg bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"> 🍪</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" href="#">Information</a> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>
 </div>
    	<center><h2 style="display:flex;justify-content:center;align-items:center;color: black; margin-top: 200px;">🙋‍♂️ Générateur de mot de passe 👍</h2>
    		<p>Le générateur de mot de passe créer par CookyyMC, adaptée en Bootstrap !
			<br>Il sera mise à jour au fur et à mesure pour sélectionner le nombre de caractères</p>
    	<br>
      <h4>Séléctionner le nombre de caractère du mot de passe :</h4>
      <input type="text" value="8" id="8" minlength="1" maxlength="18">
      <br><br>
    	<h5>Appuyez juste ici &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ⤵️</h5>
        <form>
            <div style="display:flex;justify-content:center;align-items:center; position: relative; float: center;">
              <input type="text" class="gen" placeholder="Mot de passe *" required="required" name="password" id="password" style="text-align: center;">
            </div>
        </form>
    </center>
    	<footer style="display:flex;justify-content:center;align-items:center;color: black; margin-top: 200px">Ｃｏｏｋｙｙ &copy － ２０１８</footer>
    </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>

