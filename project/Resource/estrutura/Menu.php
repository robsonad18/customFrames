<div id="AppMenu"></div>

<script>
    new Vue({
        el: '#AppMenu',
        data() {
            return {
                menu: [{
                        item: 'Home',
                        link: 'javascript:void(0)'
                    },
                    {
                        item: 'Sobre',
                        link: 'javascript:void(0)'
                    },
                    {
                        item: 'Contato',
                        link: 'javascript:void(0)'
                    }
                ]
            }
        },
        template: `
    <nav>
        <ul>
            <li v-for="value in menu">
                <a :href="value.link">{{ value.item }}</a>
            </li>
        </ul>
    </nav>
    `
    });
</script>

<style>
    nav {
        background-color: #000000;
        width: 100%;
        height: auto;
    }

    nav ul {
        display: flex;
        list-style: none;
        padding: 10px;
        margin-left: 500px;
        text-align: center;
    }

    nav ul li a {
        margin-left: 40px;
        text-decoration: none;
        font-size: 16px;
        text-transform: uppercase;
        color: rgb(7, 197, 255);
        text-align: center;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }
</style>