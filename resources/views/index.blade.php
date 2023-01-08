@extends('layouts.base', ['title'=>'Accueil'])
@section('content')

<header class="h-24 sm:h-38 md:h-32 w-full 
tracking-tighter font-bold text-sm sm:text-md md:text-lg italic
border-b-2 border-red-500
flex justify-between items-center">
    <div class="h-full w-24 ms:w-28 md:w-32
    flex justify-center items-center">
        <img        
                src="{{secure_asset('Img/blason.jpg')}}"
                alt="Blason"
                class="h-full w-full p-1">
    </div>
    <div class="h-full w-full">
       <div class="h-1/2 w-full flex">
            <div class="h-full w-full pl-2
            flex justify-start items-center">
                Les Villalonga de Toraixa
            </div>
            <div class="h-full w-56 md:w-96
            flex justify-center items-center">
                 @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="">Accueil membres</a>
                    @else
                        <a href="{{route('login')}}" class="ml-4">Connexion</a>
                        <a href="{{route('register')}}" class="ml-4 hidden">Enregistrement</a>
                    @endauth
                @endif
            </div>
        </div>
        <div class="h-1/2 w-full flex justify-center items-center text-xs sm:text-sm md:text-md lg:text-lg">
        Du XIIIe siècle à nos jour, la généalogie de la branche des Villalonga de Toraixa
        </div>
    <div>
   </div>
</header>
<section class="relative left-0 top-0 w-full ftext-sm lg:text-md text-justify italic font-bold flex flex-grow">
     <div class=" hidden md:flex h-full w-4/12 md:w-5/12
    flex flex-col ">
         <div class="h-1/2 w-full flex flex-col justify-center items-center p-1">
           <img src="{{secure_asset('Img/balancelle.jpg')}}" alt="Balancelle" class="h-3/4 w-full lg:w-3/4"><br/><span class="text-sm lg:texte-md text-center italic font-bold ">Balancelle en aller simple vers Alger pour <br/>Pedro et Margarita Villalonga-Villalonga (1842)</span>
        </div>
         <div class="h-1/2 w-full flex flex-col justify-center items-center p-1">
           <img src="{{secure_asset('Img/BouzareaVillage.jpg')}}" alt="Bouzareah" class="h-1/2 w-full lg:w-3/4"><br/><span class="text-sm lg:texte-md text-center italic font-bold">La Bouzareah où ils s'installèrent</span>
        </div>
    </div>
    <div class="h-full w-full
    text-sm lg:texte-md text-justify italic">
        <div class="w-full h-auto pt-6 
        flex justify-center items-center">
            Le 21 du mois de septembre<br/>
            L’an de l’annonciation du seigneur 1561
        </div>
         <div class="h-12 w-full flex justify-center items-center">
                @include('flash-message')
        </div>
        <div class="w-full h-auto p-2
         text-sm lg:texte-md text-justify italic
        flex flex-col justify-center items-center">
            <div class="flex">
            <span class="text-3xl text-red-600 -mt-3">A</span>u nom de dieu éternel et de sa grâce divine, Sachent tous que moi Jean VIDAL du Raffelet laboureur, habitant de la ville et juridiction de Mahon gracieusement et sereinement je donne en mariage et comme épouse légitime par parole de présent demoiselle Lucia ma fille et de dame Antonina mon épouse.<br/>A vous Sérafin Villalonga laboureur fils d’honorable Pere Villalonga de Toraixa et de dame Saurina son épouse habitants de la ville, de Mahon, et je vous donne en dot comme dot et à titre de dot de ma dite fille deux cents livres en monnaie de Mahon ; pour que ces deux cents livres ma susdite fille les ait avec vous, les garde, les possède et s’en serve ... 
            </div>
            <div class="hidden lg:flex">
            <span class="text-3xl text-red-600 -mt-3">P</span>our cela moi susdit Sérafin Villalonga époux plus haut nommé recevant et acceptant totalement la susdite demoiselle Lucie comme ma future épouse légitime, par les dites paroles de présent je me donne personnellement comme son époux véritable et légitime ; et gracieusement je confesse et reconnais en vérité avoir eu et reçu de vous les susdites deux cents livres de la dot en question ; d’où renonçant par exception que les dites…non comptées, non reçues et par vous non reçues et.dommages et action en justice ...
            </div>
        </div>
        <div class="w-full h-1/6
        text-sm lg:texte-md text-justify italic 
        flex flex-col justify-center items-center" style="overflow-y: hidden">
            <div class="px-2 flex justify-center items-center w-full h-1/2">
                 NB:&nbsp Extrait du contrat de mariage de Seraphin Villalonga de Toraixa (Généalogie de la branche des Villalonga de Toraixa)
            </div>
        </div>
    </div>
    <div class="hidden md:flex flex-col justify-center items-center h-full w-4/12 md:w-5/12 p-1">
        <img src="{{secure_asset('Img/ToraixaVell.jpg')}}" alt="toraixa" class="h-full w-full md:h-3/4"><br/><span class="text-sm lg:texte-md text-center italic font-bold">Toraixa Vell d'où ils venaient (Es Castell)</span>
    </div>
    
</section>
<footer class="absolute left-0 bottom-0 h-12 w-full bg-black text-white italic text-xs lg:text-md flex ">
        <div class="w-1/2 h-full
        flex justify-center items-center">
            <span class="mb-2"> Copyright JPV-2022-V2</span>
        </div>
        <div class="w-1/2 h-full
        flex justify-center items-center">
            <a href="" class="mb-2">
            Contactez-nous
            </a>
        </div> 
    </footer>  
@stop
