<main>
    <section>
        <div id="AppTitulo"></div>

        <div id="AppVitrinePrincipal"></div>

        <div id="AppVitrineSecundaria"></div>

        <div id="AppVitrineInferior"></div>
    </section>
</main>

<!---------------------------------------------------------- SCRIPT VUE ---------------------------------------------------------->

<script>
    const AppTitulo = new Vue({
        el: '#AppTitulo',
        data() {
            return {
                titulo: 'VOCÊ PRECISA DISSO'
            }
        },
        template: `<h1>{{ titulo }}</h1>`
    });

    const AppVitrinePrincipal = new Vue({
        el: '#AppVitrinePrincipal',
        data() {
            return {
                image: [{
                        item: ORIGEM + "/Resource/image/larissa.jpeg",
                        link: 'javascript:void(0)',
                        nome: ''
                    },
                    {
                        item: ORIGEM + "/Resource/image/leticia.jpeg",
                        link: 'javascript:void(0)',
                        nome: ''
                    },
                    {
                        item: ORIGEM + "/Resource/image/robson.jpeg",
                        link: 'javascript:void(0)',
                        nome: ''
                    }
                ]
            }
        },
        template: `
        <div class="divFotos">
            <div class="fotoProduto" v-for="value in image">
                <div class="foto1">
                    <div class="imgProduto">
                        <a :href="value.link">
                            <img :src="value.item" :alt="value.nome">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        `
    });

    const AppVitrineSecundaria = new Vue({
        el: '#AppVitrineSecundaria',
        data() {
            return {
                image: [{
                        item: ORIGEM + "/Resource/image/pedro.jpeg",
                        link: 'javascript:void(0)',
                        nome: ''
                    },
                    {
                        item: ORIGEM + "/Resource/image/juliana.jpeg",
                        link: 'javascript:void(0)',
                        nome: ''
                    },
                    {
                        item: ORIGEM + "/Resource/image/bia.jpeg",
                        link: 'javascript:void(0)',
                        nome: ''
                    },
                ]
            }
        },
        template: `
        <div class="divFotos">
        <div class="fotoProduto" v-for="value in image">
                <div class="foto1">
                    <div class="imgProduto">
                        <a :href="value.link">
                            <img :src="value.item" :alt="value.nome">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        `
    });

    const AppVitrineInferior = new Vue({
        el: '#AppVitrineInferior',
        data() {
            return {
                image: [{
                        item: ORIGEM + "/Resource/image/robson2.jpeg",
                        link: 'javascript:void(0)',
                        nome: ''
                    },
                    {
                        item: ORIGEM + "/Resource/image/bia2.jpeg",
                        link: 'javascript:void(0)',
                        nome: ''
                    },
                    {
                        item: ORIGEM + "/Resource/image/bia-new.jpeg",
                        link: 'javascript:void(0)',
                        nome: ''
                    }
                ]
            }
        },
        template: `
        <div class="divFotos">
            <div class="fotoProduto" v-for="value in image">
                <div class="foto1">
                    <div class="imgProduto">
                        <a :href="value.link">
                            <img :src="value.item" :alt="value.nome">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        `
    });
</script>

<!--------------------------------------------------------- ESTILO CSS ----------------------------------------------------------->

<style>
    h1 {
        text-align: center;
        font-size: 60px;
        margin-bottom: 20px;
    }

    .divFotos {
        display: flex;
    }

    section {
        margin: auto;
        width: 90%;
        padding: 10px;
        height: 60%;
    }

    .fotoProduto {
        width: 25%;
        margin-left: 38px;
        height: auto;
        border: none;
    }

    .fotoProduto:hover {
        border-radius: 0px;
    }

    .imgProduto img {
        width: 250px;
        height: 250px;
        transition: 1s;
        border-radius: 5px;
    }

    .imgProduto img:hover {
        border-radius: 180px;
        transition: 1s;
    }

    .paragrafoProduto {
        width: 100%;
        margin-top: 15px;
        margin-bottom: 15pt;
        text-align: center;
        height: auto;
    }

    .paragrafoProduto p {
        margin: 0px auto 0px auto;
        font-size: 11pt;
        width: 90%;
    }

    .botaoWhats {
        width: 95%;
        padding: 5%;
        margin: 0px auto 0px 3%;
        border: none;
        background-color: rgb(7, 197, 255);
        font-weight: bolder;
        color: white;
        transition: 1s;
        text-align: center;
    }

    .botaoWhats:hover {
        background-color: black;
        cursor: pointer;
        color: white;
        border-radius: 30px;
        transition: 1s;
    }
</style>