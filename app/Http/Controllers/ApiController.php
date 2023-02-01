<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    public function getAnimals(){
        $api_url = 'https://retoolapi.dev/SaSKfv/animalslist';

        // Read JSON file
        $json_data = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

        // All user data exists in 'data' object
        $animals_data = $response_data;

        // Cut long data into small & select only first 10 records
        //$animal_data = array_slice($animal_data, 0, 9);

        // Print data if need to debug
        //print($animal_data->name);

        return($animals_data);
    }


    public function getGoogleImage($nome){

      $nome = str_replace(' ', '', $nome);
      $api_url = 'https://serpapi.com/search.json?q='.$nome.'&api_key=b97d7a185e9a0bc6951466a05b211b02c64d40a331c091f5d4b9cda1229cf9af&tbm=isch&ijn=0';

      $json_data = file_get_contents($api_url);

      $response_data = json_decode($json_data,true);

      $animals_data = $response_data["images_results"][0]["original"];

      //uri di prova per non sprecare chiamate API
      //$animals_data = 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/07._Camel_Profile%2C_near_Silverton%2C_NSW%2C_07.07.2007.jpg/1200px-07._Camel_Profile%2C_near_Silverton%2C_NSW%2C_07.07.2007.jpg';
      return($animals_data);
    }

    public function createArray($animals_data){

      $count = count($animals_data);
      $numero  = rand(1,$count-1);


      while((!($this -> checkJson($animals_data,$numero)))) {
        $numero  ++;
        if($numero==$count){$numero=0;}
      }

      if($this -> checkJson($animals_data,$numero)){
      $name = $animals_data[$numero]->{'name'};

      $resultArray = array('$this->getGoogleImage($name)',
      $animals_data[$numero]->{'name'},
      $animals_data[$numero]->{'characteristics'}->{'lifespan'},
      $animals_data[$numero]->{'characteristics'}->{'length'},
      $animals_data[$numero]->{'characteristics'}->{'weight'},
      $animals_data[$numero]->{'characteristics'}->{'habitat'},
      $animals_data[$numero]->{'locations'}[0],
      $animals_data[$numero]->{'characteristics'}->{'diet'});
      return( $resultArray);
      }
      else{
        $resultArray = array();
        return( $resultArray);
      }

  }
  public function checkJson($animals_data,$numero){

    return( isset($animals_data[$numero]->{'name'}) &&
        isset( $animals_data[$numero]->{'characteristics'}->{'lifespan'}) &&
        isset($animals_data[$numero]->{'characteristics'}->{'length'}) &&
        isset($animals_data[$numero]->{'characteristics'}->{'weight'}) &&
        isset($animals_data[$numero]->{'characteristics'}->{'habitat'}) &&
        isset($animals_data[$numero]->{'locations'}[0]) &&
        isset($animals_data[$numero]->{'characteristics'}->{'diet'}));

}

    public function getNinjasAnimals($name){

        $api_url = 'https://api.api-ninjas.com/v1/animals?name='.$name;


        /*tramite options*/
        $options = array(
          'http'=>array(
            'method'=>"GET",
            'header'=>"X-Api-Key:Rzb59ekE71m9ayJNI103nA==snWn6YZzT3eQYbBg"
          )
        );
        $context=stream_context_create($options);
        $json_data=file_get_contents($api_url,false,$context);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

        // All user data exists in 'data' object
        $animals_data = $response_data;
        $res = $this -> createArray($animals_data);

        return( $res);
    }



    public function getAnimal($num){
        $api_url = 'https://retoolapi.dev/SaSKfv/animalslist/' . $num;

        // Read JSON file
        $json_data = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

        // All user data exists in 'data' object
        $animals_data = $response_data;

        // Cut long data into small & select only first 10 records
        //$animal_data = array_slice($animal_data, 0, 9);

        // Print data if need to debug
        //print($animal_data->name);
        return($animals_data);
    }



    public function getAnimalMeme(){
        $api_url = 'https://api.imgflip.com/get_memes';

        // Read JSON file
        $json_data = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

        // All user data exists in 'data' object
        $animals_meme = $response_data->data->memes;

        $animal= [
            $animals_meme[random_int(0,99)]->url,
            $animals_meme[random_int(0,99)]->url,
            $animals_meme[random_int(0,99)]->url,
            $animals_meme[random_int(0,99)]->url
        ];


        // Cut long data into small & select only first 10 records
        //$animal_data = array_slice($animal_data, 0, 9);

        // Print data if need to debug
        //print($animal_data->name);
        return($animal);
      }

}
