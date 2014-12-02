<?php

App::uses('AppController', 'Controller');

/**
 * Users Application controller
 *
 * @category Controllers
 * @package  Croogo.Users.Controller
 * @since    1.5
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class UsersAppController extends AppController {

	    //Met une majuscule sur tous les caractères suivant un espace blanc ou un tiret dans la chaine
    public function ucname($string) {
        $string =ucwords(strtolower($string));

        foreach (array('-', '\'') as $delimiter) {
          if (strpos($string, $delimiter)!==false) {
            $string =implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
          }
        }
        return $string;
    }

    //Met une chaine en majuscule
    public function titleCase($string){
      return strtoupper($string);
    }

    //Met une chaine en minuscule
    public function lowerCase($string){
      return strtolower($string);
    }

}
