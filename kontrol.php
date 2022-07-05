<?php
error_reporting(0);
         session_start();  
         include("db.php");
      $sec= "SELECT dogru FROM sorular";
      $sayac=1;
      $puan=0;
      $dogru=0;
      $yanlis=0;
      $bos=0;
      $mesaj;
         if($_SESSION["user"]==""){
            echo "<script>location.href='index.php';</script>";
         }
         else{
            $sonuc= $baglan->query($sec);
      
            if ($sonuc->num_rows > 0) 
            {
        // verileri listeleyebiliriz
        while($cek = $sonuc->fetch_assoc()) 
         {
            if(""==$_POST['question-'.$sayac.'-answers']){
               $bos++;
            }
            else if($cek['dogru']==$_POST['question-'.$sayac.'-answers']){
               $puan+=5;
               $dogru++;
            }
            else if($cek['dogru']!=$_POST['question-'.$sayac.'-answers']){
               $yanlis++;
            }
            
            
            $sayac++;
         }
         if($puan>=70){
            $mesaj="Tebrikler ".$_SESSION['user']." Sınavı Başarıyla Geçtiniz";
         }
         else{
            $mesaj="Üzgünüm ".$_SESSION['user']." Malesef Başarısız Oldun ";
         }

         $sql = "INSERT INTO ogrenci (isim,puan)
         VALUES ('".$_SESSION['user']."','".$puan."')";
         if (mysqli_query($baglan, $sql)) {
            echo "";
          } 
           
          
            
           
            
            
            
         session_destroy();   
        } 
         }
        ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sonuç </title>
   <link rel="icon" href="/resim/altikod.jpg" type="image/x-icon" />
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <style>
   .doghnutChartGroup {
    margin: 10px;
    width: 100px;
}

    .doghnutChartGroup .circular-progress {
        background: linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(126deg, #FF70A6 50%, #E0E0E0 50%, #E0E0E0);
        border-radius: 50%;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        height: 200px;
        margin: 2em auto;
        position: relative;
        min-width: 200px;
        margin: 10px;
        transition: background .5s 0.3s;
    }

        .doghnutChartGroup .circular-progress::before {
            background-color: #FAFAFA;
            border-radius: 50%;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            color: rgba(0, 0, 0, 0.54);
            content: attr(data-text);
            font-size: 72px;
            font-weight: bold;
            height: 100%;
            left: 0;
            line-height: 200px;
            position: absolute;
            text-align: center;
            top: 0;
            -webkit-transform: scale(0.87);
            transform: scale(0.87);
            width: 100%;
        }

        .doghnutChartGroup .circular-progress:hover {
            box-shadow: 0 0 100px 1px rgba(255, 214, 112, 0.35);
        }

    .doghnutChartGroup .circular-text {
        text-align: center;
        color: rgba(0, 0, 0, 0.6);
        font-size: 14px;
        font-weight: bold;
        letter-spacing: 1px;
    }

@keyframes turning_cw {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}</style>
 </head>
 <body>
 <div  style="margin: 0 auto;" class="doghnutChartGroup displayInlineBlock">
	<div class="circular-progress" data-percent="<?php echo $puan?>" data-text="<?php echo  $puan?>%"></div>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Sayı</th>
   
    </tr>
  </thead>
  <tbody>
    <tr class="table-success">
      <th scope="row">Doğru</th>
      <td><?php echo $dogru?></td>
      
      
    </tr>
    <tr class="table-danger">
      <th scope="row">Yanlış</th>
      <td><?php echo $yanlis?></td>
      
      
    </tr>
    <tr class="table-warning">
      <th scope="row">Boş</th>
      <td><?php echo $bos?></td>
      
    </tr>
  </tbody>
</table>
<strong>
<?php echo $mesaj; ?></strong>
<script> 
var doghnutCharts = document.querySelectorAll('.doghnutChartGroup .circular-progress');

for (var h = 0; h < doghnutCharts.length; h++) {
    var percent = doghnutCharts[h].getAttribute('data-percent');
    console.log(percent);
    var degree = 90 + ( ( 360 / 100 ) * Number(percent) );
    console.log(degree);

    if (percent > 0 && percent <= 25) {
        doghnutCharts[h].style.background = 'linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
    } else if (percent > 25 && percent <= 50) {
        doghnutCharts[h].style.background = 'linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
    } else if (percent > 50 && percent <= 75) {
        doghnutCharts[h].style.background = 'linear-gradient(-90deg, #FF70A6 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
    } else if (percent > 75 && percent <= 100) {
        doghnutCharts[h].style.background = 'linear-gradient(-90deg, #FF70A6 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
    } else {
        doghnutCharts[h].style.background = 'linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(90deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
    }

    //doghnutCharts[h].style.background = 'linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
    console.log(doghnutCharts[h].style.background);
}</script>
 </body>
 </html>       