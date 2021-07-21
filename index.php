<html>
 <head>
  <meta charset="utf-8">
  <title>NewsAPI test</title>
 </head>
 <body>
<?php
$country=$_POST['country'];
echo  '<form action="index.php"  method="post">
   <select name="country"></p>';
echo ($country == 'ru') ? '<option>us</option><option selected>ru</option>' : '<option selected>us</option><option>ru</option>';    
echo  '</select>
   <input type="submit">
 </form>
<table>';

//use jcobhams\NewsApi\NewsApi;

//echo $country;
$top = file_get_contents('https://newsapi.org/v2/top-headlines?country='.$country.'&apiKey=7930a83dbbf04f469cd6a586465aad67');
$array=json_decode($top,true);
foreach ($array['articles'] as $line)
{
echo "<tr><td><img src=".$line['urlToImage']." width='300'></td><td><a target='_blank' href='".$line['url']."'>".$line['title']."</a></td></tr>";
}
?>
</table>
</body>
</html>
