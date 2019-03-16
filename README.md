# API INSTAGRAM

## Etape 1

Sur [Instagram Developper](https://www.instagram.com/developer), s'authentifier et sur le bloc "Hello Developers", cliquer sur "Register your application"

## Etape 2

Remplir les informations :<br>

- Application Name : Choisir un nom
- Description : Expliquer à quoi l'api va nous servir
- Website URL : URL du site où sera appelé l'API (si local, mettre l'adresse en local, ex : http://localhost:8080)
- Valid redirect URIs : URL de redirection (mettre l'adresse exacte, ex : http://localhost:8080/instagram)

-> Cliquer sur "Register"


## Etape 3

Dans "Manage Clients" :<br>
 
 - Cliquer sur "Manage" sur notre application.
 - Dans "Security", décocher "Disable implicit OAuth"
 
 ## Etape 4
 
 Pour obtenir __l'access_token__ : <br><br>
 <i>S'assurer d'avoir lancer son serveur en local</i><br><br>
 Suivre ce lien :<br> https://api.instagram.com/oauth/authorize/?client_id=CLIENT-ID&redirect_uri=REDIRECT-URI&response_type=token <br>
 Remplacer CLIENT_ID par son client_id qui se trouve dans "Manage" puis remplacer REDIRCET_URI par l'adresse mise dans "Valid redirect URIs".<br><br>
 Exemple : <br>
https://api.instagram.com/oauth/authorize/?c59ccfa11fe74601958826e7119b5612&redirect_uri=http://localhost:8080/instagram&response_type=token 

## Etape 5

Le lien renvoie dans l'url le token sous cette forme : 
http://localhost:8080/instagram#access_token=228307965.c59ccfa.18c0ece1c9dd48b78cb4aacc8677d1c8

### Pour s'aider : 
[Tuto 2018 pour obtenir son token](https://bertiaux.fr/archives/petit-guide-bien-gerer-access-token-instagram-recuperation-de-flux-de-photos)
[Tuto appel de l'api](https://www.grafikart.fr/tutoriels/instagram-api-515)

### A savoir : 
les tokens d'accès peuvent expirer dans le futur.

sur packagist.org : <br>
On peut également uiliser le package "php-instagram-api/php-instagram-api"<br>
à installer via composer (voir [Tuto 2018 pour obtenir son token](https://bertiaux.fr/archives/petit-guide-bien-gerer-access-token-instagram-recuperation-de-flux-de-photos) à 30:00)