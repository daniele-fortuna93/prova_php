<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- axios -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
        <!-- Vuejs -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!-- milligram -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css" integrity="sha512-xiunq9hpKsIcz42zt0o2vCo34xV0j6Ny8hgEylN3XBglZDtTZ2nwnqF/Z/TTCc18sGdvCjbFInNd++6q3J0N6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>To-do list</title>
    </head>
    <body>
        <div class="container">
            <header>
            <h1><strong>To-do List</strong></h1>
            </header>
            <main id="root">
                <section >
                    <div class="input_container">
                        <label >Aggiungi cose da fare</label>
                        <input type="text" name="to_do" required v-model="param" @keydown.enter="submit()">
                    </div>
                    <button :disabled="param == ''" @click="submit()">Invia</button>
                </section>
                <section>
                <h2>Lista cose da fare</h2>
                <button @click="getData(); show = !show">Mostra lista</button>
                <ul v-show="show">
                    <li v-for="(thing, index) in list">{{ thing }}</li>
                </ul>
                </section>

            </main>
        </div>
        <script src="js/script.js" charset="utf-8"></script>
    </body>
</html>