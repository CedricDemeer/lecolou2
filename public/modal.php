<?php foreach ($page->ateliers as $atelier) : ?>
<div id="modal_overlay_<?= $atelier->id ?>" class="hidden fixed inset-0 bg-black bg-opacity-80 h-screen w-full justify-center items-start md:items-center pt-0 sm:pt-10 md:pt-0 z-40">
    <!-- modal -->
    <div id="modal<?= $atelier->id ?>" class="mb-10 max-w-screen-lg opacity-0 transform -translate-y-full scale-150 relative w-full sm:w-10/12 md:w-10/12 h-full pb-16 sm:pb-0 sm:h-5/6 md:h-3/4 bg-white rounded-xl shadow-lg transition-opacity duration-300">
        
        <!-- button close -->
        <button 
        onclick="openModal(false, '<?= $atelier->id ?>')"
        class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
        &cross;
        </button>
        <div class="my-0 h-full overflow-auto">
        
            <div class="h-96 flex">
                <img src="<?= $atelier->image->src ?>" alt="<?= $atelier->image->alt ?>" class="rounded-t-xl w-full object-cover">
            </div>
            <div class="jsbloc grid px-2 md:px-5 xl:px-8 2xl:px-10 pb-4 pt-4 rounded-b-xl bg-white text-center">
                <h2 class="Giddyup text-<?= $atelier->color ?> font-bold md:text-5xl text-3xl self-center"><?= $atelier->title ?></h3>
                <?php if($type == "ateliers") : ?>
                    <i class="text-<?= $atelier->color ?> font-bold text-lg"><?= $atelier->subtitle ?></i>
                <?php endif ?>
                
                <p class="text-lg mb-3 mt-4 text-left">
                <?= $atelier->text1 ?>
                <?php if(isset($atelier->text2) && $atelier->text2 != "") : ?>
                    <br>
                    <?= $atelier->text2 ?>
                <?php endif ?>
                </p>
                <?php if($type == "ateliers") : ?>
                    <p class="text-center text-<?= $atelier->color ?> font-bold text-xl"><i class=""><?= $atelier->public ?></i></p>
                <?php endif ?>
                <?php if($type == "formations") : ?>
                    <i class="text-<?= $atelier->color ?> font-bold text-lg"><?= $atelier->subtitle ?></i>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
    
    <?php endforeach ?>
<!-- overlay modal-->