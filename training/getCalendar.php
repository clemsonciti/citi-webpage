<?php

function startswith($needle, $haystack)
{
   return strpos($haystack, $needle) === 0;
}

function get_nice_date($timestamp)
{
   $tmp = explode(":", $timestamp);
   $dt = date_create($tmp[2]);
   return date_format($dt, "M d, Y");
}

function get_nice_repeat_date($timestamp)
{
   $tmp = explode(":", $timestamp);
   $dt = date_create($tmp[1]);
   return date_format($dt, "M d, Y");
}

function get_date($timestamp)
{
   $tmp = explode(":", $timestamp);
   //echo $tmp[2];
   //echo $timestamp;
   return date_create($tmp[2]);
}

function get_time($timestamp)
{
   $tmp = explode(":", $timestamp);
   $dt = date_create($tmp[2]);
   return date_format($dt, "g:i A");
}

$CAL_URI="https://outlook.office365.com/owa/calendar/a787880a05274543987fb4e4779c64d3@clemson.edu/42a2aa95650a4f349bdd7841c58423af10983094435338263214/calendar.ics";

$ics = explode("\n", file_get_contents($CAL_URI));

$events = array();
$event = null;
$lastKey = null;
foreach($ics as $line) {
   if(strlen($line) == 0) continue;

   if($line[0] == " ") {
      if($lastKey) 
         $event[$lastKey] .= substr($line, 1, -1);
   }
   elseif(startswith("END:VEVENT", $line)) {
      if($event) {
        if(isset($event['rrule'])) {
          $event['repeat'] = array();
          foreach(explode(';', $event['rrule']) as $rule) {
            $r = explode('=', $rule);
            $event['repeat'][$r[0]] = $r[1];
          }
          unset($event['rrule']);
          if(isset($event['repeat']['UNTIL'])) {
            $event['repeat']['end_date'] = get_nice_repeat_date(":" . $event['repeat']['UNTIL']);
          }
        }
        $today = time();
        //if(time() <= intval($event['date']->format('U'))) {
          $events[] = $event;
        //}
        unset($event['date']);
        $event = null;
      }
   }
   elseif(startswith("BEGIN:VEVENT", $line)) {
      $event = array();
   }
   elseif(startswith("SUMMARY:", $line)) {
      $event['title'] = substr($line,8,-1);
      $lastKey = 'title';
   }
   elseif(startswith("LOCATION:", $line)) {
      $event['location'] = substr($line,9,-1);
      $lastKey = 'location';
   }
   elseif(startswith("DESCRIPTION:", $line)) {
      $event['desc'] = substr($line,12,-1);
      $lastKey = 'desc';
   }
   elseif(startswith("RRULE:", $line)) {
      $event['rrule'] = substr($line,6,-1);
      $lastKey = 'rrule';
   }
   elseif(startswith("DTSTART;", $line)) {
      $event['date'] = get_date(substr($line,9,-1));
      $event['nice_date'] = get_nice_date(substr($line,9,-1));
      $event['start'] = get_time(substr($line,9,-1));
      $lastKey = 'start';
   }
   elseif(startswith("DTEND;", $line)) {
      $event['end'] = get_time(substr($line,6,-1));
      $lastKey = 'end';
   }
   else {
      $lastKey = null;
   }
}


Header('Content-Type: application/json');
echo json_encode($events,JSON_PRETTY_PRINT);

?>
