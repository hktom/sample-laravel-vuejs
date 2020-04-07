<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Infrastructure écologique du territoire',
                'ca_principal' => 'CA01',
                'image' => NULL,
                'created_at' => '2020-03-30 19:11:11',
                'updated_at' => '2020-04-06 11:11:39',
                'vision' => '<p>VISION de la Strat&eacute;gie Biodiversit&eacute; : en 2030, le d&eacute;placement des esp&egrave;ces sauvages est assur&eacute; dans l&rsquo;ensemble du bassin genevois par une infrastructure &eacute;cologique de qualit&eacute;, prise en compte en amont de tout projet, afin d&rsquo;&eacute;viter ou de compenser sys t&eacute;matiquement leurs impacts n&eacute;gatifs. Pour cela, les &eacute;changes au sein des administrations et avec les partenaires civils sont devenus la r&egrave;gle, y compris au niveau transfrontalier.</p>',
                'intro' => NULL,
                'context' => '<p>On appelle infrastructure &eacute;cologique le r&eacute;seau constitu&eacute; par :<br />
&bull; les r&eacute;servoirs de biodiversit&eacute;, les espaces o&ugrave; les esp&egrave;ces prosp&egrave;rent (r&eacute;serves<br />
naturelles, for&ecirc;ts, cours d&rsquo;eau, zones encore riches en nature),<br />
&bull; les relais (espaces faiblement urbanis&eacute;s ou exploit&eacute;s), o&ugrave; les esp&egrave;ces peuvent<br />
s&eacute;journer temporairement,<br />
&bull; les corridors biologiques, qui relient les espaces pr&eacute;c&eacute;dents et permettent<br />
aux esp&egrave;ces de se d&eacute;placer.</p>

<p>L&rsquo;infrastructure &eacute;cologique int&egrave;gre donc les diff&eacute;rentes trames naturelles (sous-<br />
r&eacute;seaux), notamment :<br />
&bull; la trame verte (r&eacute;seau de for&ecirc;ts, arbres, haies),<br />
&bull; la trame bleue (r&eacute;seau des cours d&rsquo;eau et du lac),<br />
&bull; la trame jaune (r&eacute;seau des terres agricoles),<br />
&bull; la trame noire (r&eacute;seau b&eacute;n&eacute;ficiant de l&rsquo;obscurit&eacute; nocturne).</p>

<p>Les Objectifs d&rsquo;Aichi de la Convention sur la diversit&eacute; biologique des Nations-<br />
Unies, ratifi&eacute;e en 1994 par la Suisse, engagent &agrave; prot&eacute;ger 17% de r&eacute;servoirs de<br />
biodiversit&eacute;, soit les milieux naturels les plus riches et fonctionnels en biodiversit&eacute;.<br />
Actuellement, 10% du territoire cantonal peuvent &ecirc;tre consid&eacute;r&eacute;s comme<br />
b&eacute;n&eacute;ficiant d&rsquo;une gestion appropri&eacute;e et d&rsquo;une protection suffisante pour garantir<br />
leur fonctionnalit&eacute; et p&eacute;rennit&eacute; : on les appelle aussi &ldquo;zones nodales&rdquo;. La qualit&eacute;<br />
&eacute;cologique d&rsquo;autres surfaces d&eacute;j&agrave; sous protection ou conventionn&eacute;es doit encore<br />
&ecirc;tre am&eacute;lior&eacute;e.</p>

<p>Par ailleurs, le Forum Biodiversit&eacute; Suisse et la communaut&eacute; scientifique ont identifi&eacute;<br />
qu&rsquo;il fallait aussi au moins 13% d&rsquo;aires naturelles pour relier entre elles les zones &agrave;<br />
haute biodiversit&eacute; et permettre le d&eacute;placement des esp&egrave;ces sur le territoire.</p>

<p>Ainsi, pour que l&rsquo;infrastructure &eacute;cologique soit fonctionnelle et qu&rsquo;elle puisse fournir<br />
les services &eacute;cosyst&eacute;miques n&eacute;cessaires &agrave; la soci&eacute;t&eacute;, il faut qu&rsquo;elle occupe au<br />
minimum 30% (17%+13%) du territoire cantonal. Mais, le restant des espaces<br />
naturels ou semi-naturels ne doit pas &ecirc;tre n&eacute;glig&eacute;s par ailleurs.</p>

<p>Pour atteindre ces 30% de territoire prioritaire pour la biodiversit&eacute;́, deux outils de planification<br />
seront int&eacute;gr&eacute;s dans le Plan directeur cantonal :</p>

<p>- Une carte de l&rsquo;infrastructure &eacute;cologique &agrave; maintenir et &agrave; d&eacute;velopper (fig. 1). Elle indique les<br />
p&eacute;rim&egrave;tres administratifs, les &ldquo;r&eacute;servoirs de biodiversit&eacute;&rdquo;, les zones relais et les corridors<br />
biologiques fonctionnels ou devant l&rsquo;&ecirc;tre. Elle permet d&rsquo;identifier la situation actuelle et &agrave;<br />
obtenir, et ainsi de fixer les objectifs &agrave; atteindre (quantitativement et g&eacute;ographiquement).<br />
- Une carte de diagnostic de l&rsquo;infrastructure &eacute;cologique (fig. 2). Elle est issue de l&rsquo;agr&eacute;gation<br />
des inventaires d&rsquo;esp&egrave;ces de la flore et de la faune, de la r&eacute;partition des milieux naturels,<br />
ainsi que des analyses de connectivit&eacute; et des services &eacute;cosyst&eacute;miques fournis par la<br />
biodiversit&eacute;. Avec une r&eacute;solution spatiale de 25x25 m&egrave;tres, cette carte attribue &agrave; chaque<br />
pixel du territoire cantonal une valeur situ&eacute;e entre 1 (faible valeur biologique) et 100 (forte<br />
valeur biologique).<br />
Les plus fortes valeurs permettent donc d&rsquo;identifier &agrave; quel endroit il faut d&eacute;velopper en<br />
priorit&eacute; l&rsquo;infrastructure &eacute;cologique &agrave; maintenir et &agrave; d&eacute;velopper, mais donne aussi la valeur<br />
en biodiversit&eacute; partout sur le canton.<br />
Cette carte de diagnostic a &eacute;t&eacute; notamment con&ccedil;ue pour identifier les meilleurs 17%+13% du<br />
territoire du point de vue biologique. Ces &laquo; meilleurs pixels &raquo; sont recalcul&eacute;s &agrave; chaque mise<br />
&agrave; jour de la carte ; il s&rsquo;agit donc d&rsquo;un outil dynamique pour tenir compte de la biodiversit&eacute;<br />
dans la planification et l&rsquo;am&eacute;nagement du territoire. Elle permet aussi de v&eacute;rifier l&rsquo;atteinte<br />
des objectifs fix&eacute;s. Une storymap interactive permet de consulter cette carte sur internet :<br />
https://www.ge.ch/dossier/geneve-engage-biodiversite-0</p>',
            'to_know' => '<p>La carte de diagnostic de l&rsquo;infrastructure &eacute;cologique a d&eacute;j&agrave; &eacute;t&eacute; r&eacute;alis&eacute;e au niveau cantonal.<br />
Elle sera mise &agrave; jour annuellement sur la base de nouvelles observations, &eacute;tendue au Grand<br />
Gen&egrave;ve, et am&eacute;lior&eacute;e au niveau de sa r&eacute;solution spatiale (1.1). La cartographie de la trame<br />
noire, disponible depuis octobre 2019, indique les sites dans lesquels l&rsquo;obscurit&eacute;́ nocturne<br />
devrait &ecirc;tre pr&eacute;serv&eacute;e ou restaur&eacute;e ; cette carte devra &eacute;galement &ecirc;tre maintenue &agrave; jour (1.4).</p>',
            'to_enrich' => '<p>La carte cantonale de &ldquo;diagnostic de l&rsquo;infrastructure &eacute;cologique&rdquo; &ndash; int&eacute;gr&eacute;e au Plan directeur<br />
cantonal en 2019 &ndash; sera transcrite dans les plans directeurs communaux et d&rsquo;autres<br />
instruments de planification de l&rsquo;am&eacute;nagement du territoire en 2020 (1.3). Cette carte<br />
dynamique permet d&rsquo;ores et d&eacute;j&agrave; de prioriser les parcelles &agrave; pr&eacute;server et celles &agrave; assainir<br />
pour faciliter le d&eacute;placement des esp&egrave;ces (p.ex. en facilitant le franchissement des routes).<br />
La confrontation de la cartographie de la trame noire &agrave; la r&eacute;alit&eacute; de terrain a r&eacute;v&eacute;l&eacute; les zones<br />
de conflits potentiels entre l&rsquo;&eacute;clairage public ou priv&eacute; et les continuums noirs; l&rsquo;extinction<br />
ou l&rsquo;adaptation de lampadaires am&eacute;liorera la trame noire cantonale (1.5). Afin d&rsquo;assurer le<br />
lien avec l&rsquo;espace transfrontalier, les &ldquo;contrats territoires &ldquo; ou corridors , int&eacute;gr&eacute;s au Projet<br />
d&rsquo;agglom&eacute;ration Franco-Valdo-Genevoise, seront aussi renforc&eacute;s (1.6).</p>',
            'to_value' => '<p>Dans une optique de transition &eacute;cologique, il est crucial de porter &agrave; la connaissance du<br />
public, mais aussi sp&eacute;cifiquement aupr&egrave;s de nombreux partenaires (urbanistes, architectes,<br />
agriculteurs, etc.), les notions d&rsquo;infrastructure &eacute;cologique et de services &eacute;cosyst&eacute;miques,<br />
ainsi que d&rsquo;expliquer l&rsquo;importance de leur pr&eacute;servation et de leur d&eacute;veloppement (1.2).<br />
Il s&rsquo;agira aussi de promouvoir le d&eacute;ploiement de la trame noire aupr&egrave;s de diff&eacute;rentes<br />
entit&eacute;s: d&eacute;partements de l&rsquo;&Eacute;tat de Gen&egrave;ve, communes, zones industrielles et artisanales,<br />
et particuliers (1.5).</p>',
        ),
        1 => 
        array (
            'id' => 2,
            'name' => 'Sites protégés et réserves naturelles',
            'ca_principal' => 'CA02',
            'image' => NULL,
            'created_at' => '2020-03-30 19:11:19',
            'updated_at' => '2020-04-06 12:19:59',
            'vision' => 'VISION de la Stratégie Biodiversité : en 2030, le
canton abrite un ensemble de réservoirs de biodi-
versité protégés sur 17% de son territoire. Ils sont
fonctionnels grâce à une mise en réseau et à une
gestion active garantissant la qualité de leurs hab-
itats naturels. Ce patrimoine offre une opportunité
de découverte pour la population genevoise dans
le respect de ses valeurs naturelles.',
            'intro' => NULL,
            'context' => NULL,
            'to_know' => 'En se basant notamment sur la carte de planification de l’infrastructure écologique
, les milieux et habitats d’importance régionale à locale seront identifiés et
recensés. Leurs pérennité et fonctionnalité seront assurées',
            'to_enrich' => 'Pour atteindre l’objectif de 14% du territoire en réservoirs de biodiversité, selon les
possibilités et opportunités, les milieux et habitats d’importance locale à régionale
recensés seront acquis et/ou pérennisés . Dans les sites naturels déjà protégés,
les plans de gestion seront actualisés et leur mise en œuvre renforcée . Pour
mieux répartir les responsabilités d’entretien des sites naturels – et pour une
meilleure appropriation de ceux-ci par la population – la gestion de certains de
ces sites pourra être confiée à d’autres acteurs que le Service de la biodiversité de
l’OCAN . Pour accompagner le développement de notre région, la surveillance
du patrimoine naturel et de l’aire agricole sera renforcée .',
            'to_value' => 'La communication à propos des sites protégés et l’aménagement de ceux-ci seront
renforcés (voir également l’action ). Un site web sera aussi créé; il présentera
notamment les nombreuses possibilités de découvrir la biodiversité locale (voir
également l’action ).',
        ),
        2 => 
        array (
            'id' => 3,
            'name' => 'Forêt',
            'ca_principal' => 'CA03',
            'image' => NULL,
            'created_at' => '2020-03-30 19:11:28',
            'updated_at' => '2020-04-06 12:21:46',
            'vision' => 'VISION de la Stratégie Biodiversité : en 2030, la forêt
genevoise couvre toujours 12% du territoire genevois
et bénéficie d’une gestion favorable à la biodiversité.
Les populations d’ongulés sont présentes,
maintenues à des niveaux compatibles avec le
renouvellement de la forêt. Les activités récréatives
et l’exploitation forestière sont encouragées en
garantissant la préservation du patrimoine.',
            'intro' => NULL,
            'context' => '<p>En r&eacute;vision en 2019-2020, le Plan directeur forestier couvre l&rsquo;ensemble des fonctions<br />
li&eacute;es &agrave; la for&ecirc;t et sa biodiversit&eacute;. Une vision multifonctionnelle et int&eacute;grative qui<br />
laisse une large place &agrave; la protection de la nature : 16,5 % de la surface foresti&egrave;re<br />
du canton est class&eacute;e en r&eacute;serve foresti&egrave;re et naturelle, et 9.2 % suppl&eacute;mentaire<br />
en plan de site. C&rsquo;est donc plus d&rsquo;un quart de la for&ecirc;t qui est d&eacute;volu prioritairement<br />
&agrave; la nature, sans compter les nombreuses interventions en faveur de la biodiversit&eacute;<br />
dans le cadre des travaux de gestion courants.</p>

<p>La politique de conservation des for&ecirc;ts et la gestion foresti&egrave;re pratiqu&eacute;es &agrave; Gen&egrave;ve<br />
permettent une int&eacute;gration fine des prestations des for&ecirc;ts sur toutes leurs surfaces<br />
en ne n&eacute;gligeant aucune des facettes dont les esp&egrave;ces sauvages ont besoin :<br />
arbres habitat, &icirc;lots de s&eacute;nescence, r&eacute;serve foresti&egrave;re naturelle, accroissement de<br />
la quantit&eacute; de bois mort, entretien et cr&eacute;ation de milieux particuliers, protection et<br />
structuration des lisi&egrave;res, continuit&eacute; biologique, etc. Toutes ces mesures sont mises<br />
en &oelig;uvre et suivies depuis plusieurs dizaines d&rsquo;ann&eacute;es. La Strat&eacute;gie biodiversit&eacute;<br />
r&eacute;affirme des orientations et actions d&rsquo;ores et d&eacute;j&agrave; bien ancr&eacute;es.</p>

<p>Les fiches th&eacute;matiques du plan directeur forestier en lien avec la biodiversit&eacute; sont :<br />
&bull; Biodiversit&eacute; en for&ecirc;t<br />
&bull; Concept cantonal des r&eacute;serves foresti&egrave;res<br />
&bull; Compenser les d&eacute;frichements<br />
&bull; Lisi&egrave;res<br />
&bull; Sylviculture</p>

<p>Afin d&rsquo;assurer une vision globale des mesures en faveur de la biodiversit&eacute; qui<br />
n&rsquo;alourdisse pas inutilement le Plan Biodiversit&eacute;, seule une vision synth&eacute;tique<br />
des actions en lien avec la biodiversit&eacute; sont pr&eacute;sent&eacute;es ci-dessous sous forme de<br />
tableau. Le lecteur int&eacute;ress&eacute; &agrave; plus de d&eacute;tails pourra consulter le plan directeur<br />
forestier.</p>

<p>&Agrave; noter que le plan directeur forestier aborde aussi d&rsquo;autres champs d&rsquo;application du Plan<br />
Biodiversit&eacute;, comme l&rsquo;infrastructure &eacute;cologique, la faune et la flore, la sensibilisation, l&rsquo;espace<br />
b&acirc;ti, les outils analytiques, de suivi, administratifs et politiques.</p>

<p>&nbsp;</p>

<p>Si les actions favorables &agrave; la biodiversit&eacute; en for&ecirc;t sont d&rsquo;ores et d&eacute;j&agrave; int&eacute;gr&eacute;es dans le budget<br />
de la politique &laquo; for&ecirc;ts &raquo; et ne n&eacute;cessitent pratiquement pas de ressources financi&egrave;res<br />
suppl&eacute;mentaires pour r&eacute;aliser les travaux et &eacute;tudes, un renforcement des comp&eacute;tences<br />
(de niveau ing&eacute;nieur) et des ressources humaines est n&eacute;cessaire, afin d&rsquo;assurer un<br />
d&eacute;veloppement, une mise en &oelig;uvre et un suivi coh&eacute;rent et efficace de l&rsquo;ensemble des<br />
mesures.</p>',
            'to_know' => 'Les sanctuaires forestiers feront l’objet d’un suivi scientifique, tout comme la biodiversité
spécialisée qui habite le bois mort. Le réseau d’inventaires dendrométriques et botaniques,
qui inclut les espèces de chênes, sera renforcé.',
            'to_enrich' => 'Le Plan directeur forestier prévoit la production d’une documentation spécifique aux espèces
devant être soutenues en forêt pour des raisons de biodiversité, ainsi que la publication
d’une directive concernant les défrichements et leurs compensations. Il prévoit aussi la
stabilisation et l’amélioration de la chênaie dans les forêts privées, et le développement d’un
observatoire des lisières, en particulier urbaines. Le Plan directeur forestier met également
en évidence l’intérêt de réduire le fractionnement et d’augmenter la surface du sanctuaire
des Grands Bois de Satigny, en convainquant les propriétaires privés de mettre leur parcelle
à disposition, notamment via des échanges entre leurs parcelles privées enclavées et des
parcelles propriétés de l’Etat sises à l’extérieur du périmètre du sanctuaire.',
            'to_value' => 'Le Plan directeur forestier prévoit aussi la préparation d’un Concept précisant les moyens
d’information à utiliser sur le terrain, notamment par la réduction du nombre de panneau
en forêt.',
        ),
        3 => 
        array (
            'id' => 4,
            'name' => 'Arbres',
            'ca_principal' => 'CA04',
            'image' => NULL,
            'created_at' => '2020-03-30 19:11:35',
            'updated_at' => '2020-04-06 12:22:48',
            'vision' => 'VISION de la Stratégie Biodiversité : en 2030, le
canton abrite un patrimoine arboré de haute valeur
pour la biodiversité grâce à une diversité de taille et
d’âge des arbres, à la campagne comme en ville.
L’urbanisation prévoit suffisamment de place pour re-
nouveler les grands arbres. Les propriétaires et ges-
tionnaires des espaces arborés sont soutenus dans
leurs efforts pour maintenir les arbres remarquables
et les sujets âgés.',
            'intro' => NULL,
            'context' => NULL,
            'to_know' => 'L’Inventaire cantonal des arbres sera modernisé et systématisé pour mieux suivre
l’évolution du patrimoine arboré, y compris lors des abattages ou lors de la mise
en place des compensations .',
            'to_enrich' => 'Pour lutter contre les îlots de chaleur et améliorer la qualité du cadre de vie en
ville, une Stratégie cantonale d’arborisation de l’aire urbaine ainsi que des projets
pilotes d’arborisation seront mis en œuvre; des fiches d’aide à la décision en matière
d’aménagement (en lien avec les changements climatiques) seront également
publiées .
Les réseaux en sous-sol devront être conçus et réalisés en laissant une place
suffisante pour les besoins en arborisation. Il convient d’accompagner l’évolution
des principes d’action des opérateurs réseau, afin que lors de travaux de réfection
(entretien lourd, changements) ou lors de la création de nouveaux réseaux, ces
derniers soient impérativement regroupés en dehors des zones arborisables en
surface, à savoir prioritairement sous les chaussées, et non sous les trottoirs, les
espaces publics et les espaces verts. Pour cela, il est prévu de réviser la législation
et de préciser les modes de financement de ces travaux en respectant les règles
de tarification des réseaux ; d’intégrer les enjeux d’arborisation dans la charte de
conception et de coordination des travaux en sous-sol; de mettre en œuvre des
projets pilotes exemplaires ; d’intégrer l’arborisation dans le plan directeur du sous-
sol pour l’ensemble du canton ; et d’actualiser les Directives arbres .',
            'to_value' => 'Les communes et grands propriétaires privés seront incités à préserver et renouveler
les arbres et cordons boisés dans l’aire agricole . En ce qui concerne les
arbres de grande valeur biologique et/ou paysagère (notamment en zone
urbaine et périurbaine), ils seront identifiés sur la base de la faune, flore et fonge
(ensemble des champignons) qu’ils abritent. Les propriétaires de ces arbres seront
accompagnés dans leurs démarches de conservation, et ces arbres singuliers
seront mieux identifiés et pris en compte dans les procédures de construction et
d’abattage .',
        ),
        4 => 
        array (
            'id' => 5,
            'name' => 'Cours d\'eau et lac',
            'ca_principal' => 'CA05',
            'image' => NULL,
            'created_at' => '2020-03-30 19:11:45',
            'updated_at' => '2020-04-06 12:23:35',
            'vision' => 'VISION de la Stratégie Biodiversité : en 2030, les
cours d’eau genevois abritent une faune et une flore
plus riches qu’aujourd’hui, grâce en particulier à la
gestion intégrée de l’eau par bassin versant et à une
collaboration transfrontalière efficace. Les activités
sociales autour des milieux aquatiques sont dével-
oppées dans le respect du patrimoine naturel.',
            'intro' => NULL,
            'context' => '<p>Les actions s&eacute;lectionn&eacute;es pour le Plan Biodiversit&eacute; 2020-2023 r&eacute;pondent d&rsquo;une part<br />
directement aux orientations du champ d&rsquo;application et, d&rsquo;autre part, correspondent<br />
&agrave; des actions nouvelles, ne figurant pas dans les autres documents de planification.<br />
En effet, de nombreuses actions favorables &agrave; la biodiversit&eacute; sont d&eacute;j&agrave; d&eacute;crites dans<br />
les documents de planification suivants :<br />
&bull; La planification strat&eacute;gique cantonale, d&eacute;coulant de la loi f&eacute;d&eacute;rale sur la protection<br />
des eaux, du 24 janvier 1991 (LEaux), est d&eacute;clin&eacute;e en quatre volets :<br />
o revitalisation des cours d&rsquo;eau,<br />
o assainissement du r&eacute;gime de charriage,<br />
o assainissement des &eacute;clus&eacute;es, et<br />
o r&eacute;tablissement de la migration du poisson.<br />
&bull; Les plans r&eacute;gionaux d&rsquo;&eacute;vacuation des eaux (PREE) et les plans g&eacute;n&eacute;raux d&rsquo;&eacute;vacuation<br />
des eaux (PGEE), d&eacute;coulant &eacute;galement de la LEaux, sont les outils de planification<br />
de l&rsquo;assainissement, respectivement &agrave; l&rsquo;&eacute;chelle des bassins versants hydrologiques<br />
et &agrave; l&rsquo;&eacute;chelle des communes. Ils d&eacute;finissent les mesures de gestion, d&rsquo;&eacute;vacuation et<br />
de traitement des eaux us&eacute;es et des eaux pluviales &agrave; r&eacute;aliser, permettant ainsi de<br />
limiter les pollutions et les atteintes au r&eacute;gime hydrologique des cours d&rsquo;eau, et de<br />
pr&eacute;server la sant&eacute; et la qualit&eacute; des milieux aquatiques.<br />
&bull; Les sch&eacute;mas de protection, d&rsquo;am&eacute;nagement et de gestion des eaux (SPAGE),<br />
d&eacute;coulant de la loi cantonale sur les eaux (LEaux-GE), planifient les actions de<br />
gestion int&eacute;gr&eacute;e des eaux par bassin versant. Les six SPAGE int&egrave;grent des plans<br />
d&rsquo;actions touchant &agrave; tous les th&egrave;mes li&eacute;s aux eaux, notamment : qualit&eacute; et quantit&eacute;<br />
des eaux de surface et des eaux souterraines, milieux naturels li&eacute;s aux cours d&rsquo;eau<br />
et trame bleue de l&rsquo;infrastructure &eacute;cologique. Ils sont r&eacute;&eacute;valu&eacute;s &agrave; tour de r&ocirc;le tous<br />
les 6 ans.<br />
&bull; Les programmes de renaturation, d&eacute;coulant aussi de la LEaux-GE, planifient les<br />
travaux de renaturation des cours d&rsquo;eau &agrave; r&eacute;aliser sur le canton sur 4 ou 5 ans, et<br />
ce depuis 1998.<br />
&bull; Les contrats transfrontaliers (ex. contrats de rivi&egrave;res, contrats corridors biologiques,<br />
contrat unique environnemental, contrats territoire espaces naturels sensibles)<br />
d&eacute;finissent, pour des zones &eacute;cologiquement li&eacute;es mais situ&eacute;es &agrave; cheval entre territoire<br />
genevois et fran&ccedil;ais, des plans d&rsquo;actions de part et d&rsquo;autre de la fronti&egrave;re, visant &agrave;<br />
am&eacute;liorer la fonctionnalit&eacute; biologique des cours d&rsquo;eau et de l&rsquo;infrastructure &eacute;cologique.</p>',
        'to_know' => 'Dans les cours d’eau, la toxicité des micropolluants sera évaluée (5.7) et la surveillance de
l’évolution des températures sera poursuivie (5.8). Une méthode d’identification des sites
aquatiques d’intérêt pour la biodiversité sera développée , et un état des lieux des apports
en microplastiques sera réalisé dans les principaux affluents du Léman .',
        'to_enrich' => 'Dans les cours d’eau, la toxicité des micropolluants sera évaluée (5.7) et la surveillance de
l’évolution des températures sera poursuivie (5.8). Une méthode d’identification des sites
aquatiques d’intérêt pour la biodiversité sera développée , et un état des lieux des apports
en microplastiques sera réalisé dans les principaux affluents du Léman .',
            'to_value' => NULL,
        ),
        5 => 
        array (
            'id' => 6,
            'name' => 'Aire agricole',
            'ca_principal' => 'CA06',
            'image' => NULL,
            'created_at' => '2020-03-30 19:11:56',
            'updated_at' => '2020-04-06 12:24:47',
            'vision' => 'VISION de la Stratégie Biodiversité : en 2030, la
campagne genevoise est préservée de l’urbanisation
et abrite une biodiversité riche et diversifiée, grâce
notamment à des surfaces de promotion de la biodi-
versité de qualité, à une utilisation réduite d’intrants
et un plus grand respect des sols. Les agriculteurs
sont soutenus dans leur travail, tant au niveau des
débouchés pour leur production (circuits courts) que
par des incitations en faveur de la biodiversité et du
paysage.',
            'intro' => NULL,
            'context' => '<p>Les actions positives pour la biodiversit&eacute; d&eacute;j&agrave; d&eacute;crites dans d&rsquo;autres documents<br />
ou politiques publiques concernent notamment:<br />
- Le Plan cantonal de la politique agricole en mati&egrave;re de paiements directs, et plus<br />
particuli&egrave;rement les programmes de promotion de la biodiversit&eacute;, de pr&eacute;servation<br />
des ressources naturelles et de qualit&eacute; du paysage (Ordonnance f&eacute;d&eacute;rale sur les<br />
paiements directs vers&eacute;s dans l&rsquo;agriculture) et son volet d&rsquo;application r&eacute;gional<br />
(Loi M 5 30 visant &agrave; promouvoir des mesures en faveur de la biodiversit&eacute; et de<br />
la qualit&eacute; du paysage en agriculture).<br />
- La vulgarisation agricole, en particulier le mandat confi&eacute; par l&rsquo;&Eacute;tat &agrave; AgriVul<br />
S&agrave;rl, pour ce qui concerne les orientations suivantes mentionn&eacute;es dans la<br />
Strat&eacute;gie Biodiversit&eacute; Gen&egrave;ve 2030: &laquo; Continuer &agrave; concilier production de biens<br />
alimentaires, viabilit&eacute; &eacute;conomique des entreprises agricoles et promotion de<br />
la biodiversit&eacute;, en garantissant les ressources n&eacute;cessaires; D&eacute;velopper les<br />
connaissances scientifiques et la compr&eacute;hension mutuelle entre les producteurs<br />
et les consommateurs de la valeur des liens entre les cultures, les milieux naturels<br />
et les esp&egrave;ces pour une meilleure prise en compte de la biodiversit&eacute;; Renforcer<br />
le conseil et la vulgarisation agricole au profit des producteurs sur la meilleure<br />
ad&eacute;quation entre production et biodiversit&eacute; gr&acirc;ce &agrave; des bonnes pratiques;<br />
Renforcer la fertilit&eacute; des sols gr&acirc;ce au d&eacute;veloppement de la biodiversit&eacute; &raquo;.<br />
- Le Rapport relatif &agrave; l&rsquo;utilisation de produits phytosanitaires en agriculture &agrave; Gen&egrave;ve<br />
et Catalogue des mesures f&eacute;d&eacute;rales et cantonales visant &agrave; la r&eacute;duction des<br />
risques et &agrave; l&rsquo;utilisation durable des produits phytosanitaires (Plan phytosanitaire<br />
cantonal), publi&eacute; en f&eacute;vrier 2018 par l&rsquo;OCAN.<br />
- Le mandat de l&rsquo;OPAGE en ce qui concerne les orientations suivantes mentionn&eacute;es<br />
dans la Strat&eacute;gie Biodiversit&eacute; Gen&egrave;ve 2030: &laquo; Faire mieux conna&icirc;tre la qualit&eacute; de<br />
la production genevoise et la diversit&eacute; des prestations fournies par l&rsquo;agriculture<br />
genevoise, y compris par des mesures volontaires pour renforcer les liens entre<br />
producteurs et consommateurs (go&ucirc;t, environnement, alimentation); Communiquer<br />
sur les avantages environnementaux d&rsquo;une consommation de produits locaux,<br />
dont les produits GRTA, en plus des enjeux sociaux ou g&eacute;ographiques; Poursuivre<br />
le soutien &agrave; la commercialisation des produits issus des modes de cultures<br />
propices &agrave; la biodiversit&eacute; &raquo;.</p>

<p>- MA-Terre (Maison de l&rsquo;Alimentation du territoire de Gen&egrave;ve), l&rsquo;association nouvellement<br />
cr&eacute;&eacute;e en ao&ucirc;t 2019 et regroupant des membres associatifs (agriculture, sant&eacute;, alimentation,<br />
social), des collectivit&eacute;s publiques et le monde acad&eacute;mique, a pour objectif de sensibiliser<br />
divers publics aux externalit&eacute;s positives de l&rsquo;alimentation issue de la production locale.<br />
Abordant l&rsquo;alimentation dans toute sa transversalit&eacute;, elle pourra apporter au public de<br />
pr&eacute;cieuses informations sur les liens entre alimentation et biodiversit&eacute;.</p>',
        'to_know' => 'Les papillons de jour, les orthoptères (criquets, sauterelles, grillons, etc.) et les oiseaux
continueront à être étudiés pour évaluer la biodiversité de l’aire agricole (6.1). Une
méthodologie unifiée sera par ailleurs élaborée pour suivre la vie biologique des sols (6.3).',
        'to_enrich' => 'Le suivi de la biodiversité dans l’aire agricole (6.1) aboutira à des adaptations de mesures
sur les surfaces de promotion de la biodiversité, voire à des modifications réglementaires.
Pour réduire l’emploi de produits phytosanitaires et promouvoir la biodiversité fonctionnelle,
celle participant à la lutte contre les insectes ravageurs dans les parcelles agricoles, les
auxiliaires des cultures seront surveillés de près (6.2), tandis qu’un programme spécifique
permettra d’optimiser l’enherbement des cultures spéciales afin de protéger et renforcer la
vie biologique du sol et limiter l’usage d’herbicides et le nombre de fauches (6.4).',
            'to_value' => 'Les résultats du suivi de la biodiversité de l’aire agricole seront largement communiqués
pour valoriser les efforts engagés par les agriculteurs (6.1). Les variétés de fruits, légumes
et céréales résistantes aux maladies – qui permettent de limiter l’utilisation de produits
phytosanitaires – seront promues auprès des producteurs, consommateurs et distributeurs
(6.5). Les anciennes variétés traditionnelles du territoire du Genevois seront recensées,
leur commercialisation promue et leur patrimoine génétique préservé (6.6), dans le but de
maintenir une agrobiodiversité utile face à l’uniformisation génétique des espèces cultivées.',
        ),
        6 => 
        array (
            'id' => 7,
            'name' => 'Espace Bâti',
            'ca_principal' => 'CA07',
            'image' => NULL,
            'created_at' => '2020-03-30 19:12:12',
            'updated_at' => '2020-04-06 12:25:34',
            'vision' => 'VISION de la Stratégie Biodiversité : en 2030, l’es-
pace bâti genevois comprend une mosaïque de sites
à caractère naturel permettant à la faune et à la flore
de prospérer et aux habitants de garder le contact
avec la nature. Les initiatives sont soutenues pour
développer ces sites de nature en zones bâties.
Le réseau d’espaces verts, les cours d’eau et les
pénétrantes de verdure garantissent la circulation
des espèces y compris dans l’espace urbain.',
            'intro' => '<p>L&rsquo;ensemble des actions &eacute;nonc&eacute;es ci-dessous constituent la d&eacute;clinaison du<br />
programme &laquo; Nature en ville &raquo;. Ce programme d&eacute;coule de la loi sur la biodiversit&eacute;<br />
(LBio, art. 16 et 17), ainsi que de son r&egrave;glement d&rsquo;application (RBio, Chapitre 2).<br />
Il couvre tous les aspects en lien avec la biodiversit&eacute; dans l&rsquo;espace urbain. Il sera<br />
actualis&eacute; et poursuivi via l&rsquo;action 7.7.</p>',
            'context' => NULL,
            'to_know' => 'L’inventaire de la biodiversité urbaine – un préalable pour identifier les mesures
les plus pertinentes en zone bâtie – sera mis à jour et inclus dans la planification
de l’infrastructure écologique (voir action ).',
            'to_enrich' => 'L’aménagement de la Genève de demain est encadré par les outils de la
planification territoriale que sont le Plan directeur cantonal, les Plans directeurs
communaux, les Plans Directeurs de Quartier et les Plans Localisés de Quartier
. Ils sont ensuite mis en œuvre selon la procédure d’autorisation de construire
ad hoc et, parfois, via un concours d’architecture ou d’espaces publics .
Les cartes développées pour l’infrastructure écologique (champ d’application 1)
seront intégrées à l’ensemble de ces outils de planification pour tenir compte
de la biodiversité. Cet outil sera rendu dynamique afin de pouvoir analyser les
variantes de planification de projet en regard de leur impact (positif ou négatif sur
l’infrastructure écologique).
Des recommandations opérationnelles et simples, sur la base d’exemples, seront
mises à disposition des milieux immobiliers et des aménagistes dans le but
d’améliorer la biodiversité dans l’ensemble de l’espace bâti, notamment dans les
zones d’habitat individuel et les zones industrielles .',
            'to_value' => 'Intégrer plus largement la biodiversité dans l’espace bâti permettra d’améliorer la qualité
urbaine, en termes de cadre de vie mais aussi de confort, et profitera directement aux
habitants. En synergie avec l’action 4.2 du champ d’application “Arbres”, la prise en compte
des enjeux climatiques en milieu urbain sera renforcée , tout comme le financement
des approches «nature et paysage» . La promotion de la nature en ville sera poursuivie
et les démarches participatives, les coopérations et les interactions avec les acteurs
de terrain seront multipliées .',
        ),
        7 => 
        array (
            'id' => 8,
            'name' => 'Faune et flore',
            'ca_principal' => 'CA08',
            'image' => NULL,
            'created_at' => '2020-03-30 19:12:31',
            'updated_at' => '2020-04-06 12:26:10',
            'vision' => 'VISION de la Stratégie Biodiversité : en 2030, la
faune et la flore genevoises sont plus riches, résil-
ientes et diverses grâce à une gestion durable des
milieux et à une infrastructure écologique trans-
frontalière fonctionnelle. Le statut des espèces
menacées s’est amélioré et les espèces exotiques
envahissantes sont sous contrôle.',
            'intro' => NULL,
            'context' => NULL,
            'to_know' => 'Les services spécialisés de l’État renforceront leurs collaborations (déjà en œuvre
depuis de nombreuses années) avec les associations et institutions naturalistes
engagées activement pour mieux connaître, protéger et faire connaître la
biodiversité genevoise . La fonge (ensemble des champignons), encore
peu connue , bénéficiera d’un suivi accru. Une étude menée en Allemagne a
montré que la biomasse d’insectes a diminué de 75% au cours des trente dernières
années. Cette facette de l’évolution de la biodiversité sera aussi étudiée à Genève,
à travers la quantification de la biomasse des insectes volants, de la macrofaune
benthique (invertébrés qui vivent au fond des rivières et des lacs) et des poissons
de rivière .',
            'to_enrich' => 'Le soutien aux associations et institutions sera renforcé pour accroître les
effectifs des espèces menacées et harmoniser les critères d’identification
des sites prioritaires pour la conservation de la faune et de la flore . Pour
renforcer l’infrastructure écologique, il est prévu de supprimer des structures
artificielles qui piègent la petite faune , de créer des cavités et des abris
pour la faune cavernicole et d’aménager des gouilles et de petites zones
humides diversifiées . Contribuant à l’acceptation par la population d’une
faune riche et diversifiée, l’Etat entend poursuivre et renforcer son rôle de soutien
aux agriculteurs subissant des dégâts sur leurs cultures liées à la faune sauvage.
Cela se traduit par la poursuite de la prévention des dégâts, de la régulation des
populations de certaines espèces par le tir et par l’indemnisation des dégâts causés
par la faune sauvage et . Pour organiser la lutte contre les espèces
exotiques envahissantes , la stratégie néoflore poursuivra sa mise en œuvre
et une stratégie pour la néofaune à l’échelle transfrontalière sera préparée. Enfin, il
s’agira également d’évaluer les risques d’hybridation des espèces exotiques avec
les espèces indigènes .',
            'to_value' => 'Le site web Genève Nature – qui présentera les multiples possibilités de découvrir la
biodiversité genevoise – sera lancé en collaboration avec les ONG naturalistes . La flore
et la fonge locales seront aussi valorisées , et une meilleure information à destination
des promeneurs sera mise en place dans l’aire agricole pour valoriser la richesse des
surfaces de promotion de la biodiversité . Deux pôles d’expertise seront créés: l’un
sur les oiseaux et les petits mammifères, l’autre sur les arthropodes (8.7). Enfin, les centres
de soins genevois recueillant et soignant des espèces sauvages seront soutenus par l’État,
également pour leur rôle de sensibilisation auprès du public .',
        ),
        8 => 
        array (
            'id' => 9,
            'name' => 'Sensibilisation',
            'ca_principal' => 'CA09',
            'image' => NULL,
            'created_at' => '2020-03-30 19:12:58',
            'updated_at' => '2020-04-06 12:27:03',
            'vision' => 'VISION de la Stratégie Biodiversité : en 2030, la
population, en particulier celle habitant en ville,
connaît la valeur de sa nature, en apprécie les
bénéfices et s’engage activement en sa faveur.',
            'intro' => NULL,
            'context' => NULL,
            'to_know' => 'Les questions liées à la biodiversité sont complexes et engagent une pluralité
d’intérêts qui requièrent un arbitrage. Par ailleurs, l’appropriation de cette
thématique par les citoyens représente un des 3 axes de la Stratégie Biodiversité
Genève 2030. Pour un pilotage participatif de la mise en œuvre du Plan Biodiversité
2020-2023, un sondage auprès d’un large public et une conférence de citoyens
seront mis en place . Un état des lieux de l’offre actuelle de sensibilisation
à la nature permettra notamment de planifier de nouveaux lieux d’accueil
pour le public .

Pour encourager la découverte et le respect de la biodiversité cantonale, la
communication concernant les sites protégés sera renforcée , tout comme
la sensibilisation dans les sites naturels fragiles . Pour compléter l’offre
permettant de découvrir la biodiversité, le BIOPARC Genève (anciennement
Parc Challandes) sensibilisera ses visiteurs aux enjeux de conservation de la
biodiversité, tant locale que mondiale .',
            'to_enrich' => NULL,
            'to_value' => 'Pour toucher un public encore plus large, la présence d’une information approfondie
et de qualité traitant de la nature sera renforcée dans les médias locaux et
des informations ciblées seront mises à disposition des acteurs de la gouvernance
locale et régionale, par exemple les conseillers administratifs et municipaux .
Des projets de science participative impliqueront les citoyens dans la recherche
sur les insectes et sur la biodiversité aquatique .

De nouvelles publications seront mises à disposition de la population sur la
thématique du cycle de l’eau et des bonnes pratiques aux abords des cours d’eau
( et ), ou sur la faune locale . Enfin, la gratuité d’accès aux Centres
nature et à leurs programmes d’animation sera pérennisée .',
        ),
        9 => 
        array (
            'id' => 10,
            'name' => 'Formation',
            'ca_principal' => 'CA10',
            'image' => NULL,
            'created_at' => '2020-03-30 19:13:13',
            'updated_at' => '2020-04-06 12:28:16',
            'vision' => 'VISION de la Stratégie Biodiversité : en 2030, les
habitant-e-s du canton ont acquis au travers de leur
parcours de formation une compétence et un sa-
voir-être suffisants pour apprécier la valeur de la
biodiversité et des services qu’elle rend. Ils ont à
cœur de la préserver et de la promouvoir à travers
leur vie quotidienne et leurs gestes citoyens.',
            'intro' => NULL,
            'context' => NULL,
            'to_know' => 'L’enseignement portant sur les enjeux liés à la biodiversité sera renforcé auprès
des élèves de l’école primaire et du secondaire I. Ainsi, chaque élève participera
à une ou à deux sorties sur le terrain durant sa scolarité obligatoire ( et
). La gratuité des animations réalisées par l’Association pour la sauvegarde
du Léman auprès de classes de l’enseignement primaire sera assurée .

Les enseignant-e-s auront accès à diverses formations initiales et continues –
traitant notamment des études sur le terrain et du développement durable (
à ) – ainsi qu’à une large palette de ressources pédagogiques ( à
). Une valorisation et un renforcement des actions proposées par le Groupe
sensibilisation nature piloté par le Département du territoire (DT) seront réalisés
aussi bien au niveau primaire que secondaire ( et ).

Les équipes enseignantes de chaque établissement scolaire (primaire, secondaires
I et II) ainsi que de l’Université (FPSE) seront soutenues pour élaborer un projet lié
à la biodiversité, permettant de réaliser des activités et des aménagements dans
leur environnement ( et ), notamment en lien avec le programme
Nature en ville . Les étudiant-e-s du Centre de formation professionnelle
Nature et Environnement pourront concrètement participer à diverses actions
visant à enrichir la biodiversité, aussi bien au niveau des parcelles de culture qu’au
niveau des infrastructures du centre',
                'to_enrich' => NULL,
                'to_value' => 'L’Office pour l’orientation, la formation professionnelle et continue étoffera son offre
en relation avec les «métiers verts» . Les collaborations avec les OrTras
(association regroupant des employeurs, des associations professionnelles et
des syndicats des domaines santé-social) et les entreprises formatrices seront
renforcées pour promouvoir les questions liées au développement durable et à la
biodiversité . Ces mêmes thématiques seront aussi consolidées dans les
plans d’études (École de culture générale), dans la formation “métier” et culture
générale, ainsi que lors des cours inter-entreprises ( et ). L’offre de
formation continue en gestion des milieux naturels et en «animation nature» sera
développée ( et ).',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Outils analytiques',
                'ca_principal' => 'CA11',
                'image' => NULL,
                'created_at' => '2020-03-30 19:13:29',
                'updated_at' => '2020-04-06 12:28:49',
                'vision' => 'VISION de la Stratégie Biodiversité : en 2030, la bio-
diversité est suivie et évaluée périodiquement grâce
à un dispositif performant qui permet de réajuster les
mesures mises en œuvre et d’anticiper l’évolution
des situations. La population participe à cette action
grâce à des outils adaptés.',
                'intro' => NULL,
                'context' => NULL,
                'to_know' => 'La quantité et la qualité des données saisies seront améliorées, tout comme
leur partage entre les différentes associations et les services de l’Etat .
La cartographie des milieux naturels, qui constitue un pilier fondamental de
l’infrastructure écologique, sera continuellement mise à jour et étendue au Grand
Genève . Un observatoire sera chargé de l’analyse et la synthèse de toutes
les données disponibles, ainsi que d’élaborer des tableaux de bord sur le web pour
améliorer la visibilité de la biodiversité et suivre son évolution .',
                'to_enrich' => 'Un outil sera développé pour s’assurer du maintien ou du remplacement
(compensation) des valeurs naturelles pendant et après les chantiers, notamment
dans le cadre des autorisations de construire . Les nouvelles technologies
seront aussi utilisées pour préserver, voire enrichir la biodiversité, notamment à
travers les BIM (c.-à-d. une modélisation 3D des aménagements extérieurs autour
d’un bâtiment et le sous-sol) ou la plateforme du référentiel des projets urbains,
qui sera désormais automatiquement et quotidiennement actualisée .',
                'to_value' => 'La plateforme nature offrira notamment un accès simplifié aux données
d’observation d’espèces et à la carte des milieux naturels du Grand Genève 5
grâce à son module de représentation cartographique; ). La structure du
système d’information de l’OCAN sera aussi améliorée, pour renforcer et faciliter
les échanges avec les autres systèmes d’information du Département du territoire
.',
        ),
        11 => 
        array (
            'id' => 12,
            'name' => 'Outils administratifs et politiques',
            'ca_principal' => 'CA12',
            'image' => NULL,
            'created_at' => '2020-03-30 19:13:41',
            'updated_at' => '2020-04-06 12:29:45',
            'vision' => 'VISION de la Stratégie Biodiversité : en 2030, les
prestations de la biodiversité sont reconnues par
tous et valorisées à leur juste prix par la collectivité.
La promotion de la biodiversité est assumée na-
turellement par toutes les politiques publiques, car
les mesures en sa faveur sont perçues comme un
investissement pour notre existence économique,
culturelle et sociale.',
            'intro' => '<p>Ce chapitre repr&eacute;sente une pi&egrave;ce maitresse du Plan Biodiversit&eacute; 2020-2023. Il<br />
identifie de nombreuses mesures techniques &agrave; mettre en place d&egrave;s que possible<br />
pour maintenir ou freiner le d&eacute;clin de la biodiversit&eacute;, et surtout pour que celle-ci<br />
puisse reconqu&eacute;rir notre territoire afin de produire les services &eacute;cosyst&eacute;miques<br />
n&eacute;cessaires &agrave; notre prosp&eacute;rit&eacute;.</p>

<p>Les urgences &laquo; Biodiversit&eacute; &raquo; et &laquo; Climat &raquo; requi&egrave;rent une gouvernance agile et<br />
transversale pour des r&eacute;sultats concrets, sans d&eacute;lais! Les principaux m&eacute;canismes<br />
l&eacute;gaux, r&eacute;glementaires et financiers devront &eacute;galement &ecirc;tre analys&eacute;s et adapt&eacute;s<br />
afin d&rsquo;&eacute;liminer d&rsquo;abord les incitations n&eacute;gatives, puis rediriger les financements sur<br />
les leviers favorables &agrave; la biodiversit&eacute;. Le renforcement de la coh&eacute;rence et des<br />
synergies entre les politiques publiques, ainsi que l&rsquo;interdisciplinarit&eacute;, deviennent<br />
des pr&eacute;requis. Enfin, l&rsquo;histoire a moult fois montr&eacute; que malgr&eacute; toutes les solutions<br />
techniques propos&eacute;es, la r&eacute;ussite d&rsquo;un plan d&rsquo;actions en faveur de la biodiversit&eacute;<br />
doit &ecirc;tre accompagn&eacute;e par un changement du regard des individus. Pour chaque<br />
action &agrave; mener et selon les groupes d&rsquo;acteurs, on identifiera les obstacles<br />
comportementaux et des outils adapt&eacute;s seront d&eacute;ploy&eacute;s pour les surmonter.</p>',
            'context' => NULL,
            'to_know' => 'La collaboration entre l’État et les communes sera renforcée, notamment pour mieux prendre
en compte l’infrastructure écologique dans l’aménagement du territoire . Une expertise
sera mise en place pour former des relais dans les communes et autres structures pertinentes.
Au-delà du territoire du canton, une forme de solidarité écologique sans frontières sera
promue .',
            'to_enrich' => 'L’effet bénéfique de la biodiversité sur la santé sera mis en avant . Un accompagnement
dans la conception et la mise en œuvre de stratégies d’interventions comportementales
sera proposé à différents acteurs : État, associations, établissements publics autonomes,
etc. . L’État assurera la diffusion des bonnes pratiques en faveur de la biodiversité,
notamment auprès des urbanistes, architectes, etc. . La compréhension et l’utilisation
de l’évaluation environnementale stratégique et des études d’impact sur l’environnement
seront promues, de même que les liens entre ces deux instruments stratégiques et les
services écosystémiques .',
            'to_value' => 'De nouveaux outils faciliteront la prise en compte de la biodiversité dans l’ensemble des
procédures administratives . Des réformes légales et financières seront déployées
pour minimiser les incitations négatives et améliorer la qualité des mesures de compensation
. L’urgence Biodiversité nécessite des ressources supplémentaires : les dispositifs de
financement actuels seront donc complétés par d’autres sources et leviers innovants .
L’impact des achats des collectivités publiques sur la biodiversité sera minimisé . La
situation et l’évolution de la biodiversité seront mesurées à la fin de chaque Plan Biodiversité
(en 2023 et 2027), pour que les plans d’action successifs permettent d’atteindre les objectifs
de la SBG à l’horizon 2030 . Enfin, une analyse de faisabilité permettra d’évaluer la
pertinence de créer une structure paraétatique plus agile pour la promotion de la biodiversité
du canton de Genève .',
        ),
    ));
        
        
    }
}