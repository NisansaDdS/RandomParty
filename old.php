<div style="align-content: center;margin: auto;
  width: 50%;
  border: 3px solid black;
  padding: 10px;text-align: center;"><h1>
<?php
$front=array("Sri Lanka","Podujana","Ekasth","Nidahas","People's","Our","Freedom","National","United","Ceylon","Workers'","Desha","Vimukthi","Janatha","Eelam","Democratic","Mahajana","All","New","Progressive","Supreme","Communist","Left","Sama","Mahajana","Liberation","Vimukthi","Bahujana","Maoist","Unity","Revolutionary","Frontline","Jathika","Hela","Mawbima","Nava","Socialist","Equality","Bolshevik","Buddhist","Republican");
$back=array("Peramuna","Front","Alliance","Congress","Pakshaya","Party","Union of Workers","Union","Coalition","Power","Urumaya","Sabha","Organisation");

$count=rand(2, 5);

$rand_keys = array_rand($front, $count);
shuffle($rand_keys );

for ($x = 0; $x <= count($rand_keys); $x++) {
	echo $front[$rand_keys[$x]];
	echo " ";
}
echo $back[array_rand($back)];
?>
</h1>
</div>