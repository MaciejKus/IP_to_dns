Result: <p>

<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

$input = trim($_POST['ip']); #remove leading trailing whitespace
if(empty($input)) {
  echo 'error';
  return;
}

#split by line
$input = explode(PHP_EOL,$input);  #string to array

foreach($input as $key1=>$line) {
  #split by white space
  #need regex to split newlines if IP at end of line
  $line = preg_split('/\s+/',$line);
  foreach ($line as $key=>$value) {
      #valie IPv4 address
      $regex = '/^(?:(?:25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])'.
        '\.){3}(?:25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]?|[0-9])$/';
      if(preg_match($regex,$value)) {
        #sometimes gethostbyaddr returns the IP address
        if(gethostbyaddr($value) != $value) {
          $line[$key]= $value . ' <b>' . gethostbyaddr($value) . '</b>';
        }
      }
   }
   $line = implode(' ',$line);
   $input[$key1] = $line;
}

#pre preserves newlines
echo '<pre>' .  implode('<br>', $input) . '</pre>';
?>
