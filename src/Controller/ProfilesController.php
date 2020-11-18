<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class ProfilesController extends AbstractController{

        /**
         * @Route ("/profile", name ="page_profile")
         */
        public function profile(){

            $agents = [
                1 => [
                    "lastName" => "Robert",
                    "firstName" => "David",
                    "age" => 30,
                    "published" => true
                ],
                2 => [
                    "lastName" => "Labaste",
                    "firstName" => "Denis",
                    "age" => 29,
                    "published" => true
                ],
                3 => [
                    "lastName" => "Rozand",
                    "firstName" => "Mathieu",
                    "age" => 31,
                    "published" => false
                ],
                4 => [
                    "lastName" => "Despert",
                    "firstName" => "Yoann",
                    "age" => 33,
                    "published" => true
                ],
                5 => [
                    "lastName" => "Dorignac",
                    "firstName" => "Loic",
                    "age" => 34,
                    "published" => false
                ]
            ];

            /*Pour envoyer une variable php dans un fichier twig, il suffit de lui donner un nom et référencer ce nom
            à la-dite variable
            /!\ Bien indenter les variables en colonnes, s'il y en a beaucoup, il faut que ce soit clair*/

            /* COMPILATION = quand on traduit un langage en un autre, dans ce cas, on traduit twig en html*/

            return $this->render("profile.html.twig",[

                'agents' => $agents
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
