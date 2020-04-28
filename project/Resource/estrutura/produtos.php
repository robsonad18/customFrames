<?php $imagens = \App\Image::get() ?>
<main>
    <section>
        <h1>VOCÊ PRECISA DISSO</h1>
        <div class="divFotos">
            <?php for ($i = 0; $i <= count($imagens['image']); $i++) : ?>
            <div class="fotoProduto">
                <div class="foto1">
                    <div class="imgProduto">
                        <a href="<?=ORIGEM?>/Resource/estrutura/detalhe-produto.php?id=<?=$imagens['image'][$i]['id']?>">
                            <img src="<?= ORIGEM ?>/<?=$imagens['image'][$i]['item']?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <?php endfor ?>
        </div>
    </section>
</main>