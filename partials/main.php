<?php 
 include __DIR__ . '/../server/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
   <div id="app">
        <!-- <div class="cards-container" >
            <?php foreach ($cards as $card) { ?>
                <div class="card-container">
                    <div class="img-container">
                        <img src=" <?php echo($card["poster"]) ?> " alt="">
                    </div>
                    <div class="text-container">
                        <h2> <?php echo($card["title"]) ?> </h2>
                        <h4> <?php echo($card["author"]) ?> </h4>
                        <h4> <?php echo($card["year"]) ?> </h4>
                    </div>
                </div>
            <?php } ?>
        </div> -->

        <div class="cards-container" >
            
            <div v-for="card in cards" class="card-container">
                <div class="img-container">
                    <img :src="card.poster" :alt="card.title">
                </div>
                <div class="text-container">
                    <h2> {{ card.title }} </h2>
                    <h4> {{ card.author }} </h4>
                    <h4> {{ card.date }}</h4>
                </div> 
            </div>
           
        </div>
   </div>
</body>
</html>