<div id="AppContato"></div>

<script>
    new Vue({
        el: '#AppContato',
        data() {
            return {
                tituloContato: 'Contato',
                contatoEmail: 'robsonfariasAD@gmail.com'
            }
        },
        template: `
    <footer>
        <div class="footerContato">
            <h2>{{ tituloContato }}</h2>
            <span>{{ contatoEmail }}</span>
        </div>
    </footer>
    `
    });
</script>

<style>
    footer {
        width: 100%;
        height: 300px;
        display: flex;
        background-color: #000000;
        border-top: rgb(7, 197, 255);
        padding-bottom: 40px;
    }

    .footerContato {
        width: 87%;
        height: 80%;
        margin-top: 2%;
        padding: 10px;
        transition: 1s;
        margin-left: 5%;
        border-bottom-left-radius: 120px;
        box-shadow: 1px 2px 3px 5px rgb(7, 197, 255);
        border-top-left-radius: 120px;
        background-color: #1c1c1c;
        border-bottom-right-radius: 20px;
        border-top-right-radius: 20px;
    }

    .footerContato:hover {
        border-bottom-left-radius: 0px;
        border-top-left-radius: 0px;
        border-bottom-right-radius: 0px;
        border-top-right-radius: 0px;
        border-radius: 5px;
        background-color: black;
        box-shadow: 0px 0px 0px 0px;
        border: 3px solid rgb(7, 197, 255);
        transition: 1s;
    }

    .footerContato h2 {
        text-align: center;
        color: rgb(7, 197, 255);
    }

    .footerContato span {
        text-align: center !important;
        color: white;
        font-size: 12pt;
        margin-left: 170px;
    }

    .footerTextoDescritivo {
        width: 40%;
        height: 80%;
        margin-top: 2%;
        padding: 10px;
        margin-left: 5%;
        border-bottom-right-radius: 120px;
        border-top-right-radius: 120px;
        border-bottom-left-radius: 20px;
        box-shadow: 1px 2px 3px 5px rgb(224, 5, 133);
        border-top-left-radius: 20px;
        background-color: #1c1c1c;
    }

    .footerTextoDescritivo:hover {
        border-bottom-left-radius: 0px;
        border-top-left-radius: 0px;
        border-bottom-right-radius: 0px;
        border-top-right-radius: 0px;
        border-radius: 5px;
        background-color: black;
        box-shadow: 0px 0px 0px 0px;
        border: 3px solid rgb(224, 5, 133);
        transition: 1s;
    }

    .footerTextoDescritivo h2 {
        text-align: center;
        color: rgb(224, 5, 133);
    }
</style>