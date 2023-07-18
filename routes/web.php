<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'mangaList' => [
            [
                'title' => 'One Piece',
                'author' => 'Eiichiro Oda',
                'plot' => 'One Piece è la storia di Luffy, un ragazzo che in un mondo dominato dagli oceani vuole diventare il Re dei Pirati, «l’uomo più libero di tutti i mari». Per farlo inizia il suo viaggio sulla Grand Line, la rotta più difficile che solo una nave pirata è riuscita a raggiungere. Nel corso del viaggio imbarca compagni che condividono con lui questo sogno, attraversa isole che si trovano nel cielo o sul fondo del mare, si mette contro il governo mondiale, gli imperatori dei mari, gli ammiragli della marina e scopre i segreti più cupi sulla storia dell’uomo. Solo chi finisce la Grand Line può trovare il One Piece, un tesoro enorme lasciato da Gol D. Roger, l’ultimo Re dei Pirati.'
            ],
            [
                'title' => 'Naruto',
                'author' => 'Masashi Kishimoto',
                'plot' => 'Orfano dalla nascita, Naruto Uzumaki è un ninja del Villaggio della Foglia, a cui piace fare dispetti in giro per attirare l\'attenzione. Sebbene abbia solo dodici anni, già sogna di diventare un Hokage, ossia il ninja a capo del villaggio. Da sempre bambino emarginato, Naruto scopre quasi per caso la ragione per la quale tutti lo tengono a distanza: dentro di lui è sigillato lo spirito della Volpe a Nove Code, un gigantesco demone sovrannaturale che anni addietro aveva raso al suolo la Foglia. Dopo essere entrato all\'Accademia ninja, Naruto viene inserito nel gruppo 7, composto da Sasuke Uchiha e Sakura Haruno, e guidato dal maestro Kakashi Hatake. Fra molteplici avventure in paesi dalle diverse culture e combattimenti avvincenti contro avversari pericolosi, inizia per Naruto un viaggio alla scoperta di se stesso, delle sue origini, del valore dell\'amicizia e dell\'onore di essere ninja.'
            ],
            [
                'title' => 'Attack on Titan',
                'author' => 'Hajime Isayama',
                'plot' => 'Diverse centinaia di anni fa, la razza umana fu quasi sterminata dai giganti. Si racconta di quanto questi fossero alti, privi di intelligenza e affamati di carne umana; peggio ancora, essi sembra divorassero umani più per piacere che per necessario sostentamento. Una piccola percentuale dell\'umanità però sopravvisse asserragliandosi in una città circondata da mura estremamente alte, anche più alte del più grande di giganti. Eren è un adolescente che vive in questa città, dove non si vede un gigante da oltre un secolo, ma presto un orrore indicibile si palesa alle sue porte, ed un gigante più grande di quanto si sia mai sentito narrare, appare dal nulla abbattendo le mura ed imperversando assieme ad altri suoi simili fra la popolazione. Eren, vinto il terrore iniziale, si ripromette di eliminare ogni singolo gigante, per vendicare l\'umanità.'
            ],
            [
                'title' => 'Dragon Ball',
                'author' => 'Akira Toriyama',
                'plot' => 'Goku è un bambino fuori dal comune, ha un forza straordinaria ed una lunga coda da scimmia. Il nostro eroe è orfano e non ha mai conosciuto i suoi genitori, ha sempre vissuto con il nonno. Inizia la nostra storia, Goku ormai solo, custodisce gelosamente l’unico ricordo del nonno recentemente morto, una sfera sulla quale sono disegnate quattro stelle. La vita di Goku cambia quando una ragazza di nome Bulma gli chiede di aiutarlo a ritrovare le sette sfere del drago (quando le sette sfere si riuniscono appare un drago che esaudirà qualsiasi desiderio), una delle quali è proprio il ricordo del nonno, la quarta sfera. Il nostro protagonista accetta di aiutare Bulma, e l’epopea di Dragonball ha inizio.'
            ],
            [
                'title' => 'Chainsaw Man',
                'author' => 'Tatsuki Fujimoto',
                'plot' => 'Denji è povero e molto indebitato, tanto che arriva al punto di vendere alcune parti del suo corpo: senza famiglia, senza futuro e devil hunter per necessità. L’unico amico di Denji è il cane-motosega Pochita, un demone che, davanti a un’altra crudele beffa del fato, cambierà per sempre la vita del suo padrone.'
            ],
            [
                'title' => 'The Seven Deadly Sins',
                'author' => 'Nakaba Suzuki',
                'plot' => 'I Sette Peccati Capitali, un gruppo di cavalieri malvagi che tentò di rovesciare il regno di Britannia, vennero dichiarati tutti morti, ma alcuni sostengono che siano ancora in vita. Dieci anni dopo, i Paladini, guerrieri scelti del regno, orchestrano un colpo di stato e spodestano il re, diventando i nuovi sovrani. Elizabeth, l\'unica figlia del re, parte per un viaggio alla ricerca dei Sette Peccati Capitali, con l\'intenzione di reclutarli e riprendersi il suo regno.'
            ],
        ]
    ];

    return view('home', $data);
})->name('homepage');
