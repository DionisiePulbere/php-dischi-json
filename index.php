<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Dischi</title>
    <link rel="stylesheet" href="css/style.css">
    <!--axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--vue.js-->
    <script src="https://unpkg.com/vue@3"></script>
</head>
<body>
    <div id="app">
        <header>
            <h1>
                Logo
            </h1>
        </header>
        <section>
            <div class="container">
                <div class="row"  >
                    <div class="col" v-for="disc, index in discs" @click="getSingleDisc(index)">
                        <img :src="disc.poster" :alt="disc.title">
                        <div>
                            <h2>{{ disc.title }}</h2>
                            <p>{{ disc.author }}</p>
                            <h3>{{ disc.year }}</h3>
                        </div>
                    </div>
                </div>
                <div class="hover" v-show="isVisible">
                    <div class="card">
                        <div class="poster">
                            <img :src="singleDisc.poster" :alt="singleDisc.title">
                            <div class="button" @click="close()">X</div>
                        </div>
                        <div>
                            <h2>{{ singleDisc.title }}</h2>
                            <p>{{ singleDisc.author }}</p>
                            <h3>{{ singleDisc.year }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--js-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>