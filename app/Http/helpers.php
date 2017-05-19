<?php

  function slug($string){
      return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
  }

  function safe_echo_html($string){
    return trim(strip_tags(htmlspecialchars($string, ENT_QUOTES)));
  }

  function safe_echo_input($string=''){
    return trim(preg_replace('/\s+/',' ', htmlspecialchars($string, ENT_QUOTES)));
  }

  function notif($tipe, $text){
    return "<div class='alert alert-".$tipe."'>".$text."</div>";
  }
