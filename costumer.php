<?php
include("./vendor/autoload.php");

/**
 *
 */
class Costumer
{

  public function __construct()
  {
    $stripe = array(
        "secret_key"=>"sk_test_wxSvb961DezL0R5XAJNrCaVN",
        "public_key"=>"lihat dashboard punya mu"
    );
    \Stripe\Stripe::setApiKey($stripe["secret_key"]);
  }

  public function costumer($data){
    $message = "";
    try{
    $costumer = \Stripe\Customer::create(["email"=>"nadia@gmail.com",
              "description" => "hallo nadia",
              "source" => "tok_amex"]);
      $message = $costumer->status;
    }catch (Exception $e){
      $message = $e->getMessage();
    }
    return $message;
  }
  public function update_costumer($data){
    $message = "";
    try {
      $cu = \Stripe\Customer::retrieve($data["Id"]);
      $cu->description = $data["description"];
      $cu->email = $data["email"];
      $cu->save();
    } catch (Exception $e) {
      $message = $e->getMessage();
    }
      return $message;
  }
  public function delete($data){
    $message = "";
    try {

      $cu = \Stripe\Customer::retrieve($data["Id"]);
      $cu->delete();
    } catch (Exception $e) {
      $message = $e->getMessage();
    }
      return $message;
  }
}

 ?>
