<?php
/*Donne l'emplacement du code actuel*/
    namespace App\Controller;

/*Meme fonction que les "require" du php natif, appel les objets que l'on va réutiliser dans le code*/
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class PagesController{
        /**
         * Définit la route vers laquelle on veut renvoyer -- ANNOTATION
         * @Route ("/", name="homepage")
         */
        /* Fonction de la-dite route, renvoie vers une homepage (essai pour voir si la route fonctionne bien) */
        public function homepage (){
            var_dump('hello');
            die();
        }

        /**
         * @Route ("/casino", name="casino")
         */
        /*J'appelle entre les parenthèses de la fonction le composer que me servira ensuite à aller chercher les info
        dans le http (request)*/
        public function casino (Request $request){
            /*Save de la donnée désirée dans une variable*/
            $age = $request->query->get('age');

            /*lancement d'une boucle if pour varier les réponses de la page*/
            if ($age < 18){
                echo "trop jeune";
            }else{
                echo"assez vieux";
            }
            /*Besoin d'appeler la fonction die() sinon erreur - va évoluer dans le futur*/
            die();
        }

        /**
        * @Route ("/name", name = "name")
         **/
        public function name (Request $request){
            /*J'enregistre les infos prises dans la requete dans des variables*/
            $name = $request->query->get('name');
            $firstname = $request->query->get('firstname');

            /*j'écrie en amon mon message (pas forcément nécessaire)*/
            $msg = '<h1>Hello '.$firstname.' '.$name.'</h1>';
            /*j'envoie une réponse (qui me permet de me passer de "die()" et de mettre des balises html :)*/
            $response = new Response($msg);
            return $response;
        }

        /**
        * @Route ("/article", name = "page_article")
         * Je place dans les PARAMETRES de la fonction la classe Request pour ne pas avoir à l'instancier plus tard
         * = AUTOWIRE
         * je lui donne également une variable pour pouvoir l'appeler -->
         */
        public function article (Request $request){
            /**
             * je recupère l'id dans les données envoyées par l'utilisateur avec Request
             */
            $articleId = $request->query->get('id');

            /**
             * Simulation d'une requête SQL qui me donnerait tous les articles en les triant par leurs id
             **/
            $article = [
               1 => "article 1",
               2 => "article 2",
               3 => "article 3",
               4 => "article 4",
               5 => "article 5",
               6 => "article 6",
               7 => "article 7"
            ] ;

            /**
             * j'instancie Response, je ne le fais pas en autowire car dans ce cas, il faut que je rentre des paramètres
             * (mon texte) pour qu'elle marche, donc j'instancie directement dans la fonction, c'est le même principe.
             */
            $response = new Response("<h1>".$article[$articleId]."</h1>");

            /**
             * Toujours RETOURNER la Response, sinon rien ne va s'afficher
             */
            return $response;
        }
    }
?>