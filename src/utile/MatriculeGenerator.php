<?php

namespace App\utile;

use App\Entity\DetailsCandidature;
use App\Entity\Inscription;
use App\Repository\InscriptionRepository;

class MatriculeGenerator{

  private $matricule;

  public function __construct(InscriptionRepository $InscriptionRepository)
  {

     $lastCandidat = $InscriptionRepository->findOneBy([],['id' => 'desc']);

     if($lastCandidat != null){


       $lastId = $lastCandidat->getId();
       $this->matricule = sprintf("%'.05d\n",$lastId);
     }
     else{ 
         $this->matricule = sprintf("%'.05d\n",1);
         }
  }

  public function generate(Inscription $inscription){

      $index = "CA-";
      $candidat = $inscription ->getSourceOuAgence()->getLabel();

      $number_of_word = (str_word_count($candidat,1));

      if (count($number_of_word)>=6) {
        foreach ($number_of_word as $k=>$v)
        {
          $index .=strtoupper(substr($v,0,1));
        }
      }
      else {
        $index.=strtoupper(substr($number_of_word[0],0,2));
      }
      return $index."-".$this->matricule;

  }
}

?>