
<body>

    <!-- prima fatto con php, quindi foreach e faccio riferimento a index-php -->

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


        <!-- qui fatto con vue.js e faccio riferimento a index-ajax-->

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