<?php

namespace App\utile;

use App\Entity\Client;
use App\Entity\DetailsCandidature;
use App\Repository\DetailsCandidatureRepository;
use App\Repository\TypeDeBienRepository;

class MatriculeGenerator{

  private $matricule;

  public function __construct(DetailsCandidatureRepository $DetailsCandidatureRepository)
  {

     $lastCandidat = $DetailsCandidatureRepository->findOneBy([],['id' => 'desc']);

     if($lastCandidat != null){


       $lastId = $lastCandidat->getId();
       $this->matricule = sprintf("%'.05d\n",$lastId);
     }
     else{ 
         $this->matricule = sprintf("%'.05d\n",1);
         }
  }

  public function generate(DetailsCandidature $detailsCandidature){

      $index = "CAN-";
      $candidat = $detailsCandidature ->getTypeDeLogement()->getLabel();

      $number_of_word = (str_word_count($candidat,2));

      if (count($number_of_word)>=2) {
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