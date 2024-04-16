<?php

  function generaPasswordCasuale($lunghezza) {
      $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+{}|[]\:";<>,.?/';
      $lunghezzaCaratteri = strlen($caratteri);
      $password = '';

      for ($i = 0; $i < $lunghezza; $i++) {
          $index = rand(0, $lunghezzaCaratteri - 1);
          $password .= $caratteri[$index];
      }

      return $password;
  }

?>