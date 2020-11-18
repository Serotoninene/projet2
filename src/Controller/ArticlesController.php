<?php

namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class ArticlesController extends AbstractController {

        /**
         * -- WILDCARD = je pose ma variable directement dans la route, ou plutot, j'avertis ma route en amont
         * qu'elle va être composée d'une variable
         *
         * @Route ("/article/{id}", name = "page_article")
         *
         */
        public function article ($id){
            /**
             * je recupère l'id dans les données envoyées par l'utilisateur avec Request
             * devient inutile après l'ajout de la wildcard
             */
//            $articleId = $request->query->get('id');



            /**
             * Simulation d'une requête SQL qui me donnerait tous les articles en les triant par leurs id
             **/
            $articles = [
                1 => "article 1",
                2 => "article 2",
                3 => "article 3",
                4 => "article 4",
                5 => "article 5",
                6 => "article 6",
                7 => "article 7"
            ] ;

            /**
             * Je stocke un des articles dans une variable
             */
            $article = $articles[$id];

            /**
             * Avec render, methode provenant de la classe mère Abstract Controller et qui permet d'appeler un dossier
             * html.twig, beaucoup plus propre qu'un simple Response;
             * Tous les dossier twig se trouvent dans templates
             */
            /**
             * Pour insérer une variable php dans le dossier twig, il faut d'abord l'instancier lors de l'appel de la
             * requête render, j'appelle ici un tableau contenant tous les ârticles
             */
            return $this->render('article.html.twig',
                [
                    'article'=>$article
                ]);
        }




    }
?>