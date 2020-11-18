<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class ProfilesController extends AbstractController{

        /**
         * @Route ("/profile", name ="page_profile")
         */
        public function profile(){

            $profile = [
                "firstname" => "Flantier",
                "name" => "Noel",
                "age" => 40,
                "job" => "secret agent",
                "active" => true
            ];

            /*Pour envoyer une variable php dans un fichier twig, il suffit de lui donner un nom et référencer ce nom
            à la-dite variable
            /!\ Bien indenter les variables en colonnes, s'il y en a beaucoup, il faut que ce soit clair*/

            /* COMPILATION = quand on traduit un langage en un autre, dans ce cas, on traduit twig en html*/

            return $this->render("profile.html.twig",[

                'profile' => $profile
            ]);

        }

        /**
         * @Route ("/profile-skills", name = "page_skills")
         */
        public function skill (){


            $qualites =["bravoure", "courage", "humour", "force", "mais surtout du courage"," et de la bravoure"];

            /**
             * Bonne habitude : si variable à boucler -> la mettre au pluriel pour pouvoir ensuite la diviser
             * par ses singuliers
             */
            return $this->render("skills.html.twig",[
                'qualites' => $qualites
            ]);

        }

    }
