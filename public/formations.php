<?php require('class/ecolou.php'); 
$ecolou = new lecolou();
$page = $ecolou->getAteliersType("formation");
$title = $page->title;
$description = $page->description;
$type = "formations";
require('include/head.php');

include('include/header.php');?>
<main> 
    <div class="header-bg-18 headerbg anim-apparition"></div>
    <div data-aos="fade-up" class="bg-gray-100 w-full md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl mx-auto rounded-xl shadow-xl px-2 md:px-4 lg:px-14 xl:px-6 2xl:px-14 text-center py-10 mt-9 mb-16" >
        <div class="bg-white rounded-3xl py-10">
            <h1 class="Giddyup font-bold md:text-6xl text-5xl text-<?= $page->color ?> pb-2"><?= $page->title ?></h1>
            <span class="text-xl my-5 text-<?= $page->color ?>">
            <?= $page->subtitle ?><br>
                <?= $page->subtitle2 ?>
            </span>
        </div>            
        <hr class="my-10 h-1 bg-<?= $page->color ?>">
        <div class="grid xl:grid-cols-2 gap-6">
        <?php //boucle sur les ateliers 
                    //recup des ateliers bien etre
            ?>
            <?php foreach ($page->ateliers as $atelier) : ?>
            <div class="jsatelier my-2" data-aos="fade-up" data-name="<?= $atelier->name ?>" id="<?= $atelier->id ?>">
                
                <div class="h-72 flex">
                    <img src="<?= $atelier->image->src ?>" alt="<?= $atelier->image->alt ?>" class="rounded-t-xl w-full object-cover">
                </div>
                <div class="jsbloc grid px-2 md:px-5 xl:px-8 2xl:px-10 pb-4 pt-4 rounded-b-xl bg-white border-x-2 border-b-2 border-<?= $atelier->color ?>">
                    <h2 class="Giddyup text-<?= $atelier->color ?> font-bold md:text-5xl text-4xl self-center"><?= $atelier->title ?></h3>
                    <p class="text-lg mb-3 mt-4 text-center">
                    <?= $atelier->text1 ?>
                    <?php if(isset($atelier->text2) && $atelier->text2 != "") : ?>
                        <br>
                        <?= $atelier->text2 ?>
                    <?php endif ?>
                    </p>
                    <p class="text-center text-<?= $atelier->color ?> font-bold text-2xl"><i class=""><?= $atelier->subtitle ?></i></p>
                </div>
            </div>
            <?php endforeach ?>
            <?php //Fin de la boucle sur les ateliers ?>
        
        </div>
    </div> 
</main>
<?php include('modal.php'); ?>

<?php include('include/footer.php');

?>