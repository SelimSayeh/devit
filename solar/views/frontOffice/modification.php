<?php include('header.php') ?>

	<div class="site-main">
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area common-banner">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<h1>Modifying Account</h1>
							<p> creating accounts helps our customers to buy limited products, will facilitate making a reservation and benefiting from discounts .</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="index.html">Home</a>
									<a href="create.html">Modify Account</a>
								</div>
							</div>
						</div>
						
			
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->

		<!--================ Start create Area =================-->
		<div class="chef-area section_gap">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						
					</div>
					
				</div>
				
							
							
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- <<img class="login-w3img" src="images/img3.jpg" alt=""> -->
		<div class="container">  
			<div class="login-agileinfo"> 
				<form  name="myForm" method="post" action="UserModifier.php">
          
          <fieldset>
            <label for="firstName">Nom: </label>
            <?PHP session_start(); ?>
            <input type="text" tabindex="1" size="22" value="<?php echo 
               $_SESSION["nom"]; ?>" name="nom" placeholder="Nom :" required="" pattern="[a-zA-Z]+" title="Ce champ n'accepte que des lettres" data-validation-required-message="Veuillez saisir votre nom!"  class="text" />
            
            <br />
            
            <label for="lastName">Prénom: </label>
            <input type="text" tabindex="2" size="22" value="<?php echo 
               $_SESSION["prenom"]; ?>"  name="prenom" placeholder="Prénom :" required="" pattern="[a-zA-Z]+" title="Ce champ n'accepte que des lettres" data-validation-required-message="Veuillez saisir votre prénom!" class="text" />
            <br />
            
            <label for="lastName">Date de Naissance: </label>
            <input type="date" tabindex="3" size="22" value="<?php echo 
               $_SESSION["date"]; ?>"  name="date" placeholder="date de Naissance :" required="" data-validation-required-message="Veuillez saisir votre date de naissance!" class="text" />
            <br />
            
            <label for="lastName">Sexe: </label>
              <select id="sexe" type="date" value="<?php echo 
               $_SESSION["sexe"]; ?>" name="sexe">
                  <option value="" disabled selected default>Sexe</option>
                  <option value="h">homme</option>
                  <option value="f">femme</option>
              </select>
              <br />
            <label for="lastName">Téléphone: </label>
            
            <input type="number" tabindex="4" size="22" value="<?php echo 
               $_SESSION["telephone"]; ?>" name="telephone" placeholder="Téléphone :"  pattern="[0-9]{8}" /*pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" */ required=""   title="Veuillez saisir une numero valid" data-validation-required-message="Veuillez saisir votre numéro de téléphone!" class="text" />
            <br />
            <label for="lastName">Adresse: </label>
              <input type="text" tabindex="1" size="22" value="<?php echo 
               $_SESSION["rue"]; ?>" name="rue" placeholder="Rue* :"   class="text" />
            

              <input type="text" tabindex="6" size="22" value="<?php echo 
               $_SESSION["ville"]; ?>"  name="ville" placeholder="Ville* :" required="" pattern="[a-zA-Z]+" title="Ce champ n'accepte que des lettres" data-validation-required-message="Veuillez saisir votre ville!" class="text" />
              
              <input type="number" tabindex="7" size="22" value="<?php echo 
               $_SESSION["codep"]; ?>"   name="codep" placeholder="Code postal* :" required="" data-validation-required-message="Veuillez saisir votre code postal!" class="text" />
            <br />

            <label for="email">Email:</label>
            <input type="email" tabindex="8" size="50" value="<?php echo 
               $_SESSION["email"]; ?>" id="email" name="email" placeholder="E-mail* :" required="" data-validation-required-message="Veuillez saisir votre email." class="text" />
            <br />

            <label for="password">Password:</label>
            <input type="password" tabindex="9" size="22" value="" id="password" name="password" placeholder="Password* :" required="" data-validation-required-message="Veuillez saisir votre mot de passe." class="text" />
            <br />
            
            <label for="repassword">Retype Password:</label>
            <input type="password" tabindex="10" size="22" value="" id="repassword" name="repassword" placeholder="Password* :" required=""  data-validation-required-message="Veuillez confirmer votre mot de passe." class="text" />
            <br />
            <div class="clear"></div>
          </fieldset>
          <p>
            <input type="submit" value="Modifier votre compte" tabindex="11"onclick="verifa()" name="sinscrire" class="newAccountButton" />
          </p>
          <input type="hidden" value="30" />
        </form>
				
			</div>	 
		</div>
	</div>
		<!--================ End create Area =================-->

		<?php include("footer.php") ?>