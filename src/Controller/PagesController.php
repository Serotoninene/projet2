<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;

    class PagesController{
        /**
         * @Route ("/", name="homepage")
         */
        public function homepage (){
            var_dump('hello');
            die();
        }

        /**
         * @Route ("/casino", name="casino")
         */
        public function casino (Request $request){
            $age = $request->query->get('age');

            if ($age < 18){
                echo "trop jeune";
            }else{
                echo"assez vieux";
            }
            die();
        }
    }
?>