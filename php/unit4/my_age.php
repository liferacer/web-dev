<?php
  getmyage("25-01-2011",1,"sanjana sree");

  function getmyage($my_birth, $my_set, $name = null) {
    $day = date('d');
//	echo $day;
    $year = date('Y');
//	echo $year;
    $month = date('m');
//	echo $month;
    $name = htmlspecialchars($name);
    $found = 0;
    for ($i = 0; $i < strlen($my_birth); $i++) {
      if (preg_match('/[-]/', $my_birth[$i])) {
        $found++;
      }
    }
    if ($found != 2) {
      exit("Error: unknown format!");
    }
    $temp_birth = explode('-', $my_birth);
	print_r($temp_birth);
    $my_day = $temp_birth[0];
    if (($my_day <= 0) || ($my_day > 31) || (!isset($my_day))) {
      exit("Error: the day must be from 1 to 31!");
    }
    $day_digit = strlen($my_day);
    if (($day_digit <= 0) || ($day_digit > 2) || (!is_numeric($my_day))) {
      exit("Error: the day must have 2 digits!");
    }
    $my_month = $temp_birth[1];
    if (($my_month <= 0) || ($my_month > 12) || (!isset($my_month))) {
      exit("Error: the month must be from 1 to 12!");
    }
    $month_digit = strlen($my_month);
    if (($month_digit <= 0) || ($month_digit > 2) || (!is_numeric($my_month))) {
      exit("Error: the month must have 2 digits!");
    }
    $my_year = $temp_birth[2];
    $year_digit = strlen($my_year);
    if (($year_digit <= 0) || ($year_digit > 4) || (!is_numeric($my_year)) || (!isset($my_year))) {
      exit("Error: the year must have 4 digits!");
    }
    if ($my_year > $year) {
      exit("Error: the BirthDay year must be less than current year!");
    }
    if (($my_set < 0) || ($my_set > 1) || (!isset($my_set))) {
      exit("Error: the value for the BirthDay message must be 0 or 1!");
    }

    /* Adjust with your own values */

    $my_msg1 = "Today I turn " . ($year - $my_year) . " years!"; // Set the message for your BirthDay
    $my_msg2 = "Today $name turns " . ($year - $my_year) . " years!"; // Set the message for your BirthDay

    /* Don't change anything here below */

    if (($day == $my_day) && ($month == $my_month)) {
      $my_age = $year - $my_year;
      if ($my_set == 0) {
        $my_msg = false;
      } else {
        if (empty($name)) {
          echo "<script type=\"text/javascript\">alert(\"$my_msg1\");</script>";
        } else {
          echo "<script type=\"text/javascript\">alert(\"$my_msg2\");</script>";
        }
      }
    } elseif (($day >= $my_day) && ($month >= $my_month)) {
      $my_age = $year - $my_year;
    } elseif (($day < $my_day) && ($month == $my_month)) {
      $my_age = --$year - $my_year;
    } elseif (($day < $my_day) && ($month > $my_month)) {
      $my_age = $year - $my_year;
    } else {
      $my_age = --$year - $my_year;
    }
	echo $my_age;
    return $my_age;
  }
?>