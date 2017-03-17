<?php 
			if(isset($_GET['search']))
			{
				$search = $_GET['search'];
			}

		   if(isset($_GET['query']))
			{
				$query = $_GET['query'];
			}
			
			if($search=="apk"){
				header("Location: https://apkpure.com/search?q=$query");
			}
			if($search=="auresult"){
				header("Location: http://aucoe.annauniv.edu/cgi-bin/result/cgrade.pl?regno=$query");
			}
			if($search=="ytdown"){
				header("Location: http://9xbuddy.com/save?url=$query");
			}
			if($search=="pv"){
				header("Location: http://www.paadalvarigal.com/search/?q=$query");
			}
			if($search=="song"){
				header("Location: http://www.5starmusiq.com/search.asp?query=$query");
			}
			if($search=="movie"){
				header("Location: http://teamrockers.net/downloads/search.php?term=$query");
			}
			?>