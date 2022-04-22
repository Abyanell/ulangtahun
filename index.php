<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ucapan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sccs.scss">
    <style>
            .container1{
                height: 600px;width: 550px;background: #9900F0;position: relative;
                margin: auto;
                transform: translateY(10%);
                display: flex;
                flex-direction: column;
                align-items: center;
                align-content: center;box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
                backdrop-filter: blur( 4px );
                -webkit-backdrop-filter: blur( 4px );
                border-radius: 10px;
                border: 1px solid rgba( 255, 255, 255, 0.18 );
                
                

            }
            .bb{
                width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-size: 300% 300%;
  background-image: linear-gradient(
        -45deg, 
        rgba(59,173,227,1) 0%, 
        rgba(87,111,230,1) 25%, 
        rgba(152,68,183,1) 51%, 
        rgba(255,53,127,1) 100%
  );  
  animation: AnimateBG 20s ease infinite;
}

@keyframes AnimateBG { 
  0%{background-position:0% 50%}
  50%{background-position:100% 50%}
  100%{background-position:0% 50%}
}


.form1{
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    transform: translateY(10%);
            
}
         
        </style>
</head>
<body class="bb" >

      
<div class="container1">

    <form action="index.php" method="post" class="form1">

<h1 style="font-family: helvetica;color:aliceblue;" id="typing">Selamat Ulang Tahun <?php echo $_POST['nama']  ?> </h1>
<img src="cute2.gif" alt="gif2">

<a class="ucapan"  style="text-align: center ; font-family: helvetica; color:aliceblue; font: size 12px; ">Selamat ulang tahun! Semoga <?php echo $_POST['nama']  ?> senantiasa diberi kemudahan oleh Tuhan dalam menjalani setiap urusan dan selalu menjadi pribadi yang lebih baik dari sebelumnya.Semoga diberi umur panjang, sehat selalu, dan selalu tetap semangat menjalani hidup karena kesuksesan di masa depan ditentukan oleh setiap usaha hari ini.Semoga apa yang kamu semogakan tidak hanya menjadi sekadar semoga, tapi secepatnya terwujudkan! AMINNNN!!!!</a>
<br>
<audio controls autoplay>
  <source src="lagu1.mp3" type="audio/mpeg">
</audio>


</form>
</div>



</body>
</html>