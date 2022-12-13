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
