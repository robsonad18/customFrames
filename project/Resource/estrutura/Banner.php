<div id="AppBanner"></div>

<script>
    new Vue({
        el: '#AppBanner',
        data() {
            return {
                banner: {
                    img: 'Resource/image/banner-bia.jpeg',
                    nome: 'Banner Home',
                    link: 'https://www.youtube.com/channel/UCAuwsXc5G2Z-YHLs-Jslk0A',
                    seen: true,
                    target: '_blank'
                }
            }
        },
        template: `
        <div class="banner">
            <a :href="banner.link" :target="banner.target">
                <img :src="banner.img" :alt="banner.nome">
            </a>
        </div>`
    });
</script>

<style>
    .banner img {
        height: 420px;
        width: 100%;
    }

    .banner img {
        cursor: pointer;
    }
</style>