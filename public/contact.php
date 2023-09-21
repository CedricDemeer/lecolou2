
<?php 
$title = "Contact";
$description = "formulaire pour contacter l'écolou des petits petons";

require('include/head.php');

include('include/header.php');?>

<main> 
    <div class="header-bg-18 headerbg anim-apparition"></div>
    <div data-aos="fade-up" class="bg-gray-100 w-full md:max-w-2xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl mx-auto rounded-xl shadow-xl px-2 md:px-4 lg:px-14 xl:px-6 2xl:px-14 text-center py-10 mt-9 mb-16" >
        <div class="bg-white rounded-3xl py-10">
            <h1 class="Giddyup font-bold md:text-6xl text-5xl text-fuchsia-500 pb-2">Contact</h1>
            <span class="text-xl my-5 text-fuchsia-500">Pour tous renseignements et élaboration de projet ou devis personnalisé n’hésitez pas à nous contacter !</span>
        </div>            
        <hr class="my-10 h-1 bg-fuchsia-500">
        
        
        <form method="post" action="#">
            <div class="bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-amber-200 to-amber-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                    </div>
                    <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                        <div class="max-w-md mx-auto">
                            <div>
                                <h1 class="text-2xl font-semibold lg:w-96">Formulaire de contact</h1>
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    
                                    <div class="relative">
                                        <input autocomplete="off" id="name" name="name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Nom" />
                                        <label for="name" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Nom</label>
                                    </div>
                                    <div class="relative">
                                        <input autocomplete="off" id="prenom" name="prenom" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="prenom" />
                                        <label for="prenom" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Prenom</label>
                                    </div>
                                    <div class="relative">
                                        <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Adresse Mail" />
                                        <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Adresse Mail</label>
                                    </div>
                                    <div class="relative">
                                        <input autocomplete="off" id="phone" name="Phone" type="tel" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Telephone" />
                                        <label for="Phone" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Télephone</label>
                                    </div>
                                    <div class="relative">
                                        <textarea id="textarea" rows="3" name="textarea" type="text" class="peer placeholder-transparent h-32 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Message" /></textarea>
                                        <label for="textarea" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Message</label>
                                    </div>
                                    
                                    <div class="relative">
                                        <label for="message" class="flex place-content-center">Captcha<img src="./class/captcha.php" style="vertical-align: bottom;" class="pl-2"/></label>                                        
                                    </div>
                                    <div class="relative">
                                        <input autocomplete="off" id="Captcha" name="Captcha" type="Captcha" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Captcha" />
                                        <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Captcha</label>
                                    </div>
                                    
                                    <div class="relative">
                                        <button class="bg-blue-500 text-white rounded-md px-2 py-1" id="BtnSubmitCnt">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div> 
</main>


<?php include('include/footer.php');

?>