<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actions')->delete();
        
        \DB::table('actions')->insert(array (
            0 => 
            array (
                'id' => 2,
                'code' => '1.1',
                'label' => '1. Mettre à jour de la carte de planification de l’infrastructure écologique',
                'image' => NULL,
                'description' => '<p>L&rsquo;infrastructure &eacute;cologique cantonale a &eacute;t&eacute; d&eacute;finie et cartographi&eacute;e sur la base des &eacute;l&eacute;ments suivants :<br />
la composition en esp&egrave;ces (faune et flore) et en habitats naturels, la structure des milieux, leurs<br />
fonctions (connectivit&eacute;) et diff&eacute;rents services &eacute;cosyst&eacute;miques. Ces &eacute;l&eacute;ments ont &eacute;t&eacute; synth&eacute;tis&eacute;s puis<br />
pond&eacute;r&eacute;s pour disposer d&rsquo;une mesure int&eacute;gr&eacute;e de la qualit&eacute; biologique du territoire &agrave; une r&eacute;solution<br />
spatiale de 25x25 m&egrave;tres. Ainsi, sur la carte de l&rsquo;infrastructure &eacute;cologique, chaque pixel du territoire<br />
a une valeur entre 1 (faible) et 100 (forte valeur biologique). La repr&eacute;sentation sur le terrain est d&eacute;j&agrave;<br />
disponible jusqu&rsquo;au niveau de la parcelle.</p>

<p>Cette cartographie permet d&rsquo;identifier les &eacute;l&eacute;ments structurants du r&eacute;seau biologique, soit les<br />
zones dites nodales et les corridors de mise en r&eacute;seau, qu&rsquo;il s&rsquo;agira de pr&eacute;server ou de d&eacute;velopper.<br />
Ces &eacute;l&eacute;ments doivent d&eacute;sormais &ecirc;tre transcrits pour faire partie int&eacute;grante de la planification de<br />
l&rsquo;am&eacute;nagement du territoire (voir action 1.3). La d&eacute;finition des corridors supra-r&eacute;gionaux (canton de<br />
Vaud et France voisine) a &eacute;t&eacute; r&eacute;alis&eacute;e en 2019 sous mandat de la Conf&eacute;d&eacute;ration.</p>

<p>La cartographie de l&rsquo;infrastructure &eacute;cologique doit encore &ecirc;tre r&eacute;alis&eacute;e &agrave; l&rsquo;&eacute;chelle du Grand Gen&egrave;ve et,<br />
in fine, fournir aux planificateurs de l&rsquo;am&eacute;nagement du territoire des informations spatialement explicites<br />
qui assurent la conservation de la biodiversit&eacute; et de ses services &eacute;cosyst&eacute;miques. Par exemple, les<br />
surfaces fournissant le plus de services &eacute;cosyst&eacute;miques en dehors des r&eacute;serves naturelles sont d&eacute;j&agrave;<br />
connues (<em>Guinaudeau, B., N. Wyler, B. von Arx, J. Massy, A. Lehmann et M.A. Schlaepfer. 2019.<br />
INDICATEURS-SE. Synth&egrave;se du rapport final. Universit&eacute; de Gen&egrave;ve et canton de Gen&egrave;ve).</em></p>',
            'indicator' => '% de surfaces mises à jour/an',
            'R' => 0,
            'A' => 0,
            'E' => 1,
            'T' => 0,
            'total_cout_etat' => 'CHF 780,000',
            'cout_externe' => NULL,
            'total_couts' => NULL,
            'project_id' => 1,
            'comment_id' => 1,
            'state_id' => 1,
            'ponc_id' => 1,
            'created_at' => '2020-04-01 04:31:44',
            'updated_at' => '2020-04-07 06:17:46',
        ),
        1 => 
        array (
            'id' => 3,
            'code' => '1.2',
            'label' => '2. Faire comprendre l’importance de l’infrastructure écologique ',
            'image' => NULL,
            'description' => '<p>Dans une optique de transition &eacute;cologique, il est crucial de porter &agrave; la connaissance du public &ndash;<br />
mais aussi sp&eacute;cifiquement aupr&egrave;s de certains partenaires (urbanistes, architectes, etc.) &ndash; la notion<br />
d&rsquo;infrastructure &eacute;cologique, et d&rsquo;expliquer l&rsquo;importance de sa pr&eacute;servation et de son d&eacute;veloppement.<br />
Il sera &eacute;galement important de faire comprendre la notion de &laquo; services &eacute;cosyst&eacute;miques &raquo;.<br />
L&rsquo;infrastructure &eacute;cologique est un r&eacute;seau de vie qui recouvre la r&eacute;gion genevoise &ndash; au-del&agrave; de la<br />
fronti&egrave;re &ndash; constitu&eacute; de r&eacute;servoirs de biodiversit&eacute; (r&eacute;serves foresti&egrave;res, marais, zones alluviales,<br />
prairies s&egrave;ches, lac, etc.) et de corridors biologique (for&ecirc;t, petit bois, haie sauvage, cours d&rsquo;eau, prairie<br />
ou champ agricole, etc.) tout ce qu&rsquo;il faut &agrave; la biodiversit&eacute; pour vivre, se d&eacute;placer et se reproduire en<br />
brassant son patrimoine g&eacute;n&eacute;tique.</p>

<p>Notre infrastructure humaine &ndash; immeubles, zones industrielles, parkings, routes, voies de chemin<br />
de fer, &eacute;clairage publics, &eacute;gouts et autres r&eacute;seaux souterrains, barri&egrave;res, etc. &ndash; s&rsquo;est trop souvent<br />
d&eacute;velopp&eacute;e en morcelant et d&eacute;truisant l&rsquo;infrastructure &eacute;cologique n&eacute;cessaire &agrave; la survie de la plupart<br />
des autres esp&egrave;ces vivantes. Si nous continuons &agrave; nous d&eacute;velopper sans penser &agrave; l&rsquo;infrastructure<br />
n&eacute;cessaire &agrave; la biodiversit&eacute;, c&rsquo;est notre propre survie que nous mena&ccedil;ons.<br />
Sous l&rsquo;impulsion de GE-21, et en partenariat avec le SIC, une campagne de communication sera<br />
d&eacute;ploy&eacute;e en se basant sur les concepts &laquo; Chaque m2 compte &raquo; et &laquo; La biodiversit&eacute; c&rsquo;est aussi &ccedil;a &raquo;</p>',
        'indicator' => 'Intégration des termes « infrastructure écologique » et « services écosystémiques » dans le questionnaire bisannuel réalisé par MisTrend pour le compte du Service de l’information et de la communication du DT (SIC).',
            'R' => 0,
            'A' => 1,
            'E' => 0,
            'T' => 0,
            'total_cout_etat' => 'CHF 50,000',
            'cout_externe' => NULL,
            'total_couts' => 'CHF 50,000',
            'project_id' => 1,
            'comment_id' => 1,
            'state_id' => 2,
            'ponc_id' => 1,
            'created_at' => '2020-04-01 05:11:50',
            'updated_at' => '2020-04-07 06:32:02',
        ),
        2 => 
        array (
            'id' => 4,
            'code' => '1.3',
            'label' => '3. Intégrer l\'infrastructure écologique dans l\'aménagement du territoire et l’implémenter',
            'image' => NULL,
            'description' => '<p>Poursuivre le d&eacute;veloppement du canton sans penser &agrave; l&rsquo;infrastructure n&eacute;cessaire &agrave; la biodiversit&eacute;,<br />
c&rsquo;est menacer notre propre survie. Les Plans Directeurs cantonal et communaux doivent garantir la<br />
conservation d&rsquo;une IE r&eacute;siliente et durable, constitu&eacute;e id&eacute;alement des meilleurs 30% du territoire du<br />
point de vue &eacute;cologique (Objectifs OFEV (CDB : Convention sur la Diversit&eacute; Biologique) et Forum<br />
Biodiversit&eacute; CH). En effet, d&rsquo;apr&egrave;s les engagements pris au niveau international, le canton doit encore<br />
accro&icirc;tre ses &laquo; zones prot&eacute;g&eacute;es &raquo; jusqu&rsquo;&agrave; atteindre 17% du territoire, d&rsquo;apr&egrave;s les crit&egrave;res fix&eacute;s par la<br />
Conf&eacute;d&eacute;ration. Par ailleurs, 13% suppl&eacute;mentaires devraient servir &agrave; mettre en r&eacute;seau ces &laquo; zones<br />
prot&eacute;g&eacute;es &raquo;, ce qui porte l&rsquo;objectif &agrave; l&rsquo;horizon 2030 &agrave; un total de 30% du territoire genevois de qualit&eacute;<br />
et connect&eacute;.</p>

<p>La prise en compte de la cartographie de l&rsquo;infrastructure &eacute;cologique dans l&rsquo;am&eacute;nagement du territoire,<br />
&agrave; l&rsquo;&eacute;chelle cantonale, communale et locale, permettra de tenir compte de la biodiversit&eacute; dans son<br />
ensemble gr&acirc;ce &agrave; un indicateur synth&eacute;tique. La cartographie de l&rsquo;IE (action 1.1) doit permettre de<br />
tracer pr&eacute;cis&eacute;ment les corridors &agrave; l&rsquo;&eacute;chelle de la parcelle, par rep&eacute;rage et suivi des esp&egrave;ces cibles,<br />
et d&rsquo;&eacute;tablir des prescriptions &agrave; inscrire &agrave; la parcelle dans les plans directeurs communaux, pour<br />
maintenir voire restaurer ces corridors.</p>

<p>Les diff&eacute;rentes &eacute;tapes pr&eacute;vues sont les suivantes :<br />
- G&eacute;oportail &laquo; infrastructure &eacute;cologique &raquo; dans le SITG d&eacute;di&eacute; aux am&eacute;nagistes et urbanistes<br />
(= produit de l&rsquo;action 1.1)<br />
- Simulation des projets &agrave; venir &ndash; impacts sur l&rsquo;infrastructure &eacute;cologique<br />
- Evolution et mise &agrave; jour de la fiche du plan directeur C06 et sa carte 8 annex&eacute;e<br />
- Renforcement de la port&eacute;e juridique et op&eacute;rationnelle de l&rsquo;infrastructure &eacute;cologique (voir CA12)<br />
- Pr&eacute;servation des corridors supra-r&eacute;gionaux<br />
- Transcription dans les plans directeurs communaux<br />
- Transcription dans les PLQ et le r&eacute;f&eacute;rentiel des projets urbains<br />
- Int&eacute;gration dans les Strat&eacute;gies espace rural<br />
- Int&eacute;gration dans les Strat&eacute;gies zone 5<br />
- D&eacute;finition de plans d&rsquo;action pour la r&eacute;solution des conflits, notamment pour les assainissements<br />
des cl&ocirc;tures dans l&rsquo;espace agricole, des zones de franchissement sur les routes cantonales, des<br />
obstacles &agrave; la migration piscicole et des &eacute;clairages (action 1.5)<br />
- Cr&eacute;ation de nouvelles aires de mise en r&eacute;seau. Certains projets pourraient constituer une opportunit&eacute;<br />
pour restaurer et reconqu&eacute;rir des continuit&eacute;s &eacute;cologiques (&agrave; &eacute;tudier par exemple avec l&rsquo;OFROU<br />
pour les projets routiers).</p>',
        'indicator' => 'Surface ou % des projets qui intègrent l’IE au stade planification, par exemple en incluant un compteur dans l’une des applications utilisées par l’aménagement du territoire.',
        'R' => 1,
        'A' => 0,
        'E' => 1,
        'T' => 1,
        'total_cout_etat' => NULL,
        'cout_externe' => NULL,
        'total_couts' => NULL,
        'project_id' => 1,
        'comment_id' => 2,
        'state_id' => 2,
        'ponc_id' => 1,
        'created_at' => '2020-04-01 05:22:29',
        'updated_at' => '2020-04-07 06:34:31',
    ),
    3 => 
    array (
        'id' => 5,
        'code' => '1.4',
        'label' => '4. Mettre à jour la carte de la trame noire idéale',
        'image' => NULL,
        'description' => '<p>La pollution lumineuse perturbe diverses esp&egrave;ces (p.ex. certaines chauves-souris menac&eacute;es<br />
d&rsquo;extinction au niveau r&eacute;gional ou de nombreuses esp&egrave;ces d&rsquo;insectes). Elle n&eacute;cessite la d&eacute;finition d&rsquo;une<br />
trame noire qui vienne compl&eacute;ter l&rsquo;infrastructure &eacute;cologique et dans laquelle des efforts particuliers<br />
doivent &ecirc;tre entrepris pour pr&eacute;server l&rsquo;obscurit&eacute; nocturne.</p>',
        'indicator' => 'Cartographie de la trame noire réalisée',
        'R' => 0,
        'A' => 0,
        'E' => 1,
        'T' => 0,
        'total_cout_etat' => NULL,
        'cout_externe' => NULL,
        'total_couts' => NULL,
        'project_id' => 1,
        'comment_id' => 2,
        'state_id' => 1,
        'ponc_id' => 1,
        'created_at' => '2020-04-01 10:58:36',
        'updated_at' => '2020-04-07 06:37:01',
    ),
    4 => 
    array (
        'id' => 6,
        'code' => '1.5',
        'label' => '5. Préserver et développer la trame noire',
        'image' => NULL,
        'description' => '<p>- Plan d&rsquo;action &ldquo;trame noire&rdquo; pour la restauration de corridors noirs, comprenant notamment l&rsquo;extinction<br />
ou la modification de lampadaires, l&rsquo;installation d&rsquo;&eacute;clairages dynamiques sur les routes et autres<br />
infrastructures, etc.<br />
- Cr&eacute;ation d&rsquo;un observatoire &ldquo;pollution lumineuse&rdquo; (sant&eacute;, biodiversit&eacute;, &eacute;nergie, etc.)<br />
- Faire conna&icirc;tre la trame noire aux diff&eacute;rents services du canton porteurs de projets d&rsquo;&eacute;clairages<br />
(OCGC, OU, etc.), aux Service Industriels de Gen&egrave;ve et aux communes, aux Zones Industrielles<br />
et Artisanales et aux particuliers.</p>',
        'indicator' => 'Définition et mise en œuvre d’un Plan d’action « trame noire » au niveau cantonal',
        'R' => 0,
        'A' => 1,
        'E' => 1,
        'T' => 1,
        'total_cout_etat' => NULL,
        'cout_externe' => NULL,
        'total_couts' => NULL,
        'project_id' => 1,
        'comment_id' => NULL,
        'state_id' => 3,
        'ponc_id' => 1,
        'created_at' => '2020-04-01 11:06:37',
        'updated_at' => '2020-04-07 06:38:58',
    ),
    5 => 
    array (
        'id' => 7,
        'code' => '1.6',
        'label' => '6. Renforcer la mise en œuvre des contrats corridors transfrontaliers',
        'image' => NULL,
        'description' => '<p>Les contrats corridors ont &eacute;t&eacute; initi&eacute;s dans le cadre du Projet d&rsquo;agglom&eacute;ration Franco-Valdo-Genevoise.<br />
L&rsquo;outil contrat de territoire Espaces naturels sensibles est mis en &oelig;uvre par le D&eacute;partement de Haute-<br />
Savoie ; il succ&egrave;de &agrave; l&rsquo;outil contrat corridors/vert&amp;bleu.<br />
Cette action visera notamment &agrave; mettre en &oelig;uvre:<br />
- le Contrat unique environnemental (Pays de Gex &ndash; Agglo) ;<br />
- le Contrat de territoire Espaces naturels sensibles Sal&egrave;ve-Genevois 2020-2024 ;<br />
- le Contrat de territoire Espaces naturels sensibles Vuache-Champagne-Genevois 2020-2023 ;<br />
- le Contrat de territoire Espaces naturels sensibles Annemasse-Agglo 2020-2024 ;<br />
- et &agrave; d&eacute;finir la suite du contrat corridors transfrontalier Vesancy-Versoix.</p>',
        'indicator' => 'Indicateurs de suivi et résultats – Bilan intermédiaire et final',
        'R' => 1,
        'A' => 1,
        'E' => 1,
        'T' => 1,
        'total_cout_etat' => NULL,
        'cout_externe' => NULL,
        'total_couts' => NULL,
        'project_id' => 1,
        'comment_id' => 1,
        'state_id' => 3,
        'ponc_id' => 1,
        'created_at' => '2020-04-01 11:09:56',
        'updated_at' => '2020-04-07 06:42:10',
    ),
    6 => 
    array (
        'id' => 8,
        'code' => '2.1',
        'label' => '1. Recenser et protéger les milieux et habitats d\'importance locale à régionale',
        'image' => NULL,
        'description' => '<p>Les principaux sites naturels du canton b&eacute;n&eacute;ficient actuellement de divers statuts de protection sur<br />
le plan l&eacute;gal, dont plusieurs attestent de leur valeur au niveau national : prairies et p&acirc;turages secs<br />
(PPS), sites de reproduction de batraciens (OBat), bas-marais (IBM), etc.<br />
Ces statuts de protection sont d&eacute;finis par divers crit&egrave;res permettant une s&eacute;lection des sites les plus<br />
riches.</p>

<p><br />
La pr&eacute;sente action vise &agrave; r&eacute;pertorier, puis &agrave; prot&eacute;ger les sites naturels d&rsquo;int&eacute;r&ecirc;t n&rsquo;atteignant pas &ndash;<br />
ou seulement partiellement &ndash; les crit&egrave;res minimaux des objets d&rsquo;importance nationale (surface trop<br />
restreinte, populations insuffisantes, etc.). Ces sites jouent en effet un r&ocirc;le d&eacute;terminant dans le maintien<br />
de la biodiversit&eacute;, en constituant &ndash; malgr&eacute; leur taille g&eacute;n&eacute;ralement inf&eacute;rieure aux objets d&rsquo;importance<br />
nationale &ndash; des maillons essentiels de l&rsquo;infrastructure &eacute;cologique.</p>

<p><br />
Dans un premier temps, cette action consistera &agrave; &eacute;laborer une m&eacute;thodologie pour identifier et<br />
cartographier ces sites d&rsquo;int&eacute;r&ecirc;t local &agrave; r&eacute;gional, en d&eacute;terminant des crit&egrave;res clairs, bas&eacute;s notamment<br />
sur ceux des inventaires f&eacute;d&eacute;raux ; la recherche portera, entre autres, sur les milieux cr&eacute;naux<br />
(sources). Cette &eacute;tape sera coordonn&eacute;e avec le d&eacute;ploiement des actions 8.5 (Harmoniser les crit&egrave;res<br />
d&rsquo;identification des sites prioritaires faune &amp; flore) et 5.9 (D&eacute;velopper une m&eacute;thode d&rsquo;identification<br />
des sites aquatiques d&rsquo;int&eacute;r&ecirc;t pour la biodiversit&eacute;).</p>

<p><br />
Dans un second temps, le statut de ces sites sera d&eacute;fini dans le but de leur conf&eacute;rer une meilleure<br />
protection &agrave; long terme, ce qui favorisera leur prise en consid&eacute;ration dans le cadre de tout projet<br />
de d&eacute;veloppement territorial. A l&rsquo;&eacute;chelle internationale, il existe une liste verte des espaces naturels<br />
prot&eacute;g&eacute;s ; il s&rsquo;agira de r&eacute;fl&eacute;chir &agrave; la possibilit&eacute; et &agrave; l&rsquo;int&eacute;r&ecirc;t d&rsquo;int&eacute;grer certains sites genevois &agrave; cet<br />
inventaire, qui est d&eacute;j&agrave; d&eacute;clin&eacute; au niveau suisse.</p>

<p><br />
Enfin, selon les possibilit&eacute;s et opportunit&eacute;s, les sites recens&eacute;s seront acquis dans le but de p&eacute;renniser<br />
leur gestion en faveur des valeurs naturelles inventori&eacute;es.</p>',
    'indicator' => 'Nombre de sites protégés/prioritaires hors des objets d’importance nationale',
    'R' => 1,
    'A' => 0,
    'E' => 1,
    'T' => 0,
    'total_cout_etat' => NULL,
    'cout_externe' => NULL,
    'total_couts' => NULL,
    'project_id' => 2,
    'comment_id' => 3,
    'state_id' => 3,
    'ponc_id' => 1,
    'created_at' => '2020-04-01 11:18:24',
    'updated_at' => '2020-04-01 11:18:24',
),
7 => 
array (
    'id' => 9,
    'code' => '2.2',
    'label' => '2. Actualiser et mettre en œuvre les plans de gestion pour les sites protégés',
    'image' => NULL,
    'description' => '<p>Les plans de gestion sont &eacute;labor&eacute;s pour une dur&eacute;e de 10 &agrave; 15 ans. Ils constituent l&rsquo;outil de r&eacute;f&eacute;rence<br />
pour la gestion et la conservation des sites prot&eacute;g&eacute;s au niveau cantonal, et r&eacute;gissent &eacute;galement leur<br />
usage par le public. Leur &eacute;laboration suit trois phases:</p>

<p><br />
1. R&eacute;alisation d&rsquo;un &eacute;tat de r&eacute;f&eacute;rence du site consistant &agrave; &eacute;tablir un diagnostic, &agrave; d&eacute;finir des objectifs<br />
ainsi que les mesures de gestion &agrave; mettre en &oelig;uvre pour conserver voire accro&icirc;tre ses valeurs<br />
naturelles &agrave; moyen et long termes.<br />
2. Mise en &oelig;uvre des mesures d&rsquo;am&eacute;nagement ponctuelles et d&rsquo;entretien.<br />
3. Suivis biologiques permettant de v&eacute;rifier si l&rsquo;&eacute;tat obtenu r&eacute;pond aux objectifs et, si n&eacute;cessaire,<br />
d&rsquo;adapter les mesures.</p>

<p><br />
Au vu de l&rsquo;importance de cet outil dans la gestion des sites prot&eacute;g&eacute;s au niveau cantonal, l&rsquo;&eacute;laboration,<br />
la mise en &oelig;uvre et le renouvellement des plans de gestion doivent &ecirc;tre poursuivis et assur&eacute;s &agrave; long<br />
terme.<br />
En parall&egrave;le, le cahier des charges et le format du document doivent r&eacute;guli&egrave;rement &ecirc;tre &eacute;valu&eacute;s<br />
dans un souci d&rsquo;optimisation continue, orient&eacute;e sur la gestion appliqu&eacute;e des espaces semi-naturels<br />
et naturels.</p>',
    'indicator' => 'Nombre de plans de gestion renouvelés ou nouvellement élaborés',
    'R' => 0,
    'A' => 0,
    'E' => 0,
    'T' => 0,
    'total_cout_etat' => NULL,
    'cout_externe' => NULL,
    'total_couts' => NULL,
    'project_id' => 2,
    'comment_id' => NULL,
    'state_id' => 3,
    'ponc_id' => 1,
    'created_at' => '2020-04-01 11:24:03',
    'updated_at' => '2020-04-01 11:24:03',
),
8 => 
array (
    'id' => 10,
    'code' => '2.3',
    'label' => '3. Diversifier les acteurs de la gestion des sites naturels',
    'image' => NULL,
    'description' => '<p>Le d&eacute;veloppement important du canton et de sa r&eacute;gion frontali&egrave;re, notamment en termes de<br />
d&eacute;mographie et d&rsquo;urbanisation, entra&icirc;ne un besoin toujours plus important de la population en espaces<br />
de d&eacute;lassement. L&rsquo;espace rural, les for&ecirc;ts, les cours d&rsquo;eau, le Lac et les sites naturels prot&eacute;g&eacute;s sont<br />
ainsi toujours plus sollicit&eacute;s. Cette pression grandissante s&rsquo;accompagne de comportements inad&eacute;quats<br />
ayant des r&eacute;percussions n&eacute;gatives, notamment sur la biodiversit&eacute;, les activit&eacute;s agricoles et la p&ecirc;che.<br />
La surveillance de ces espaces est principalement d&eacute;volue aux gardes cantonaux de l&rsquo;environnement,<br />
actuellement au nombre de onze. Eu &eacute;gard aux nombreuses autres missions dont ils ont la charge<br />
l&eacute;gale (t&acirc;ches r&eacute;galiennes), la surveillance n&rsquo;occupe que 20 &agrave; 25% de leur emploi du temps.<br />
Parall&egrave;lement, les incivilit&eacute;s, voire les violences subies par les gardes de l&rsquo;environnement dans<br />
l&rsquo;exercice de leur fonction &eacute;tant en nette augmentation, davantage de surveillances doivent &ecirc;tre<br />
op&eacute;r&eacute;es en bin&ocirc;me, ce qui r&eacute;duit d&rsquo;autant la pr&eacute;sence sur le terrain.<br />
Afin d&rsquo;accompagner le d&eacute;veloppement de notre r&eacute;gion tout en assurant une cohabitation respectueuse<br />
des diff&eacute;rents acteurs de l&rsquo;espace rural, cette action visera &agrave; renforcer le secteur des gardes cantonaux<br />
de l&rsquo;environnement par l&rsquo;engagement d&rsquo;au moins un(e) nouveau(-velle) collaborateur(-trice).</p>',
'indicator' => 'Engagement d’au moins un(e) nouveau(-velle) garde.',
    'R' => 0,
    'A' => 1,
    'E' => 0,
    'T' => 1,
    'total_cout_etat' => NULL,
    'cout_externe' => NULL,
    'total_couts' => NULL,
    'project_id' => 2,
    'comment_id' => NULL,
    'state_id' => 2,
    'ponc_id' => 1,
    'created_at' => '2020-04-01 11:36:28',
    'updated_at' => '2020-04-01 11:36:28',
),
9 => 
array (
    'id' => 11,
    'code' => '2.4',
    'label' => '4. Renforcer la surveillance du patrimoine naturel et de l\'aire agricole',
    'image' => NULL,
    'description' => '<p>Le d&eacute;veloppement important du canton et de sa r&eacute;gion frontali&egrave;re, notamment en termes de<br />
d&eacute;mographie et d&rsquo;urbanisation, entra&icirc;ne un besoin toujours plus important de la population en espaces<br />
de d&eacute;lassement. L&rsquo;espace rural, les for&ecirc;ts, les cours d&rsquo;eau, le Lac et les sites naturels prot&eacute;g&eacute;s sont<br />
ainsi toujours plus sollicit&eacute;s. Cette pression grandissante s&rsquo;accompagne de comportements inad&eacute;quats<br />
ayant des r&eacute;percussions n&eacute;gatives, notamment sur la biodiversit&eacute;, les activit&eacute;s agricoles et la p&ecirc;che.<br />
La surveillance de ces espaces est principalement d&eacute;volue aux gardes cantonaux de l&rsquo;environnement,<br />
actuellement au nombre de onze. Eu &eacute;gard aux nombreuses autres missions dont ils ont la charge<br />
l&eacute;gale (t&acirc;ches r&eacute;galiennes), la surveillance n&rsquo;occupe que 20 &agrave; 25% de leur emploi du temps.<br />
Parall&egrave;lement, les incivilit&eacute;s, voire les violences subies par les gardes de l&rsquo;environnement dans<br />
l&rsquo;exercice de leur fonction &eacute;tant en nette augmentation, davantage de surveillances doivent &ecirc;tre<br />
op&eacute;r&eacute;es en bin&ocirc;me, ce qui r&eacute;duit d&rsquo;autant la pr&eacute;sence sur le terrain.</p>

<p><br />
Afin d&rsquo;accompagner le d&eacute;veloppement de notre r&eacute;gion tout en assurant une cohabitation respectueuse<br />
des diff&eacute;rents acteurs de l&rsquo;espace rural, cette action visera &agrave; renforcer le secteur des gardes cantonaux<br />
de l&rsquo;environnement par l&rsquo;engagement d&rsquo;au moins un(e) nouveau(-velle) collaborateur(-trice).</p>',
'indicator' => 'Engagement d’au moins un(e) nouveau(-velle) garde.',
    'R' => 1,
    'A' => 0,
    'E' => 0,
    'T' => 0,
    'total_cout_etat' => NULL,
    'cout_externe' => NULL,
    'total_couts' => NULL,
    'project_id' => 2,
    'comment_id' => NULL,
    'state_id' => 3,
    'ponc_id' => 1,
    'created_at' => '2020-04-01 11:39:31',
    'updated_at' => '2020-04-01 11:39:31',
),
10 => 
array (
    'id' => 12,
    'code' => '3.1',
    'label' => '1. Promouvoir la biodiversité en forêt',
    'image' => NULL,
    'description' => '<p>Dans le cadre de la r&eacute;vision du plan directeur forestier, les actions suivantes en faveur de la biodiversit&eacute;<br />
seront d&eacute;velopp&eacute;es ou renforc&eacute;es (cf. synth&egrave;se du CA3) :<br />
1. Mise en place d&rsquo;un r&eacute;seau d&rsquo;inventaire dendrom&eacute;trique et botanique, relevant &eacute;galement les esp&egrave;ces<br />
de ch&ecirc;nes<br />
2. Elaboration et diffusion de documentation sp&eacute;cifique aux esp&egrave;ces devant &ecirc;tre soutenues en for&ecirc;t<br />
pour des raisons de biodiversit&eacute;<br />
3. Stabilisation et am&eacute;lioration de la ch&ecirc;naie dans les for&ecirc;ts priv&eacute;es<br />
4. Structuration et stabilisation des lisi&egrave;res en for&ecirc;t priv&eacute;e<br />
5. Obtenir une surface compacte pour le p&eacute;rim&egrave;tre du sanctuaire des Grands Bois de Satigny<br />
6. Mise en place d&rsquo;un suivi scientifique des sanctuaires forestiers<br />
7. Concept et moyens d&rsquo;information &agrave; utiliser sur le terrain<br />
8. Directive concernant les d&eacute;frichements et leurs compensations<br />
9. Observatoire des lisi&egrave;res<br />
Les actions susmentionn&eacute;es sont d&eacute;taill&eacute;es &agrave; titre informatif dans le tableau ci-apr&egrave;s (annexe 1). Ce<br />
sont les fiches du plan directeur forestier qui feront foi.</p>',
    'indicator' => 'Différents indicateurs définis dans le rapport sur la durabilité des forêts et confirmés dans le plan directeur forestier. Le suivi sera effectué dans le cadre du rapport sur la durabilité, dont une actualisation est prévue tous les 5 ans.',
    'R' => 1,
    'A' => 1,
    'E' => 1,
    'T' => 1,
    'total_cout_etat' => NULL,
    'cout_externe' => NULL,
    'total_couts' => NULL,
    'project_id' => 3,
    'comment_id' => NULL,
    'state_id' => 3,
    'ponc_id' => 1,
    'created_at' => '2020-04-01 16:03:21',
    'updated_at' => '2020-04-01 16:03:21',
),
11 => 
array (
    'id' => 13,
    'code' => '4.1',
    'label' => '1. Intégrer l’arbre dans la planification du sol et du sous-sol et mettre en œuvre une arborisation durable de qualité',
    'image' => NULL,
    'description' => '<p><strong>R&eacute;viser la l&eacute;gislation et les directives</strong></p>

<p>Pour anticiper les besoins li&eacute;s &agrave; l&rsquo;arborisation, son d&eacute;veloppement, sa gestion, sa conservation et son<br />
r&eacute;tablissement, modifier les cadres r&eacute;glementaires au niveau des plans directeurs (PLQ notamment,<br />
densification en zone villa) afin de :<br />
1) pr&eacute;server la v&eacute;g&eacute;tation en place ;<br />
2) r&eacute;server des volumes / surfaces n&eacute;cessaires pour les nouvelles plantations et pour les r&eacute;seaux<br />
(canalisations et gaines en sous-sol pour l&rsquo;adduction d&rsquo;eau, d&rsquo;&eacute;lectricit&eacute;, de chauffage &agrave; distance, de<br />
fibre optique, etc.) ;<br />
3) r&eacute;viser les proc&eacute;dures PLQ et espaces publics afin de garantir la mise en &oelig;uvre de l&rsquo;arborisation pr&eacute;vue<br />
dans les plans guides ;<br />
4) pr&eacute;voir des surfaces et volumes d&eacute;volus &agrave; la plantation d&rsquo;arbres qui soient sup&eacute;rieurs &agrave; la pratique<br />
actuelle, en modifiant les directives li&eacute;es au R&egrave;glement sur la conservation de la v&eacute;g&eacute;tation arbor&eacute;e<br />
(notamment les directives plantation et entretien des arbres, plan d&rsquo;am&eacute;nagement paysager, travaux &agrave;<br />
proximit&eacute; d&rsquo;arbres). Ces directives actualis&eacute;es devront aussi expliciter et vulgariser les besoins vitaux des<br />
arbres, et d&eacute;montrer que des plantations bien con&ccedil;ues et r&eacute;alis&eacute;es sont moins co&ucirc;teuses &agrave; l&rsquo;entretien.<br />
Par ailleurs, il conviendra de r&eacute;viser les lois et r&egrave;glements relatifs &agrave; l&rsquo;espace public (par exemple la Loi<br />
pour une mobilit&eacute; coh&eacute;rente et &eacute;quilibr&eacute;e) afin de faciliter la r&eacute;duction des places de parking en surface<br />
et accro&icirc;tre l&rsquo;arborisation.<br />
Un panel de dimensions d&rsquo;arbres sera propos&eacute; d&egrave;s le stade PLQ avec un r&egrave;glement interdisant les<br />
constructions souterraines dans les espaces plantables. Il sera privil&eacute;gi&eacute; des espaces plantables continus,<br />
ouverts et perm&eacute;ables, et une attention particuli&egrave;re sera port&eacute;e &agrave; la pr&eacute;servation des sols en milieu construit.<br />
Etablir une charte de conception et de coordination des travaux en sous-sol qui int&egrave;gre l&rsquo;arborisation<br />
Elaboration avec l&rsquo;OGETTA d&rsquo;une charte (de type &ldquo;charte arbres et r&eacute;seaux&rdquo;) guidant la conception et la<br />
coordination des travaux en sous-sol. Cette charte doit permettre aux diff&eacute;rents partenaires de conna&icirc;tre les<br />
besoins vitaux des arbres et de la v&eacute;g&eacute;tation, notamment en lien avec les besoins accrus en arborisation<br />
des secteurs urbanis&eacute;s. Elle doit aussi d&eacute;finir des principes et pratiques administratives (de la planification<br />
la r&eacute;alisation) permettant d&rsquo;am&eacute;liorer les collaborations entre les diff&eacute;rentes partenaires (services &eacute;tatiques<br />
et communaux, SIG etc.). Enfin, elle devrait clairement exiger la repr&eacute;sentation de l&rsquo;espace &agrave; conserver<br />
pour les plantations dans les sch&eacute;mas en coupe (sous-sol et volume racinaire des arbres).<br />
Mettre en &oelig;uvre un projet pilote exemplaire&nbsp;</p>

<p>Un projet de coordination et de planification des arbres et des r&eacute;seaux est d&eacute;velopp&eacute; dans le quartier Praille<br />
- Acacias - Vernets, en collaboration avec la Ville de Gen&egrave;ve et les gestionnaires des r&eacute;seaux. Il vise &agrave;<br />
rationaliser le trac&eacute; des nouveaux r&eacute;seaux et &agrave; garantir des espaces de plantation d&rsquo;arbres g&eacute;n&eacute;reux,<br />
pour une arborisation durable de qualit&eacute;. Les contraintes pos&eacute;es par les r&eacute;seaux existants sont prises en<br />
compte et des alternatives sont recherch&eacute;es pour augmenter le volume de sol disponible pour les arbres.<br />
Des espaces de plantations sont inscrits dans les documents de planification et garantis sans r&eacute;seau. La&nbsp;plantation d&rsquo;arbres de premi&egrave;re grandeur (25 m&egrave;tres de hauteur et plus) est planifi&eacute;e, et le volume de terre<br />
n&eacute;cessaire &agrave; leur d&eacute;veloppement est pr&eacute;vu. De cette mani&egrave;re, des sols profonds, perm&eacute;ables et fertiles<br />
seront reconstitu&eacute;s.</p>

<p>Elaborer un plan directeur du sous-sol pour l&rsquo;ensemble du Canton<br />
Soutenir l&rsquo;&eacute;laboration du plan directeur du sous-sol, anticiper les besoins li&eacute;s &agrave; l&rsquo;arborisation.<br />
Dans les planifications, rendre obligatoire l&rsquo;&eacute;laboration d&rsquo;un plan du sous-sol, en collaboration avec les<br />
SIG, ou imposer des espaces pour la plantation d&rsquo;arbres d&eacute;pourvus de r&eacute;seaux.<br />
Assurer la mise en &oelig;uvre d&rsquo;une arborisation de qualit&eacute; et actualiser les directives arbres<br />
Actualisation des directives li&eacute;es au RCVA (notamment les directives plantation et entretien des arbres,<br />
plan d&rsquo;am&eacute;nagement paysager, travaux &agrave; proximit&eacute; d&rsquo;arbres) selon les normes et usages actuels.<br />
Imposer des surfaces et volumes d&rsquo;espaces plantables sup&eacute;rieurs &agrave; la pratique actuelle pour les arbres<br />
de premi&egrave;re grandeur pour une arborisation durable. Expliquer et vulgariser les besoins vitaux des arbres,<br />
pr&eacute;ciser que des plantations bien con&ccedil;ues et r&eacute;alis&eacute;es sont moins co&ucirc;teuses &agrave; l&rsquo;entretien.</p>',
'indicator' => '- Imposer dans les PLQ la réservation d’espaces plantables pour une arborisation durable ; modèle de règlement type interdisant constructions et réseaux souterrains dans les espaces plantables.',
'R' => 1,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 4,
'comment_id' => 6,
'state_id' => 1,
'ponc_id' => 1,
'created_at' => '2020-04-01 16:11:25',
'updated_at' => '2020-04-01 16:11:25',
),
12 => 
array (
'id' => 14,
'code' => '4.2',
'label' => '2. Concevoir une stratégie cantonale d\'arborisation et lutter contre les îlots de chaleur',
'image' => NULL,
'description' => '<p>Elaborer une Strat&eacute;gie cantonale d&rsquo;arborisation et v&eacute;g&eacute;talisation en lien avec les changements<br />
climatiques<br />
En collaboration avec les diff&eacute;rents services de l&rsquo;&Eacute;tat et les communes, &eacute;laborer une Strat&eacute;gie de<br />
v&eacute;g&eacute;talisation permettant de planter des arbres adapt&eacute;s aux changements climatiques et d&rsquo;identifier<br />
des secteurs prioritaires en lien avec le Plan climat cantonal 2018-2022 (mise en &oelig;uvre de la Fiche<br />
4.3 du Plan climat cantonal (volet 2).<br />
Etude &agrave; r&eacute;aliser en lien avec les projets existants (Coolcity, Nos Arbres, Constellations urbaines vertes).<br />
Consolider/valoriser les projets de v&eacute;g&eacute;talisation pr&eacute;vus planifications territoriales PDQ, PLQ<br />
(pr&eacute;vu dans les plans guides )<br />
En coordination avec la cartographie des &icirc;lots de chaleur r&eacute;alis&eacute;e par le Service cantonal du<br />
d&eacute;veloppement durable, inscrire dans le Plan directeur cantonal et le Plan directeur du sous-sol (en<br />
projet), les principes &agrave; respecter pour pr&eacute;venir et lutter contre les effets des &icirc;lots de chaleur : circulation<br />
de l&rsquo;air, v&eacute;g&eacute;talisation (toitures, fa&ccedil;ades, etc.), cr&eacute;ation de zones ombrag&eacute;es, perm&eacute;abilisation du<br />
sol, p&eacute;n&eacute;trantes de verdure, etc.<br />
Elaborer des fiches d&rsquo;aide &agrave; la d&eacute;cision en mati&egrave;re d&rsquo;am&eacute;nagement, en lien avec les changements<br />
climatiques<br />
R&eacute;aliser des fiches de sensibilisation et de communication en lien avec le Plan climat cantonal 2018-<br />
2022.<br />
R&eacute;aliser des projets pilotes d&rsquo;arborisation dans les secteurs &agrave; enjeux<br />
Saisir les opportunit&eacute;s de travailler sur des parcelles publiques et priv&eacute;es.</p>',
'indicator' => '- Stratégie cantonale de végétalisation en lien avec les changements climatiques
- Plan directeur cantonal intégrant la végétalisation pour prévenir et lutter contre les îlots de chaleur
- Plan directeur du sous-sol ; Publication de fiches techniques d’aide à la décision pour une
végétalisation et des aménagements adaptés aux changements climatiques
- Nombre de projets pilotes réalisés',
'R' => 1,
'A' => 1,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 4,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-01 16:25:34',
'updated_at' => '2020-04-01 16:25:34',
),
13 => 
array (
'id' => 15,
'code' => '4.3',
'label' => 'Inciter à la conservation des éléments du paysage traditionnel de la campagne genevoise',
'image' => NULL,
'description' => '<p>Constitution d&rsquo;un groupe de travail pilot&eacute; par AgriGen&egrave;ve, avec le GOBG et Pro Natura Gen&egrave;ve, pour<br />
inciter la pr&eacute;servation et le renouvellement des arbres et des cordons arbor&eacute;s dans l&rsquo;aire agricole.<br />
Ce groupe de travail sera notamment investi des t&acirc;ches suivantes :</p>

<p><br />
- Publication d&rsquo;une synth&egrave;se des mesures incitatives existantes (mesures M 5.30, mesures<br />
paysag&egrave;res), d&rsquo;accompagnement et de soins aux vieux arbres, et des conditions pour les paiements<br />
directs.<br />
- Evaluation et &eacute;ventuelle adaptation des contributions pour les arbres, notamment ceux de pleins<br />
champs.<br />
- Mise en place d&rsquo;atelier/animations de sensibilisation dans les 9 r&eacute;seaux agro-&eacute;cologiques genevois<br />
en partenariat avec les animateurs de ces r&eacute;seaux.<br />
- Adaptation du R&egrave;glement sur la conservation de la v&eacute;g&eacute;tation arbor&eacute;e et clarification des diff&eacute;rents<br />
cas de figure.)<br />
Inciter les communes et grands propri&eacute;taires priv&eacute;s &agrave; pr&eacute;server et renouveler les arbres et<br />
cordons bois&eacute;s dans l&rsquo;aire agricole</p>

<p><br />
<em>&Agrave; noter qu&rsquo;en parall&egrave;le AgriGen&egrave;ve m&egrave;ne 10 projets pilotes en agroforesterie.</em></p>',
'indicator' => '- Fiche de sensibilisation/communication à la conservation des arbres et cordons arborés dans l’aire
agricole
- Contributions réadaptées pour les structures arborées notamment isolées en plein champ
- Ateliers de sensibilisation/communication
- Rapports sur les 4 microprojets réalisés avec les communes et grands propriétaires',
'R' => 1,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 4,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 10:39:26',
'updated_at' => '2020-04-03 10:39:26',
),
14 => 
array (
'id' => 16,
'code' => '4.4',
'label' => 'Préserver les arbres biotopes, majeurs et remarquables',
'image' => NULL,
'description' => '<p>Communiquer et sensibiliser &agrave; la pr&eacute;servation des arbres biotopes, majeurs et remarquables<br />
Elaboration d&rsquo;une fiche de sensibilisation/communication &agrave; la pr&eacute;servation des arbres biotopes,<br />
majeurs et remarquables : crit&egrave;res d&rsquo;identification, mesures d&rsquo;accompagnement (taille, p&eacute;rim&egrave;tres de<br />
protection, soins aux vieux arbres, pr&eacute;servation des microdendrohabitats etc.). R&eacute;&eacute;dition d&rsquo;un livre<br />
sur les arbres remarquables (avec un suppl&eacute;ment d&rsquo;arbres et fiches explicatives).<br />
Identifier des arbres biotopes existants sur la base des donn&eacute;es faune, bryophytiques,<br />
lichenologiques et mycologiques.<br />
Renseigner l&rsquo;inventaire cantonal des arbres &agrave; l&rsquo;opportunit&eacute; et/ ou de mani&egrave;re cibl&eacute;e, identifier<br />
les arbres majeurs, biotopes et remarquables en zone urbaine et p&eacute;riurbaine.<br />
Accompagner les propri&eacute;taires dans des d&eacute;marches de conservation et de soins aux arbres<br />
Am&eacute;liorer la prise en compte l&rsquo;int&eacute;r&ecirc;t de ces arbres biotopes, majeurs et remarquables dans<br />
le cadre des proc&eacute;dures de construction et d&rsquo;abattages d&rsquo;arbres<br />
Note : collaboration avec l&rsquo;ASSA, ProNatura, GOBG, CCO, lien avec Conception paysage cantonale</p>',
'indicator' => 'Nombre d’arbres sénescents ou morts préservés, densité et répartition sur le territoire cantonal',
'R' => 1,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 4,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 10:41:37',
'updated_at' => '2020-04-03 10:41:37',
),
15 => 
array (
'id' => 17,
'code' => '4.5',
'label' => 'Compléter l’inventaire cantonal des arbres et suivre le patrimoine arboré',
'image' => NULL,
'description' => '<p>Am&eacute;liorer l&rsquo;Inventaire cantonal des arbres (ICA) et le suivi du patrimoine arbor&eacute;<br />
Mise en ligne de l&rsquo;inventaire cantonal des arbres sur les plateformes du SITG ou de la Ville de Gen&egrave;ve,<br />
soit environ 250&rsquo;000 arbres inventori&eacute;s.<br />
Mise &agrave; disposition d&rsquo;un outil informatique pour interroger l&rsquo;ICA et caract&eacute;riser le patrimoine arbor&eacute;<br />
(https://ge.ch/tericareporting/).<br />
Mise &agrave; disposition aupr&egrave;s des diff&eacute;rents gestionnaires de patrimoine arbor&eacute; (grandes communes<br />
notamment) de l&rsquo;outil de gestion GestArbres et am&eacute;lioration continue de cet outil.<br />
D&eacute;veloppement d&rsquo;outils informatiques (base de donn&eacute;es et application) permettant d&rsquo;assurer un<br />
fonctionnement effectif et rationnel, et d&rsquo;actualiser l&rsquo;ICA en lien avec les demandes d&rsquo;abattage et les<br />
plantations compensatoires.<br />
D&eacute;veloppement d&rsquo;une application pour smartphones permettant de rendre l&rsquo;ICA plus accessible.<br />
Compl&eacute;ter l&rsquo;ICA<br />
Un premier nettoyage des points historiques a &eacute;t&eacute; r&eacute;alis&eacute; en 2018. En 2019, un &ldquo;cahier des charges<br />
2020 ICA 100%&rdquo; sera a &eacute;t&eacute; &eacute;labor&eacute; dans le cadre d&rsquo;un travail de stage en g&eacute;omatique. L&rsquo;objectif est de<br />
disposer en 2022 de l&rsquo;ensemble des points localisant les arbres avec les dimensions de la couronne<br />
et le genre, voire l&rsquo;esp&egrave;ce de chaque arbre. Des relev&eacute;s compl&eacute;mentaires devront &ecirc;tre r&eacute;alis&eacute;s par<br />
des prestataires pour actualiser l&rsquo;ICA. De plus, une &eacute;tude de l&rsquo;&eacute;volution du patrimoine arbor&eacute; depuis<br />
les ann&eacute;es 70-80 sera r&eacute;alis&eacute;e en collaboration avec le Conservatoire et Jardin Botaniques, les<br />
services g&eacute;omatiques de l&rsquo;Etat, les communes et des mandataires sp&eacute;cifiques. Enfin, il conviendra de<br />
rendre obligatoire et syst&eacute;matique l&rsquo;inclusion dans l&rsquo;ICA de toute plantation d&rsquo;arbres lors de nouvelles<br />
constructions (y compris dans les propri&eacute;t&eacute;s priv&eacute;es), ou lors de plantations compensatoires.<br />
Analyser l&rsquo;&eacute;volution des arbres de pleins champs et identifier les secteurs &agrave; enjeux<br />
Sur la base des donn&eacute;es de l&rsquo;inventaire cantonal et/ou d&rsquo;orthophotos historiques actualis&eacute;es avec<br />
les donn&eacute;es Lidar, une analyse de l&rsquo;&eacute;volution du patrimoine arbor&eacute; sera r&eacute;alis&eacute;e dans l&rsquo;aire agricole<br />
(en situation de plein champ).<br />
Il s&rsquo;agira ensuite de d&eacute;finir des secteurs &agrave; enjeux et de proposer aux exploitants et propri&eacute;taires des<br />
mesures paysag&egrave;res pour restaurer des structures existantes. Rendre obligatoire et syst&eacute;matique la<br />
mani&egrave;re de renseigner la couche ICA suite aux plantations des nouvelles constructions, y compris<br />
pour les propri&eacute;t&eacute;s priv&eacute;es.<br />
G&eacute;rer les demandes d&rsquo;abattage de fa&ccedil;on d&eacute;mat&eacute;rialis&eacute;e<br />
D&eacute;veloppement en cours et programme finalis&eacute;, mise en service pr&eacute;vue fin 2019. R&eacute;pondre &agrave; tous<br />
les changements, am&eacute;lioration du produit n&rsquo;ayant pas pu &ecirc;tre d&eacute;velopp&eacute; lors de la phase test et<br />
optimisation de l&rsquo;application en lien avec les utilisateurs.<br />
Int&eacute;grer de mani&egrave;re dynamique et continue le suivi des abattages et des compensations avec<br />
actualisation r&eacute;guli&egrave;re de la base ICA.</p>

<p>Renseigner de fa&ccedil;on obligatoire les plantations compensatoires dans ICA.<br />
D&eacute;veloppement des outils informatiques (base de donn&eacute;es et application) permettant d&rsquo;assurer un<br />
fonctionnement effectif et rationnel et d&rsquo;actualiser ICA r&eacute;guli&egrave;rement en lien avec les demandes<br />
d&rsquo;abattage et les plantations compensatoires.<br />
Renforcer les outils de gestions du patrimoine arbor&eacute;<br />
Poursuivre de d&eacute;veloppement de l&rsquo;application gestarbre.<br />
Communiquer les actions du Secteur for&ecirc;ts et arbres isol&eacute;s aux professionnels et au public<br />
Elaborer et mettre en &oelig;uvre une strat&eacute;gie de communication des actions du SFAI aupr&egrave;s des<br />
professionnels, informer sur les nouvelles directives, organisation de colloques en collaboration<br />
avec l&rsquo;USSP, Plante et Cit&eacute; Suisse et l&rsquo;Hepia.</p>',
'indicator' => '- Nombres d’arbres relevés, nombre de communes utilisant GestArbres
- Base de données ICA complétée à partie des données Lidar
- Application ICA pour smartphone disponible
- Etude sur l’évolution du patrimoine arboré dans la zone agricole, identification de mesures et de
secteurs à enjeux
- Optimisation du programme des demandes d’abattage dématérialisées
- Communication des actions du SFA (colloques, communiqués de presse, etc.)',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 4,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 2,
'created_at' => '2020-04-03 10:43:53',
'updated_at' => '2020-04-03 10:43:53',
),
16 => 
array (
'id' => 18,
'code' => '4.6',
'label' => 'Mener une veille active sur les maladies des arbres',
'image' => NULL,
'description' => '<p>Mener des actions de veille sanitaire via l&rsquo;observatoire cantonal et anticiper les probl&egrave;mes<br />
sanitaires li&eacute;s aux changements climatiques (OCMPO)<br />
Poursuivre les actions r&eacute;alis&eacute;es par l&rsquo;Observatoire cantonal des maladies des plantes ornementales<br />
(OCMPO). Anticiper les probl&egrave;mes sanitaires li&eacute;s aux changements climatiques.<br />
Note : Les plantes exotiques envahissantes sont trait&eacute;es dans la fiche action faune/flore.<br />
Sensibiliser les professionnels et le public aux maladies et soins li&eacute;s au patrimoine arbor&eacute;<br />
Identifier les attentes des professionnels vis-&agrave;-vis de l&rsquo;OCMPO.<br />
Mettre en place des cycles de colloques et de conf&eacute;rences sur la veille sanitaire.<br />
Collaborations avec l&rsquo;OFEV, les communes, Jardin Suisse.</p>',
'indicator' => '- Rapport d’activités annuel OCMPO',
'R' => 1,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 4,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 10:46:08',
'updated_at' => '2020-04-03 10:46:08',
),
17 => 
array (
'id' => 19,
'code' => '5.1',
'label' => 'Intégrer l’objectif de préservation de la quantité de l’eau dans les documents de planification transfrontaliers',
'image' => NULL,
'description' => '<p>La quantit&eacute; d&rsquo;eau disponible dans les cours d&rsquo;eau doit permettre, non seulement d&rsquo;assurer la<br />
connectivit&eacute; biologique de l&rsquo;embouchure &agrave; la source, mais aussi d&rsquo;offrir les volumes d&rsquo;eau n&eacute;cessaires<br />
au maintien de certains habitats sensibles.<br />
La commission internationale pour la protection des eaux du L&eacute;man (CIPEL) va &eacute;laborer son plan<br />
d&rsquo;actions 2021-2030. L&rsquo;objectif de pr&eacute;servation de la quantit&eacute; de l&rsquo;eau dans le syst&egrave;me hydrologique<br />
du bassin versant du L&eacute;man devra &ecirc;tre int&eacute;gr&eacute; au sein de ce plan d&rsquo;actions.<br />
Les communaut&eacute;s de communes ont h&eacute;rit&eacute; de la comp&eacute;tence de la gestion de l&rsquo;eau potable. Elles<br />
doivent &eacute;laborer leur plan directeur technique concernant cette ressource. Dans ces plans, elles<br />
veilleront &agrave; consid&eacute;rer les milieux aquatiques comme des b&eacute;n&eacute;ficiaires de la ressource. Cette question<br />
de disponibilit&eacute; de l&rsquo;eau pour les milieux naturels sera &agrave; mettre a minima sur un pied d&rsquo;&eacute;galit&eacute; par<br />
rapport &agrave; la disponibilit&eacute; de la ressource pour les humains et par rapport aux contraintes financi&egrave;res.<br />
Pour ce faire, les collectivit&eacute;s comp&eacute;tentes devraient pouvoir s&rsquo;appuyer sur le monitoring des<br />
ressources mis en place au sein de la Communaut&eacute; transfrontali&egrave;re de l&rsquo;eau (CTEau).</p>',
'indicator' => '- Une fois le plan d’actions CIPEL 2021-2030 adopté, la prise en compte de la préservation de la
quantité de l’eau dans ce plan d’actions sera évaluée. Une prise en compte satisfaisante représentera
50% de la réalisation de l’action.
- Une fois les plans directeurs techniques eau potable adoptés, la prise en compte de la préservation
des quantités d’eau au bénéfice des milieux naturels dans ces plans directeurs sera évaluée. Une
prise en compte satisfaisante représentera 50% de la réalisation de l’action.',
'R' => 1,
'A' => 0,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => NULL,
'ponc_id' => NULL,
'created_at' => '2020-04-03 10:50:59',
'updated_at' => '2020-04-03 10:50:59',
),
18 => 
array (
'id' => 20,
'code' => '5.2',
'label' => 'Elaborer un guide des bonnes pratiques de gestion de l’eau en ville',
'image' => NULL,
'description' => '<p>L&rsquo;Office cantonal de l&rsquo;eau (OCEau), en collaboration avec les autres offices cantonaux, les promoteurs,<br />
les ing&eacute;nieurs et architectes, les communes et les partenaires priv&eacute;s, promeut, depuis de nombreuses<br />
ann&eacute;es, des mesures de gestion des eaux pluviales aussi vertueuses que possible en mati&egrave;re<br />
d&rsquo;int&eacute;gration paysag&egrave;re, de facilit&eacute; d&rsquo;entretien, de co&ucirc;ts, de biodiversit&eacute; et de multifonctionnalit&eacute;s.<br />
Cette action conjointe des acteurs concern&eacute;s par la politique publique de l&rsquo;eau porte ses fruits et<br />
des projets ou des quartiers exemplaires en la mati&egrave;re voient ou verront prochainement le jour : Eco<br />
quartier des Vergers, Communaux d&rsquo;Ambilly, gare de Ch&ecirc;ne-Bourg, etc.<br />
N&eacute;anmoins, dans de nombreux cas les conflits d&rsquo;usages et les contraintes techniques rendent<br />
encore difficile la concr&eacute;tisation d&rsquo;un concept de gestion des eaux pluviales ambitieux et novateur.<br />
Cette situation est aussi la cons&eacute;quence d&rsquo;un manque de coordination, de temps et de moyens des<br />
architectes, des paysagistes et des sp&eacute;cialistes de l&rsquo;eau, voire d&rsquo;une frilosit&eacute; &agrave; proposer des solutions<br />
nouvelles et non &eacute;prouv&eacute;es sur le territoire cantonal. Ce constat pousse &agrave; anticiper cette question le<br />
plus en amont possible et &agrave; d&eacute;velopper des projets pilotes.<br />
Sur la base des r&eacute;sultats d&rsquo;une &eacute;tude sur un quartier pilote, un guide des bonnes pratiques de gestion<br />
de l&rsquo;eau en ville sera publi&eacute;. Ce guide concernera tant les nouveaux quartiers que la transformation du<br />
b&acirc;ti existant, aux &eacute;chelles du quartier, de l&rsquo;espace public et du b&acirc;timent. L&rsquo;adaptation aux cons&eacute;quences<br />
du changement climatique y prendra une place pr&eacute;pond&eacute;rante.</p>',
'indicator' => 'Lorsque le guide sera publié, l’action sera réalisée.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-03 10:53:28',
'updated_at' => '2020-04-03 10:53:28',
),
19 => 
array (
'id' => 21,
'code' => '5.3',
'label' => 'Déceler, lors des chantiers, les malfaçons des installations d’évacuation des eaux',
'image' => NULL,
'description' => '<p>Les installations priv&eacute;es d&rsquo;&eacute;vacuation des eaux des biens-fonds constituent souvent le maillon faible<br />
d&rsquo;un syst&egrave;me d&rsquo;assainissement. Un contr&ocirc;le rigoureux de ces &eacute;quipements lors de leur construction<br />
permettrait de d&eacute;tecter et de corriger le plus t&ocirc;t possible des malfa&ccedil;ons. Actuellement, pas ou peu<br />
de contr&ocirc;les in situ sont effectu&eacute;s par l&rsquo;Office cantonal de l&rsquo;eau (OCEau). Ces malfa&ccedil;ons engendrent<br />
des pollutions (mauvais raccordement d&rsquo;eaux us&eacute;es sur les eaux pluviales), des dilutions (mauvais<br />
raccordement d&rsquo;eaux pluviales sur les eaux us&eacute;es) et des impacts sur l&rsquo;hydrologie des cours d&rsquo;eau<br />
(absence ou mauvaise conception de dispositifs de gestion des eaux pluviales).<br />
Des contr&ocirc;les &agrave; des &eacute;tapes clefs des chantiers permettraient de d&eacute;tecter imm&eacute;diatement ces malfa&ccedil;ons<br />
et de les faire corriger &agrave; moindre co&ucirc;t par les mandataires, avant qu&rsquo;ils n&rsquo;aient des cons&eacute;quences<br />
n&eacute;fastes en polluant les cours d&rsquo;eau. La cr&eacute;ation d&rsquo;un nouveau poste d&rsquo;inspectrice ou d&rsquo;inspecteur est<br />
essentielle au service de la planification de l&rsquo;eau pour faire face &agrave; la masse de travail suppl&eacute;mentaire<br />
engendr&eacute;e par de tels contr&ocirc;les.<br />
De plus, une d&eacute;marche transversale pour le contr&ocirc;le environnemental des chantiers permettrait la<br />
d&eacute;tection pr&eacute;coce de ces malfa&ccedil;ons tout en mutualisant les efforts des diff&eacute;rentes politiques publiques<br />
li&eacute;es &agrave; l&rsquo;environnement. En 2018, un groupe de travail a &eacute;t&eacute; cr&eacute;&eacute; pour concevoir et mettre en place<br />
un tel inspectorat coordonn&eacute; des chantiers. Il regroupe les responsables concern&eacute;s des trois offices<br />
suivants :<br />
&bull; Office cantonal de l&rsquo;environnement (OCEV),<br />
&bull; Office cantonal de l&rsquo;agriculture et de la nature (OCAN),<br />
&bull; Office cantonal de l&rsquo;eau (OCEau).<br />
Pour le succ&egrave;s de l&rsquo;inspectorat coordonn&eacute; commun &agrave; ces trois offices, la cr&eacute;ation d&rsquo;un poste de<br />
coordinatrice ou de coordinateur est essentielle.<br />
En compl&eacute;ment de l&rsquo;&eacute;laboration de cette d&eacute;marche transversale, le service de la planification de<br />
l&rsquo;eau va &eacute;laborer une directive cantonale pour le contr&ocirc;le des nouvelles constructions &agrave; l&rsquo;usage des<br />
mandataires professionnellement qualifi&eacute;s (MPQ), se basant sur la norme &ldquo;Directive sur l&rsquo;&eacute;vacuation<br />
des eaux des biens-fonds SN 592 000&rdquo;.<br />
Cette action s&rsquo;inscrit dans la ligne de l&rsquo;orientation &ldquo;Q. R&eacute;affirmer l&rsquo;autorit&eacute; de l&rsquo;Etat en mati&egrave;re<br />
de conformit&eacute; des constructions, d&rsquo;affectations et d&rsquo;am&eacute;nagement du territoire&rdquo;, du chapitre<br />
&ldquo;Am&eacute;nagement, logement et agriculture&rdquo; de la feuille de route 2018-2023 du d&eacute;partement du territoire.</p>',
'indicator' => '- Si au moins un équivalent temps plein est ajouté aux effectifs de l’OCEau, exclusivement pour les
contrôles sur le terrain, 50% de l’action sera réalisée.
- Lorsqu’une coordinatrice ou un coordinateur aura été engagé-e et que l’inspectorat coordonné pour
le contrôle environnemental des chantiers sera opérationnel, 25% de l’action sera réalisée.
- Lorsque la directive cantonale pour le contrôle des nouvelles constructions sera publiée par l’OCEau,
25% de l’action sera réalisée.',
'R' => 1,
'A' => 0,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-03 10:55:38',
'updated_at' => '2020-04-03 10:55:38',
),
20 => 
array (
'id' => 22,
'code' => '5.4',
'label' => 'Rétablir la migration piscicole à Vessy',
'image' => NULL,
'description' => '<p>L&rsquo;&eacute;chelle &agrave; poissons actuellement en place au barrage de Vessy est non fonctionnelle. Pour r&eacute;tablir<br />
la migration piscicole de mani&egrave;re efficace, la mesure pl&eacute;biscit&eacute;e est la cr&eacute;ation d&rsquo;une rivi&egrave;re de<br />
contournement. Ces travaux doivent &ecirc;tre r&eacute;alis&eacute;s par les services industriels de Gen&egrave;ve (SIG),<br />
conform&eacute;ment &agrave; la d&eacute;cision d&rsquo;assainissement adress&eacute;e &agrave; SIG par l&rsquo;Office cantonal de l&rsquo;eau (OCEau)<br />
le 4 novembre 2016.<br />
Si n&eacute;cessaire, l&rsquo;Etat de Gen&egrave;ve acquerrait les terrains sur lesquels la rivi&egrave;re de contournement serait<br />
r&eacute;alis&eacute;e par les SIG. Si une parcelle suffisamment large &eacute;tait acquise par l&rsquo;Etat de Gen&egrave;ve, l&rsquo;Office<br />
cantonal de l&rsquo;agriculture et de la nature (OCAN) pourrait profiter de ces terrains pour mettre en &oelig;uvre<br />
d&rsquo;autres projets nature &agrave; l&rsquo;avenir.<br />
L&rsquo;assainissement de cet ouvrage hydro&eacute;lectrique est planifi&eacute; dans le volet &ldquo;R&eacute;tablissement de la<br />
migration du poisson&rdquo; de la planification strat&eacute;gique cantonale selon la loi sur les eaux (LEaux RS<br />
814.20), avec le soutien financier de l&rsquo;Office f&eacute;d&eacute;ral de l&rsquo;environnement (OFEV).</p>',
'indicator' => 'Lorsque l’autorisation de construire sera délivrée, l’action sera réalisée.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-03 10:58:40',
'updated_at' => '2020-04-03 10:58:40',
),
21 => 
array (
'id' => 23,
'code' => '5.5',
'label' => 'Entretenir les cours d’eau cantonaux et communaux',
'image' => NULL,
'description' => '<p>Des plans de gestion des for&ecirc;ts accompagnant les cours d&rsquo;eau cantonaux doivent &ecirc;tre progressivement<br />
&eacute;labor&eacute;s afin d&rsquo;organiser les travaux d&rsquo;entretien et les interventions ponctuelles n&eacute;cessaires au respect<br />
des contraintes sp&eacute;cifiques de ces for&ecirc;ts.<br />
La gestion doit garantir le bon &eacute;coulement des eaux aux endroits o&ugrave; des &eacute;ventuels emb&acirc;cles ou<br />
r&eacute;duction de gabarit causeraient des dommages aux biens et mettraient en danger des personnes en<br />
cas de crue. Elle doit permettre &agrave; une biodiversit&eacute; de la plus grande valeur possible de se d&eacute;velopper.<br />
Elle doit enfin int&eacute;grer les contraintes li&eacute;es &agrave; l&rsquo;utilisation de certains secteurs pour le d&eacute;lassement.<br />
Le service du paysage et des for&ecirc;ts continuera l&rsquo;&eacute;laboration des plans de gestion de for&ecirc;t le long des<br />
cours d&rsquo;eau cantonaux.<br />
De plus, pour une gestion des for&ecirc;ts le long des cours d&rsquo;eau coh&eacute;rente &agrave; travers le canton, il est<br />
souhaitable que la m&eacute;thode d&rsquo;&eacute;laboration des plans de gestion cantonaux soit &eacute;galement appliqu&eacute;e<br />
aux for&ecirc;ts et cordons bois&eacute;s le long des cours d&rsquo;eau communaux. Pour ce faire, le service du paysage<br />
et des for&ecirc;ts accompagnera techniquement les communes volontaires dans l&rsquo;&eacute;laboration de plans de<br />
gestion, jusqu&rsquo;&agrave; la finalisation et la mise en &oelig;uvre.</p>',
'indicator' => '- Lorsque trois nouveaux plans de gestion de forêt le long d’un cours d’eau cantonal auront été
adoptés, par rapport à janvier 2019, 75% de l’action sera réalisée.
- Lorsqu’un plan de gestion de forêt le long d’un cours d’eau communal aura été adopté par la
commune et que les premières interventions liées auront été réalisées, 25% de l’action sera réalisée.',
'R' => 1,
'A' => 0,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-03 11:00:26',
'updated_at' => '2020-04-03 11:00:26',
),
22 => 
array (
'id' => 24,
'code' => '5.6',
'label' => 'Minimiser l’impact des infrastructures et des matériaux liés à la navigation sur la biodiversité lacustre',
'image' => NULL,
'description' => '<p>La pression d&rsquo;utilisation du Lac pour diverses activit&eacute;s augmente constamment, notamment pour la<br />
navigation. La gestion des places d&rsquo;amarrage, des corps morts, des pontons, des ports et des autres<br />
infrastructures li&eacute;es &agrave; la navigation est actuellement r&eacute;alis&eacute;e sans planification cantonale, selon les<br />
opportunit&eacute;s.<br />
L&rsquo;&eacute;laboration d&rsquo;une vision claire et de directives pr&eacute;cises et contraignantes permettra de concentrer<br />
les activit&eacute;s sur certains secteurs et de lib&eacute;rer progressivement une partie du Lac et de ses berges<br />
des infrastructures anthropiques, afin de minimiser les impacts sur la biodiversit&eacute; lacustre.<br />
Une grande vari&eacute;t&eacute; de mat&eacute;riaux sont utilis&eacute;s dans les projets d&rsquo;am&eacute;nagements aquatiques, ainsi<br />
que dans la construction et l&rsquo;entretien des bateaux. Les mat&eacute;riaux plastiques, notamment, sont de<br />
plus en plus pris&eacute;s pour leur facilit&eacute; d&rsquo;utilisation. Les th&eacute;matiques &eacute;mergentes des microplastiques<br />
et des micropolluants doivent &ecirc;tre prises en consid&eacute;ration afin de faire des choix rationnels sur les<br />
mat&eacute;riaux les moins impactant pour les milieux aquatiques lors de la construction, de la modification<br />
ou de la r&eacute;fection d&rsquo;infrastructures ou de bateaux.<br />
Afin de guider les porteurs de projets et les services cantonaux et communaux, le canton &eacute;laborera<br />
une directive concernant les mat&eacute;riaux en contact avec les eaux, leur toxicit&eacute; et les alternatives<br />
conseill&eacute;es pour limiter l&rsquo;impact des bateaux et des infrastructures aquatiques sur la qualit&eacute; de l&rsquo;eau.</p>',
'indicator' => '- Lorsque la planification des infrastructures liées à la navigation sera adoptée par l’Office cantonal
de l’eau, 50% de l’action sera réalisée.
- Lorsque la directive concernant les matériaux en contact avec le Lac et les cours d’eau sera publiée,
50% de l’action sera réalisée.',
'R' => 1,
'A' => 0,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-03 11:05:30',
'updated_at' => '2020-04-03 11:05:30',
),
23 => 
array (
'id' => 25,
'code' => '5.7',
'label' => 'Evaluer la toxicité du cocktail des micropolluants présents dans les cours d’eau',
'image' => NULL,
'description' => '<p>Actuellement, de nombreux param&egrave;tres physico-chimiques sont mesur&eacute;s dans le cadre du monitoring<br />
des cours d&rsquo;eau. Il est facile d&rsquo;&eacute;valuer lesquels de ces crit&egrave;res respectent ou non les normes en<br />
vigueur. Cependant, plusieurs mol&eacute;cules, pr&eacute;sentes dans des quantit&eacute;s qui, individuellement, ne<br />
repr&eacute;senteraient pas de risque toxique pour le milieu, peuvent, de mani&egrave;re combin&eacute;e, avoir des effets<br />
d&eacute;cupl&eacute;s. C&rsquo;est ce que l&rsquo;on appelle l&rsquo;effet &ldquo;cocktail&rdquo; des micropolluants. Ainsi, en plus du respect des<br />
normes pour chaque mol&eacute;cule ou &eacute;l&eacute;ment chimique, il convient d&rsquo;&eacute;valuer la toxicit&eacute; de la combinaison<br />
sp&eacute;cifique &agrave; chaque cours d&rsquo;eau, afin d&rsquo;appr&eacute;cier d&rsquo;une mani&egrave;re compl&egrave;te la qualit&eacute; de son eau.<br />
Une &eacute;valuation de la toxicit&eacute; du cocktail des micropolluants pr&eacute;sents dans les cours d&rsquo;eau du canton<br />
sera r&eacute;alis&eacute;e. Elle comprendra, en plus d&rsquo;une &eacute;valuation pour chaque cours d&rsquo;eau, des propositions<br />
d&rsquo;actions prioris&eacute;es visant &agrave; diminuer les intrants l&agrave; o&ugrave; l&rsquo;effet sera le plus b&eacute;n&eacute;fique pour les organismes<br />
aquatiques.</p>',
'indicator' => 'Lorsqu’un premier rapport contenant une évaluation sur les différents cours d’eau du canton et des
actions priorisées sera publié, l’action sera réalisée.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-03 11:07:07',
'updated_at' => '2020-04-03 11:07:07',
),
24 => 
array (
'id' => 26,
'code' => '5.8',
'label' => 'Suivre la température des cours d’eau',
'image' => NULL,
'description' => '<p>De nombreuses s&eacute;ries de mesures de temp&eacute;rature des cours d&rsquo;eau existent, tant dans le canton de<br />
Gen&egrave;ve, qu&rsquo;en France voisine. Ces s&eacute;ries, parfois encore sous format papier, ne sont pas centralis&eacute;es<br />
et facilement accessibles.<br />
L&rsquo;analyse globale de toutes ces s&eacute;ries de donn&eacute;es, certaines portant sur de longues p&eacute;riodes,<br />
permettra d&rsquo;&eacute;valuer les cons&eacute;quences du changement climatique sur un aspect important de la<br />
sant&eacute; des cours d&rsquo;eau.<br />
Apr&egrave;s un travail de centralisation et d&rsquo;&eacute;change entre les diff&eacute;rentes entit&eacute;s r&eacute;alisant ou ayant r&eacute;alis&eacute;<br />
des mesures de temp&eacute;rature de l&rsquo;eau des cours d&rsquo;eau des bassins versants genevois, une publication<br />
scientifique ou un rapport valorisera l&rsquo;important travail de collecte qui a &eacute;t&eacute; r&eacute;alis&eacute;.<br />
En parall&egrave;le de la r&eacute;alisation d&rsquo;au moins une publication, un maximum de donn&eacute;es seront mises<br />
&agrave; disposition du public de mani&egrave;re ouverte. La mise en place de processus de flux de donn&eacute;es<br />
p&eacute;rennisera l&rsquo;&eacute;change, la diffusion et la mise &agrave; jour de ces donn&eacute;es.<br />
Actuellement, des sondes permettent d&rsquo;enregistrer la temp&eacute;rature de l&rsquo;eau en continu sur certains<br />
cours d&rsquo;eau. Pour beaucoup d&rsquo;autres, seules des mesures ponctuelles faites manuellement sont<br />
r&eacute;alis&eacute;es. Seules des mesures en continu sur de longues p&eacute;riodes permettent de mesurer finement<br />
l&rsquo;impact du changement climatique sur la temp&eacute;rature de l&rsquo;eau. Ce mode de mesure pr&eacute;cis permettra<br />
aussi de v&eacute;rifier l&rsquo;effet d&rsquo;&eacute;ventuelles mesures de mitigation du r&eacute;chauffement, comme par exemple la<br />
plantation d&rsquo;arbres pour ombrager un tron&ccedil;on de cours d&rsquo;eau. Aussi, de nouvelles sondes de mesure<br />
de la temp&eacute;rature de l&rsquo;eau en continu seront install&eacute;es sur les cours d&rsquo;eau pour lesquels les enjeux<br />
de biodiversit&eacute; sont importants et qui ne b&eacute;n&eacute;ficient actuellement pas de mesure de la temp&eacute;rature<br />
en continu. Ces installations se feront sur des limnim&egrave;tres existants du canton de Gen&egrave;ve.</p>',
'indicator' => '- Lorsqu’un article scientifique ou un rapport portant sur l’analyse de l’ensemble des séries de données
de température des cours d’eau disponibles sur le territoire du Grand Genève sera publié, 80% de
l’action sera réalisée.
- Lorsque quatre sondes de température en continu auront été mises en place, 20% de l’action sera
réalisée.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-03 11:10:29',
'updated_at' => '2020-04-03 11:10:29',
),
25 => 
array (
'id' => 27,
'code' => '5.9',
'label' => 'Développer une méthode d’identification des sites aquatiques d’intérêt pour la biodiversité',
'image' => NULL,
'description' => '<p>Actuellement, la valeur de biodiversit&eacute; g&eacute;n&eacute;rale des sites aquatiques est jug&eacute;e de mani&egrave;re empirique,<br />
par avis d&rsquo;expert. Les sites sont souvent identifi&eacute;s comme pr&eacute;cieux sur la base de pr&eacute;sence d&rsquo;esp&egrave;ces<br />
rares ou menac&eacute;es. Cependant, la biodiversit&eacute; banale, c&rsquo;est-&agrave;-dire une grande vari&eacute;t&eacute; d&rsquo;esp&egrave;ces non<br />
pr&eacute;cieuses, est peu prise en compte. De plus, il n&rsquo;existe actuellement pas de m&eacute;thode permettant<br />
d&rsquo;&eacute;valuer la valeur de la biodiversit&eacute; de diff&eacute;rents sites de mani&egrave;re &agrave; les comparer et &agrave; suivre leur<br />
&eacute;volution.<br />
Il sera d&eacute;velopp&eacute; une m&eacute;thode comparable d&rsquo;un site &agrave; l&rsquo;autre qui permette, en utilisant les donn&eacute;es<br />
disponibles sur les milieux et les esp&egrave;ces, d&rsquo;identifier des sites aquatiques d&rsquo;int&eacute;r&ecirc;t pour la biodiversit&eacute;,<br />
autrement appel&eacute;s &ldquo;hotspots&rdquo;.<br />
Cette action sera coordonn&eacute;e avec le d&eacute;ploiement des actions &ldquo;5. Harmoniser les crit&egrave;res<br />
d&rsquo;identification des sites prioritaires faune &amp; flore&rdquo;, du champ d&rsquo;application 8 (Faune et flore), et &ldquo;1.<br />
Recenser et prot&eacute;ger les milieux et habitats d&rsquo;importance locale &agrave; r&eacute;gionale&rdquo;, du champ d&rsquo;application<br />
2 (Sites prot&eacute;g&eacute;s).</p>',
'indicator' => 'Lorsque la méthode sera publiée, l’action sera réalisée.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-03 11:12:01',
'updated_at' => '2020-04-03 11:12:01',
),
26 => 
array (
'id' => 28,
'code' => '5.10',
'label' => 'Etablir un état des lieux des apports en microplastiques des grands affluents du Léman',
'image' => NULL,
'description' => '<p>Apr&egrave;s la mise au point d&rsquo;une m&eacute;thode de pr&eacute;l&egrave;vement des microplastiques dans les cours d&rsquo;eau,<br />
une campagne de pr&eacute;l&egrave;vements sera r&eacute;alis&eacute;e sur l&rsquo;ensemble des grands affluents du L&eacute;man. Ces<br />
pr&eacute;l&egrave;vements serviront &agrave; quantifier et qualifier les apports en microplastiques de ces affluents au<br />
Lac. Il en r&eacute;sultera l&rsquo;&eacute;tablissement d&rsquo;un &eacute;tat des lieux des apports en microplastiques des grands<br />
affluents du L&eacute;man.</p>',
'indicator' => 'Lorsque l’état des lieux sera publié, l’action sera réalisée.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:14:08',
'updated_at' => '2020-04-03 11:14:08',
),
27 => 
array (
'id' => 29,
'code' => '5.11',
'label' => 'Elaborer le projet de revitalisation de la zone alluviale de Vers Vaux',
'image' => NULL,
'description' => '<p>Une premi&egrave;re partie de revitalisation de la zone alluviale de Vers Vaux a &eacute;t&eacute; r&eacute;alis&eacute;e en 2019.<br />
La revitalisation de l&rsquo;ensemble de cette zone alluviale concerne une grande surface, actuellement<br />
aux mains de divers propri&eacute;taires fonciers. Un projet ambitieux sera &eacute;labor&eacute;. Il sera pr&eacute;sent&eacute; aux<br />
propri&eacute;taires et, le cas &eacute;ch&eacute;ant, les acquisitions fonci&egrave;res n&eacute;cessaires seront organis&eacute;es.</p>',
'indicator' => 'Lorsque le projet sera validé par le comité du fond Vitale Vert, l’Office cantonal de l’agriculture et de
la nature (OCAN) et l’Office cantonal de l’eau (OCEau), l’action sera réalisée.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-03 11:16:36',
'updated_at' => '2020-04-03 11:16:36',
),
28 => 
array (
'id' => 30,
'code' => '5.12',
'label' => 'Décanaliser le canal de fuite du barrage de Verbois',
'image' => NULL,
'description' => '<p>Afin d&rsquo;am&eacute;liorer la diversit&eacute; des milieux, il convient de donner une certaine libert&eacute; au canal de fuite du<br />
barrage de Verbois. La premi&egrave;re &eacute;tape consistera en un d&eacute;senrochement du virage en rive gauche du<br />
Rh&ocirc;ne, permettant d&rsquo;&eacute;roder le virage lors de crues. Cette &eacute;rosion sera toutefois ma&icirc;tris&eacute;e et limit&eacute;e.<br />
L&rsquo;&eacute;tude d&rsquo;avant-projet pour l&rsquo;am&eacute;lioration de ce canal de fuite sera lanc&eacute;e en 2021.</p>',
'indicator' => 'Lorsque l’étude d’avant-projet sera finalisée, l’action sera réalisée.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:17:50',
'updated_at' => '2020-04-03 11:17:50',
),
29 => 
array (
'id' => 31,
'code' => '5.13',
'label' => 'Créer trois roselières au quai de Cologny',
'image' => NULL,
'description' => '<p>Trois roseli&egrave;res seront cr&eacute;&eacute;es le long du quai de Cologny. La plus importante s&rsquo;&eacute;tirera sur une longueur<br />
de 200m, pour une largeur de 20m. La seconde, &agrave; l&rsquo;Ouest, fera aussi 200m de long, mais pour 15m<br />
de large. La troisi&egrave;me, &agrave; l&rsquo;Est des deux autres, fera 120m de longueur pour une largeur de 15m. Un<br />
sabot immerg&eacute; cot&eacute; lac prot&eacute;gera chacune d&rsquo;elles de la bise, afin de les p&eacute;renniser.</p>',
'indicator' => 'Après 3 ans d’entretien suite à la création des trois roselières, l’action sera réalisée.',
'R' => 0,
'A' => 0,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 5,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-03 11:19:52',
'updated_at' => '2020-04-03 11:19:52',
),
30 => 
array (
'id' => 32,
'code' => '6.1',
'label' => 'Suivi de la biodiversité de l’aire agricole, communication et mise en œuvre',
'image' => NULL,
'description' => '<p>Cette action vise &agrave; d&eacute;nombrer les populations d&rsquo;insectes et d&rsquo;oiseaux &agrave; l&rsquo;&eacute;chelle cantonale, pour<br />
mesurer l&rsquo;efficacit&eacute; du volet biodiversit&eacute; de la politique agricole. Les groupes &agrave; &eacute;tudier (papillons<br />
de jour, orthopt&egrave;res (dont font partie les grillons et sauterelles) et oiseaux) ont &eacute;t&eacute; choisis pour des<br />
raisons th&eacute;oriques (biologie bien connue) et pratiques (disponibilit&eacute; d&rsquo;un nombre suffisant d&rsquo;experts<br />
pour le suivi sur une p&eacute;riode de 2 ans).<br />
Un premier suivi, a &eacute;t&eacute; r&eacute;alis&eacute; en 2016-17, et publi&eacute; en 2018. Les r&eacute;sultats ont d&eacute;montr&eacute; globalement<br />
une bonne situation selon les esp&egrave;ces observ&eacute;es, avec toutefois des effectifs faibles pour les insectes.<br />
Quelques mesures d&rsquo;optimisation pourront &ecirc;tre toutefois propos&eacute;es aux exploitants, soit directement<br />
par les animateurs des r&eacute;seaux agro-environnementaux (RAE), soit apr&egrave;s avoir proc&eacute;d&eacute; &agrave; des<br />
adaptations r&eacute;glementaires.<br />
Les ann&eacute;es 2019-20 seront &eacute;galement ax&eacute;es sur la communication des r&eacute;sultats aupr&egrave;s des acteurs<br />
concern&eacute;s.</p>',
'indicator' => 'L’action consiste à connaître et comparer la présence et l’effectif de certaines espèces cibles. Les
résultats permettront notamment des adaptations de la mise en œuvre des mesures de politique
agricole en matière de surfaces de promotion de la biodiversité, voire des modifications réglementaires.',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 6,
'comment_id' => NULL,
'state_id' => 1,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:24:08',
'updated_at' => '2020-04-03 11:24:08',
),
31 => 
array (
'id' => 33,
'code' => '6.2',
'label' => 'Suivi et promotion de la biodiversité fonctionnelle dans les parcelles agricoles',
'image' => NULL,
'description' => '<p>Le contr&ocirc;le biologique effectu&eacute; par les auxiliaires des cultures constitue, comme la pollinisation, un<br />
service &eacute;cosyst&eacute;mique essentiel pour l&rsquo;agriculture. La lutte biologique par conservation vise l&rsquo;attraction<br />
d&rsquo;auxiliaires par des modifications structurelles de l&rsquo;environnement ou par le changement des pratiques<br />
de gestion (r&eacute;duction de l&rsquo;utilisation d&rsquo;intrants, fauches tardives, etc.). Le but d&rsquo;une telle lutte est la<br />
protection ou l&rsquo;am&eacute;lioration des populations existantes d&rsquo;auxiliaires afin de r&eacute;duire les effets n&eacute;gatifs<br />
engendr&eacute;s par les ravageurs des cultures. Les habitats naturels ou semi-naturels dans la matrice<br />
agricole constituent des lieux alternatifs et compl&eacute;mentaires aux cultures, des ressources alimentaires<br />
et des sites d&rsquo;hivernation pour des insectes auxiliaires qui peuvent contr&ocirc;ler certaines populations<br />
de ravageurs des cultures.<br />
A Gen&egrave;ve, les insecticides sont principalement appliqu&eacute;s sur le colza, en mara&icirc;chage et en<br />
arboriculture.<br />
Les habitats naturels ou semi-naturels ont probablement un effet sur les populations d&rsquo;auxiliaires,<br />
mais il manque d&rsquo;&eacute;valuations scientifiques permettant d&rsquo;expliquer ces effets et comment ils pourraient<br />
&ecirc;tre optimis&eacute;s.<br />
Cette action vise &agrave; &eacute;tudier le r&ocirc;le que jouent certains types d&rsquo;habitats semi-naturels ou naturels<br />
adjacents aux cultures dans la lutte contre les ravageurs. Elle se d&eacute;roulera en trois temps :<br />
1. affiner la recherche bibliographique et classifier les donn&eacute;es r&eacute;colt&eacute;es sur le canton pour lister les<br />
auxiliaires et les mesures les favorisant;<br />
2. compl&eacute;ter nos connaissances par des &eacute;tudes sur le terrain avec la collaboration de producteurs;<br />
3. proposer des mesures concr&egrave;tes &ldquo;cl&eacute;s en main&rdquo; aux agriculteurs.<br />
Cette action sera coordonn&eacute;e avec l&rsquo;action 6.1. Cependant, elle se concr&eacute;tisera &agrave; l&rsquo;&eacute;chelle cibl&eacute;e de<br />
l&rsquo;exploitation agricole et &agrave; sa p&eacute;riph&eacute;rie directe, sans consid&eacute;rer l&rsquo;ensemble de l&rsquo;aire agricole genevoise.</p>',
'indicator' => 'Le(s) protocole(s) de recherche doivent en premier lieu permettre de définir le rôle que jouent certains
types d’habitats semi-naturels ou naturels adjacents aux cultures et pouvant participer à la lutte
contre les insectes ravageurs. Les parcelles agricoles choisies doivent se focaliser sur des cultures
recevant des insecticides.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 6,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:27:17',
'updated_at' => '2020-04-03 11:27:17',
),
32 => 
array (
'id' => 34,
'code' => '6.3',
'label' => 'Etablir une méthodologie unifiée pour suivre la vie biologique des sols',
'image' => NULL,
'description' => '<p>Le sol est connu au niveau des aspects physico-chimique (% de sable, limon, agrile, M.O., P, K, Mg,<br />
etc..) mais moins par rapport &agrave; l&rsquo;&eacute;volution de l&rsquo;impact des pratiques agricoles novatrices sur sa vie<br />
biologique. La diversification des pratiques culturales (agriculture de conservation, etc.) a probablement<br />
un effet sur cette vie. L&rsquo;am&eacute;lioration des connaissances &agrave; ce sujet pourrait aider &agrave; mieux comprendre<br />
les b&eacute;n&eacute;fices de diff&eacute;rentes pratiques et contribuer &agrave; les pr&eacute;coniser dans les prochaines politiques<br />
agricoles.<br />
Le suivi biologique du sol permettra de comparer les syst&egrave;mes entre eux. Cette action consiste &agrave;<br />
&eacute;tablir l&rsquo;inventaire des m&eacute;thodes utilis&eacute;es actuellement et de retenir une m&eacute;thodologie pl&eacute;biscit&eacute;e<br />
par les experts.</p>',
'indicator' => 'Le résultat sera une méthodologie “plébiscitée” par les experts',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 6,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-03 11:29:10',
'updated_at' => '2020-04-03 11:29:10',
),
33 => 
array (
'id' => 35,
'code' => '6.4',
'label' => 'Optimiser l’enherbement des cultures spéciales pérennes',
'image' => NULL,
'description' => '<p>Une g&eacute;n&eacute;ralisation de l&rsquo;enherbement dans les cultures sp&eacute;ciales p&eacute;rennes est souhait&eacute;e et r&eacute;pond<br />
&agrave; plusieurs objectifs : prot&eacute;ger et renforcer la vie biologique des sols, limiter l&rsquo;usage d&rsquo;herbicides et<br />
favoriser les auxiliaires. Il permet &eacute;galement, de mani&egrave;re indirecte, d&rsquo;augmenter la fixation du CO2.<br />
En 2015, un projet a &eacute;t&eacute; initi&eacute; pour &eacute;laborer de nouveaux m&eacute;langes grainiers qui puissent trouver leur<br />
place dans les cultures p&eacute;rennes, l&rsquo;objectif &eacute;tant &agrave; la fois diversifi&eacute;s botaniquement, peu comp&eacute;titifs et<br />
avec un faible d&eacute;veloppement. Des essais ont d&eacute;but&eacute; sur des parcelles viticoles. Pour acqu&eacute;rir une<br />
connaissance suffisante et pouvoir proposer des m&eacute;langes optimaux, ces essais doivent &ecirc;tre poursuivis<br />
sur plusieurs ann&eacute;es. D&rsquo;un point de vue pratique, les principaux probl&egrave;mes des enherbements sont<br />
le nombre de fauches, la comp&eacute;tition avec la culture en place et la limitation d&rsquo;une certaine forme de<br />
biodiversit&eacute;. Le but final de cette action consiste &agrave; proposer un m&eacute;lange optimal pour l&rsquo;enherbement<br />
des cultures sp&eacute;ciales p&eacute;rennes entre et sous le rang (viticulture, arboriculture, p&eacute;pini&egrave;re), afin de<br />
r&eacute;duire l&rsquo;utilisation d&rsquo;herbicides et limiter les fauches</p>',
'indicator' => 'Analyse et suivi des espèces botaniques présentes dans l’enherbement et analyse du comportement
du mélange en termes de complétion face aux cultures.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 6,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:30:27',
'updated_at' => '2020-04-03 11:30:27',
),
34 => 
array (
'id' => 36,
'code' => '6.5',
'label' => 'Promouvoir les variétés résistantes (fruits, légumes et céréales) auprès des producteurs, consommateurs et distributeurs',
'image' => NULL,
'description' => '<p>Cette action vise &agrave; recenser les vari&eacute;t&eacute;s ayant des tol&eacute;rances &agrave; certaines maladies chez les fruits,<br />
les l&eacute;gumes et les c&eacute;r&eacute;ales. Par exemple, le vignoble cantonal plante et vinifie plusieurs c&eacute;pages<br />
r&eacute;sistants (Divico et Divona) issues de la s&eacute;lection d&rsquo;Agroscope. Il s&rsquo;agira ensuite de promouvoir leur<br />
utilisation par les producteurs (r&eacute;alisation de tests), ainsi que leur commercialisation en impliquant<br />
les associations de consommateurs.<br />
Cette action permettra &eacute;galement de r&eacute;v&eacute;ler les lacunes dans l&rsquo;offre en vari&eacute;t&eacute;s r&eacute;sistantes, et de<br />
demander &agrave; la recherche agronomique de se pencher sur ces besoins.</p>',
'indicator' => 'Nombre et superficie de variétés résistantes cultivées et/ou commercialisées',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 6,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:31:48',
'updated_at' => '2020-04-03 11:31:48',
),
35 => 
array (
'id' => 37,
'code' => '6.6',
'label' => 'Recenser et conserver les variétés traditionnelles régionales et locales',
'image' => NULL,
'description' => '<p>L&rsquo;agrobiodiversit&eacute; est un enjeu parall&egrave;le &agrave; la biodiversit&eacute; qui gagne en importance devant l&rsquo;uniformisation<br />
g&eacute;n&eacute;tique des esp&egrave;ces cultiv&eacute;es. La pr&eacute;servation des vari&eacute;t&eacute;s traditionnelles est un enjeu important<br />
g&eacute;n&eacute;tiquement, mais aussi en termes culinaires avec un potentiel commercial non n&eacute;gligeable. Par<br />
exemple, l&rsquo;AOP accord&eacute;e au Cardon a permis de donner un nouvel &eacute;lan &agrave; cette culture traditionnelle<br />
du territoire du Genevois ; l&rsquo;artichaut violet de Plainpalais, dont la valorisation a d&eacute;but&eacute; en 2010 port&eacute;e<br />
par l&rsquo;OCAN, ou la poire &agrave; rissoles ont &eacute;galement connu d&rsquo;int&eacute;ressants d&eacute;bouch&eacute;s commerciaux,<br />
tout en permettant de rapprocher les milieux ruraux et urbains. Actuellement, aucun inventaire de<br />
l&rsquo;ensemble de ces vari&eacute;t&eacute;s n&rsquo;est disponible, ni une vue d&rsquo;ensemble des diverses actions ponctuelles<br />
pour les pr&eacute;server.<br />
Cette action consiste &agrave; &eacute;tablir un inventaire et &agrave; d&eacute;finir les usages possibles &ndash; selon le march&eacute; et<br />
le go&ucirc;t des consommateurs &ndash; de chaque esp&egrave;ce/vari&eacute;t&eacute; identifi&eacute;e, et &agrave; inventorier les actions de<br />
sauvegarde et de promotion.<br />
La Fondation Pro Specie Rara et la commune de Bernex souhaitent collaborer &agrave; la mise en &oelig;uvre<br />
de cette action.</p>',
'indicator' => 'Nombre de variétés recensées, nombre d’initiatives de promotion',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 6,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:33:14',
'updated_at' => '2020-04-03 11:33:14',
),
36 => 
array (
'id' => 38,
'code' => '7.1',
'label' => 'Renforcer la prise en compte des enjeux climatiques et de la biodiversité en milieu urbain',
'image' => NULL,
'description' => '<p>D&eacute;velopper des synergies entre les politiques transversales (paysage, espace public, urbanisme,<br />
environnement) notamment en regard des enjeux climatiques et de la probl&eacute;matique des &icirc;lots de<br />
chaleur dans l&rsquo;espace b&acirc;ti actuel et dans les futurs quartiers.<br />
Il faudrait d&eacute;cliner cet objectif en actions concr&egrave;tes qui d&eacute;crivent comment on souhaite d&eacute;velopper<br />
les synergies.<br />
Cet enjeu est &agrave; int&eacute;grer notamment par le groupe de r&eacute;flexion responsable de la d&eacute;marche &ldquo;Qualit&eacute; et<br />
territoire durable&rdquo;, le plan climat, la strat&eacute;gie des espaces publics, la conception paysage cantonale,<br />
etc.</p>',
'indicator' => '- Etablissement d’une liste mise à jour régulièrement des démarches inter-offices portées par l’OU,
l’OCAN ou tout autre office ayant des effets sur les champs d’intervention de l’OU et de l’OCAN.
- Mise en œuvre d’une coordination régulière entre les CODIR de l’OU et de l’OCAN pour garantir
une veille sur l’effectivité des synergies entre politiques publiques. Par exemple, vis-à-vis de la
démarche “Qualité et territoire durable”, du plan climat, de la stratégie des espaces publics, de la
conception paysage cantonale, Projets Cool-City et Constellation urbaine verte valorisés, etc.
- Renforcement des outils informatiques permettant de diffuser des documents de synthèse vers les
partenaires professionnels, les chefs de projets des offices.',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 7,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-03 11:41:11',
'updated_at' => '2020-04-03 11:41:11',
),
37 => 
array (
'id' => 39,
'code' => '7.2',
'label' => 'Faciliter et garantir la prise en considération de l’infrastructure écologique et de la biodiversité dans les outils de planification du territoire',
'image' => NULL,
'description' => '<p>Plusieurs outils de planification territoriale sont utilis&eacute;s &agrave; l&rsquo;&eacute;chelle cantonale et communale : le<br />
Plan directeur cantonal 2030 accompagn&eacute; des fiches C06 &ldquo;pr&eacute;server et reconstituer les continuit&eacute;s<br />
biologiques&rdquo; et C04 &ldquo;La politique cantonale du paysage&rdquo;, les plans directeurs communaux, des images<br />
directrices, des plans directeurs de quartier, des plans directeurs de chemin pour pi&eacute;tons, etc.<br />
En accord avec leur &eacute;chelle de r&eacute;f&eacute;rence, ces outils de planification int&egrave;grent d&rsquo;ores et d&eacute;j&agrave; certaines<br />
composantes essentielles de l&rsquo;infrastructure &eacute;cologique cantonale, telles les corridors et continuums<br />
biologiques, les p&eacute;n&eacute;trantes de verdures ou encore certains r&eacute;servoirs de biodiversit&eacute; plac&eacute;s sous<br />
protection. Une cartographie des espaces &agrave; enjeux de nature a par ailleurs &eacute;t&eacute; r&eacute;alis&eacute;e dans le cadre<br />
du programme nature en ville 2014-2018.<br />
Ces outils de planification doivent &ecirc;tre revus et adapt&eacute;s pour r&eacute;pondre aux nouvelles connaissances<br />
et orientations politiques de la strat&eacute;gie de biodiversit&eacute;. A l&rsquo;&eacute;chelle cantonale et r&eacute;gionale, il s&rsquo;agit en<br />
particulier de traduire, dans les outils de planification, les enjeux territoriaux propres &agrave; l&rsquo;infrastructure<br />
&eacute;cologique et &agrave; la trame noire transfrontali&egrave;re.<br />
L&rsquo;action consiste &agrave;:<br />
1. actualiser et valoriser la cartographie des enjeux nature en ville,<br />
2. accompagner le mandat d&rsquo;&eacute;tude pour une repr&eacute;sentation cartographique de l&rsquo;infrastructure<br />
&eacute;cologique (CA 1) en vue d&rsquo;une appropriation par l&rsquo;am&eacute;nagement du territoire<br />
3. d&eacute;finir les modalit&eacute;s d&rsquo;int&eacute;gration des espaces &agrave; enjeux nature en ville et de l&rsquo;infrastructure<br />
&eacute;cologique, une fois d&eacute;velopp&eacute;e (CA 1), dans les outils de planification cit&eacute;s ci-avant, en les<br />
d&eacute;clinant selon la nature et l&rsquo;&eacute;chelle des outils.<br />
4. informer, former et soutenir les partenaires externes de la planification territoriale (communes,<br />
mandataires, etc.) en mati&egrave;re de biodiversit&eacute;<br />
5. actualiser la Fiche C06 du PDCn ainsi que la carte annexe 8. Un mandat pour d&eacute;finir la m&eacute;thode<br />
de transcription de l&rsquo;infrastructure &eacute;cologique sera &agrave; lancer par le service du PDCn (assurer le lien<br />
&eacute;galement avec les fiches A03, A04, A05, A08 et A11 du PDCn).<br />
Un lien sera &eacute;galement &agrave; faira avec la conception cantonale du paysage.</p>',
'indicator' => '- Carte de l’infrastructure écologique répondant aux besoins relevant de l’aménagement du territoire,
disponible et diffusée auprès des instances de planification et leurs mandataires
- Fiche C06 du PDCn 2030 et carte annexe 8 actualisées lors de la prochaine mise à jour.
- Enjeux en matière d’infrastructure écologique connus par les maitres d’ouvrages et mandataires
- Le chapitre relatif aux aspects environnementaux intègre les modalités de prise en compte de
l’infrastructure écologique dans les plans directeurs communaux, études de planification à l’échelle
intercommunales, plans directeurs de quartier, image directrice, etc.',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 7,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:45:25',
'updated_at' => '2020-04-03 11:45:25',
),
38 => 
array (
'id' => 40,
'code' => '7.3',
'label' => 'Renforcer l’intégration de la biodiversité et de l’infrastructure écologique lors de l’élaboration des Plans Localisés de Quartier',
'image' => NULL,
'description' => '<p>Le plan localis&eacute; de quartier pr&eacute;voit la v&eacute;g&eacute;tation &agrave; sauvegarder ou &agrave; cr&eacute;er (art. 3, al 1 LGZD) et indique<br />
les arbres &agrave; abattre (art 3, al 4 let c LGZD).<br />
Pour assurer une meilleure prise en compte de la biodiversit&eacute;, l&rsquo;outil doit plus en amont identifier les<br />
richesses pr&eacute;sentes et davantage int&eacute;grer les donn&eacute;es exposant la plus-value apport&eacute;e par le projet<br />
de PLQ en mati&egrave;re de biodiversit&eacute;, notamment quant &agrave; l&rsquo;am&eacute;nagement des espaces ext&eacute;rieurs<br />
Cette action doit permettre la prise en compte d&rsquo;un objectif en mati&egrave;re de biodiversit&eacute; dans les plans<br />
localis&eacute;s de quartier.<br />
D&eacute;clinaison de l&rsquo;action :<br />
- Int&eacute;grer dans l&rsquo;&eacute;laboration des PLQ, les objectifs en mati&egrave;re de biodiversit&eacute; et de contribution du<br />
projet &agrave; l&rsquo;infrastructure &eacute;cologique cantonale;<br />
- Poursuivre la coordination avec l&rsquo;OCAN dans l&rsquo;&eacute;laboration des PLQ : dans les cahiers des charges<br />
des &eacute;tudes, le niveau d&rsquo;enjeux du p&eacute;rim&egrave;tre consid&eacute;r&eacute; en mati&egrave;re d&rsquo;infrastructure &eacute;cologique ;<br />
- Faire connaitre le niveau d&rsquo;enjeu relatif &agrave; la biodiversit&eacute; et &agrave; l&rsquo;infrastructure &eacute;cologique au pool de<br />
mandataires;<br />
- Mettre en concordance le r&eacute;f&eacute;rentiel des projets urbains (RFU) de l&rsquo;OU et les donn&eacute;es SIG de<br />
l&rsquo;OCAN;<br />
- Pr&eacute;ciser et faire &eacute;voluer l&rsquo;outil d&rsquo;analyse du projet en mati&egrave;re de biodiversit&eacute; &ldquo;&eacute;copotentialit&eacute; plus&rdquo;,<br />
bas&eacute; sur l&rsquo;infrastructure &eacute;cologique.<br />
- Tester les effets de l&rsquo;utilisation de cet outil pour mener une analyse du projet en mati&egrave;re de<br />
pr&eacute;servation de la biodiversit&eacute;<br />
- Proposer des variantes de projet urbain permettant de pr&eacute;server les esp&egrave;ces et milieux prot&eacute;g&eacute;es au<br />
sens de l&rsquo;art. 18b LPN, de fa&ccedil;on &agrave; &eacute;viter les mesures de remplacement de milieux naturels d&eacute;truits.<br />
- Int&eacute;grer des mesures de compensation &eacute;cologique dans les zones d&eacute;ficitaires (art. 18b LPN) de<br />
mani&egrave;re prescriptive et/ou incitative ;<br />
- Mettre en place un module de formation intra-Etat et/ou d&eacute;di&eacute; aux mandataires sur les enjeux de la<br />
biodiversit&eacute; dans la construction de la ville, &agrave; l&rsquo;attention des services de l&rsquo;administration concern&eacute;s<br />
et des mandataires;<br />
- Int&eacute;grer au rapport explicatif des PLQ des &eacute;l&eacute;ments en lien avec la pr&eacute;servation de la biodiversit&eacute;<br />
(&agrave; coordonner avec le SERMA).<br />
Int&eacute;grer la notion de planification du sous-sol dans les PLQ<br />
- Disponibilit&eacute;, et utilisation de l&rsquo;outil &ldquo;&eacute;copotentialit&eacute;&rdquo; le plus &eacute;volu&eacute; par les partenaires internes et<br />
externes,<br />
- En compl&eacute;ment des principes du PLQ, appr&eacute;cier l&rsquo;opportunit&eacute; d&rsquo;un plan d&eacute;taill&eacute; du sous-sol &agrave;<br />
l&rsquo;&eacute;chelle du p&eacute;rim&egrave;tre, avant les premi&egrave;res r&eacute;alisations;</p>

<p>R&eacute;server des espaces en coordination avec les r&eacute;seaux pour assurer le bon d&eacute;veloppement des<br />
am&eacute;nagements paysagers &agrave; long terme ; c&rsquo;est &agrave; dire chercher &agrave; r&eacute;server un maximum d&rsquo;espaces<br />
perm&eacute;ables &agrave; l&rsquo;&eacute;chelle du PLQ dont une majorit&eacute; en pleine terre;<br />
- Favoriser la continuit&eacute; des espaces perm&eacute;ables, pour r&eacute;pondre &agrave; l&rsquo;enjeu de non fragmentation des<br />
espaces de pleine terre.</p>',
'indicator' => 'Nombre de PLQ à partir de 2020 ayant fait l’objet d’une analyse de variantes à l’aide de l’outil
Ecopotentialité. (ou autre outil plus évolué, “écopotentialité plus”)
- Suivi annuel de la fiche descriptive des données OCAN à intégrer dans le référentiel des projets
urbains (RFU)',
'R' => 1,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 7,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:47:34',
'updated_at' => '2020-04-03 11:47:34',
),
39 => 
array (
'id' => 41,
'code' => '7.4',
'label' => 'Intégrer la biodiversité dans les concours d’espace publics et dans les conditions d’aménagement des espaces extérieurs dans les concours d’architecture',
'image' => NULL,
'description' => '<p>Les comp&eacute;tences en mati&egrave;re de biodiversit&eacute; sont, sur la base d&rsquo;une analyse des projets issus de<br />
concours par l&rsquo;OCAN, insuffisamment pr&eacute;sentes dans les jurys de concours au regard des enjeux.<br />
L&rsquo;objectif de cette action est de faire &eacute;voluer la pratique des concours d&rsquo;architecture et/ou d&rsquo;espaces<br />
publics pour prendre en compte le potentiel de pr&eacute;servation et d&rsquo;am&eacute;lioration de la biodiversit&eacute; dans<br />
les projets.<br />
L&rsquo;action se d&eacute;cline en fonction des diff&eacute;rentes &eacute;tapes du concours :<br />
- Dans les secteurs &agrave; enjeux dans l&rsquo;infrastructure &eacute;cologique, int&eacute;grer dans le cahier des charges<br />
des concours d&rsquo;espaces publics les donn&eacute;es d&rsquo;entr&eacute;e en mati&egrave;re de biodiversit&eacute;.<br />
- Poursuivre et renforcer la d&eacute;finition dans le cahier des charges des concours d&rsquo;espaces publics<br />
des objectifs en mati&egrave;re de biodiversit&eacute;.<br />
- Int&eacute;grer un crit&egrave;re relatif &agrave; la prise en compte de la biodiversit&eacute; dans la notation des projets -&gt; cf.<br />
SIA, FAI, FSAP, FSU, FAS, FASAI pour les concours ne relevant pas d&rsquo;une maitrise d&rsquo;ouvrage<br />
publique<br />
- Demander aux concourants de pr&eacute;senter les qualit&eacute;s du projet, notamment sur la base de l&rsquo;&eacute;valuation<br />
de l&rsquo;&eacute;copotentialit&eacute; de la situation avant/ apr&egrave;s,<br />
- Lorsque le p&eacute;rim&egrave;tre du concours repr&eacute;sente un enjeu important pour l&rsquo;infrastructure &eacute;cologique,<br />
int&eacute;grer dans le jury au moins un architecte-paysagiste et un &eacute;cologue,<br />
- Lorsqu&rsquo;un repr&eacute;sentant de l&rsquo;Etat est membre du jury, l&rsquo;OCAN est &agrave; disposition de l&rsquo;OU pour expliquer<br />
les enjeux en mati&egrave;re de biodiversit&eacute;. L&rsquo;OCAN et l&rsquo;OU s&rsquo;assurent que les enjeux en mati&egrave;re d&rsquo;insertion<br />
paysag&egrave;re et de biodiversit&eacute; soient pris en compte.<br />
- D&egrave;s les r&eacute;sultats des concours, les services de l&rsquo;Etat invitent l&rsquo;&eacute;quipe laur&eacute;ate pour d&eacute;finir les points<br />
attendus d&rsquo;am&eacute;lioration du projet pour la prise en compte de l&rsquo;Infrastructure &eacute;cologique, et de la<br />
biodiversit&eacute; en g&eacute;n&eacute;ral, notamment afin de r&eacute;duire, pr&eacute;server ou r&eacute;duire l&rsquo;impact sur les objets<br />
prot&eacute;g&eacute;s au sens de l&rsquo;art. 18 LPN et am&eacute;liorations possibles au sens de l&rsquo;art. 18b LPN.</p>',
'indicator' => 'Intégration d’un chapitre type relatif aux cahiers des charges de concours et grille de pré-analyse
permettant de qualifier la nature des enjeux du point de vue de l’IE
- Nombre de concours publics et privés ayant effectivement intégré cet enjeu
- Nombre de projets lauréats ayant répondu aux enjeux sur cet aspect',
'R' => 1,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 7,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:49:44',
'updated_at' => '2020-04-03 11:49:44',
),
40 => 
array (
'id' => 42,
'code' => '7.5',
'label' => 'Concilier les contraintes normatives et le développement de la biodiversité en milieu urbain',
'image' => NULL,
'description' => '<p>Sur la base des contraintes normatives pr&eacute;-identifi&eacute;es, notamment la directive 7 SIS relative &agrave; la<br />
pr&eacute;vention et la s&eacute;curit&eacute; incendie, rechercher des pistes de solutions permettant de concilier les<br />
contraintes normatives et le d&eacute;veloppement de la biodiversit&eacute; en milieu urbain.<br />
a) Contrainte normative relative au rev&ecirc;tement des voies d&rsquo;acc&egrave;s pour les v&eacute;hicules de secours<br />
et d&rsquo;incendie<br />
Toute construction est soumise dans le canton au respect de la directive n&deg;7 relatives &agrave; la pr&eacute;vention<br />
et la s&eacute;curit&eacute; incendie, conform&eacute;ment au r&egrave;glement F 4 05.01 d&rsquo;application de la loi sur la pr&eacute;vention<br />
des sinistres, l&rsquo;organisation et l&rsquo;intervention des sapeurs-pompiers (RPSSP). Cette n&eacute;cessit&eacute; imp&eacute;rative<br />
implique une accessibilit&eacute; en tout temps pour des v&eacute;hicules d&rsquo;intervention, r&eacute;alis&eacute;e aujourd&rsquo;hui avec<br />
des rev&ecirc;tements imperm&eacute;ables (enrob&eacute;, b&eacute;ton, etc.).<br />
Or la conception des PLQ gagnerait &agrave; ce que soit trait&eacute;e la question de l&rsquo;articulation entre les plantations<br />
envisag&eacute;es par les PLQ et les aires de travail &agrave; m&eacute;nager pour la d&eacute;fense des b&acirc;timents. Il est fr&eacute;quent<br />
en effet que les plans paysagers des PLQ soient impact&eacute;s lors des DD par les contraintes SIS, faute<br />
d&rsquo;anticipation.<br />
Une d&eacute;marche test a &eacute;t&eacute; mise en place pour un acc&egrave;s SIS aux b&acirc;timents semi perm&eacute;able et v&eacute;g&eacute;talis&eacute;,<br />
respectant les contraintes fix&eacute;es par ce r&egrave;glement sur plusieurs op&eacute;rations immobili&egrave;res. A ce jour, les<br />
tests sont effectu&eacute;s sur diff&eacute;rents sites : quartier de l&rsquo;Adret, ch. de Compostelle, hauts de Malagnou,<br />
Parc de Tulette. Etendre les tests sur d&rsquo;autres quartiers, obtenir l&rsquo;accord des promoteurs pour tester<br />
le dispositif de v&eacute;g&eacute;talisation des acc&egrave;s SIS.<br />
L&rsquo;objectif de l&rsquo;action est d&rsquo;assurer le suivi de ces d&eacute;marches test sur cinq quartiers pour valider<br />
un protocole standard de mise en &oelig;uvre r&eacute;pondant au r&egrave;glement F 4 05.01, et &agrave; la directive 7.<br />
Sur cette base, adapter ladite directive. Pour aller plus loin, un guide m&eacute;thodologique simple<br />
ou des formations &agrave; l&rsquo;intention des concepteurs de PLQ sera propos&eacute;, tant sur les rev&ecirc;tements<br />
des voies SIS (a) que sur l&rsquo;articulation plantations/aires de travail (b).<br />
b) contrainte normative relative aux voies de circulation r&eacute;serv&eacute;es aux transports publics<br />
Tout axe primaire situ&eacute; le long d&rsquo;une voie de tramway est utilis&eacute; dans le canton pour faciliter un acc&egrave;s<br />
rapide par les engins des sapeurs-pompiers ou pour assurer une desserte de substitution en cas<br />
d&rsquo;arr&ecirc;t des trams par les TPG.<br />
Une d&eacute;marche test a &eacute;t&eacute; mise en place sur le terminus provisoire du TCOB &agrave; la crois&eacute;e de Confignon,<br />
la route de St Julien et le m&eacute;garon pour v&eacute;g&eacute;taliser les voies de tramway. Le prolongement du tramway<br />
de Bernex sera v&eacute;g&eacute;talis&eacute; sur 2 km.<br />
Il s&rsquo;agit sur la base de ces d&eacute;marches d&rsquo;identifier les possibilit&eacute;s d&rsquo;int&eacute;gration de ces contraintes<br />
normatives tout en favorisant le maintien ou le d&eacute;veloppement de la biodiversit&eacute;, lors des<br />
&eacute;tapes de planification.</p>

<p>Les partenaires de cette mesure sont le service de la police du feu (DT-OAC), l&rsquo;OU, les SIS, les TPG,<br />
l&rsquo;OCGC, les fondations immobili&egrave;res et promoteurs immobiliers. Un groupe de suivi est &agrave; p&eacute;renniser<br />
pour :<br />
- valider les essais r&eacute;alis&eacute;s,<br />
- faire &eacute;voluer les pratiques administratives (directive 7 notamment),<br />
- communiquer sur les r&eacute;sultats obtenus.<br />
NB : Les contraintes li&eacute;es &agrave; l&rsquo;usage du sol et du sous-sol sont trait&eacute;es dans l&rsquo;action 4.1 &ldquo;Int&eacute;grer l&rsquo;arbre<br />
dans la planification du sol et du sous-sol et mettre en &oelig;uvre une arborisation durable de qualit&eacute;&rdquo;.</p>',
'indicator' => '- Nombre de projets livrés avec des espaces carrossables semi perméables,
- Résultat des protocoles test,
- Protocole standard validé et directive 7 mise à jour.',
'R' => 1,
'A' => 0,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 7,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:51:42',
'updated_at' => '2020-04-03 11:51:42',
),
41 => 
array (
'id' => 43,
'code' => '7.6',
'label' => 'Financer et promouvoir les approches « nature et paysage »',
'image' => NULL,
'description' => '<p>Faire connaitre les ressources financi&egrave;res de l&rsquo;OCAN qui permettent de mettre en &oelig;uvre les mesures<br />
propices aux approches nature et paysage dans l&rsquo;espace urbain<br />
D&eacute;velopper les partenariats publics-priv&eacute;s pour financer la nature en ville<br />
Mettre en commun l&rsquo;offre de produits destin&eacute;s aux professionnels du b&acirc;timent: nichoirs &agrave; martinets,<br />
chiropt&egrave;res, substrats pour toitures, etc.<br />
Elaborer un guide des bonnes pratiques explicitant les co&ucirc;ts d&rsquo;am&eacute;nagement et d&rsquo;entretien de surfaces<br />
favorables &agrave; la biodiversit&eacute; (y compris les toitures v&eacute;g&eacute;talis&eacute;es) dans l&rsquo;objectif garantir la continuit&eacute;<br />
des moyens d&rsquo;entretiens des parcelles de l&rsquo;Etat<br />
Etablir des plans de gestion diff&eacute;renci&eacute;s pour les parcelles prioritaires pour le renforcement de la<br />
biodiversit&eacute;<br />
Mettre &agrave; disposition de l&rsquo;Office du logement une/des personne(s) ressource(s) pour optimiser la prise<br />
en compte de la biodiversit&eacute; dans les plans financiers des projets de construction, et proposer un<br />
service d&rsquo;&eacute;valuation des projets sous les angles nature et paysage.</p>',
'indicator' => 'Supports de communication, publication d’un ou plusieurs guides de bonnes pratiques à l’attention
des professionnels, mise en ligne sur le site 1001sites.ch un ou plusieurs catalogues de produits
disponibles pour les professionnels, désignation d’une personne ressource (inclusion dans cahier
des charges)',
'R' => 1,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 7,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:53:24',
'updated_at' => '2020-04-03 11:53:24',
),
42 => 
array (
'id' => 44,
'code' => '7.7',
'label' => 'Promouvoir la nature en ville',
'image' => NULL,
'description' => '<p>L&rsquo;inventaire de la biodiversit&eacute;́ en ville (2015-2016), la carte des milieux naturels, l&rsquo;&eacute;copotentialit&eacute;<br />
et la cartographie de l&rsquo;infrastructure &eacute;cologique permettent d&rsquo;ores et d&eacute;j&agrave; aux acteurs du milieu<br />
b&acirc;ti de pr&eacute;server la biodiversit&eacute;. Cela n&eacute;cessite avant tout un nouveau regard et de nouveaux<br />
savoir-faire. De plus en plus d&rsquo;acteurs priv&eacute;s et publics adoptent une gestion diff&eacute;renci&eacute;e des<br />
espaces ext&eacute;rieurs. Les organisations professionnelles et sp&eacute;cialis&eacute;es sont des acteurs cl&eacute;<br />
pour relayer ces &eacute;l&eacute;ments aupr&egrave;s de la population.<br />
Cette action vise &agrave; actualiser et poursuivre le programme Nature en ville en consolidant le bilan<br />
du programme, en d&eacute;finissant les axes strat&eacute;giques du nouveau programme et en mettant en<br />
&oelig;uvre le programme d&rsquo;actions d&eacute;velopp&eacute; ci-apr&egrave;s.<br />
P&eacute;renniser le Concours Nature en ville et l&rsquo;utiliser comme incubateur de projets sur le terrain<br />
Instituer et internaliser un concours annuel permettant de favoriser la biodiversit&eacute;, le paysage et le<br />
bien-&ecirc;tre des habitants dans l&rsquo;espace urbain avec l&rsquo;appui d&rsquo;un jury compos&eacute;e de repr&eacute;sentants des<br />
principaux acteurs de la construction urbaine et de la biodiversit&eacute;.<br />
D&eacute;velopper et animer la plateforme 1001sitesnatureenville.ch, cr&eacute;er un espace d&rsquo;information<br />
et d&rsquo;&eacute;changes &agrave; destination des acteurs publics et priv&eacute;s pour la nature en ville<br />
Poursuivre et animer la plateforme 1001 sites nature en ville.<br />
Augmenter les synergies au sein des services de l&rsquo;Etat pour favoriser sur ses propres terrains<br />
des am&eacute;nagements et entretiens exemplaires en mati&egrave;re de biodiversit&eacute; et d&rsquo;int&eacute;gration de<br />
l&rsquo;infrastructure &eacute;cologique<br />
Renforcer la collaboration avec l&rsquo;OCBA, identifier les secteurs &agrave; enjeux, &eacute;laborer des cahiers des<br />
charges et d&eacute;velopper des projets exemplaires.<br />
Financer la recherche et d&eacute;veloppement<br />
Initier ou participer aux volets de recherche pour renforcer la nature en ville<br />
Poursuivre la formation continue &agrave; travers le CAS Nature en Ville<br />
Soutenir et promouvoir le CAS Nature en Ville.<br />
D&eacute;velopper des fili&egrave;res de plantes locales avec l&rsquo;aide des p&eacute;pini&egrave;res romandes<br />
Encourager les d&eacute;marches et associations visant &agrave; promouvoir et utilise les plantes et semences<br />
locales.<br />
Inciter et accueillir positivement les initiatives du secteur priv&eacute; visant &agrave; promouvoir directement<br />
et indirectement la biodiversit&eacute;<br />
Accompagner et soutenir les projets et d&eacute;marches participatives, ainsi que les acteurs immobiliers<br />
(Chambre Genevoise immobili&egrave;re, fondations de droit public, r&eacute;gies, professionnels de l&rsquo;immobilier<br />
etc.) pour des actions et am&eacute;nagements favorables &agrave; la biodiversit&eacute;, par exemple valoriser le guide<br />
du potager urbain.</p>

<p>Cr&eacute;er un label pour les &ldquo;&eacute;co-immeubles&rdquo; (&eacute;galement destin&eacute; aux entreprises)<br />
Le programme en cours au SERMA et &agrave; l&rsquo;Office de l&rsquo;Urbanisme intitul&eacute; &ldquo;Qualit&eacute; et territoire durable&rdquo;<br />
(quartiers durables), pourra d&eacute;finir un label genevois cal&eacute; sur la d&eacute;marche OPL.<br />
Mener des actions sp&eacute;cifiques dans les zones industrielles<br />
Accompagner et soutenir les fondations de terrains industriels &agrave; r&eacute;aliser des mesures en faveur de<br />
la biodiversit&eacute;, poursuivre et promouvoir la lab&eacute;lisation nature et &eacute;conomie des entreprises.</p>',
'indicator' => '- Bilan du programme Nature en ville
- Espaces à forte naturalité créés sur les parcelles de l’Etat
- Diversité de l’offre de plantons locaux et semences de pays
- Nombre d’initiatives privées et institutionnelles ayant fait l’objet d’un accompagnement ayant fait
l’objet d’un accompagnement financier
- Nombre de publications scientifiques sur le sujet
- Nombre de mesures favorables à la biodiversité réalisées en zone industrielle',
'R' => 1,
'A' => 1,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 7,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:57:03',
'updated_at' => '2020-04-03 11:57:03',
),
43 => 
array (
'id' => 45,
'code' => '7.8',
'label' => 'Optimiser la biodiversité dans les zones d’habitat individuel',
'image' => NULL,
'description' => '<p>Le d&eacute;partement du territoire a publi&eacute; en juin 2017 un guide sur la densification de qualit&eacute; de la zone 5<br />
en juin 2017, suite &agrave; l&rsquo;entr&eacute;e en vigueur de l&rsquo;art. 59 al. 4 de la LCI permettant de densifier les logements<br />
situ&eacute;s dans ce type de zone. L&rsquo;Office de l&rsquo;urbanisme est charg&eacute; d&rsquo;&eacute;tablir un bilan de cette d&eacute;marche.<br />
A ce jour, il s&rsquo;agit d&rsquo;effectuer :<br />
&bull; Une mise &agrave; jour des plans directeurs communaux devant permettre l&rsquo;&eacute;tablissement d&rsquo;une strat&eacute;gie<br />
de planification sur la zone 5. Les communes ont ainsi la possibilit&eacute; de d&eacute;velopper leur vision de<br />
la densification de cette zone, qui sera prise en compte par les services cantonaux et les entit&eacute;s<br />
charg&eacute;es des pr&eacute;avis;<br />
&bull; Une mise en place d&rsquo;un groupe travail canton-communes sur les impacts en termes d&rsquo;&eacute;quipement<br />
de la densification de la zone 5;<br />
&bull; Une mise &agrave; jour des fiches (A03 et A04) du plan directeur cantonal en lien avec la zone 5;<br />
&bull; Un bilan de la mise en &oelig;uvre du guide pratique &ldquo;Les nouveaux quartiers jardins du XXIe si&egrave;cle&rdquo;,<br />
&eacute;tabli en 2017 en collaboration avec l&rsquo;Association des communes genevoises.<br />
Accompagner les d&eacute;marches avec les priv&eacute;s pour des am&eacute;nagements favorables &agrave; la<br />
biodiversit&eacute; (ex : Charte des jardins, conversion de haies horticoles, etc.).<br />
Soutenir et accompagner les porteurs de projets et les architectes afin de favoriser la biodiversit&eacute;.<br />
Mettre &agrave; disposition de l&rsquo;Office du logement une/des personne(s) ressource(s) pour optimiser la prise<br />
en compte de la biodiversit&eacute; dans les plans financiers des projets de construction, et proposer un<br />
service d&rsquo;&eacute;valuation des projets sous les angles nature et paysage.</p>',
'indicator' => 'Le calcul de l’indice d’écopotentialité est un outil qui permet d’évaluer les impacts d’une densification
par dérogation sur les zones villas, il pourra être utilisé sur quelques secteurs test ;
- Nombre de porteurs de projets accompagnés en zone 5 ;
- Nombre de signataires de la Charte des jardins ;
- Mètres linéaires de haies indigènes plantées.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 7,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 11:58:40',
'updated_at' => '2020-04-03 11:58:40',
),
44 => 
array (
'id' => 46,
'code' => '7.9',
'label' => 'Encourager les démarches participatives',
'image' => NULL,
'description' => '<p>Encourager les d&eacute;marches participatives &agrave; toutes les &eacute;tapes de fabrication de la ville<br />
Int&eacute;grer les notions de biodiversit&eacute;, services &eacute;cosyst&eacute;miques et &icirc;lots de fra&icirc;cheur via des d&eacute;marches<br />
participatives dans les phases de concertation relatives aux projets urbains.<br />
Poursuivre les actions mini-chantiers ou pr&eacute;figuration de nouveaux chantiers pour int&eacute;grer<br />
les attentes des habitants en mati&egrave;re de biodiversit&eacute;<br />
Soutenir et impliquer les futurs habitants dans l&rsquo;am&eacute;nagement d&rsquo;espaces publics favorables &agrave; la<br />
biodiversit&eacute;.</p>',
'indicator' => 'Nombre de démarches participatives soutenues',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 7,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 12:00:00',
'updated_at' => '2020-04-03 12:00:00',
),
45 => 
array (
'id' => 47,
'code' => '8.1',
'label' => 'Renforcer la collaboration avec les associations et institutions naturalistes',
'image' => NULL,
'description' => '<p>Gen&egrave;ve a une longue tradition naturaliste et de recherche scientifique. Aujourd&rsquo;hui plusieurs<br />
associations et institutions s&rsquo;engagent activement pour mieux connaitre, prot&eacute;ger et faire connaitre<br />
la biodiversit&eacute; genevoise. Ce sont notamment le GOBG (oiseaux), KARCH-GE (batraciens et reptiles),<br />
CCO-GE (chauves-souris), COR (martinets), Faune Gen&egrave;ve (toute la faune, notamment les groupes<br />
non couverts par les autres associations, comme les insectes et les mammif&egrave;res), Soci&eacute;t&eacute;s botanique et<br />
mycologique de Gen&egrave;ve. Les partenaires institutionnels sont &eacute;galement importants, les Conservatoire<br />
et Jardin botaniques de la Ville de Gen&egrave;ve et le Mus&eacute;um d&rsquo;histoire naturelle, qui sont les principaux<br />
sp&eacute;cialistes de la biodiversit&eacute; genevoise, ainsi que la Haute-&eacute;cole d&rsquo;ing&eacute;nieurs HEPIA, dont la fili&egrave;re<br />
&laquo; gestion de la nature &raquo; apporte des comp&eacute;tences pr&eacute;cieuses.<br />
Depuis plusieurs ann&eacute;es, l&rsquo;OCAN a intensifi&eacute; sa collaboration avec ces institutions et associations<br />
pour assurer l&rsquo;information de la population et le suivi et la conservation des esp&egrave;ces prioritaires<br />
et atteindre ensemble les objectifs de pr&eacute;servation des esp&egrave;ces et des biotopes convenus avec<br />
la Conf&eacute;d&eacute;ration dans le cadre de la RPT (r&eacute;forme de la p&eacute;r&eacute;quation de la r&eacute;partition des t&acirc;ches<br />
entre la Conf&eacute;d&eacute;ration et les cantons). En &eacute;tablissant des contrats de prestations pluriannuels avec<br />
certains de ces partenaires (hormis MHN, HEPIA, SBG et SMG), l&rsquo;OCAN soutient leurs travaux<br />
de surveillance, protection et sensibilisation du public dans une dynamique gagnant-gagnant. Ces<br />
contrats de prestations doivent &ecirc;tre renouvel&eacute;s en 2020 pour 5 ans (sur la base du contrat cadre<br />
quinquennal entre le canton de Gen&egrave;ve et la Conf&eacute;d&eacute;ration), en assurant non seulement l&rsquo;atteinte<br />
d&rsquo;objectifs exigeants pour les esp&egrave;ces animales et v&eacute;g&eacute;tales, mais aussi la p&eacute;rennisation des structures<br />
associatives (renouvellement et motivation des b&eacute;n&eacute;voles, formation de l&rsquo;encadrement, etc.).<br />
Le montant de cette collaboration est de l&rsquo;ordre de CHF 1&rsquo;000&rsquo;000.- par an, financ&eacute;s &agrave; 50% par la<br />
Conf&eacute;d&eacute;ration, &agrave; 20-40% par le partenaire, le reliquat (environ 25% en moyenne) &eacute;tant pris en charge<br />
par le Canton.<br />
Les contrats de prestations pass&eacute;s avec les associations de protection de la faune (GOBG, KARCH-<br />
GE, CCO-GE, COR, Faune Gen&egrave;ve) repr&eacute;sentent environ 60% de ce budget, les contrats de<br />
prestations pass&eacute;s avec les CJB pour la flore environ 40%. Ces montants servent &agrave; financer des<br />
actions de routine (notamment les r&eacute;ponses aux questions pos&eacute;es par le public, le suivi des esp&egrave;ces<br />
et des sites, l&rsquo;&eacute;valuation des projets de construction), mais aussi des actions nouvelles ou &agrave; renforcer.</p>',
'indicator' => 'Evaluation annuelle des prestations des associations sur la base de leur rapport annuel, au cours
d’une séance dédiée.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 12:04:42',
'updated_at' => '2020-04-03 12:04:42',
),
46 => 
array (
'id' => 48,
'code' => '8.2',
'label' => 'Suivre l’évolution de la flore et de la fonge',
'image' => NULL,
'description' => '<p><strong>FLORE</strong><br />
Depuis plusieurs ann&eacute;es, les Conservatoire et Jardin botaniques de la Ville de Gen&egrave;ve (CJBG)<br />
et l&rsquo;OCAN collaborent pour r&eacute;aliser un suivi cantonal de la flore et des milieux naturels. Ce travail<br />
permet de maintenir une vision globale de la biodiversit&eacute; v&eacute;g&eacute;tale et de d&eacute;velopper des mesures sur<br />
le terrain pour la conservation des esp&egrave;ces les plus rares et les plus menac&eacute;es, en partenariat avec<br />
les communes, les agriculteurs, etc. La Soci&eacute;t&eacute; botanique de Gen&egrave;ve compl&egrave;te ces connaissances,<br />
notamment en effectuant des relev&eacute;s dans les zones sous-prospect&eacute;es du Canton, en identifiant<br />
des &laquo; cas difficiles &raquo;, ou encore en v&eacute;rifiant des donn&eacute;es anciennes. Pour sa part, l&rsquo;HEPIA apporte<br />
sa connaissance de la richesse v&eacute;g&eacute;tale des toitures. Ce travail conjoint permet de mieux cibler les<br />
esp&egrave;ces et les actions &agrave; d&eacute;ployer.<br />
Il s&rsquo;agira donc de poursuivre les suivis des esp&egrave;ces d&rsquo;int&eacute;r&ecirc;t, mais &eacute;galement de mettre en place<br />
un r&eacute;seau de &laquo; placettes &raquo; permettant de suivre l&rsquo;&eacute;volution de la biodiversit&eacute; v&eacute;g&eacute;tale. En effet, la<br />
composition v&eacute;g&eacute;tale des principaux milieux naturels fluctue en fonction des activit&eacute;s humaines<br />
(climat, pollution, m&eacute;thodes d&rsquo;exploitation). Certaines esp&egrave;ces, fr&eacute;quentes dans les ann&eacute;es 60<br />
(catalogue Weber) sont aujourd&rsquo;hui rares, alors que leurs milieux d&rsquo;origine sont toujours pr&eacute;sents.<br />
Malheureusement, aucun suivi &agrave; long terme n&rsquo;a &eacute;t&eacute; men&eacute; et il conviendra de pallier &agrave; ce manque.</p>

<p><strong>FONGE</strong><br />
La connaissance de la fonge est globalement peu d&eacute;velopp&eacute;e. Le besoin de r&eacute;colter des &eacute;chantillons et<br />
de proc&eacute;der &agrave; une d&eacute;termination au microscope rend cette discipline peu accessible aux naturalistes.<br />
La Soci&eacute;t&eacute; mycologique de Gen&egrave;ve regroupe des membres comp&eacute;tents, motiv&eacute;s &agrave; comprendre le<br />
fonctionnement de la fonge, ses relations avec les habitats naturels et semi naturels, ou encore son<br />
&eacute;volution dans un contexte de changements climatiques. Les connaissances acquises &agrave; Gen&egrave;ve sont<br />
aussi utiles pour le reste de la Suisse et la France voisine.<br />
Les &eacute;tudes sur le terrain concerneront &agrave; la fois les esp&egrave;ces rares, des milieux particuliers (par ex.<br />
terrains x&eacute;riques, zone urbaine, sanctuaires forestiers) ou des relations sp&eacute;cifiques (d&eacute;gradation du<br />
bois mort par la fonge ou la relation arbre/fonge/sol).</p>

<p><strong>BRYOPHYTES/LICHENS</strong><br />
De m&ecirc;me, la connaissance de la r&eacute;partition des esp&egrave;ces d&rsquo;int&eacute;r&ecirc;t de ces deux groupes est essentielle<br />
pour la mise en place de mesures de conservation efficaces. Cette action vise &agrave; poursuivre les suivis<br />
de ces deux groupes.</p>',
'indicator' => 'Nombre de données transmises à Info Flora, SwissLichen, NISM',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 2,
'created_at' => '2020-04-03 12:08:21',
'updated_at' => '2020-04-03 12:08:21',
),
47 => 
array (
'id' => 49,
'code' => '8.3',
'label' => 'Surveiller l’avifaune',
'image' => NULL,
'description' => '<p>Actuellement les connaissances sur l&rsquo;avifaune du canton se basent sur des suivis sp&eacute;cifiques d&rsquo;esp&egrave;ces<br />
ou de sites prioritaires, ou sur l&rsquo;Atlas des oiseaux nicheurs du canton de Gen&egrave;ve qui avait men&eacute; un<br />
inventaire exhaustif durant la p&eacute;riode 1998-2001 (seul recensement exhaustif d&rsquo;oiseaux nicheurs de<br />
tout le Canton).<br />
Des suivis dans les R&eacute;seaux Agro-Environnementaux ont r&eacute;v&eacute;l&eacute; d&rsquo;importantes &eacute;volutions ces 20<br />
derni&egrave;res ann&eacute;es. Pour certaines esp&egrave;ces (moineau friquet, fauvette des jardins, tourterelle des bois),<br />
l&rsquo;&eacute;volution n&eacute;gative est alarmante, alors que ce d&eacute;clin est pass&eacute; longtemps inaper&ccedil;u. Un suivi plus<br />
r&eacute;gulier permettrait de d&eacute;celer ces tendances plus t&ocirc;t.<br />
La Station ornithologique suisse (SOS) de Sempach m&egrave;ne un monitoring des oiseaux nicheurs dans<br />
toute la Suisse, &agrave; l&rsquo;&eacute;chelle de carr&eacute;s kilom&eacute;triques ; sur cette base, elle calcule notamment un &laquo;<br />
Swiss Bird Index &raquo;. Seuls deux carr&eacute;s d&rsquo;&eacute;chantillonnage couvrent le canton de Gen&egrave;ve, ce qui est<br />
tr&egrave;s insuffisant pour caract&eacute;riser l&rsquo;avifaune du Canton.<br />
Cette action vise &agrave; d&eacute;finir et mettre en &oelig;uvre avec la Station ornithologique suisse une m&eacute;thode de<br />
suivi de l&rsquo;avifaune genevoise &agrave; long terme qui:<br />
- permettra d&rsquo;obtenir des tendances significatives &agrave; l&rsquo;&eacute;chelle du canton pour les esp&egrave;ces d&rsquo;oiseaux<br />
ne b&eacute;n&eacute;ficiant pas de programmes prioritaires ;<br />
- limitera l&rsquo;investissement n&eacute;cessaire en pouvant &ecirc;tre effectu&eacute;e en grande partie par les membres du<br />
GOBG (un recensement exhaustif de l&rsquo;ensemble du territoire n&eacute;cessiterait des ressources humaines<br />
importantes).<br />
Les r&eacute;sultats obtenus pourront &ecirc;tre compar&eacute;s aux donn&eacute;es de l&rsquo;Atlas 1998-2001.</p>',
'indicator' => 'Valider l’aboutissement des 3 étapes suivantes :
- Définition d’une méthode de monitoring de l’avifaune correspondant aux objectifs définis.
- Evaluation de la référence « 2000 » sur la base des cartographies de l’Atlas 1998-2001.
- Première mise en œuvre et évaluation de l’évolution sur 20 ans.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 7,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-03 12:11:04',
'updated_at' => '2020-04-03 12:11:04',
),
48 => 
array (
'id' => 50,
'code' => '8.4',
'label' => 'Augmenter les effectifs des espèces menacées',
'image' => NULL,
'description' => '<p>Les esp&egrave;ces prioritaires sont des esp&egrave;ces particuli&egrave;rement menac&eacute;es que les mesures de conservation<br />
des habitats et des sites ne suffisent pas &agrave; conserver. Elles font l&rsquo;objet d&rsquo;un processus de s&eacute;lection,<br />
puis d&rsquo;un plan d&rsquo;action pour am&eacute;liorer leur statut de protection. La mise en &oelig;uvre des plans d&rsquo;action<br />
est en partie confi&eacute;e &agrave; des associations sp&eacute;cialis&eacute;es de protection de la faune et de la flore, par le<br />
biais de contrats de prestations</p>',
'indicator' => 'Evaluation annuelle des prestations des associations/institutions sur la base de leur rapport annuel,
au cours d’une séance dédiée.',
'R' => 1,
'A' => 1,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 12:14:00',
'updated_at' => '2020-04-03 12:14:00',
),
49 => 
array (
'id' => 51,
'code' => '8.5',
'label' => 'Harmoniser les critères d’identification des sites prioritaires faune & flore',
'image' => NULL,
'description' => '<p>Jusqu&rsquo;&agrave; pr&eacute;sent, les r&eacute;flexions en mati&egrave;re de conservation de la faune ou de la flore ont &eacute;t&eacute; men&eacute;es<br />
parall&egrave;lement. Les crit&egrave;res d&rsquo;identification des esp&egrave;ces et sites prioritaires sont actuellement bas&eacute;s sur<br />
la raret&eacute; des esp&egrave;ces, leur localisation, leur vuln&eacute;rabilit&eacute;, etc. Il s&rsquo;agira donc d&rsquo;harmoniser l&rsquo;ensemble<br />
de ceux-ci et de mettre ainsi en &oelig;uvre une politique de conservation efficace.</p>',
'indicator' => 'Mise en place de critères et définition commune de sites à protéger et d’une politique de conservation.',
'R' => 1,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-03 12:15:41',
'updated_at' => '2020-04-03 12:15:41',
),
50 => 
array (
'id' => 52,
'code' => '8.6',
'label' => 'Quantifier la biodiversité',
'image' => NULL,
'description' => '<p>La diversit&eacute; des esp&egrave;ces du canton est relativement bien connue. En revanche, les effectifs des<br />
diff&eacute;rentes esp&egrave;ces sont largement m&eacute;connus. En pratique, seuls les oiseaux, les grands mammif&egrave;res,<br />
et un certain groupe d&rsquo;esp&egrave;ces menac&eacute;es (notamment les batraciens et certains reptiles, insectes<br />
ou plantes) ont fait l&rsquo;objet d&rsquo;&eacute;valuations quantitatives. De ce fait, des modifications consid&eacute;rables de<br />
la biodiversit&eacute; passent relativement inaper&ccedil;ues, comme le montre par exemple la r&eacute;gression des<br />
insectes volants relev&eacute;e en Allemagne.<br />
Cette action vise &agrave; &eacute;tudier la faisabilit&eacute; d&rsquo;une &eacute;valuation r&eacute;guli&egrave;re de l&rsquo;&eacute;volution de la biomasse de<br />
certains &eacute;l&eacute;ments de la flore et de la faune genevoises. Parmi les taxons &agrave; suivre potentiellement<br />
(en plus de ceux d&eacute;j&agrave; mentionn&eacute;s ci-dessus) figurent notamment les insectes volants de diff&eacute;rents<br />
milieux, le macrofaune benthique et les poissons de rivi&egrave;re. Plusieurs de ces groupes font d&eacute;j&agrave;<br />
l&rsquo;objet de suivis qualitatifs, voire semi-quantitatifs ; des adaptations des m&eacute;thodologies de relev&eacute;s<br />
permettraient d&rsquo;obtenir des donn&eacute;es quantitatives utiles pour mesurer l&rsquo;&eacute;volution de la biodiversit&eacute;.</p>',
'indicator' => 'Mise en place d’un protocole de suivi quantitatif de la biomasse de certaines espèces',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-03 12:18:17',
'updated_at' => '2020-04-03 12:18:17',
),
51 => 
array (
'id' => 53,
'code' => '8.7',
'label' => 'Créer un pôle d’expertise sur les arthropodes, et un autre sur les oiseaux et les petits mammifères',
'image' => NULL,
'description' => '<p>Actuellement, le groupe des arthropodes est d&eacute;laiss&eacute; par les sp&eacute;cialistes et m&eacute;connu du grand<br />
public &ndash; sauf pour quelques groupes embl&eacute;matiques, tels que les papillons de jour &ndash; alors qu&rsquo;il subit<br />
un fort d&eacute;clin imput&eacute; &agrave; l&rsquo;action humaine. Pour leur part, les mammif&egrave;res sont tr&egrave;s bien connus par les<br />
sp&eacute;cialistes et fortement appr&eacute;ci&eacute;s du grand public. Mais les petits mammif&egrave;res terrestres demeurent<br />
peu &eacute;tudi&eacute;s et sont souvent ignor&eacute;s du grand public.<br />
Le Mus&eacute;um d&rsquo;histoire naturelle d&eacute;veloppera et coordonnera un &laquo; P&ocirc;le arthropodes &raquo; constitu&eacute; d&rsquo;experts<br />
r&eacute;f&eacute;rents, en lien avec les sp&eacute;cialistes, les organisations et les associations &eacute;tudiant la faune du<br />
canton de Gen&egrave;ve. Le Mus&eacute;um souhaite aussi d&eacute;velopper et coordonner un &laquo; P&ocirc;le oiseaux et petits<br />
mammif&egrave;res &raquo;. Ces deux p&ocirc;les auront pour missions (certaines actions sont d&eacute;j&agrave; en cours notamment<br />
le guichet d&rsquo;identification grand public) :<br />
1. D&rsquo;am&eacute;liorer les connaissances scientifiques sur ces groupes faunistiques dans le Canton, au travers<br />
des collections et des inventaires men&eacute;s par les scientifiques ;<br />
2. D&rsquo;enrichir les bases de donn&eacute;es (faunegeneve.ch, infospecies.ch) ;<br />
3. D&rsquo;apporter assistance aux autorit&eacute;s et au grand public pour l&rsquo;identification de ces groupes<br />
faunistiques (guichet d&rsquo;identification &agrave; destination du public) ;<br />
4. De r&eacute;pondre aux interrogations des autorit&eacute;s, du grand public et de la presse sur les th&eacute;matiques<br />
li&eacute;es &agrave; la biodiversit&eacute;, par exemple sur le d&eacute;clin des esp&egrave;ces d&rsquo;importance &eacute;conomique et sur les<br />
esp&egrave;ces exotiques envahissantes ;<br />
5. D&rsquo;apporter assistance aux communes dans la mise en &oelig;uvre d&rsquo;&eacute;v&egrave;nements de sensibilisation ou<br />
de pr&eacute;servation des biotopes ;<br />
6. De sensibiliser le grand public sur la conservation de ces groupes d&rsquo;esp&egrave;ces, par l&rsquo;interm&eacute;diaire<br />
d&rsquo;ateliers et de science participative ;<br />
7. De contribuer &agrave; la transmission des connaissances scientifiques dans les &eacute;coles et les communes.<br />
Ces missions sont inscrites dans la convention cadre sign&eacute;e en 2018 par le Mus&eacute;um, l&rsquo;OCAN (Service<br />
Biodiversit&eacute;) et l&rsquo;association Faune Gen&egrave;ve. Une coordination devra &ecirc;tre mise en place entre les<br />
trois partenaires (et les associations directement concern&eacute;es) pour d&eacute;finir conjointement la mani&egrave;re<br />
d&rsquo;atteindre les objectifs identifi&eacute;s.<br />
Les actions 1, 2, 3, 4 et 6 sont d&eacute;j&agrave; existantes et doivent &ecirc;tre d&eacute;velopp&eacute;es. Les actions 5 et 7 sont<br />
nouvelles.</p>',
'indicator' => 'Pôles constitués et nombre de rencontres annuelles;

Nombre d’identification d’espèces via le guichet public par an;
- Nombre évènements de sensibilisation à destination du grand public, des écoles et des communes
réalisé par an;
- Nombre de données intégrées dans les bases nationales et internationales par an;
- Nombre d’articles scientifiques et de vulgarisation publiés par an.',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 12:27:55',
'updated_at' => '2020-04-03 12:27:55',
),
52 => 
array (
'id' => 54,
'code' => '8.8',
'label' => 'Localiser et assainir les structures artificielles qui piègent la petite faune',
'image' => NULL,
'description' => '<p>Les recommandations formul&eacute;es d&egrave;s 2006 pour faciliter &agrave; la petite faune la travers&eacute;e des routes et<br />
&eacute;viter de la pi&eacute;ger dans les &eacute;vacuations d&rsquo;eau de surface (Mesures &agrave; prendre en faveur de la petite<br />
faune) n&rsquo;ont que tr&egrave;s exceptionnellement &eacute;t&eacute; mises en place. Cela a pour cons&eacute;quence d&rsquo;entraver<br />
les d&eacute;placements de cette petite faune et d&rsquo;induire une mortalit&eacute; discr&egrave;te, mais permanente.<br />
Cette action pr&eacute;voit donc de :<br />
1) Modifier des infrastructures susceptibles de pi&eacute;ger la petite faune. La d&eacute;finition des diff&eacute;rents<br />
corridors, aux niveaux cantonal et local, permettra de prioriser les secteurs o&ugrave; l&rsquo;adaptation<br />
d&rsquo;anciennes constructions est la plus urgente.<br />
2) &Eacute;dicter une norme &agrave; prendre en compte pour les nouvelles constructions, bas&eacute;e sur les<br />
recommandations publi&eacute;es en 2006 d&eacute;j&agrave;.</p>',
'indicator' => '- Nombre d’obstacles rendus perméables et nombre de pièges neutralisés.
- Nombre de nouvelles constructions conformes aux prescriptions / Nombre de nouvelles constructions
non-conformes aux prescriptions.',
'R' => 1,
'A' => 0,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 12:30:09',
'updated_at' => '2020-04-03 12:30:09',
),
53 => 
array (
'id' => 55,
'code' => '8.9',
'label' => 'Compenser le déficit d’abris pour la faune cavernicole',
'image' => NULL,
'description' => '<p>Une part non n&eacute;gligeable de la faune indig&egrave;ne a besoin de cavit&eacute;s pour son cycle biologique, et<br />
notamment sa reproduction. La rar&eacute;faction des vieux arbres et les constructions modernes font<br />
que ces cavit&eacute;s sont de plus en plus rares, au point de menacer de nombreuses esp&egrave;ces (oiseaux,<br />
chauve-souris, insectes, etc.).<br />
La pose de &laquo; nichoirs &raquo; en tous genres est une solution qui a fait ses preuves depuis longtemps pour<br />
rem&eacute;dier au manque de cavit&eacute;s, aussi bien pour les esp&egrave;ces courantes (p.ex. m&eacute;sanges), que pour<br />
des esp&egrave;ces menac&eacute;es (p.ex. Chev&ecirc;che d&rsquo;Ath&eacute;na). Les besoins des esp&egrave;ces sont toutefois tr&egrave;s<br />
variables, et cette action consistera &agrave; multiplier et &agrave; diversifier la mise &agrave; disposition de cavit&eacute;s, en<br />
visant en particulier (liste non-exhaustive) :<br />
&bull; Des insectes xylophages tr&egrave;s menac&eacute;s, comme l&rsquo;osmoderme, qui vit dans le terreau des grandes<br />
cavit&eacute;s dans les vieux arbres.<br />
&bull; Les esp&egrave;ces de chauve-souris les plus menac&eacute;es, et notamment les Rhinolophes.<br />
&bull; Des oiseaux menac&eacute;s typiques des campagnes, comme la Chev&ecirc;che d&rsquo;Ath&eacute;na.<br />
&bull; Les martinets, qui ont adopt&eacute; la ville comme site de nidification depuis des si&egrave;cles, mais se retrouvent<br />
aujourd&rsquo;hui confront&eacute;s &agrave; l&rsquo;absence de sites favorables dans les immeubles modernes.<br />
La mise en place de ces cavit&eacute;s pourra se faire dans le cadre de projets de construction, &agrave; titre de<br />
compensation &eacute;cologique. Cette action de pose active de nichoirs ne peut remplacer l&rsquo;absence de<br />
cavit&eacute;s naturelles ; par cons&eacute;quent, il s&rsquo;agira &eacute;galement d&rsquo;augmenter le nombre de vieux arbres et<br />
d&rsquo;arbres habitats, que ce soit en for&ecirc;t, en campagne ou en ville.</p>',
'indicator' => '- Nombre de cavités mises en place et taux d’utilisation par les espèces cibles',
'R' => 0,
'A' => 0,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 12:33:04',
'updated_at' => '2020-04-03 12:33:04',
),
54 => 
array (
'id' => 56,
'code' => '8.10',
'label' => 'Créer des petites zones humides diversifiées',
'image' => NULL,
'description' => '<p>Les esp&egrave;ces de faune et de flore caract&eacute;ristiques des milieux humides sont parmi les plus menac&eacute;es.<br />
La grande majorit&eacute; des zones humides (petits ou grands plans d&rsquo;eau et prairies humides) ont disparu<br />
de Suisse et du canton de Gen&egrave;ve, suite &agrave; l&rsquo;urbanisation et au drainage pour des raisons agricoles.<br />
Les plans d&rsquo;eau, m&ecirc;me petits et/ou temporaires, abritent une flore et une faune diff&eacute;rente de celle des<br />
lacs et cours d&rsquo;eau. Des efforts cons&eacute;quents sont r&eacute;alis&eacute;s pour am&eacute;nager de petites zones humides,<br />
en particulier dans les r&eacute;serves naturelles. Mais pour &eacute;viter le d&eacute;clin des esp&egrave;ces typiques des<br />
milieux humides, il sera n&eacute;cessaire de poursuivre ce type d&rsquo;am&eacute;nagements &eacute;galement en dehors des<br />
r&eacute;serves, et notamment dans les corridors biologiques (renforcement de la trame bleue). La cr&eacute;ation<br />
de diff&eacute;rents types de zones humides (taille, profondeur, ensoleillement et p&eacute;riodes d&rsquo;ass&egrave;chement)<br />
est importante pour assurer la diversit&eacute; des esp&egrave;ces qui les coloniseront</p>',
'indicator' => 'Nombre et superficie des zones humides réalisées ; distances relatives et mise en réseau.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-03 12:35:39',
'updated_at' => '2020-04-03 12:35:39',
),
55 => 
array (
'id' => 57,
'code' => '8.11',
'label' => 'Soutenir les centres genevois de soins pour animaux sauvages',
'image' => NULL,
'description' => '<p>Les centres de soins pour la faune sauvage sont des organismes d&rsquo;utilit&eacute; publique. Ces organismes<br />
sans but lucratif se consacrent &agrave; la meilleure prise en charge possible des animaux sauvages en<br />
difficult&eacute; trouv&eacute;s par le grand public, dans le but de les soigner, de les r&eacute;adapter &agrave; la vie sauvage et<br />
de les remettre en libert&eacute;. Ils sont au nombre de quatre &agrave; Gen&egrave;ve: COR (sp&eacute;cialit&eacute; oiseaux de toutes<br />
esp&egrave;ces), CRR (sp&eacute;cialit&eacute; rapaces, autres oiseaux, mammif&egrave;res y-compris chauve-souris), Parc<br />
Chalandes/BioParc (sp&eacute;cialit&eacute; mammif&egrave;res) et SOS h&eacute;rissons (sp&eacute;cialit&eacute; mammif&egrave;res). Ils accueillent<br />
chaque ann&eacute;e des milliers d&rsquo;animaux dont une proportion importante pourra &ecirc;tre rel&acirc;ch&eacute;e apr&egrave;s soins<br />
(environ 40% des oiseaux et 70% des h&eacute;rissons).<br />
Si la contribution directe &agrave; la protection des esp&egrave;ces, r&eacute;sultant de la remise en libert&eacute; des animaux<br />
soign&eacute;s, est minime, en tout cas pour la majorit&eacute; des esp&egrave;ces, ces centres jouent un r&ocirc;le tr&egrave;s important<br />
pour la population genevoise. D&rsquo;une part, ils r&eacute;pondent &agrave; une demande croissante de prise en charge<br />
de personnes se trouvant d&eacute;munies face &agrave; un animal bless&eacute; et soufrant, d&rsquo;autre part, ils sont dans une<br />
position privil&eacute;gi&eacute;e pour sensibiliser ces personnes sur le respect de chaque animal, sur les besoins<br />
des animaux sauvages et sur les actions pouvant contribuer &agrave; leur sauvegarde. Ce sont ainsi des<br />
milliers de personnes qui sont touch&eacute;es chaque ann&eacute;e par les centres de soins. Accessoirement, les<br />
centre de soins collectent aussi des donn&eacute;es importantes pour la conservation de la faune, que ce<br />
soit sur la distribution des esp&egrave;ces ou sur les causes de mortalit&eacute; ou d&rsquo;accidents.<br />
M&ecirc;me si une grande partie du travail effectu&eacute; dans les centres est r&eacute;alis&eacute; de mani&egrave;re b&eacute;n&eacute;vole,<br />
les centres de soins ont besoin de financements pour subvenir &agrave; leurs frais de fonctionnement, que<br />
ce soit pour l&rsquo;achat de mat&eacute;riel, de m&eacute;dicaments, de nourriture, en passant par le renouvellement<br />
d&rsquo;installations vieillissantes ou par les salaires pour le personnel qualifi&eacute; encadrant les b&eacute;n&eacute;voles<br />
et administrant les soins aux oiseaux. Dans la pratique, les centres rencontrent de plus en difficult&eacute;<br />
&agrave; couvrir ces besoins avec des dons. Cette action propose de soutenir leurs activit&eacute;s de soins par<br />
une subvention annuelle, modul&eacute;e en fonction de l&rsquo;importance des soins, des prestations fournies et<br />
de leur situation financi&egrave;re, pour un montant de l&rsquo;ordre de 5 &agrave; 10% de leur frais de fonctionnement.</p>

<p>&nbsp;</p>',
'indicator' => 'Evaluation annuelle des prestations des centres de soins sur la base de leur rapport annuel, au cours
d’une séance dédiée.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-03 12:40:44',
'updated_at' => '2020-04-03 12:40:44',
),
56 => 
array (
'id' => 58,
'code' => '8.12',
'label' => 'Créer un site web sur les possibilités de découvrir la biodiversité genevoise',
'image' => NULL,
'description' => '<p>La population genevoise est d&eacute;sireuse de d&eacute;couvrir la nature et la biodiversit&eacute; genevoise, mais<br />
l&rsquo;information disponible est lacunaire et fragment&eacute;e. Au niveau de l&rsquo;Etat de Gen&egrave;ve, la r&eacute;novation<br />
du site web a fait disparaitre une partie des informations sur les r&eacute;serves naturelles et les esp&egrave;ces<br />
sauvages.<br />
Cette action vise &agrave; &eacute;tablir en partenariat avec les associations actives dans le domaine de la<br />
sensibilisation &agrave; la nature, un site web comprenant notamment une carte interactive des lieux &agrave;<br />
d&eacute;couvrir, des informations sur la faune et la flore &agrave; observer, modul&eacute;es en fonction du lieu et de la<br />
saison, et un agenda des activit&eacute;s organis&eacute;es. Dans sa forme, il sera le &ldquo;pendant nature&rdquo; du site d&eacute;j&agrave;<br />
en ligne sur les possibilit&eacute;s de ballades et de d&eacute;couvertes qu&rsquo;offre le site www.geneveterroir.ch issu<br />
de la collaboration entre l&rsquo;Etat de Gen&egrave;ve, l&rsquo;OPAN et les associations agricoles. En outre, il existe<br />
d&eacute;j&agrave; un site web qui traite de la biodiversit&eacute; v&eacute;g&eacute;tale : patrimoine-vert-geneve.ch. Une coordination<br />
et une mise en coh&eacute;rence des informations seront n&eacute;cessaires entre ces deux sites.<br />
Les aspects li&eacute;s &agrave; la cr&eacute;ation de la cartographie interactive sont d&eacute;velopp&eacute;s dans l&rsquo;action 11.5 &ldquo;Valoriser<br />
les donn&eacute;es sur le vivant&rdquo;.<br />
Les aspects de coordination avec les associations et de mise &agrave; jour du site web en mati&egrave;re de sorties<br />
natures sont trait&eacute;s dans l&rsquo;action 9.2 &ldquo;Offrir au grand public une vision d&rsquo;ensemble de l&rsquo;offre de nature<br />
disponible &agrave; Gen&egrave;ve&rdquo;.</p>',
'indicator' => 'Mise en place et fréquentation du site web Genève Nature.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-03 12:43:09',
'updated_at' => '2020-04-03 12:43:09',
),
57 => 
array (
'id' => 59,
'code' => '8.13',
'label' => 'Valoriser la flore et la fonge locales',
'image' => NULL,
'description' => '<p>Aujourd&rsquo;hui, au sein de l&rsquo;OCAN, la conservation des &laquo; champignons &raquo; est int&eacute;gr&eacute;e au programme<br />
&laquo; flore &raquo;. Les avanc&eacute;es r&eacute;centes en mati&egrave;re de classification du vivant ont d&eacute;montr&eacute; que la fonge<br />
constituait un embranchement s&eacute;par&eacute; de la faune et de la flore. La fonge m&eacute;rite donc d&rsquo;&ecirc;tre reconnue<br />
comme entit&eacute; &agrave; part enti&egrave;re.<br />
Les soci&eacute;t&eacute;s botanique et mycologique (SBG/SMG) de Gen&egrave;ve sont des partenaires essentiels de<br />
la connaissance de la flore et de la fonge locales. A travers les activit&eacute;s de leurs membres, elles<br />
organisent des sorties (plantes utilitaires, m&eacute;dicinales, d&eacute;couverte de la flore locale), des cours sur<br />
certaines familles et groupes &laquo; difficiles &raquo;, acqui&egrave;rent des connaissances sur la fonge, son r&ocirc;le dans<br />
l&rsquo;&eacute;cosyst&egrave;me, son &eacute;volution, et publient des articles sur ces activit&eacute;s. Faire connaitre ces travaux est<br />
essentiel ; que ce soit aupr&egrave;s des botanistes et mycologues suisses et fran&ccedil;ais, des professionnels<br />
ou du grand public, les recherches men&eacute;es &agrave; Gen&egrave;ve doivent &ecirc;tre partag&eacute;es. Par ailleurs, la Soci&eacute;t&eacute;<br />
botanique de Gen&egrave;ve souhaite d&eacute;sormais organiser une journ&eacute;e d&eacute;di&eacute;e &agrave; la science citoyenne en<br />
collaboration avec d&rsquo;autres soci&eacute;t&eacute;s et associations, afin de faire connaitre la biodiversit&eacute; &agrave; un large<br />
public.</p>',
'indicator' => 'Nombre de publications dans des revues spécialisées et nombre de sorties tout public organisées.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-03 12:44:28',
'updated_at' => '2020-04-03 12:44:28',
),
58 => 
array (
'id' => 60,
'code' => '8.14',
'label' => 'Protéger la faune et la flore dans les surfaces de promotion de la biodiversité des déprédations de visiteurs',
'image' => NULL,
'description' => '<p>Les surfaces de promotion de la biodiversit&eacute; (SPB) permettent la pr&eacute;sence dans l&rsquo;espace agricole<br />
d&rsquo;esp&egrave;ces caract&eacute;ristiques des milieux ouverts. Gr&acirc;ce &agrave; la bonne r&eacute;partition de ces SPB dans le<br />
Canton, Gen&egrave;ve a une responsabilit&eacute; particuli&egrave;re pour plusieurs esp&egrave;ces, notamment les oiseaux,<br />
en regard des effectifs nationaux.<br />
Aujourd&rsquo;hui, avec toujours plus de loisirs utilisant la zone agricole comme espace de d&eacute;tente, la<br />
pression est de plus en plus forte sur ces surfaces, d&rsquo;autant qu&rsquo;elles sont souvent m&eacute;connues du<br />
grand public et consid&eacute;r&eacute;es comme des zones de friche.<br />
Cette action doit permettre de renforcer la signal&eacute;tique et l&rsquo;information dans les secteurs sensibles, et<br />
d&rsquo;am&eacute;liorer la communication sur les SPB, afin de porter &agrave; la connaissance du grand public la richesse<br />
de ces parcelles et l&rsquo;interdiction d&rsquo;y p&eacute;n&eacute;trer. Cela dans le but de prot&eacute;ger ces habitats sp&eacute;cifiques &agrave;<br />
certaines esp&egrave;ces menac&eacute;es, de mani&egrave;re &agrave; ce que les SPB remplissent pleinement leurs fonctions</p>',
'indicator' => 'Nombre de panneaux créés et posés.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-03 12:47:21',
'updated_at' => '2020-04-03 12:47:21',
),
59 => 
array (
'id' => 61,
'code' => '8.15',
'label' => 'Evaluer les risques d’hybridation des espèces indigènes avec les espèces exotiques envahissantes',
'image' => NULL,
'description' => '<p>Les esp&egrave;ces sauvages indig&egrave;nes sont capables de s&rsquo;hybrider avec certaines esp&egrave;ces domestiques,<br />
exotiques ou horticoles, avec des cons&eacute;quences potentiellement d&eacute;sastreuses pour la biodiversit&eacute;,<br />
allant jusqu&rsquo;&agrave; la disparition irr&eacute;versible des esp&egrave;ces indig&egrave;nes.<br />
Cette action vise &agrave; &eacute;tudier la capacit&eacute; des esp&egrave;ces indig&egrave;nes et locales &agrave; s&rsquo;hybrider, &agrave; estimer les<br />
risques de pollution g&eacute;n&eacute;tique &agrave; long terme et &agrave; d&eacute;finir des recommandations quant &agrave; l&rsquo;utilisation des<br />
esp&egrave;ces domestiques, exotiques ou horticoles &agrave; proximit&eacute; des esp&egrave;ces sauvages.<br />
Les hybridations potentielles actuellement identifi&eacute;es portent sur les esp&egrave;ces suivantes :<br />
- Tritons exotiques / tritons indig&egrave;nes<br />
- Chat haret / chat forestier<br />
- Wapiti / cerf<br />
- Truite de pisciculture / truite indig&egrave;ne<br />
- Abeille europ&eacute;enne s&eacute;lectionn&eacute;e pour l&rsquo;apiculture / abeilles europ&eacute;enne indig&egrave;ne<br />
- Esp&egrave;ces exotiques et vari&eacute;t&eacute;s horticoles / plantes sauvages indig&egrave;nes</p>',
'indicator' => 'Etude réalisée pour chaque cas d’hybridation potentielle.
Le cas échéant, bilan des mesures mises en œuvre.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-03 12:49:00',
'updated_at' => '2020-04-03 12:49:00',
),
60 => 
array (
'id' => 62,
'code' => '8.16',
'label' => 'Lutter contre les espèces exotiques envahissantes',
'image' => NULL,
'description' => '<p>1. Cr&eacute;er un poste de r&eacute;f&eacute;rent cantonal EEE au sein de la politique publique E<br />
La probl&eacute;matique des esp&egrave;ces exotiques envahissantes (EEE) impacte un grand nombre de domaines<br />
(sant&eacute;, agriculture, sols, gravi&egrave;res, for&ecirc;t, biodiversit&eacute;, p&ecirc;che, etc.), et un poste de r&eacute;f&eacute;rent-e<br />
cantonal-e EEE est n&eacute;cessaire &ndash; et d&rsquo;ailleurs requis par la Conf&eacute;d&eacute;ration &ndash; pour coordonner les<br />
activit&eacute;s de pr&eacute;vention, d&rsquo;information et de lutte. Au minimum, un poste &agrave; 50% sera n&eacute;cessaire.<br />
2. R&eacute;partir les responsabilit&eacute;s en mati&egrave;re de lutte entre les services concern&eacute;s (sant&eacute;, agriculture,<br />
sols, gravi&egrave;res, for&ecirc;t, biodiversit&eacute;, p&ecirc;che, etc.);<br />
Le r&ocirc;le du r&eacute;f&eacute;rent-e est de coordonner et piloter les actions au niveau cantonal et d&rsquo;assurer la<br />
collaboration transfrontali&egrave;re (cf. point 3). Il produit et met &agrave; jour les diff&eacute;rents documents strat&eacute;giques<br />
et organise leur mise en &oelig;uvre en collaboration avec les autres services de l&rsquo;Etat concern&eacute;s. Il<br />
d&eacute;l&egrave;gue les t&acirc;ches op&eacute;rationnelles aux services concern&eacute;s en fonction des esp&egrave;ces et de leur<br />
mission, et il s&rsquo;occupe personnellement de la coordination des esp&egrave;ces qui ont un impact g&eacute;n&eacute;ral<br />
sur la population (notamment ambroisie, moustique tigre, etc.). Enfin, il peut &eacute;galement &ecirc;tre amen&eacute;e<br />
&agrave; particip&eacute; au futur contr&ocirc;le coordonn&eacute;e des chantiers.<br />
3. Relancer la collaboration transfrontali&egrave;re au niveau du Grand Gen&egrave;ve sur la base de l&rsquo;&eacute;tat des<br />
lieux de 2014<br />
Les EEE ne connaissant pas de fronti&egrave;res et il est important de relancer la collaboration transfrontali&egrave;re<br />
men&eacute;es sous l&rsquo;&eacute;gide du Grand Gen&egrave;ve, qui avait abouti en 2014 &agrave; un Etat des lieux (Carnet no13-<br />
91) qui mettait notamment en avant un besoin de coordination, de production d&rsquo;outils communs,<br />
d&rsquo;&eacute;changes, de recherche de financements et de r&eacute;glementation.<br />
4. Poursuivre la mise en &oelig;uvre de la Strat&eacute;gie n&eacute;oflore (EEE flore)<br />
L&rsquo;Observatoire genevois pour les plantes envahissantes (OGPE) a pour mission de coordonner<br />
les actions de lutte contre les EEE, ainsi que la diffusion de l&rsquo;information. Une strat&eacute;gie de lutte<br />
(Strat&eacute;gie n&eacute;oflore) a &eacute;t&eacute; valid&eacute;e par le Conseil d&rsquo;Etat en 2013 et pr&eacute;cise les actions &agrave; mener, les<br />
priorit&eacute;s, les sites et les esp&egrave;ces concern&eacute;es. Cette strat&eacute;gie, actuellement mise en &oelig;uvre, est<br />
valide jusqu&rsquo;en 2023. La p&eacute;riode 2020-2023 devra permettre de poursuivre la mise en &oelig;uvre et<br />
de pr&eacute;parer le plan d&rsquo;action suivant.<br />
5. Formaliser une strat&eacute;gie cantonale pour la faune exotique envahissante (EEE faune) et poursuivre<br />
sa mise en &oelig;uvre<br />
De nombreuses actions sont en cours dans le domaine des EEE animales, que ce soit au niveau de<br />
la lutte pour la protection agricole (punaise diabolique, mouche suzuki, etc.), de la protection de la<br />
biodiversit&eacute; et du patrimoine naturel (tritons italiens, &eacute;crevisses am&eacute;ricaines, capricorne asiatique,<br />
etc.) ou de la sant&eacute; (moustique-tigre), mais ces actions ne b&eacute;n&eacute;ficient pas encore d&rsquo;une strat&eacute;gie<br />
de lutte coordonn&eacute;e et valid&eacute;e par le Conseil d&rsquo;Etat, &agrave; l&rsquo;&eacute;gal de ce qui s&rsquo;est fait pour la flore. Il est<br />
propos&eacute; de la pr&eacute;parer et de faire valider une telle strat&eacute;gie d&rsquo;ici la fin de la l&eacute;gislature.<br />
La mise en &oelig;uvre de la fiche n&eacute;cessite une collaboration entre l&rsquo;OCEV et l&rsquo;OCAN (SBio et SPF).</p>',
'indicator' => 'Nombre de réunions du groupe, engagement d’un référent au sein de l’OCEV.',
'R' => 1,
'A' => 1,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-03 12:50:45',
'updated_at' => '2020-04-03 12:50:45',
),
61 => 
array (
'id' => 63,
'code' => '8.17',
'label' => 'Prévenir les dégâts potentiels aux cultures',
'image' => NULL,
'description' => '<p>Les ressources agricoles sont attractives pour de nombreuses esp&egrave;ces sauvages, ce qui peut<br />
provoquer des d&eacute;g&acirc;ts importants et des pertes pour les exploitants agricoles. Cette probl&eacute;matique<br />
est depuis longtemps g&eacute;r&eacute;e par l&rsquo;Etat, en soutenant les agriculteurs dans la pr&eacute;vention des d&eacute;g&acirc;ts, en<br />
intervenant sur les animaux probl&eacute;matiques, en r&eacute;gulant les populations par le tir, et en indemnisant<br />
les d&eacute;g&acirc;ts caus&eacute;s par la faune sauvage. Cette assistance au monde agricole est essentielle pour<br />
assurer l&rsquo;acceptation d&rsquo;une faune riche et diversifi&eacute;e dans le Canton.<br />
Le sanglier a longtemps &eacute;t&eacute; l&rsquo;esp&egrave;ce la plus probl&eacute;matique pour les agriculteurs genevois, et cette<br />
esp&egrave;ce est aujourd&rsquo;hui bien g&eacute;r&eacute;e; les d&eacute;g&acirc;ts qu&rsquo;elle provoque sont d&eacute;sormais faibles. Actuellement,<br />
les probl&egrave;mes les plus importants sont caus&eacute;s par les pigeons (surtout ramiers) et les corvid&eacute;s<br />
(corneilles et corbeaux freux), des esp&egrave;ces dont le nombre, la fertilit&eacute; et la mobilit&eacute; rendent illusoire<br />
une gestion par la r&eacute;gulation des effectifs &agrave; la seule &eacute;chelle du Canton. Afin de contenir les d&eacute;g&acirc;ts,<br />
les gardes de l&rsquo;environnement testent et mettent en &oelig;uvre une palette de techniques de pr&eacute;vention,<br />
des plus classiques (effarouchement pyrotechnique) aux plus innovantes, avec notamment l&rsquo;utilisation<br />
d&rsquo;oiseaux de proie g&eacute;r&eacute;s par un fauconnier, mais aussi de drones et d&rsquo;engins similaires. Ces efforts<br />
seront poursuivis pendant les 4 prochaines ann&eacute;es, avec l&rsquo;objectif de d&eacute;finir une m&eacute;thodologie<br />
standardis&eacute;e &agrave; un co&ucirc;t acceptable qui permette de prot&eacute;ger les parcelles &agrave; risques.</p>',
'indicator' => '- Importance des signalements de dégâts par les agriculteurs et des montants indemnisés.
- Rapport entre le coût de la prévention et de l’indemnisation des dégâts potentiels.',
'R' => 1,
'A' => 1,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-03 12:55:11',
'updated_at' => '2020-04-03 12:55:11',
),
62 => 
array (
'id' => 64,
'code' => '8.18',
'label' => 'Réguler les ongulés',
'image' => NULL,
'description' => '<p>Alors que les ongul&eacute;s sauvages (sanglier, chevreuil, cerf) &eacute;taient quasiment extermin&eacute;s du canton<br />
en 1974, ann&eacute;e de l&rsquo;interdiction de la chasse &agrave; Gen&egrave;ve, les ongul&eacute;s ont progressivement recolonis&eacute;<br />
le Canton. D&eacute;pourvus de grands pr&eacute;dateurs, leurs populations ont progress&eacute; ces derni&egrave;res ann&eacute;es,<br />
en provoquant parfois des d&eacute;g&acirc;ts aux cultures ou en entravant le rajeunissement de certaines for&ecirc;ts.<br />
Suite &agrave; une explosion des populations de sangliers au tournant du si&egrave;cle, l&rsquo;Etat &ndash; avec le soutien<br />
des parties concern&eacute;es &ndash; a introduit une gestion stricte des sangliers, bas&eacute;e sur la mise en place de<br />
mesures de pr&eacute;vention et sur une r&eacute;gulation maintenant 5 &agrave; 7 sangliers par km2 de for&ecirc;t. Cette gestion<br />
a permis de r&eacute;duire tr&egrave;s fortement les d&eacute;g&acirc;ts aux cultures &agrave; la satisfaction du monde agricole, sans<br />
&eacute;liminer l&rsquo;esp&egrave;ce qui reste bien pr&eacute;sente dans les principaux massifs bois&eacute;s du Canton.<br />
Aujourd&rsquo;hui une gestion similaire est envisag&eacute;e pour les cervid&eacute;s (chevreuil et cerf), dont les densit&eacute;s<br />
ont &eacute;galement progress&eacute; depuis le tournant du si&egrave;cle. Si les impacts sur les cultures restent &agrave; ce jour<br />
encore localis&eacute;s, l&rsquo;impact sur le rajeunissement des for&ecirc;ts (surtout par abroutissement des jeunes<br />
arbres) pr&eacute;occupe les forestiers en regard des bases l&eacute;gales et contraignantes de l&rsquo;OFEV. Cette<br />
probl&eacute;matique a d&eacute;j&agrave; conduit &agrave; des tirs de chevreuils &agrave; proximit&eacute; des vignes et vergers du Mandement.<br />
Pour les ann&eacute;es &agrave; venir, il est pr&eacute;vu de poursuivre le suivi des impacts sur les cultures et les for&ecirc;ts,<br />
notamment par des relev&eacute;s annuels des taux d&rsquo;abroutissement du rajeunissement forestier dans<br />
des sites t&eacute;moins, par l&rsquo;am&eacute;lioration des outils de recensement des deux esp&egrave;ces de cervid&eacute;s<br />
(potentiellement avec l&rsquo;utilisation de pi&egrave;ges photographiques en compl&eacute;ment aux comptages des<br />
gardes) et, si n&eacute;cessaire, par la r&eacute;gulation des populations au niveau des massifs forestiers les<br />
plus touch&eacute;s (notamment sur les cerfs des Bois de Versoix). Cette action n&eacute;cessitera notamment<br />
de d&eacute;finir des objectifs quantitatifs et de pr&eacute;ciser les moyens &agrave; mettre en &oelig;uvre (consignes de tirs,<br />
m&eacute;thodes, saison, coordination transfrontali&egrave;re, etc.), en concertation avec les commissions et les<br />
parties prenantes concern&eacute;es, comme cela a &eacute;t&eacute; fait pour les sangliers.<br />
En outre, l&rsquo;OCAN a r&eacute;alis&eacute; un concept for&ecirc;t-ongul&eacute; au sens de la directive f&eacute;d&eacute;rale, il est actuellement<br />
mis en &oelig;uvre et constitue l&rsquo;outil principal de pilotage de la probl&eacute;matique en for&ecirc;t.</p>',
'indicator' => '- Mesures directes et indirectes des densités d’ongulés dans les principaux massifs forestiers du
Canton
- Suivi du rajeunissement des forêts (taux d’abroutissements, etc.)
- Analyse des signalements de dégâts par les agriculteurs et des montants indemnisés',
'R' => 1,
'A' => 1,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 8,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-03 12:56:44',
'updated_at' => '2020-04-03 12:56:44',
),
63 => 
array (
'id' => 65,
'code' => '9.1',
'label' => 'Récolter l’avis éclairé des citoyens sur la biodiversité',
'image' => NULL,
'description' => '<p>Les questions li&eacute;es &agrave; la biodiversit&eacute; sont complexes et engagent une pluralit&eacute; d&rsquo;int&eacute;r&ecirc;ts qui requi&egrave;rent<br />
un arbitrage. Par ailleurs, l&rsquo;appropriation de cette question par les citoyens repr&eacute;sente un des 3 axes<br />
strat&eacute;giques de la strat&eacute;gie Biodiversit&eacute; Gen&egrave;ve 2030. L&rsquo;objectif de l&rsquo;action est d&rsquo;assurer une dimension<br />
participative &agrave; la mise en &oelig;uvre du plan biodiversit&eacute;.<br />
Pour r&eacute;pondre &agrave; cet enjeu, deux volets seront d&eacute;velopp&eacute;s :<br />
- Prise en compte de l&rsquo;opinion publique avec un sondage orient&eacute; biodiversit&eacute; aupr&egrave;s d&rsquo;un public<br />
repr&eacute;sentatif du canton, &agrave; l&rsquo;image du barom&egrave;tre de l&rsquo;environnement men&eacute; par l&rsquo;Etat : r&eacute;alisation en<br />
d&eacute;but et en fin de l&eacute;gislature.<br />
- Mise en place d&rsquo;une conf&eacute;rence de citoyens/publiforum : r&eacute;union d&rsquo;un panel repr&eacute;sentatif de citoyens,<br />
qui produit un avis raisonn&eacute; sur un sujet de controverse, dans le cadre d&rsquo;un processus en trois<br />
&eacute;tapes - formation, audition d&rsquo;experts et d&eacute;lib&eacute;ration. L&rsquo;int&eacute;r&ecirc;t de ce dispositif est de produire un<br />
avis raisonn&eacute; et &eacute;clair&eacute; &eacute;labor&eacute; par un groupe de citoyens dont la composition doit s&rsquo;approcher de<br />
la diversit&eacute; des citoyens concern&eacute;s par la question pos&eacute;e. Le rendu des d&eacute;lib&eacute;rations doit pouvoir<br />
orienter la suite de la mise en &oelig;uvre du PB1.</p>',
'indicator' => 'Nombre d’acteurs touchés et réactions suscitées
Synthèse des résultats et enjeux soulevés',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:14:55',
'updated_at' => '2020-04-03 13:14:55',
),
64 => 
array (
'id' => 66,
'code' => '9.2',
'label' => 'Offrir au grand public une vision d’ensemble de l’offre de nature disponible à Genève',
'image' => NULL,
'description' => '<p>Offrir &agrave; la population une vision d&rsquo;ensemble de l&rsquo;offre en lien avec la nature disponible dans le canton<br />
de Gen&egrave;ve dans le but de renforcer le lien entre le public et la biodiversit&eacute; locale.<br />
Cette action repose sur la cr&eacute;ation d&rsquo;un plateforme digitale destin&eacute;e au grand public, attractive et<br />
accessible, offrant une pr&eacute;sentation valorisant :<br />
&bull; un &ldquo;agenda nature&rdquo; regroupant les animations organis&eacute;es &agrave; Gen&egrave;ve pour le public et ayant pour<br />
th&egrave;me la nature et ses enjeux;<br />
&bull; les principaux sites naturels du cantons, notamment les r&eacute;serves naturelles les plus adapt&eacute;es &agrave;<br />
l&rsquo;accueil des visiteurs<br />
&bull; une s&eacute;lection d&rsquo;esp&egrave;ces animales et floristiques locales susceptibles d&rsquo;int&eacute;resser le grand public<br />
et de servir ainsi d&rsquo;ambassadeurs de la biodiversit&eacute; genevoise.<br />
Le succ&egrave;s de cette action repose sur l&rsquo;implication des acteurs actifs dans le domaine de la sensibilisation<br />
&agrave; l&rsquo;&eacute;gard de la nature et ainsi sur la r&eacute;alisation d&rsquo;action de promotion d&eacute;di&eacute;es.</p>',
'indicator' => NULL,
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 1,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:18:28',
'updated_at' => '2020-04-03 13:18:28',
),
65 => 
array (
'id' => 67,
'code' => '9.3',
'label' => 'Créer de nouveaux lieux d’accueil du public',
'image' => NULL,
'description' => '<p>1. Le service des &eacute;coles et institutions pour l&rsquo;enfance de la Ville de Gen&egrave;ve est en train de r&eacute;nover<br />
une maison qui se trouve au Bois de la B&acirc;tie, o&ugrave; le Panda Club du WWF Gen&egrave;ve va &ecirc;tre relog&eacute;<br />
d&egrave;s le mois de mai 2020. Ce service aimerait faire de ce lieu un &laquo; centre-nature &raquo; qui accueillerait<br />
des classes pendant la semaine. Le WWF Gen&egrave;ve, en collaboration avec d&rsquo;autres associations<br />
et le parc animalier du Bois de la B&acirc;tie, aimerait monter un projet afin de pouvoir proposer des<br />
activit&eacute;s nature pour les &eacute;coles et le pr&eacute;scolaire, au Bois de la B&acirc;tie. Ce bois se trouve au milieu<br />
de la ville, il est donc facilement accessible pour les &eacute;coles.<br />
2. Cr&eacute;er un lieu qui permette de mieux appr&eacute;hender ce qui se passe sous l&rsquo;eau, pouvoir parler de, et<br />
montrer la biodiversit&eacute; sous-lacustre et des rivi&egrave;res, qui est largement m&eacute;connue du grand public.</p>',
'indicator' => '1. En évaluant les élèves.
2. Nombre de visiteurs, nombre d’ateliers, nombre d’expositions.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-03 13:21:38',
'updated_at' => '2020-04-03 13:21:38',
),
66 => 
array (
'id' => 68,
'code' => '9.4',
'label' => 'Développer la communication concernant les sites protégés',
'image' => NULL,
'description' => '<p>L&rsquo;action vise &agrave; faire mieux conna&icirc;tre les enjeux sp&eacute;cifiques des sites prot&eacute;g&eacute;s aupr&egrave;s du public,<br />
tant en termes des valeurs patrimoniales que des imp&eacute;ratifs de gestion. Concr&egrave;tement, il s&rsquo;agit de<br />
fournir r&eacute;guli&egrave;rement des informations sur leurs richesses (milieux et esp&egrave;ces), mais &eacute;galement sur<br />
les diverses mesures de gestion d&eacute;ploy&eacute;es pour les conserver ou les am&eacute;liorer (fauche de prairie,<br />
abattage d&rsquo;arbres, terrassement de plans d&rsquo;eau, etc.). Ceci contribuerait notamment &agrave; une meilleure<br />
compr&eacute;hension par le public du r&ocirc;le des sites prot&eacute;g&eacute;s et r&eacute;serves naturelles.<br />
La communication pourrait &eacute;galement mieux faire conna&icirc;tre les diff&eacute;rents mesures de gestion de<br />
public inh&eacute;rentes aux sites prot&eacute;g&eacute;s : interdiction d&rsquo;acc&egrave;s, zones de pique-nique autoris&eacute;es, etc.<br />
Une communication digitale dynamique mise &agrave; la disposition d&rsquo;un public int&eacute;ress&eacute; constituerait un<br />
canal adapt&eacute; pour r&eacute;pondre &agrave; ce besoin.</p>',
'indicator' => 'Nombre de publications, abonnés/utilisateurs, commentaires.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:24:01',
'updated_at' => '2020-04-03 13:24:01',
),
67 => 
array (
'id' => 69,
'code' => '9.5',
'label' => 'Augmenter la sensibilisation du public dans les sites naturels à enjeux/fragiles',
'image' => NULL,
'description' => '<p>Une pr&eacute;sence naturaliste orient&eacute;e vers la m&eacute;diation et la sensibilisation accrue et r&eacute;guli&egrave;re dans<br />
les sites &agrave; enjeux du canton se profile comme un compl&eacute;ment id&eacute;al au travail d&rsquo;autorit&eacute; des gardes<br />
de l&rsquo;environnement.<br />
Objectifs de la mesure : (re)cr&eacute;er le lien entre le public et la nature pr&eacute;sents sur place. Concr&egrave;tement,<br />
il s&rsquo;agit de :<br />
&bull; Favoriser des comportements responsables des personnes fr&eacute;quentant les sites naturels pour<br />
assurer une cohabitation harmonieuse entre la nature et les activit&eacute;s de loisirs dans le canton<br />
de Gen&egrave;ve<br />
&bull; Renforcer la pr&eacute;sence sur le terrain de sp&eacute;cialistes et transf&eacute;rer ainsi, de mani&egrave;re positive, des<br />
cl&eacute;s de compr&eacute;hensions naturalistes et patrimoniales aux personnes fr&eacute;quentant les milieux<br />
naturels du canton<br />
&bull; Augmenter les donn&eacute;es issues du terrain afin d&rsquo;analyser l&rsquo;&eacute;volution des pratiques et les enjeux<br />
principaux en mati&egrave;re d&rsquo;utilisation des espaces naturels</p>',
'indicator' => 'Nombre des visiteurs rencontrés et types d’interractions.
Synthèses détaillées des observations terrain et des enjeux soulevés',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:25:25',
'updated_at' => '2020-04-03 13:25:25',
),
68 => 
array (
'id' => 70,
'code' => '9.6',
'label' => 'Accompagner la transformation du Parc Challandes actuel en un centre moderne de découverte et de protection de la biodiversité, le BIOPARC GENEVE',
'image' => NULL,
'description' => '<p>Le Parc Challandes est actuellement une structure statique et isol&eacute;e. Le BIOPARC en fera un centre<br />
dynamique et ouvert au sein d&rsquo;un large r&eacute;seau d&rsquo;acteurs cl&eacute;s dans le monde de la conservation et<br />
de la sensibilisation.<br />
Le Parc Challandes fait d&eacute;couvrir au public, en plus d&rsquo;une faune locale, une faune exotique qui attire<br />
de nombreux visiteurs. Le BIOPARC profitera de cette faune exotique pour sensibiliser &eacute;galement<br />
aux enjeux de conservation de la biodiversit&eacute;, tant locale que mondiale.<br />
Le d&eacute;veloppement complet du BIOPARC permettra au visiteur, de d&eacute;couvrir non seulement une partie<br />
de la biodiversit&eacute; suisse mais aussi la biodiversit&eacute; de diff&eacute;rentes r&eacute;gions du monde. Les enclos seront<br />
construits de fa&ccedil;on &agrave; reproduire au mieux l&rsquo;habitat naturel des diff&eacute;rentes esp&egrave;ces pr&eacute;sent&eacute;es.<br />
L&rsquo;objectif sera d&rsquo;expliquer les interactions entre les habitats, les esp&egrave;ces et nos comportements de<br />
consommateurs, tout en restant une invitation ludique au &laquo; voyage nature et animalier &raquo;, depuis<br />
Gen&egrave;ve, vers d&rsquo;autres destinations au-del&agrave; des fronti&egrave;res suisses (voir Annexe 1 pour plus de d&eacute;tails)</p>',
'indicator' => 'Si oui, comment :
L’action du BIOPARC GENEVE est mesurable à la fois de manière qualitative et quantitative.
Données qualitatives :
- Une institution constituée d’experts en matière de biodiversité, d’écologie et de bien-être animal
- Un nouvel espace de sensibilisation et de découvertes unique sur le canton
- Des contacts privilégiés avec la faune locale et exotique avec mise à disposition et valorisation
d’informations sur leur biologie et leur conservation à l’état sauvage
- Sensibilisation sur les conséquences que notre consommation et nos gestes quotidiens ont sur leur
survie à l’état sauvage
- Participation à des programmes de conservation (e.g. muscardin)
- Création de nouveaux programmes de conservation de la biodiversité
- Une renommée internationale au canton en matière de conservation de la biodiversité et d’éducation
à l’environnement
- Des partenariats étoffés et solides à l’échelle cantonale (Museum d’histoire naturelle de Genève et
Conservatoire et Jardin Botaniques), nationale (institutions zoologiques comme les associations
Zoosuisse et Pro Species Rara et l’Université de Zurich) et internationale (e.g. collaborations avec
la Fondation Proyecto Titi pour la sauvegarde d’un primate en Colombie, le Tamarin Pinché, etc.)
- Des espèces accueillies dans des conditions de bien-être exemplaires (e.g. surface des enclos plus
grandes que celle exigée par la loi suisse)
- Une structure de formation professionnelle (CFC Gardien d’animaux) et un structure d’intervention
assistée par l’animal (IAA, projet pilote en cours avec le DIP)

Données quantitatives :
- Pourcentage d’animaux du BIOPARC appartenant à des programmes de conservation
- Taux de reproduction des espèces en captivité, justifiant des bonnes conditions dans lesquelles
elles se trouvent et pouvant alimenter des programmes de réintroduction
- Nombre de visiteurs par an avec leur provenance
- Nombre d’écoles accueillies dans le cadre d’ateliers et de visites guidées
- Nombre d’animaux sauvages soignés et relâchés par le centre de soins
- Nombre de parrainages d’animaux du BIOPARC',
'R' => 1,
'A' => 1,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:27:34',
'updated_at' => '2020-04-03 13:27:34',
),
69 => 
array (
'id' => 71,
'code' => '9.7',
'label' => 'Renforcer dans les médias locaux la présence d’une information approfondie et de qualité traitant de la nature',
'image' => NULL,
'description' => '<p>Afin d&rsquo;encourager une meilleure compr&eacute;hension par la population des enjeux de la th&eacute;matique nature<br />
par le biais des m&eacute;dias locaux il convient d&rsquo;agir sur deux axes:<br />
a) permettre aux chroniques existantes d&rsquo;offrir un contenu favorisant une compr&eacute;hension plus<br />
approfondie des enjeux de la nature dans le Grand Gen&egrave;ve. La nature constitue un sujet attractif &agrave;<br />
condition que le choix des sujets, des intervenants, des sc&eacute;narii, des images soient anticip&eacute;s (pour<br />
des raisons de saisons notamment) et puisse ainsi &ecirc;tre optimis&eacute;s. Il s&rsquo;agit aussi de veiller &agrave; une<br />
synergie ad&eacute;quate entre les diff&eacute;rents acteurs de la r&eacute;gion susceptibles d&rsquo;apporter des &eacute;clairages<br />
compl&eacute;mentaires et attractifs. Le cas &eacute;ch&eacute;ant, pour offrir un appui aux m&eacute;dias en termes de contenu<br />
et d&rsquo;offre disponible, ces derniers peuvent s&rsquo;appuyer sur un comit&eacute; int&eacute;grant notamment l&rsquo;OCAN,<br />
l&rsquo;OCEau et le SIC<br />
b) identifier diff&eacute;rents programmes m&eacute;diatiques pour lesquels la th&eacute;matique nature pourrait prendre<br />
une place plus pr&eacute;pond&eacute;rante, en veillant &agrave; ce que tous les publics puissent &ecirc;tre sensibilis&eacute;s via<br />
ces canaux.</p>',
'indicator' => 'Audimat, réactions suscitées',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:30:35',
'updated_at' => '2020-04-03 13:30:35',
),
70 => 
array (
'id' => 72,
'code' => '9.8',
'label' => 'Assurer une information aussi complète, actualisée et concrète que possible sur le thème de la nature pour les acteurs de la gouvernance locale et régionale',
'image' => NULL,
'description' => '<p>Mener des sorties sur le terrain &agrave; l&rsquo;attention des acteurs de la gouvernance locale et r&eacute;gionale - &eacute;lus<br />
mais aussi cadres des administrations publiques - pour mettre &agrave; leur disposition une information<br />
&eacute;clair&eacute;e en lien avec la nature en termes de valeurs patrimoniales forte de leur territoire.</p>',
'indicator' => 'Par le nombre d’acteurs touchés, par un questionnaire auprès des participants, ainsi que par les
projets en faveur de la nature mise en place dans les communes suite à cette action de sensibilisation.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:31:43',
'updated_at' => '2020-04-03 13:31:43',
),
71 => 
array (
'id' => 73,
'code' => '9.9',
'label' => 'Science citoyenne et sauvegarde des insectes',
'image' => NULL,
'description' => '<p>Initi&eacute; par le Bioscope en 2015, le projet CodeMyBug a permis &agrave; plus de 1400 &eacute;l&egrave;ves de se relayer<br />
pour &eacute;tudier de pr&egrave;s la faune des arthropodes dans leur cour d&rsquo;&eacute;cole. Ils ont ainsi pu collecter et<br />
d&eacute;terminer plus de 1000 nouveaux codes-barres ADN et les ont soumis aux bases de donn&eacute;es<br />
scientifiques. Ces r&eacute;sultats ont enrichi nos connaissances sur la faune genevoise, en se focalisant<br />
sur des groupes d&rsquo;esp&egrave;ces habituellement peu &eacute;tudi&eacute;es. Ce projet a aussi constitu&eacute; une occasion<br />
pr&eacute;cieuse de sensibiliser les &eacute;l&egrave;ves et les enseignant-e-s &agrave; l&rsquo;&eacute;cologie d&rsquo;animaux m&eacute;connus mais<br />
n&eacute;anmoins utiles, et aux menaces pesant sur eux.<br />
Le Bioscope, Faune Gen&egrave;ve et le MHNG souhaitent poursuivre ce programme de sensibilisation et<br />
d&rsquo;&eacute;tude en &eacute;largissant le public cible et en l&rsquo;accompagnant de mesures concr&egrave;tes pour la sauvegarde<br />
des insectes ; une th&eacute;matique qui aujourd&rsquo;hui interpelle le public et les m&eacute;dias, &agrave; juste titre ! (En 100<br />
jours, 165&rsquo;512 personnes ont sign&eacute; la p&eacute;tition &laquo; Elucider la disparition des insectes &raquo; en Suisse).<br />
L&rsquo;inventaire participatif des arthropodes du canton sera &eacute;largi, avec ou sans collecte. Les possibilit&eacute;s<br />
d&rsquo;effectuer un suivi quantitatif des populations seront &eacute;tudi&eacute;es. Une collaboration avec l&rsquo;&eacute;quipe du<br />
Suivi photographique des insectes pollinisateurs (Spipoll) en France sera envisag&eacute;e dans les:<br />
&bull; pr&eacute;aux<br />
&bull; parcs urbains<br />
&bull; campagnes<br />
&bull; r&eacute;serves naturelles<br />
&bull; for&ecirc;ts<br />
&bull; &eacute;tangs, marais, rivi&egrave;res et lacs<br />
L&rsquo;analyse des donn&eacute;es serait ouverte &agrave; toutes et tous et pourrait faire l&rsquo;objet :<br />
&bull; d&rsquo;un appel &agrave; participation<br />
&bull; de projets &eacute;tudiant-e-s &agrave; l&rsquo;Universit&eacute; et &agrave; l&rsquo;Hepia (Bachelor, Master, ...)<br />
Le partage des connaissances et la sensibilisation seraient favoris&eacute;s par :<br />
&bull; des ateliers sur le terrain, au Bioscope et au MHNG<br />
&bull; une plateforme web et une application mobile<br />
&bull; des expos participatives, dans des &eacute;coles, des maisons de quartier et au Mus&eacute;um<br />
&bull; une programmation de films et de conf&eacute;rences sur le sujet<br />
&bull; des vid&eacute;os publi&eacute;es sur les r&eacute;seaux sociaux<br />
&bull; une collaboration avec RTS d&eacute;couverte<br />
&bull; une collaboration avec l&rsquo;artiste de rue portugais Odeith qui graffe des insectes plus grands que nature<br />
&bull; une collaboration avec la Semaine nationale des insectes en Belgique et au Royaume-Uni<br />
&bull; une collaboration avec des acteurs du monde agricole</p>

<p>Le d&eacute;veloppement d&rsquo;initiatives concr&egrave;tes pour favoriser la biodiversit&eacute; en insectes serait encourag&eacute;<br />
par :<br />
&bull; des activit&eacute;s participatives d&rsquo;am&eacute;nagements de milieux favorables<br />
&bull; des mesures d&rsquo;encouragement &agrave; la modification des comportements (charte, concours,&hellip;)</p>',
'indicator' => 'Nombre d’activités, nombre de participants, nombre d’observations totales et nombre d’observations
d’espèces nouvelles pour Genève. Enquête auprès des participants. Nombre d’initiatives pour favoriser
la biodiversité en insectes.',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:34:01',
'updated_at' => '2020-04-03 13:34:01',
),
72 => 
array (
'id' => 74,
'code' => '9.10',
'label' => 'Science citoyenne et sauvegarde de la biodiversité aquatique',
'image' => NULL,
'description' => '<p>L&rsquo;Universit&eacute; de Gen&egrave;ve et l&rsquo;Association pour la sauvegarde du L&eacute;man souhaitent d&eacute;velopper un<br />
projet commun de science citoyenne et de sauvegarde de la biodiversit&eacute; aquatique. L&rsquo;objectif est<br />
d&rsquo;encourager les citoyens &agrave; devenir les sentinelles des changements induits par les activit&eacute;s humaines<br />
dans le L&eacute;man et les cours d&rsquo;eau genevois.<br />
A l&rsquo;aide de protocoles d&rsquo;&eacute;tude simples et d&eacute;j&agrave; &eacute;prouv&eacute;s en Am&eacute;rique du Nord, les participants suivront<br />
l&rsquo;&eacute;volution de la qualit&eacute; des eaux genevoises, d&eacute;multipliant ainsi le nombre et la fr&eacute;quence des relev&eacute;s<br />
disponibles pour les sp&eacute;cialistes et les autorit&eacute;s. Au-del&agrave; de son int&eacute;r&ecirc;t scientifique, cette initiative<br />
r&eacute;pond au besoin de sensibiliser la population &agrave; l&rsquo;importance et &agrave; la complexit&eacute; de la biodiversit&eacute;<br />
aquatique. En se familiarisant notamment avec le concept de &laquo; bio-indication &raquo;, les participants<br />
saisiront mieux le lien indissociable entre la biodiversit&eacute; et les activit&eacute;s humaines. Leur contribution<br />
personnelle &agrave; la construction des connaissances sur la biodiversit&eacute; devrait s&rsquo;accompagner d&rsquo;un plus<br />
grand int&eacute;r&ecirc;t et d&rsquo;une meilleure confiance dans les donn&eacute;es scientifiques. In fine, les participants<br />
seront encourag&eacute;s &agrave; adopter un comportement plus responsable envers la nature.</p>',
'indicator' => 'Nombre de relevés, nombre de participants
Enquête auprès des participants',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:36:46',
'updated_at' => '2020-04-03 13:36:46',
),
73 => 
array (
'id' => 75,
'code' => '9.11',
'label' => 'Renforcer l’information sur les gestes “aqua- responsables”, les cycles de l’eau sains et les prestations ecosystémiques',
'image' => NULL,
'description' => '<p>OH MON EAU !<br />
- Poursuite de la campagne de communication OH MON EAU! avec renforcement du spectre de<br />
diffusion pour encourager les bons gestes quotidiens afin de prot&eacute;ger la qualit&eacute; des cours d&rsquo;eau et<br />
du lac, ainsi que leurs habitants.<br />
- Th&eacute;matiques concern&eacute;es : pesticides, produits chimiques, micropolluants, plastiques, microplastiques,<br />
produits cosm&eacute;tiques, soins, etc.<br />
- D&eacute;veloppement d&rsquo;un kit d&rsquo;exposition p&eacute;dagogique itin&eacute;rant<br />
- D&eacute;veloppement d&rsquo;&eacute;v&eacute;nements th&eacute;matiques (voir ci-dessous &ldquo;Journ&eacute;e mondiale de l&rsquo;eau)<br />
- &ldquo;Labellisation&rdquo; des acteurs partenaires<br />
Journ&eacute;e mondiale de l&rsquo;eau<br />
R&eacute;alisation d&rsquo;un &eacute;v&eacute;nement annuel de sensibilisation et p&eacute;dagogique ouvert aux &eacute;coles et &agrave; la<br />
population avec la participation des acteurs de l&rsquo;eau cantonaux<br />
Plage Propre<br />
- Renforcer les messages de sensibilisation sur les lieux de baignade cantonaux (Rh&ocirc;ne, Plage<br />
Publique des Eaux-Vives, Quai de Cologny, Plage de la Plaine)<br />
- Partenariat avec l&rsquo;ASL pour les rives du L&eacute;man<br />
Exposition photo<br />
- Rendre visible certaines pollutions de l&rsquo;eau et ses cons&eacute;quences sur la biodiversit&eacute; par l&rsquo;image (un<br />
poisson c&ocirc;toyant un plastique, etc.)<br />
Multifonctionnalit&eacute; de cycles de l&rsquo;eau sains<br />
Pour une sensibilisation plus compl&egrave;te, il convient de d&eacute;velopper des supports expliquant la<br />
multifonctionnalit&eacute; de cycles de l&rsquo;eau sains et d&eacute;montrant les services &eacute;cosyst&eacute;miques qu&rsquo;ils d&eacute;livrent.<br />
Il sera probablement avantageux de d&eacute;velopper des outils de communication en diff&eacute;renciant les<br />
cycles des eaux pluviales et des eaux us&eacute;es. Ces outils pourront &ecirc;tre install&eacute;s aux bords des cours<br />
d&rsquo;eau et utilis&eacute;s lors d&rsquo;&eacute;v&eacute;nements en lien avec le lac et les cours d&rsquo;eau.</p>',
'indicator' => '• Sondage jugement, satisfaction et connaissance en matière d’environnement et de communication
dans le canton de Genève, effectué tous les deux ans sur un échantillon représentatif de la population
• Questions de la population auprès de l’Info-Service et veille digitale
• Observations comportementales quotidiennes
• Nettoyages du lac et des cours d’eau (quantité de déchets récoltés)',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:39:20',
'updated_at' => '2020-04-03 13:39:20',
),
74 => 
array (
'id' => 76,
'code' => '9.12',
'label' => 'Renforcer l’information sur les bonnes pratiques auprès des usagers des cours d’eau et du lac',
'image' => NULL,
'description' => '<p>Un dispositif de communication sera mis en place pour rappeler aux riverains (propri&eacute;taires, habitants<br />
et usagers) les bonnes pratiques et comportements &agrave; adopter au bord des cours d&rsquo;eau, ainsi que<br />
leurs droits et devoirs. Il se basera, entre autres, sur le contenu de la brochure &ldquo;Vivre nos rivi&egrave;res&rdquo;<br />
(https://www.ge.ch/document/eau-vivre-nos-rivieres), datant de 2014, qui sera mise &agrave; jour pour la<br />
rendre plus actuelle et plus compl&egrave;te. Le lien avec diff&eacute;rentes autres ressources sera ajout&eacute;, comme<br />
par exemple la Charte des Jardins ou la campagne &ldquo;OH MON EAU!&rdquo;, lanc&eacute;e en 2018. Les messages<br />
int&eacute;greront aussi les questions relatives aux berges du Lac. Cette nouvelle brochure sera diffus&eacute;e<br />
aux propri&eacute;taires et habitants des rives genevoises apr&egrave;s sa publication.<br />
Un travail de signal&eacute;tique sera aussi d&eacute;velopp&eacute; afin de contextualiser les messages et encourager<br />
les bons gestes des promeneurs et baigneurs, notamment en lien avec le respect de la faune et de<br />
la flore aquatique, ainsi qu&rsquo;avec la gestion des d&eacute;chets au bord des cours d&rsquo;eau.<br />
Le dispositif pourra &eacute;galement &ecirc;tre relay&eacute; et adapt&eacute; sur les canaux web de l&rsquo;&Eacute;tat, tout comme lors<br />
d&rsquo;&eacute;v&eacute;nements en bord de cours d&rsquo;eau.<br />
Les usagers du Lac devraient &eacute;galement b&eacute;n&eacute;ficier de supports de sensibilisation sur la biodiversit&eacute;<br />
lacustre et sa sensibilit&eacute;, avec des informations pratiques sur les bons gestes pour minimiser leur<br />
impact.<br />
Un manuel destin&eacute; aux usagers du lac devrait &ecirc;tre d&eacute;velopp&eacute;. Il contiendrait des informations utiles<br />
sur les bonnes pratiques aux abords et sur le L&eacute;man. Il serait destin&eacute; &agrave; un public relativement large,<br />
allant des usagers des plages aux propri&eacute;taires de bateaux, en passant par les pratiquants de sports<br />
nautiques, notamment de paddle. Transfrontalier, ce manuel de bonnes pratiques serait adapt&eacute; &agrave; un<br />
usage sur France et sur les cantons de Gen&egrave;ve, de Vaud et du Valais.</p>',
'indicator' => '• Lorsque la nouvelle brochure “Vivre nos rivières” sera diffusée à la majorité des riverains, 50% de
l’action sera réalisée.
• Lorsque le manuel pour les usagers du Léman sera diffusé à la majorité des usagers du lac publié,
50% de l’action sera réalisée.
• L’efficacité de l’action sera évaluée sur la base du sondage périodique COM E, portant sur le
jugement, la satisfaction et la connaissance en matière d’environnement et de communication dans
le canton de Genève, et effectué tous les deux ans sur un échantillon représentatif de la population.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:42:07',
'updated_at' => '2020-04-03 13:42:07',
),
75 => 
array (
'id' => 77,
'code' => '9.13',
'label' => 'Publier des ouvrages sur les papillons, libellules, coléoptères et syrphes',
'image' => NULL,
'description' => '<p>La faune du bassin genevois est relativement bien connue gr&acirc;ce &agrave; une longue tradition naturaliste,<br />
aux travaux de nombreux chercheurs et, plus r&eacute;cemment, &agrave; l&rsquo;utilisation de plus en plus r&eacute;pandue de<br />
plateformes de collecte de donn&eacute;es naturalistes sur le web. Toutefois, ces connaissances accumul&eacute;es<br />
dans les bases de donn&eacute;es restent relativement m&eacute;connues des amateurs et du grand public, en<br />
l&rsquo;absence d&rsquo;ouvrages de vulgarisation sur la faune genevoise.<br />
Pour pallier &agrave; cette lacune, l&rsquo;association Faune Gen&egrave;ve, animatrice de la principale plateforme de<br />
collecte de donn&eacute;es naturalistes (www.faunegeneve.ch), en collaboration avec l&rsquo;OCAN et le Mus&eacute;um<br />
d&rsquo;histoire naturelle (MHNG) a entrepris de publier des ouvrages de r&eacute;f&eacute;rence sur les principaux groupes<br />
taxonomiques de faune sauvage du bassin genevois. Apr&egrave;s deux volumes sur les mammif&egrave;res (Les<br />
chauve-souris du bassin genevois et Les mammif&egrave;res terrestres du bassin genevois) en 2015 et en<br />
2018, il est pr&eacute;vu de publier trois nouveaux ouvrages focalis&eacute;s sur les groupes d&rsquo;insectes les mieux<br />
&eacute;tudi&eacute;s mais pourtant m&eacute;connus du grand public (papillons, libellules, col&eacute;opt&egrave;res, syrphes). A l&rsquo;image<br />
des ouvrages d&eacute;j&agrave; publi&eacute;s, ils seront accessibles &agrave; un large public, pour renseigner, int&eacute;resser et<br />
motiver &agrave; observer et &agrave; prot&eacute;ger la faune qui nous entoure.</p>',
'indicator' => 'Publication des ouvrages prévus.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:43:48',
'updated_at' => '2020-04-03 13:43:48',
),
76 => 
array (
'id' => 78,
'code' => '9.14',
'label' => 'Pérenniser et assurer la gratuité d’accès dans les Centres Nature',
'image' => NULL,
'description' => '<p>Afin de permettre &agrave; la population de participer &agrave; des &eacute;v&eacute;nements, des animations et des sorties<br />
nature &agrave; proximit&eacute; de leur lieu d&rsquo;habitation et de scolarisation, la gratuit&eacute; d&rsquo;acc&egrave;s aux infrastructures<br />
et aux prestations est essentielle. Les trois Centres Nature existants (peut-&ecirc;tre bient&ocirc;t rejoints par<br />
de nouveaux lieux d&rsquo;accueil destin&eacute;s &agrave; l&rsquo;&eacute;ducation &agrave; l&rsquo;environnement), sensibilisent et informent plus<br />
de 50&rsquo;000 visiteurs chaque ann&eacute;e, dont de nombreux &eacute;coliers.</p>',
'indicator' => 'Nombre de participants
Questionnaires d’évaluation',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 9,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-03 13:45:47',
'updated_at' => '2020-04-03 13:45:47',
),
77 => 
array (
'id' => 79,
'code' => '10.1',
'label' => '1. EP – Sorties Nature 5P accompagnées de naturalistes',
'image' => NULL,
'description' => '<p>Objectifs :<br />
&bull; Assurer l&rsquo;observation de milieux naturels proches des &eacute;coles par tous les &eacute;l&egrave;ves de 5P avec des<br />
accompagnants form&eacute;s, ce qui r&eacute;pond &agrave; l&rsquo;une des conditions-cadre &agrave; mettre en &oelig;uvre selon le<br />
Plan d&rsquo;&eacute;tudes romand (PER), &agrave; savoir &ldquo;donner l&rsquo;occasion de sortir pour observer et explorer le<br />
terrain et le milieu&rdquo;.<br />
&bull; Participer &agrave; l&rsquo;acquisition de l&rsquo;objectif d&rsquo;apprentissage en Math&eacute;matiques et sciences de la nature<br />
(MSN 28) D&eacute;terminer des caract&eacute;ristiques du monde vivant et de divers milieux et en tirer des<br />
cons&eacute;quences pour la p&eacute;rennit&eacute; de la vie en observant et d&eacute;crivant divers milieux urbains et naturels.<br />
&bull; Mettre en valeur le patrimoine naturel du canton de Gen&egrave;ve pour les &eacute;l&egrave;ves et les enseignant-e-s.<br />
R&eacute;alisations :<br />
&bull; Effectuer chaque ann&eacute;e deux sorties nature (automne et printemps) accompagn&eacute;es de naturalistes<br />
pour toutes les classes de 5P<br />
&bull; D&eacute;cider si la sortie 5P devait &ecirc;tre rendue obligatoire pour toutes les classes de 5P<br />
&bull; Revoir et consolider le guide p&eacute;dagogique accompagnant les sorties 5P<br />
Besoins :<br />
Une demande de participation au financement du projet budg&eacute;t&eacute; &agrave; CHF 300&rsquo;000.- pour l&rsquo;accueil de<br />
150 classes par ann&eacute;e a &eacute;t&eacute; d&eacute;pos&eacute;e par l&rsquo;OCeau aupr&egrave;s de la Conf&eacute;d&eacute;ration pour contractualiser<br />
cette action dans le cadre des conventions programmes entre l&rsquo;Etat et la Conf&eacute;d&eacute;ration (R&eacute;forme sur<br />
la p&eacute;r&eacute;quation et la r&eacute;partition des t&acirc;ches) pour 2020-2024. La Conf&eacute;d&eacute;ration a reconnu l&rsquo;importance<br />
de rendre obligatoires les sorties nature pour les 5P et versera, &agrave; ce titre, &agrave; l&rsquo;Etat de Gen&egrave;ve (via le<br />
DT): 150 000 CHF par an d&egrave;s 2020 pendant 5 ans.<br />
Un taux suppl&eacute;mentaire de poste administratif est &agrave; pr&eacute;voir au Service enseignement et &eacute;valuation<br />
(SEE) pour assurer la coordination du projet (gestion du d&eacute;placement des classes notamment en<br />
collaboration avec la Cellule Transport du D&eacute;partement de l&rsquo;Instruction Publique)<br />
Contexte :<br />
Suite &agrave; une recherche men&eacute;e par le Service de recherche en &eacute;ducation (SRED) en 2012, l&rsquo;Office<br />
cantonal de l&rsquo;agriculture et de la nature (OCAN) a d&eacute;cid&eacute; d&rsquo;&eacute;laborer un projet de sorties nature qui<br />
seraient syst&eacute;matiquement propos&eacute;es aux &eacute;l&egrave;ves. Pour ce faire, deux associations (Pro Natura et La<br />
Libellule) ont &eacute;t&eacute; mandat&eacute;es pour &eacute;laborer ce projet en collaboration avec le SEE pour les aspects<br />
p&eacute;dagogiques. Les frais de pr&eacute;paration du projet (env. 50&rsquo;000 CHF) ont &eacute;t&eacute; pris en charge par la<br />
Direction g&eacute;n&eacute;rale de la nature et du paysage (DGNP).</p>

<p>Au printemps 2016, 10 classes ont particip&eacute; au d&eacute;marrage de la phase-pilote du projet, puis 60 classes<br />
en 2016-2017. Depuis 2017-2018, 120 classes sont pris en charge par les animateurs engag&eacute;s par<br />
les associations La Libellule et Pro Natura pendant deux sorties dans une for&ecirc;t proche leur &eacute;cole.<br />
Gr&acirc;ce &agrave; une fondation (CHF 360&rsquo;000 CHF), &agrave; la Loterie Romande (CHF 50&rsquo;000), &agrave; Pro Natura Suisse<br />
(CHF 64&rsquo;000) et &agrave; Education 21 (CHF 2&rsquo;000), le budget total de ces sorties, ainsi que leur &eacute;laboration<br />
ont &eacute;t&eacute; couvert. En automne 2018, la fondation en question s&rsquo;est engag&eacute;e &agrave; reconduire le budget<br />
n&eacute;cessaire &agrave; la r&eacute;alisation de ce projet durant les quatre ann&eacute;es &agrave; venir. En revanche, ce financement<br />
ne sera plus assur&eacute; d&egrave;s la rentr&eacute;e scolaire 2022-2023.<br />
Le bilan de ce projet est tr&egrave;s positif, tant de la part des &eacute;l&egrave;ves, des enseignants et des associations. Un<br />
important travail a &eacute;t&eacute; fourni de la part de l&rsquo;OCAN (f&eacute;d&eacute;ration des diff&eacute;rents partenaires, d&eacute;finitions des<br />
objectifs du projet, recherche de fonds), des associations (&eacute;laboration des contenus des animations<br />
nature, des documents p&eacute;dagogiques mis &agrave; la disposition des enseignants en collaboration avec<br />
le DIP, formation des animateurs, recherche de fonds), ainsi que du DIP (coordination du projet,<br />
validation des contenus, enqu&ecirc;te de satisfaction, transports) qui est en charge de la commande de<br />
ce programme et responsable de son int&eacute;gration ad&eacute;quate dans les activit&eacute;s scolaires.</p>',
'indicator' => '• Nombre de sorties effectuées (automne et printemps)
• Taux de satisfaction des enseignant-e-s (sondage en ligne)',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 05:49:27',
'updated_at' => '2020-04-06 05:49:27',
),
78 => 
array (
'id' => 80,
'code' => '10.2',
'label' => 'Sorties nature 9e accompagnées de naturalistes',
'image' => NULL,
'description' => '<p>Objectifs :<br />
&bull; Participer &agrave; l&rsquo;acquisition des objectifs d&rsquo;apprentissages en lien avec la d&eacute;marche d&rsquo;investigation et<br />
d&rsquo;observation scientifique sur le terrain. MSN 35/38<br />
&bull; Participer &agrave; l&rsquo;acquisition des objectifs d&rsquo;apprentissages en lien avec les attentes fondamentales du<br />
PER MSN38 : 1/2/4 /A.<br />
&bull; Participer &agrave; l&rsquo;acquisition des objectifs d&rsquo;apprentissage en lien avec la th&eacute;matique interd&eacute;pendances<br />
FG36/37.<br />
&bull; Offrir l&rsquo;opportunit&eacute; aux &eacute;l&egrave;ves de vivre l&rsquo;exp&eacute;rience d&rsquo;une nature de proximit&eacute; sur le terrain afin de<br />
les sensibiliser &agrave; leur environnement naturel (Education &agrave; l&rsquo;environnement).<br />
&bull; Former les enseignants aux sorties sur le terrain &ldquo;par la pratique&rdquo;, coupl&eacute;es au dispositif de formation<br />
R&eacute;alisation :<br />
Assurer au minimum 1 sortie nature accompagn&eacute;e par un naturaliste disposant d&rsquo;un titre de biologiste<br />
dipl&ocirc;m&eacute; (Bachelor ou Master) pour l&rsquo;ensemble des classes de 9e du C.O pour la premi&egrave;re ann&eacute;e puis<br />
g&eacute;n&eacute;raliser &agrave; 2 sorties pour toutes les classes de 9e.<br />
Besoins :<br />
Le financement permettant de couvrir les prestations des naturalistes-biologistes de La Libellule lors<br />
des sorties d&egrave;s la prochaine rentr&eacute;e.<br />
Contexte :<br />
Depuis septembre 2017 des sorties encadr&eacute;es sont organis&eacute;es avec les naturalistes dans le cadre<br />
d&rsquo;une formation continue qui permet &agrave; certaines classes de 9e de sortir sur le terrain. Afin de g&eacute;n&eacute;raliser<br />
cette pratique et permettre ainsi &agrave; un l&rsquo;ensemble des classes de sortir sur le terrain, un projet avec<br />
recherche de fond a &eacute;t&eacute; men&eacute; depuis plusieurs ann&eacute;es. Cependant malgr&eacute; un d&eacute;marchage important<br />
aucune autre fondation n&rsquo;a &eacute;t&eacute; en mesure de r&eacute;pondre favorablement &agrave; notre demande de soutien.<br />
Jusqu&rsquo;&agrave; ce jour, le bilan de ce projet est tr&egrave;s positif, tant de la part des &eacute;l&egrave;ves que des enseignant-<br />
e-s, qui sans cette action, ne sont pas toujours en mesure de proposer ce type de sorties &agrave; leurs<br />
classes de 9 e .</p>',
'indicator' => '• Par le nombre de sorties effectuées.
• Par le taux de satisfaction des enseignant-e-s( sondage en ligne)',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:14:23',
'updated_at' => '2020-04-06 06:14:23',
),
79 => 
array (
'id' => 81,
'code' => '10.3',
'label' => 'Formations des enseignant-e-s sur la biodiversité et l’étude sur le terrain',
'image' => NULL,
'description' => '<p>Objectifs :<br />
&bull; Actualiser les connaissances des enseignant-e-s sur la nouvelle classification du vivant, sur la<br />
biodiversit&eacute;, les interd&eacute;pendances, notamment en lien avec les s&eacute;quences genevoises MSN 28.<br />
&bull; Renforcer les comp&eacute;tences didactiques pour mener des activit&eacute;s sur la classification, la biodiversit&eacute;<br />
et les interd&eacute;pendances.<br />
R&eacute;alisations :<br />
&bull; Dispenser des formations sur les plans scientifique et didactique concernant la biodiversit&eacute; des<br />
milieux.<br />
&bull; R&eacute;aliser des ressources vid&eacute;o relativement aux s&eacute;quences d&rsquo;enseignement genevoises pour &eacute;tayer<br />
leur mise en &oelig;uvre et alimenter les formations en &eacute;tablissements.<br />
&bull; Organiser une conf&eacute;rence film&eacute;e pour les enseignant-e-s et futurs enseignant-e-s EP hors temps<br />
scolaire (HT), alliant une pr&eacute;sentation de la nouvelle classification animale et l&rsquo;&eacute;volution des esp&egrave;ces<br />
en tenant compte des enjeux &eacute;cologiques actuels.<br />
Besoins :<br />
&bull; Renforcement de la collaboration entre l&rsquo;UniGE, le SEM, RTS D&eacute;couvertes, le Service de formation<br />
et de d&eacute;veloppement (DGEO) et le SEE (Coordinateur-trice de Biologie du cycle d&rsquo;orientation et<br />
Coordinateur-trice de Discipline en sciences de la nature de l&rsquo;&eacute;cole primaire)<br />
&bull; Engagement de conf&eacute;renciers sur les th&eacute;matiques de la classification phylog&eacute;n&eacute;tique et de l&rsquo;&eacute;volution<br />
des esp&egrave;ces<br />
&bull; Augmentation de 50% du poste d&eacute;volu aux sciences de la nature et au d&eacute;veloppement durable au<br />
sein des Coordinateurs de disciplines du SEE pour :<br />
&bull; assurer le pilotage de cette action en lien avec les diff&eacute;rents acteurs (services de l&rsquo;&Eacute;tat, UniGe,<br />
associations, enseignant-e-s r&eacute;f&eacute;rent-e-s,&hellip;);<br />
&bull; intervenir dans le cadre de la formation continue ou du recyclage obligatoire des enseignant-e-s.<br />
Contexte :<br />
Le contenu du moyen d&rsquo;enseignement romand (MER) transitoire actuel pour le cycle 2 (collection<br />
Odyss&eacute;o de l&rsquo;&eacute;diteur Magnard, 3e cycle fran&ccedil;ais, &eacute;dition 2010), ne r&eacute;pond pas enti&egrave;rement aux<br />
progressions du Plan d&rsquo;&eacute;tudes romand (PER) de l&rsquo;axe math&eacute;matique et sciences de la nature (MSN<br />
28) sur la diversit&eacute; du vivant. Afin de combler ces manques, trois s&eacute;quences genevoises produites<br />
par le SEE ont &eacute;t&eacute; mise &agrave; disposition des enseignant-e-s pour compl&eacute;ter le MER existant :<br />
&bull; D&eacute;couvrir la biodiversit&eacute; (5P-6P)<br />
&bull; Classer le vivant (7P-8P)<br />
&bull; Interd&eacute;pendances entre &ecirc;tres vivants (7P-8P).</p>

<p>Les notions abord&eacute;es restent toutefois complexes pour un-e enseignant-e g&eacute;n&eacute;raliste et m&eacute;ritent des<br />
formations ou informations compl&eacute;mentaires sous diverses formes et approches.<br />
Pour les enseignant-e-s du cycle 1, il est &eacute;galement important de comprendre l&rsquo;&eacute;volution de la<br />
classification du vivant, afin d&rsquo;&eacute;viter la construction de fausses repr&eacute;sentations des &eacute;l&egrave;ves. Les<br />
premi&egrave;res progressions d&rsquo;apprentissage li&eacute;es au tri et &agrave; l&rsquo;observation des besoins du vivant<br />
apparaissent d&egrave;s la 1P.</p>',
'indicator' => '• Nombre de ressources numériques créées pour les élèves et les enseignant-e-s
• Organisation de la conférence sur la nouvelle classification animale et l’évolution des espèces hors
temps scolaire (ST)',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:16:06',
'updated_at' => '2020-04-06 06:16:06',
),
80 => 
array (
'id' => 82,
'code' => '10.4',
'label' => 'Formation continue des enseignant-e-s sur la biodiversité et l’EDD',
'image' => NULL,
'description' => '<p>Objectifs :<br />
&bull; Renforcer les connaissances et comp&eacute;tences en lien avec MSN 38. Etudier l&rsquo;opportunit&eacute; de l&rsquo;adapter<br />
au secondaire II.<br />
&bull; Encourager les enseignant-e-s &agrave; s&rsquo;informer et se former sur les th&eacute;matiques li&eacute;es &agrave; la biodiversit&eacute;<br />
et suivre les changements li&eacute;s &agrave; la discipline.<br />
&bull; Approfondir les connaissances naturalistes de terrain des enseignant-e-s par des apports th&eacute;oriques<br />
scientifiques et techniques.<br />
&bull; Permettre aux enseignant-e-s de mettre &agrave; jour leurs connaissances sur les outils mis en place pour<br />
concilier les activit&eacute;s agricoles et biodiversit&eacute;.<br />
R&eacute;alisation :<br />
&bull; Organiser et planifier 1 &agrave; 2 formations par an en lien avec la biodiversit&eacute; genevoise, par le GT &laquo; FC<br />
et mat&eacute;riel p&eacute;dagogique &raquo;. Etudier l&rsquo;opportunit&eacute; de rendre ces formations obligatoires (recyclage).<br />
L&rsquo;adapter &eacute;ventuellement au secondaire II.<br />
&bull; Organiser et planifier une formation continue permettant la mise en &oelig;uvre de la s&eacute;quence<br />
interdisciplinaire EDD intitul&eacute;e : Biodiversit&eacute; et agriculture durable (2019-2020). Etudier l&rsquo;opportunit&eacute;<br />
de rendre ces formations obligatoires (recyclage). Ouvrir les formations continues aux enseignant-<br />
e-s du secondaire II.<br />
&bull; R&eacute;aliser ou ajuster du mat&eacute;riel p&eacute;dagogique pour la formation, li&eacute; notamment au contexte de<br />
l&rsquo;&eacute;tablissement et des actions envisag&eacute;es (voir action 10.12).<br />
Besoins :<br />
&bull; Financement du groupe de travail &laquo; FC et mat&eacute;riel p&eacute;dagogique &raquo; &agrave; hauteur de 3x 3h au poste.<br />
&bull; Financement d&rsquo;intervenants externes sp&eacute;cialistes des questions biodiversit&eacute; et/ ou de diverses<br />
associations naturalistes.<br />
Contexte :<br />
L&rsquo;&eacute;volution des connaissances scientifiques en biologie demandent une mise &agrave; jour permanente des<br />
connaissances des enseignant-e-s, ce qui peut &ecirc;tre r&eacute;alis&eacute; lors des formations continues gr&acirc;ce &agrave;<br />
l&rsquo;interventions de divers sp&eacute;cialistes.<br />
Les formations continues en lien avec les th&eacute;matiques interd&eacute;pendances apportent un &eacute;clairage<br />
inter- et trans- disciplinaire biologie / g&eacute;ographie int&eacute;grant la d&eacute;marche scientifique autour de sujets<br />
d&rsquo;&eacute;tudes choisi dans une perspective EDD.</p>',
'indicator' => '• Nombre de formations et de participants aux formations continues.
• Taux de satisfaction des enseignant-e-s. (Sondage en ligne)',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 1,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:21:12',
'updated_at' => '2020-04-06 06:21:12',
),
81 => 
array (
'id' => 83,
'code' => '10.5',
'label' => 'CO et EP – Formations continues en lien avec la biodiversité au catalogue DIP: ES II',
'image' => NULL,
'description' => '<p>Chaque ann&eacute;e, au moins 2 formations continues seront propos&eacute;es aux enseignant-e-s de l&rsquo;ES II<br />
avec la participation possible des enseignant-e-s du CO et du primaire. Les th&egrave;mes seront choisis<br />
en fonction des besoins des enseignant-e-s, de l&rsquo;actualit&eacute; et des priorit&eacute;s retenues pour la mise en<br />
&oelig;uvre du plan d&rsquo;actions biodiversit&eacute; PB1.</p>',
'indicator' => '• Par le nombre de participant.e.s.
• Par le taux de satisfaction des enseignant-e-s.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:23:50',
'updated_at' => '2020-04-06 06:23:50',
),
82 => 
array (
'id' => 84,
'code' => '10.6',
'label' => 'Formation initiale des enseignant-e-s sur la biodiversité et l’étude sur le terrain',
'image' => NULL,
'description' => '<p>Objectifs :<br />
&bull; Inscrire de mani&egrave;re obligatoire et p&eacute;renne le th&egrave;me de la biodiversit&eacute; et de ses principes-cl&eacute;s dans<br />
la formation didactique de l&rsquo;ensemble des &eacute;tudiant-e-s se destinant &agrave; enseigner aux degr&eacute;s primaire<br />
(g&eacute;n&eacute;ralistes), secondaire I et II (en biologie, g&eacute;ographie et &eacute;conomie) ;<br />
&bull; Int&eacute;grer les principes d&rsquo;une &Eacute;ducation en vue d&rsquo;un d&eacute;veloppement durable (EDD) dans les enseignements<br />
des didactiques mentionn&eacute;es, dans les activit&eacute;s d&rsquo;enseignement-apprentissage &eacute;tudi&eacute;es/men&eacute;es.<br />
&bull; R&eacute;aliser par les &eacute;tudiant-e-s des actions &laquo; sur le terrain &raquo; qui ont trait &agrave; la biodiversit&eacute; : &eacute;tude/enqu&ecirc;te,<br />
r&eacute;alisation d&rsquo;am&eacute;nagement favorisant la biodiversit&eacute; dans l&rsquo;environnement proche/dans un &eacute;tablissement<br />
scolaire, etc.<br />
R&eacute;alisations :<br />
&bull; Dans le cadre du cours et de l&rsquo;atelier de didactique de la G&eacute;ographie (primaire et sec. I et II) :<br />
r&eacute;flexion sur la d&eacute;finition de la biodiversit&eacute;, sur les enjeux de biodiversit&eacute; &agrave; diff&eacute;rentes &eacute;chelles<br />
d&rsquo;analyse (locale et globale notamment) et sur leur int&eacute;gration dans une d&eacute;marche syst&eacute;mique<br />
visant au d&eacute;veloppement durable de nos soci&eacute;t&eacute;s; l&rsquo;analyse et/ou la mise en &oelig;uvre d&rsquo;activit&eacute;s<br />
d&rsquo;enseignement-apprentissage qui int&egrave;grent l&rsquo;&eacute;tude des relations syst&eacute;miques et d&rsquo;interd&eacute;pendances<br />
entre la biodiversit&eacute; et les usages et am&eacute;nagements d&rsquo;un espace par les &ecirc;tres humains, qui explorent<br />
la prise en compte de la biodiversit&eacute; dans les pratiques et dans les politiques locales.<br />
&bull; Dans le cadre des cours et ateliers de didactique des Sciences de la nature (primaire) et de Biologie<br />
(sec. I et II): l&rsquo;analyse et/ou la mise en &oelig;uvre d&rsquo;activit&eacute;s d&rsquo;enseignement-apprentissage int&eacute;grant<br />
les notions essentielles &agrave; la compr&eacute;hension de la biodiversit&eacute; (notions de r&eacute;seau alimentaire, des<br />
besoins de la faune et de la flore, d&rsquo;&eacute;cosyst&egrave;me, d&rsquo;esp&egrave;ce, de classification des esp&egrave;ces, de variation<br />
g&eacute;n&eacute;tique, &hellip;) et des principes-cl&eacute;s de la biodiversit&eacute; : diversit&eacute; au niveau des g&egrave;nes (sec. I et II),<br />
des esp&egrave;ces et des &eacute;cosyst&egrave;mes, interd&eacute;pendances, services &eacute;cosyst&eacute;miques.<br />
&bull; Dans le cadre du cours de didactique de l&rsquo;&Eacute;conomie (sec. II) : l&rsquo;analyse et/ou la mise en &oelig;uvre<br />
d&rsquo;activit&eacute;s d&rsquo;enseignement-apprentissage qui &eacute;tudient les relations syst&eacute;miques entre la biodiversit&eacute;<br />
et les ressources, leurs usages et exploitations par les soci&eacute;t&eacute;s humaines, les services &eacute;conomiques<br />
des syst&egrave;mes &eacute;cologiques, les cons&eacute;quences &eacute;conomiques qu&rsquo;elles repr&eacute;sentent pour les &ecirc;tres<br />
humains, les co&ucirc;ts/b&eacute;n&eacute;fices d&rsquo;actions qui visent &agrave; favoriser la biodiversit&eacute;<br />
&bull; Dans le cadre de l&rsquo;atelier de didactique de Biologie (sec. I et II): sortie didactique sur le terrain pour<br />
d&eacute;velopper les comp&eacute;tences de mise en &oelig;uvre d&rsquo;&eacute;tudes/actions sur le terrain avec les &eacute;l&egrave;ves.<br />
&bull; Mise en &oelig;uvre d&rsquo;&eacute;tudes ou d&rsquo;am&eacute;nagements sur le terrain visant &agrave; comprendre et favoriser la<br />
biodiversit&eacute;, selon une d&eacute;marche interdisciplinaire dans la mesure du possible.<br />
&bull; Clarification des principes d&rsquo;une EDD aupr&egrave;s des formateurs-trices et int&eacute;gration dans les<br />
enseignements didactiques des disciplines prioritairement en charge du th&egrave;me de la biodiversit&eacute;.</p>

<p>&nbsp;</p>

<p>&bull; Si la Formation en enseignement primaire (FEP) n&rsquo;est pas amput&eacute;e d&rsquo;une ann&eacute;e : mise en place<br />
d&rsquo;un dispositif d&rsquo;approfondissement interdisciplinaire au niveau du CCEP (destin&eacute;s aux &eacute;tudiant-e-s<br />
en derni&egrave;re ann&eacute;e de formation) permettant &agrave; l&rsquo;EDD et aux contenus relatifs &agrave; la biodiversit&eacute; d&rsquo;&ecirc;tre<br />
abord&eacute;s en surmontant l&rsquo;obstacle du cloisonnement disciplinaire<br />
&bull; Promotion des r&eacute;alisations &agrave; l&rsquo;interne de l&rsquo;IUFE (enseignements, journ&eacute;e &eacute;v&eacute;nement, formation<br />
continue,&hellip;) et &agrave; l&rsquo;externe (formation continue du DIP, &hellip;).<br />
&bull; Cr&eacute;ation d&rsquo;une commission EDD-Biodiversit&eacute; au sein de l&rsquo;IUFE, charg&eacute;e d&rsquo;&eacute;valuer la coh&eacute;rence et<br />
le suivi des r&eacute;alisations.<br />
Besoins :<br />
&bull; Financement d&rsquo;un poste de Coordinateur-trice p&eacute;dagogique Biodiversit&eacute; et EDD &agrave; hauteur de 20<br />
% pour organiser et suivre les r&eacute;alisations mentionn&eacute;es.<br />
&bull; Financement des actions sur le terrain : frais de mat&eacute;riels, de r&eacute;alisation, de d&eacute;fraiement<br />
d&rsquo;intervenants externes sp&eacute;cialistes, etc.<br />
Contexte :<br />
Les cours, ateliers et s&eacute;minaires de didactique mentionn&eacute;s int&egrave;grent d&eacute;j&agrave; partiellement ces diff&eacute;rents<br />
objectifs.<br />
Le but premier serait de les renforcer en les institutionnalisant, au-del&agrave; des engagements personnels et<br />
volontaires des formateurs-trices, et en s&rsquo;assurant qu&rsquo;ils soient travaill&eacute;s par l&rsquo;ensemble des &eacute;tudiant-<br />
e-s.<br />
Le but secondaire serait de stimuler des d&eacute;marches interdisciplinaires et des actions sur le terrain.<br />
Les dispositifs didactiques li&eacute;s au th&egrave;me de la biodiversit&eacute; permettent d&rsquo;illustrer des s&eacute;quences qui<br />
int&egrave;grent plus largement les principes et notions d&rsquo;Education en vue d&rsquo;un d&eacute;veloppement durable.</p>',
'indicator' => '• Liste des sujets et notions abordés en cours par les didactiques mentionnées
• Nombre et types d’actions réalisées sur le terrain',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:25:34',
'updated_at' => '2020-04-06 06:25:34',
),
83 => 
array (
'id' => 85,
'code' => '10.7',
'label' => 'EP – Ressources et site internet de La Salamandre',
'image' => NULL,
'description' => '<p>Objectif :<br />
- Mettre &agrave; disposition des enseignant-e-s et des &eacute;l&egrave;ves des ressources naturalistes de qualit&eacute; sur la<br />
faune et la flore locales utiles &agrave; l&rsquo;enseignement de l&rsquo;axe Diversit&eacute; du vivant (MSN18-28) en participant<br />
&agrave; leur &eacute;laboration.<br />
R&eacute;alisations :<br />
- Distribuer les revues de la Salamandre dans toutes les classes du Cycle 1, Cycle 2 et classes<br />
sp&eacute;cialis&eacute;es.<br />
- Permettre l&rsquo;acc&egrave;s au site p&eacute;dagogique de la Salamandre.<br />
- Etablir un contrat de collaboration entre la Salamandre et le DIP pour assurer une meilleure<br />
transposition didactique des ressources propos&eacute;es aux enseignant-e-s.<br />
Besoins:<br />
- Participation au financement de la maintenance du site http://&eacute;cole.lasalamandre.net/ fix&eacute;e &agrave; CHF<br />
12&rsquo;168, calcul&eacute;e sur la base de la r&eacute;partition inter-cantonale de la Conf&eacute;rence intercantonale de<br />
l&rsquo;instruction publique de suisse romande et du tessin (CIIP)<br />
- Financement de l&rsquo;abonnement de toutes les classes du canton aux revues de la Salamandre dans<br />
le cas o&ugrave; la fondation Montagu ne devait pas poursuivre son financement<br />
- Augmentation de 5% du poste d&eacute;volu &agrave; MSN au sein des Coordinateurs de disciplines du SEE pour<br />
assurer une collaboration entre la Salamandre et le D&eacute;partement de l&rsquo;instruction publique (DIP).<br />
Contexte:<br />
En 2016, Julien Perrot, directeur des &eacute;ditions la Salamandre, a sollicit&eacute; une fondation, afin de financer<br />
1700 abonnements &agrave; destination de toutes les classes genevoises, regroupements sp&eacute;cialis&eacute;s inclus,<br />
des revues La petite Salamandre et La Salamandre junior pour un montant de CHF 90&rsquo;000 durant<br />
l&rsquo;ann&eacute;e scolaire 2017-2018.<br />
En compl&eacute;ment &agrave; cette revue, La Salamandre a d&eacute;velopp&eacute; un site internet &agrave; destination des<br />
enseignants et des &eacute;l&egrave;ves. La construction du site a &eacute;t&eacute; financ&eacute;e par la DGEO Vaud (CHF 121&rsquo;000),<br />
une fondation (CHF 66&rsquo;000) et l&rsquo;Office f&eacute;d&eacute;ral de l&rsquo;environnement (CHF 55&rsquo;000). M. Perrot propose<br />
un libre acc&egrave;s aux ressources du site en &eacute;change d&rsquo;une participation financi&egrave;re pour sa maintenance<br />
fix&eacute;e &agrave; CHF 12&rsquo;168, calcul&eacute;e sur la base de la r&eacute;partition intercantonale de la CIIP. Les contenus<br />
du site, en constante &eacute;volution, permettent de r&eacute;pondre &agrave; certains objectifs du PER, ainsi que de<br />
servir aux actions men&eacute;es au sein de la commission Commission d&rsquo;Enseignement Math&eacute;matiques<br />
et Sciences de la Nature et du Num&eacute;rique (CEMSN2) en lien avec la biodiversit&eacute; (cf. s&eacute;quences<br />
genevoises produites par le Service enseignement et &eacute;valuation). Actuellement, les classes genevoises<br />
peuvent acc&eacute;der gratuitement au site jusqu&rsquo;au 31 d&eacute;cembre 2020. Un sondage en ligne aupr&egrave;s des<br />
enseignant-e-s a d&eacute;montr&eacute; leur satisfaction.</p>

<p>&nbsp;</p>

<p>Une fondation a assur&eacute; son soutien pour financer la distribution des revues de La Salamandre dans<br />
les 1700 classes du canton de Gen&egrave;ve pour l&rsquo;ann&eacute;e scolaire 2020-2021. Ce soutien ne sera pas<br />
poursuivi d&egrave;s la rentr&eacute;e 2021.<br />
L&rsquo;utilisation de ces ressources pourrait &ecirc;tre encore davantage exploit&eacute;e en assurant une meilleure<br />
promotion des contenus propos&eacute;s aupr&egrave;s des enseignant-e-s et en participant, comme d&rsquo;autres<br />
cantons, &agrave; la r&eacute;flexion sur leur &eacute;laboration. Pour ce faire, un contrat de collaboration entre la<br />
Salamandre et le DIP pourrait &ecirc;tre envisag&eacute;.</p>',
'indicator' => '- dénombrement des enseignant-e-s se connectant au site http://école.lasalamandre.net/
- participation à un groupe de travail produisant les contenus de site pédagogique de la Salamandre',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:27:39',
'updated_at' => '2020-04-06 06:27:39',
),
84 => 
array (
'id' => 86,
'code' => '10.8',
'label' => 'CO - ES II – Elaboration de matériel pédagogique transdisciplinaire biodiversité / EDD',
'image' => NULL,
'description' => '<p>Objectifs :<br />
&bull; Cr&eacute;er une s&eacute;quence d&rsquo;enseignement interdisciplinaire (biologie /g&eacute;ographie) sur la th&eacute;matique de la<br />
biodiversit&eacute; et de l&rsquo;agriculture durable en lien avec la FG 36/37 (2018-2019). L&rsquo;adapter &eacute;ventuellement<br />
pour le secondaire II.<br />
&bull; Cr&eacute;er 2 autres s&eacute;quences transdisciplinaires (biologie, g&eacute;ographie et physique) en lien avec l&rsquo;EDD<br />
et la biodiversit&eacute;. (D&egrave;s 2019 &ndash; 2020). L&rsquo;adapter &eacute;ventuellement pour le secondaire II.<br />
&bull; Valoriser la transdisciplinarit&eacute; entre la biologie, la g&eacute;ographie et la physique.<br />
&bull; Valoriser la th&eacute;matique interd&eacute;pendance (FG 36/37) au CO.<br />
R&eacute;alisation :<br />
Proposer des s&eacute;quences d&rsquo;enseignement interdisciplinaires biologie/g&eacute;ographie/physique utilisables<br />
par les enseignants des trois disciplines.<br />
A ce jour une premi&egrave;re s&eacute;quence &laquo; Biodiversit&eacute; et agriculture durable &raquo; est en cours d&rsquo;&eacute;laboration.<br />
Besoins :<br />
R&eacute;mun&eacute;ration des enseignants du groupe de travail constitu&eacute; d&rsquo;un-e enseignant-e de biologie, d&rsquo;un-e<br />
enseignant-e de g&eacute;ographie et d&rsquo;un-e enseignant-e de physique.<br />
Contexte :<br />
Depuis 2018, un GT constitu&eacute; d&rsquo;un enseignant de biologie et de g&eacute;ographie sont charg&eacute;s de<br />
la production d&rsquo;une premi&egrave;re s&eacute;quence EDD/ biodiversit&eacute;. Ce travail s&rsquo;inscrit dans un projet de<br />
collaboration interdisciplinaire biologie /g&eacute;ographie du CO dans le cadre de la mise en &oelig;uvre de la<br />
th&eacute;matique interd&eacute;pendances au cycle 3.</p>',
'indicator' => 'Par l’existence du support.',
'R' => 0,
'A' => 0,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:30:48',
'updated_at' => '2020-04-06 06:30:48',
),
85 => 
array (
'id' => 87,
'code' => '10.9',
'label' => 'EP-CO (ESII) – Ressources sur la faune et la flore locales à visée pédagogique',
'image' => NULL,
'description' => '<p>Objectif :<br />
&bull; Cr&eacute;ation de ressources p&eacute;dagogiques sur la biodiversit&eacute; genevoise sur diff&eacute;rents supports (papier<br />
et/ou num&eacute;rique) par le biais d&rsquo;une collaboration entre enseignants et sp&eacute;cialistes de la biodiversit&eacute;.<br />
&bull; Mettre &agrave; disposition de l&rsquo;ensemble des &eacute;l&egrave;ves de la 7P &agrave; la 11e CO un m&ecirc;me document de r&eacute;f&eacute;rence<br />
pour sortir sur le terrain et pour le travail en classe.<br />
&bull; Evaluer l&rsquo;opportunit&eacute; d&rsquo;adapter ce mat&eacute;riel aux enseignant-e-s du secondaire II.<br />
R&eacute;alisation :<br />
Cr&eacute;ation d&rsquo;une ressource adapt&eacute;e aux &eacute;l&egrave;ves de la 7P &agrave; la 11e CO qui r&eacute;pertorie la biodiversit&eacute; (faune<br />
et flore locales) dans un p&eacute;rim&egrave;tre proche de l&rsquo;&eacute;cole. R&eacute;flexion &eacute;galement &agrave; mener au secondaire II.<br />
Besoins :<br />
Financement d&rsquo;un groupe de travail compos&eacute; de sp&eacute;cialistes du domaine de l&rsquo;Etat (DT), du Museum,<br />
du Jardin botanique, de naturalistes et d&rsquo;enseignant-e-s sp&eacute;cialistes.<br />
Contexte :<br />
Actuellement aucune ressource ne regroupe les diverses esp&egrave;ces de la faune et la flore locales<br />
proche des &eacute;tablissements scolaires. De m&ecirc;me afin de s&rsquo;informer il faut tr&egrave;s souvent avoir recours &agrave;<br />
de nombreux ouvrages ou documents pas toujours actualis&eacute;s, difficilement transportables en sorties<br />
ou qui ne sont pas disponibles dans l&rsquo;ensemble des classes. Une ressource papier ou num&eacute;rique<br />
qui puisse servir de r&eacute;f&eacute;rence tant en classe que lors de sorties en ext&eacute;rieur, utilisable tant par les<br />
&eacute;l&egrave;ves de 7-8P que de ceux du CO permettrait de pallier ce manque. R&eacute;flexion &eacute;galement &agrave; mener<br />
au secondaire II</p>',
'indicator' => 'Par l’existence du support.',
'R' => 0,
'A' => 0,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:32:13',
'updated_at' => '2020-04-06 06:32:13',
),
86 => 
array (
'id' => 88,
'code' => '10.10',
'label' => 'EP (ES II) – Valorisation et renforcement des actions proposées par le Groupe sensibilisation nature piloté par le Département du territoire (DT)',
'image' => NULL,
'description' => '<p>Objectifs :<br />
&bull; Valoriser et ajuster des actions et ressources &eacute;labor&eacute;es entre les services de l&rsquo;Etat.<br />
&bull; Assurer l&rsquo;observation de divers milieux naturels par les &eacute;l&egrave;ves avec des accompagnants form&eacute;s.<br />
&bull; Participer &agrave; l&rsquo;acquisition des objectifs d&rsquo;apprentissages du Plan d&rsquo;&eacute;tudes romand vis&eacute;s en<br />
Sciences de la nature (MSN 18 et 28), en G&eacute;ographie (SHS 11 et 21), pour la Formation g&eacute;n&eacute;rale<br />
(Interd&eacute;pendances sociales, &eacute;conomiques et environnementales FG 16-17 et 26-27), l&rsquo;&Eacute;ducation<br />
&agrave; la citoyennet&eacute; et l&rsquo;&Eacute;ducation en vue d&rsquo;un d&eacute;veloppement durable.<br />
&bull; Mettre en valeur le patrimoine naturel du canton de Gen&egrave;ve pour les &eacute;l&egrave;ves et les enseignant-e-s.<br />
&bull; Etudier les projets propos&eacute;s par le groupe de travail pour les promouvoir au secondaire II en fonction<br />
des besoins des enseignant-e-s de biologie ou autres disciplines int&eacute;ress&eacute;es.<br />
R&eacute;alisations :<br />
&bull; &Eacute;valuer les actions men&eacute;es ces derni&egrave;res ann&eacute;es &eacute;manant de la collaboration du DT et du DIP en<br />
mati&egrave;re de sensibilisation &agrave; la nature et les reconduire en cas de bilan positif.<br />
&bull; Promouvoir des actions &eacute;manant de collaborations entre le DIP et les acteurs de terrain en mati&egrave;re<br />
de biodiversit&eacute; y compris au secondaire II.<br />
&bull; Mettre &agrave; disposition des &eacute;l&egrave;ves et des enseignants des sp&eacute;cialistes pour aller sur le terrain<br />
(naturalistes, urbanistes, forestiers, etc&hellip;).<br />
&bull; Valoriser aupr&egrave;s des enseignant-e-s les ressources p&eacute;dagogiques existantes en apportant les<br />
compl&eacute;ments n&eacute;cessaires pour assurer leur mise en &oelig;uvre.<br />
&bull; Cr&eacute;er et diffuser un catalogue annuel de sorties Nature pour les &eacute;tablissements scolaires, extrait<br />
de l&rsquo;Agenda nature nouvellement cr&eacute;&eacute;, afin d&rsquo;harmoniser, communiquer et mettre en &eacute;vidence les<br />
synergies de l&rsquo;offre cantonale et de faciliter leur acc&egrave;s aux enseignant-e-s.<br />
Besoins :<br />
&bull; Augmentation de 50% du poste d&eacute;volu aux sciences de la nature et du d&eacute;veloppement durable au<br />
sein des Coordinateurs de disciplines du SEE pour assurer le pilotage de ces actions en lien avec<br />
les diff&eacute;rents acteurs (services de l&rsquo;Etat, communes, associations,&hellip;).<br />
&bull; Financement d&rsquo;intervenants externes sp&eacute;cialistes pour accompagner les enseignants et &eacute;l&egrave;ves sur<br />
le terrain si les personnes en charge des dossiers sensibilisation nature au sein des services de<br />
l&rsquo;&eacute;tat ne sont pas disponibles.</p>

<p>Contexte :<br />
Le groupe de travail sensibilisation nature r&eacute;unit les principaux acteurs genevois engag&eacute;s dans la<br />
protection de la nature, ainsi que deux repr&eacute;sentants du DIP (&eacute;cole primaire et cycle d&rsquo;orientation).<br />
Ce groupe est coordonn&eacute; par Alexandra Maraia rattach&eacute;e actuellement au DT. Il s&rsquo;agira de l&rsquo;ouvrir<br />
au secondaire II. Les repr&eacute;sentant-e-s du DIP au sein du groupe de travail ont pour mission de<br />
recueillir les id&eacute;es de projets, les &eacute;valuer et les promouvoir au sein du DIP en fonction des besoins<br />
des enseignant-e-s concern&eacute;-e-s.<br />
Ces derni&egrave;res ann&eacute;es, diverses actions ont &eacute;t&eacute; propos&eacute;es aux enseignant-e-s et/ou aux &eacute;l&egrave;ves par<br />
le DT en collaboration avec le groupe sensibilisation nature :<br />
&bull; Ramsar (ateliers propos&eacute;s aux &eacute;l&egrave;ves au bord du lac en lien avec l&rsquo;observation des oiseaux d&rsquo;eau<br />
et la protection des zones humides)<br />
&bull; Corridors biologiques (document p&eacute;dagogique, exposition, &hellip;)<br />
&bull; Contrats rivi&egrave;res<br />
&bull; Rallyes des for&ecirc;ts<br />
&bull; &hellip;<br />
Certaines actions n&rsquo;ont pas &eacute;t&eacute; reconduites pour des questions budg&eacute;taires notamment. Elles<br />
m&eacute;riteraient d&rsquo;&ecirc;tre r&eacute;&eacute;valu&eacute;es, puis en cas d&rsquo;un bilan positif des acteurs-trices concern&eacute;-e-s, renforc&eacute;es<br />
et remises en valeur. Des dossiers p&eacute;dagogiques ont &eacute;t&eacute; r&eacute;dig&eacute;s par le DT en partenariat avec la<br />
DIP (par ex. Corridors biologiques). Ces ressources sont peu exploit&eacute;es par les enseignant-e-s et<br />
m&eacute;riteraient une r&eacute;flexion puis des actions pour renforcer leur mise en &oelig;uvre.<br />
Par ailleurs, de nouvelles actions sont en cours de d&eacute;veloppement en collaboration avec le DT<br />
(sorties lac).<br />
Un agenda nature a &eacute;t&eacute; cr&eacute;&eacute; dans le cadre du groupe sensibilisation nature qu&rsquo;il s&rsquo;agirait de valoriser<br />
et diffuser dans les &eacute;coles.</p>',
'indicator' => '- Nombre d’animations réalisées pour les élèves et les enseignants.
- Taux de satisfaction des différents acteurs en lien avec les actions mises en œuvre (sondage en ligne
auprès d’enseignants, formateurs, personnels de l’État, des communes et partenaires associatifs
concernés, etc.)',
'R' => 0,
'A' => 0,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:39:48',
'updated_at' => '2020-04-06 06:39:48',
),
87 => 
array (
'id' => 89,
'code' => '10.11',
'label' => 'CO - ES II – Renforcement des actions proposées par le Groupe sensibilisation nature',
'image' => NULL,
'description' => '<p>Objectif :<br />
&bull; Promouvoir les actions en lien avec la biodiversit&eacute; au niveau cantonal.<br />
&bull; Diffuser et communiquer les informations aupr&egrave;s des &eacute;tablissements par le biais des RDs et des<br />
r&eacute;f&eacute;rent-e-s EDD (&eacute;ducation en vue d&rsquo;un d&eacute;veloppement durable) du secondaire I et II afin de<br />
faciliter l&rsquo;acc&egrave;s des enseignant-e-s aux offres.<br />
&bull; Valoriser aupr&egrave;s des enseignant-e-s les ressources p&eacute;dagogiques existantes en lien avec leur<br />
enseignement.<br />
&bull; Cr&eacute;er de nouvelles ressources p&eacute;dagogiques pour l&rsquo;ensemble des enseignant-e-s de biologie du CO<br />
en lien avec les formations continues annuelles biodiversit&eacute;. &Eacute;valuer l&rsquo;offre pour les enseignant-e-s<br />
du secondaire II.<br />
R&eacute;alisation :<br />
&bull; Participer au groupe sensibilisation nature par le biais du PG/ coordinateur de biologie du CO et<br />
responsable du DD du DIP.<br />
&bull; Informer les enseignant-e-s:<br />
&bull; Espace enseignant-e-s sur DisciplineCO : Sorties p&eacute;dagogiques (existant)<br />
&bull; Pr&eacute;senter des associations naturalistes lors des s&eacute;ances de RDs de biologie.<br />
&bull; Site DIP21.<br />
&bull; Etablir des contacts avec les acteurs li&eacute;s &agrave; la biodiversit&eacute;.<br />
&bull; Elaborer du mat&eacute;riel p&eacute;dagogique en lien avec les formations continues annuelles biodiversit&eacute; et<br />
le mettre &agrave; disposition sur discipline CO. Le cas &eacute;ch&eacute;ant, les adapter au secondaire II.<br />
&bull; Cr&eacute;er un onglet biodiversit&eacute; sur le site Discipline CO et sur le site DIP21 et l&rsquo;alimenter avec les<br />
actions et le mat&eacute;riel p&eacute;dagogique biodiversit&eacute;.<br />
Besoins :<br />
&bull; R&eacute;mun&eacute;ration des intervenants externes sp&eacute;cialistes.<br />
&bull; Augmentation du d&eacute;gr&egrave;vement du PG/coordinateur du SEE afin d&rsquo;assurer le pilotage des actions<br />
biodiversit&eacute; en lien avec les diff&eacute;rents acteurs.<br />
&bull; Financement du groupe de travail &laquo; FC et mat&eacute;riel p&eacute;dagogique &raquo; afin de maintenir la production<br />
de mat&eacute;riel en lien avec les FC touchant &agrave; la biodiversit&eacute;.</p>

<p>Contexte :<br />
Le groupe de travail sensibilisation nature r&eacute;unit les principaux acteurs genevois engag&eacute;s dans<br />
la protection de la nature, ainsi que deux repr&eacute;sentants du DIP (EP + CO). Il s&rsquo;agira de l&rsquo;ouvrir au<br />
secondaire II. Ce groupe de travail est pilot&eacute; par le DT. Les repr&eacute;sentant-e-s du DIP au sein du groupe<br />
de travail ont pour mission de recueillir les id&eacute;es de projets, les &eacute;valuer et les promouvoir au sein du<br />
DIP en fonction des besoins des enseignant-e-s</p>',
'indicator' => 'Par l’existence du support.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:42:15',
'updated_at' => '2020-04-06 06:42:15',
),
88 => 
array (
'id' => 90,
'code' => '10.12',
'label' => 'EP + CO + ES II – Actions autour de son bâtiment scolaire en lien avec la biodiversité',
'image' => NULL,
'description' => '<p>Objectifs:<br />
&bull; Promouvoir la biodiversit&eacute; dans l&rsquo;environnement proche de chaque &eacute;cole primaire, et &eacute;tablissement<br />
du secondaire I et II, si possible en coh&eacute;rence avec les priorit&eacute;s du DT en la mati&egrave;re.<br />
&bull; D&eacute;velopper, gr&acirc;ce &agrave; ces actions, les connaissances et comp&eacute;tences des enseignant-e-s et des<br />
&eacute;l&egrave;ves en mati&egrave;re de biodiversit&eacute; (notamment en lien avec les sciences de la nature, la g&eacute;ographie,<br />
l&rsquo;&eacute;ducation citoyenne, les interd&eacute;pendances et l&rsquo;&eacute;ducation en vue d&rsquo;un d&eacute;veloppement durable).<br />
&bull; Valoriser les actions r&eacute;alis&eacute;es par les &eacute;tablissements scolaires des 3 degr&eacute;s d&rsquo;enseignement aupr&egrave;s<br />
de diff&eacute;rents publics cibles (internes et externes au DIP, grand public).<br />
R&eacute;alisations :<br />
&bull; Dresser l&rsquo;inventaire des &ldquo;actions&rdquo; existantes en lien avec la biodiversit&eacute; dans l&rsquo;environnement proche<br />
des &eacute;tablissements scolaires. Par &ldquo;action&rdquo;, on entend une &eacute;tude (recensement de la faune et de la<br />
flore, interview de sp&eacute;cialistes,&hellip;), la r&eacute;alisation d&rsquo;un am&eacute;nagement (h&ocirc;tels &agrave; insectes, &eacute;tang, prairie<br />
fleurie au lieu d&rsquo;un gazon, plantation de haie, potagers en permaculture, toiture v&eacute;g&eacute;talis&eacute;e,&hellip;), une<br />
d&eacute;marche de communication (exposition, film, blog, &hellip;), etc..<br />
&bull; Proposer des am&eacute;nagements favorisant la biodiversit&eacute; aux alentours des &eacute;tablissements scolaires,<br />
en concertation avec des sp&eacute;cialistes (collaborateurs/trices du DT, du MHN, des CJB, &hellip;) - si possible<br />
en ad&eacute;quation avec le programme &ldquo;Nature en ville&rdquo; et les priorit&eacute;s du DT en la mati&egrave;re.<br />
&bull; Mettre en &oelig;uvre, d&rsquo;ici 2030, avec les &eacute;l&egrave;ves, au moins une action en lien avec la biodiversit&eacute; aux<br />
abords des &eacute;tablissements scolaires.<br />
&bull; En fonction de la nature des projets, engager des sp&eacute;cialistes pour accompagner les enseignant.e.s<br />
dans la phase de r&eacute;alisation (naturalistes, urbanistes, etc&hellip;).<br />
&bull; &Eacute;laborer un concept de formation (contenus et ressources didactiques) ajust&eacute; aux actions et au<br />
contexte de l&rsquo;&eacute;tablissement ; dispenser une formation continue en &eacute;tablissement pour les enseignant-<br />
e-s concern&eacute;-e-s (ex au secondaire I: biologie, g&eacute;ographie..) d&rsquo;une dur&eacute;e maximale de deux journ&eacute;es<br />
par ann&eacute;e scolaire (sur une ann&eacute;e scolaire &agrave; l&rsquo;EP, sur deux ann&eacute;es scolaires cons&eacute;cutives au CO,<br />
&agrave; d&eacute;finir pour l&rsquo;ES II en fonction des besoins des enseignant-e-s) &ndash; cf. actions &laquo; formation continue<br />
DIP &raquo;, &laquo; ressources p&eacute;dagogiques &raquo; et &laquo; actions en lien avec le groupe Sensibilisation Nature &raquo;.</p>

<p>&bull; Diffuser les actions et ressources didactiques &eacute;labor&eacute;es dans le cadre des &eacute;tablissements aupr&egrave;s<br />
de l&rsquo;ensemble des directions et enseignant-e-s du canton, valoriser les r&eacute;alisations aupr&egrave;s de tout<br />
public, notamment par leur publication sur internet (ex. DIP21 / intranet DIP).<br />
Besoins:<br />
&bull; Budget pour r&eacute;aliser les projets au sein des &eacute;tablissements scolaires, pour les coordonner et<br />
remplacer les enseignant-e-s lors des formations continues (cf. actions 10.3 &agrave; 10.6), pour engager<br />
des sp&eacute;cialistes (pour accompagner la mise en &oelig;uvre des projets ou pour &eacute;laborer des ressources<br />
didactiques &ndash; cf. actions 10.7 &agrave; 10.11)<br />
&bull; Augmentation des ressources pour le pilotage des projets au sein de la DGEO (Service enseignement<br />
et &eacute;valuation - SEE) et Service de la formation continue - SEFOD).</p>',
'indicator' => '• Nombre d’études et/ou d’actions réalisées dans les établissements scolaires
• Nombre de formations organisées par établissement
• Taux de satisfaction des différents acteurs en lien avec les actions mises en œuvre (sondage en
ligne auprès des publics cibles : enseignant-e-s, formateurs-trices, directions d’établissement, PAT,
représentant-e-s des communes et associations,…)
• Répartition des actions relativement aux différentes priorités et milieux définis par le Plan biodiversité
2020-2023.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:48:52',
'updated_at' => '2020-04-06 06:48:52',
),
89 => 
array (
'id' => 91,
'code' => '10.13',
'label' => 'Promouvoir la biodiversité à l’Université',
'image' => NULL,
'description' => '<p>En 2017, des potagers ont &eacute;t&eacute; install&eacute;s sur deux sites universitaires: le terrain du b&acirc;timent du GAP<br />
(Group of Applied Physics) au Chemin de Pinchat, d&rsquo;une part et le toit d&rsquo;Uni Dufour, d&rsquo;autre part.<br />
Parall&egrave;lement, des ruchers ont pris place sur ces deux sites. Le Rectorat de l&rsquo;UNIGE a soutenu ce<br />
projet, pour sa contribution &agrave; la sauvegarde de la biodiversit&eacute; et &agrave; sa sensibilisation. De plus, son<br />
potentiel de mobilisation de la communaut&eacute; universitaire, collaborateur-trices et &eacute;tudiant-es, a &eacute;t&eacute;<br />
jug&eacute; int&eacute;ressant.<br />
D&egrave;s 2020, le Bioscope et le Rectorat se donnent pour mission de d&eacute;ployer cette initiative, en l&rsquo;orientant<br />
davantage sur la conservation des esp&egrave;ces sauvages indig&egrave;nes et en renfor&ccedil;ant son potentiel de<br />
sensibilisation des publics &agrave; la biodiversit&eacute; r&eacute;gionale.<br />
Pour favoriser la biodiversit&eacute;, ils proposent:<br />
1) de diversifier les am&eacute;nagements am&eacute;liorant la biodiversit&eacute;: nichoirs &agrave; insectes, nichoirs &agrave; oiseaux<br />
et &agrave; chiropt&egrave;res, zones de friches, semis de plantes indig&egrave;nes (sur le mod&egrave;le de MissionB &ndash; RTS),<br />
transformation de surfaces imperm&eacute;ables en surfaces perm&eacute;ables, etc.<br />
2) de multiplier les sites am&eacute;nag&eacute;s dans plusieurs b&acirc;timents universitaires : Centre m&eacute;dical universitaire<br />
/ Uni Mail / Sciences / SIP/ Battelle<br />
3) de prendre en compte les territoires environnants et les connexions biologiques, la diversit&eacute;<br />
g&eacute;n&eacute;tique et les relations entre les esp&egrave;ces<br />
Pour sensibiliser la communaut&eacute; universitaire (17&rsquo;271 &eacute;tudiant-e-s et 6&rsquo;620 collaborateurs-trices),<br />
ils proposent :<br />
1) Des ateliers DIY du Bioscope : construction et pose de nichoirs, bombes &agrave; graines, etc.<br />
2) Des appels &agrave; projets sur le d&eacute;veloppement durable et la biodiversit&eacute;, pour susciter et encourager<br />
des projets &eacute;manant des &eacute;tudiant.es et des collaborateur.rices<br />
3) Un programme annuel de sorties &laquo; nature &raquo; pour les collaborateurs et les &eacute;tudiants<br />
4) Des inventaires participatifs de la biodiversit&eacute; locale : partage de photos sur une plateforme d&eacute;di&eacute;e<br />
(possible en tout temps) + bioblitz (inventaire intensif pendant une courte p&eacute;riode) mettant en<br />
contact amateurs et experts naturalistes<br />
5) Une campagne d&rsquo;affichage interne communiquant positivement sur la biodiversit&eacute; r&eacute;gionale<br />
6) Un suivi des sites en image : pose de cam&eacute;ras (nichoirs), diaporamas suivant l&rsquo;&eacute;volution de sites,<br />
focus sur des esp&egrave;ces prioritaires</p>',
'indicator' => 'Nombre d’aménagements et de sites / Surface transformée - végétalisée
Nombre de participants / Nombre d’observations / Heures d’ateliers et sorties nature
Enquête sur l’attitude et les connaissances des étudiant-e-s et des collaborateur-trices',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => NULL,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:51:21',
'updated_at' => '2020-04-06 06:51:21',
),
90 => 
array (
'id' => 92,
'code' => '10.14',
'label' => 'Actions de promotion de la biodiversité au CFPNE',
'image' => NULL,
'description' => '<p>Avec plus de 130 ans d&rsquo;existence, l&rsquo;&eacute;cole d&rsquo;horticulture de Ch&acirc;telaine puis Ecole d&rsquo;horticulture de<br />
Lullier et enfin Centre de formation professionnelle de Lullier a, de tout temps, &eacute;t&eacute; un p&ocirc;le de formation<br />
reconnu et avant-gardiste. A l&rsquo;heure o&ugrave; le changement climatique et les atteintes &agrave; la biosph&egrave;re<br />
impactent les mentalit&eacute;s et que les citoyennes et citoyens, dont sont partie prenantes les professionnels<br />
des branches horticoles, se questionnent sur le devenir de notre environnement proche, il paraissait<br />
important que le CFPNE puisse participer de mani&egrave;re concr&egrave;te et visible &agrave; la r&eacute;alisation de propositions<br />
durables. Dispos&eacute;e au sein d&rsquo;un espace de 22 hectares, l&rsquo;&eacute;cole de Lullier peut, et doit, &ecirc;tre une<br />
vitrine de ce qui peut se faire dans le respect de la biodiversit&eacute;, tant &agrave; l&rsquo;usage du grand public qu&rsquo;&agrave;<br />
celui des professionnels. A ce titre le CFPNE a d&eacute;pos&eacute; un projet de travail de Bachelor aupr&egrave;s de la<br />
fili&egrave;re Gestion de la Nature d&rsquo;HEPIA intitul&eacute; &ldquo;Diagnostic des potentiels &eacute;cologiques du secteur Parc et<br />
Jardins de l&rsquo;Ecole d&rsquo;Horticulture, proposition de mesures favorables &agrave; la biodiversit&eacute; et d&eacute;veloppement<br />
de propositions d&rsquo;am&eacute;nagement&rdquo; et qui a &eacute;t&eacute; choisi par un des &eacute;l&egrave;ves de cette fili&egrave;re. Nul doute que<br />
les r&eacute;sultats de ce travail seront de nature &agrave; renforcer concr&egrave;tement notre ambition d&rsquo;&ecirc;tre la vitrine<br />
&eacute;voqu&eacute;e ci-dessus.<br />
1: Impl&eacute;mentation du bio parcellaire (f&eacute;d&eacute;ral) pour la culture mara&icirc;ch&egrave;re; 2: Lutte contre les insectes<br />
nuisibles &agrave; l&rsquo;aide d&rsquo;auxiliaires dans la serre de collection des plantes verte; 3: Mise en place de bandes<br />
en prairies fleuries pour le passage des tuyaux d&rsquo;irrigation parcellaires; 4: Installation d&rsquo;arbustes<br />
entre les parcelles de l&eacute;gumes; 5: D&eacute;veloppement de la biodiversit&eacute; (animale et v&eacute;g&eacute;tale) du site: 6:<br />
Gestion diff&eacute;renci&eacute;e des espaces herbeux du CFPNE; 7: Pose de nichoirs &agrave; hirondelles; 8: Cr&eacute;ation<br />
et gestion d&rsquo;un jardin potager en permaculture; 9: Construction d&rsquo;un mur en pierres s&egrave;ches comme<br />
abri de la faune; 10: Mur v&eacute;g&eacute;tal du b&acirc;timent de la station de lavage; 11: Semaine de la biodiversit&eacute;<br />
par les &eacute;l&egrave;ves du CFPNE au profit d&rsquo;&eacute;l&egrave;ves du CO; 12: Entretien des toitures v&eacute;g&eacute;talis&eacute;es du CFPNE;<br />
13: Sorties botaniques extrascolaires &eacute;l&egrave;ves-enseignants; 14: Verdissement des balcons de l&rsquo;internat;<br />
15: Suppression des herbicides en p&eacute;pini&egrave;re ornementale</p>',
'indicator' => 'Acceptation du dossier',
'R' => 1,
'A' => 0,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:54:48',
'updated_at' => '2020-04-06 06:54:48',
),
91 => 
array (
'id' => 93,
'code' => '10.15',
'label' => 'Promotion des “métiers verts” ainsi que les dimensions développement durable / Biodiversité présentes dans les métiers (en prenant en compte l’évolution des métiers et le Masterplan cleantech de la Confédération).',
'image' => NULL,
'description' => '<p>La capacit&eacute; d&rsquo;innovation et la comp&eacute;titivit&eacute; de l&rsquo;&eacute;conomie suisse ont fortement besoin de main-d&rsquo;&oelig;uvre<br />
qualifi&eacute;e. Cette condition de base s&rsquo;applique aussi au domaine des cleantechs promis &agrave; une croissance<br />
internationale sup&eacute;rieure &agrave; la moyenne . Les cleantechs regroupent toutes les technologies et tous<br />
les services et processus de fabrication qui contribuent &agrave; prot&eacute;ger et &agrave; pr&eacute;server les ressources et<br />
les syst&egrave;mes naturels.<br />
Les associations professionnelles et les entreprises sont conscientes dans leur grande majorit&eacute; de<br />
l&rsquo;importance des cleantechs pour l&rsquo;avenir &eacute;conomique. La majorit&eacute; des professions a en outre int&eacute;gr&eacute;<br />
des contenus relatifs aux dispositions environnementales et &agrave; la protection de l&rsquo;environnement en<br />
g&eacute;n&eacute;ral dans l&rsquo;entreprise (y compris la promotion et la protection de la biodiversit&eacute;)<br />
Objectifs:<br />
&bull; Organisation chaque ann&eacute;e d&rsquo;un Zoom &ldquo;m&eacute;tiers verts&rdquo; (et liens avec promotion/pr&eacute;servation<br />
biodiversit&eacute;)<br />
&bull; Elaboration d&rsquo;une liste des contributions des m&eacute;tiers aux ODD (y compris biodiversit&eacute;) lors des<br />
Zooms m&eacute;tiers ou lors de la Cit&eacute; des m&eacute;tiers (chaque 3 ans).<br />
&bull; Organisation, au sein des &eacute;tablissements du secondaire I, par le dispositif Go Apprentissage,<br />
d&rsquo;une pr&eacute;sentation des m&eacute;tiers verts (en collaboration avec les entreprises et les associations<br />
professionnelles des domaines concern&eacute;s)<br />
&bull; Partenariat presse sur les &ldquo;nouveaux m&eacute;tiers&rdquo; en mettant l&rsquo;accent sur les aspects li&eacute;s &agrave; l&rsquo;EDD (y<br />
inclus la biodiversit&eacute;) dans ces nouvelles professions.<br />
Public cible: Corps enseignant, directions d&rsquo;&eacute;tablissements, &eacute;l&egrave;ves, candidats &agrave; l&rsquo;apprentissage,<br />
parents, services du DIP concern&eacute;s, grand public.<br />
Partenaires: Organisations du monde du Travail pour la formation professionnelle (Ortras), entreprises<br />
formatrices, services de l&rsquo;Etat concern&eacute;s, associations, ONG, Hautes &eacute;coles, entreprises de l&rsquo;ESS<br />
(&eacute;conomie sociale et solidaire), communes.</p>',
'indicator' => '• Nombre de participant-e-s aux Zooms “métiers verts”.
• Nombre de fiches métiers mettant en évidence les dimensions DD/ biodiversité.
• Nombre d’élèves du secondaire I touchés par le dispositif Go Apprentissage sur les métiers verts.
• Nombre de points presse sur les (nouveaux) métiers incluant les aspects EDD/Biodiversité.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:56:11',
'updated_at' => '2020-04-06 06:56:11',
),
92 => 
array (
'id' => 94,
'code' => '10.16',
'label' => 'Renforcer les collaborations avec les Ortras 84 et entreprises formatrices pour promouvoir les questions liées au développement durable / biodiversité',
'image' => NULL,
'description' => '<p>La capacit&eacute; d&rsquo;innovation et la comp&eacute;titivit&eacute; de l&rsquo;&eacute;conomie suisse ont fortement besoin de main-d&rsquo;&oelig;uvre<br />
qualifi&eacute;e. Cette condition de base s&rsquo;applique aussi au domaine des cleantechs promis &agrave; une croissance<br />
internationale sup&eacute;rieure &agrave; la moyenne . Les cleantechs regroupent toutes les technologies et tous<br />
les services et processus de fabrication qui contribuent &agrave; prot&eacute;ger et &agrave; pr&eacute;server les ressources et<br />
les syst&egrave;mes naturels.<br />
Les associations professionnelles et les entreprises sont conscientes dans leur grande majorit&eacute; de<br />
l&rsquo;importance des cleantechs pour l&rsquo;avenir &eacute;conomique. La majorit&eacute; des professions a en outre int&eacute;gr&eacute;<br />
des contenus relatifs aux dispositions environnementales et &agrave; la protection de l&rsquo;environnement en<br />
g&eacute;n&eacute;ral dans l&rsquo;entreprise (y compris la promotion et la protection de la biodiversit&eacute;).<br />
Objectifs:<br />
&bull; Elaborer une liste des bonnes pratiques EDD / biodiversit&eacute; au sein des Ortras et des entreprises<br />
formatrices (transmettre ces particularit&eacute;s dans les prestations d&rsquo;information qu&rsquo;elles assurent aupr&egrave;s<br />
d&rsquo;un large public).<br />
&bull; V&eacute;rifier si les prescriptions en lien avec l&rsquo;EDD / biodiversit&eacute; sont abord&eacute;es lors de l&rsquo;apprentissage<br />
au sein des entreprises (sensibiliser les commissaires d&rsquo;apprentissage).<br />
&bull; Renforcer les collaborations avec les Ortras pour promouvoir l&rsquo;EDD / biodiversit&eacute; (valoriser les<br />
bonnes pratiques, int&eacute;grer cet objectif dans le contr&ocirc;le qualit&eacute; des &ldquo;cours interentreprises&rdquo; organis&eacute;s<br />
par les associations professionnelles ou lors des examens de fin d&rsquo;apprentissage, ou encore dans<br />
les crit&egrave;res d&rsquo;attribution du Prix de la meilleure entreprise formatrice).<br />
Public cible: Corps enseignant, directions d&rsquo;&eacute;tablissements, &eacute;l&egrave;ves, candidats &agrave; l&rsquo;apprentissage,<br />
commissaires d&rsquo;apprentissage, parents, services du DIP concern&eacute;s, Ortras, entreprises formatrices.<br />
Partenaires: Ortras, entreprises formatrices, services de l&rsquo;Etat concern&eacute;s, associations, ONG, Hautes<br />
&eacute;coles, entreprises de l&rsquo;ESS (&eacute;conomie sociale et solidaire), communes.</p>',
'indicator' => 'Nombre de bonnes pratiques des Ortras, des entreprises formatrices et Centres de formation
professionnelle.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 06:59:42',
'updated_at' => '2020-04-06 06:59:42',
),
93 => 
array (
'id' => 95,
'code' => '10.17',
'label' => 'Promouvoir l’éducation en vue d’un développement durable (EDD) / Biodiversité notamment via les fiches “cleantech” dans les contenus de la formation “métier” et culture générale ainsi que lors des cours interentreprises',
'image' => NULL,
'description' => '<p>La capacit&eacute; d&rsquo;innovation et la comp&eacute;titivit&eacute; de l&rsquo;&eacute;conomie suisse ont fortement besoin de main-d&rsquo;&oelig;uvre<br />
qualifi&eacute;e. Cette condition de base s&rsquo;applique aussi au domaine des cleantechs promis &agrave; une croissance<br />
internationale sup&eacute;rieure &agrave; la moyenne . Les cleantechs regroupent toutes les technologies et tous<br />
les services et processus de fabrication qui contribuent &agrave; prot&eacute;ger et &agrave; pr&eacute;server les ressources et<br />
les syst&egrave;mes naturels.<br />
Les associations professionnelles et les entreprises sont conscientes dans leur grande majorit&eacute; de<br />
l&rsquo;importance des cleantechs pour l&rsquo;avenir &eacute;conomique. La majorit&eacute; des professions a en outre int&eacute;gr&eacute;<br />
des contenus relatifs aux dispositions environnementales et &agrave; la protection de l&rsquo;environnement en<br />
g&eacute;n&eacute;ral dans l&rsquo;entreprise (y compris la promotion et la protection de la biodiversit&eacute;).<br />
Objectifs:<br />
&bull; Renforcer l&rsquo;enseignement EDD / Biodiversit&eacute; (cours professionnel et culture g&eacute;n&eacute;rale; cours<br />
interentreprises)<br />
&bull; Promouvoir l&rsquo;EDD / Biodiversit&eacute; notamment via fiches &laquo; cleantech &raquo;<br />
Public cible: El&egrave;ves, corps enseignant, directions d&rsquo;&eacute;tablissements.<br />
Partenaires: Ortras, entreprises formatrices, services de l&rsquo;Etat concern&eacute;s, associations, ONG, Hautes<br />
&eacute;coles, entreprises de l&rsquo;ESS (&eacute;conomie sociale et solidaire), communes.</p>

<p>&nbsp;</p>',
'indicator' => NULL,
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => NULL,
'created_at' => '2020-04-06 07:01:42',
'updated_at' => '2020-04-06 07:01:42',
),
94 => 
array (
'id' => 96,
'code' => '10.18',
'label' => 'Renforcement du développement durable et de la biodiversité comme élément transversal dans les plans d’études (plan d’études PEc de l’Ecole de culture générale)',
'image' => NULL,
'description' => '<p>Les comp&eacute;tences et les objectifs de r&eacute;f&eacute;rence pour chaque discipline sont d&eacute;taill&eacute;s dans le PEC<br />
ECG de la CDIP. La nouvelle conception du PEC de la CDIP impose la r&eacute;&eacute;criture du plan d&rsquo;&eacute;tudes<br />
genevois (PEc) dans toutes les disciplines quelles que soient les modifications de dotation de<br />
p&eacute;riodes, de contenus et les nouveaux cours.<br />
L&rsquo;une des rubriques des objectifs du PEc porte sp&eacute;cifiquement sur le d&eacute;veloppement durable<br />
(&ldquo;Aspects en lien avec le d&eacute;veloppement durable et la biodiversit&eacute;&rdquo;) et concerne des contenus ou des<br />
th&eacute;matiques pouvant &ecirc;tre int&eacute;gr&eacute;es dans diverses disciplines. Il intervient en tant que comp&eacute;tence<br />
transversale dans le PEc.<br />
Au travers des diff&eacute;rents domaines du PEc les &eacute;l&egrave;ves devront &ecirc;tre sp&eacute;cifiquement amen&eacute;s &agrave; :<br />
- renforcer la curiosit&eacute; face aux ph&eacute;nom&egrave;nes de notre environnement naturel<br />
- d&eacute;velopper la capacit&eacute; d&rsquo;observation<br />
- r&eacute;fl&eacute;chir &agrave; la probl&eacute;matique du d&eacute;veloppement durable et chercher des solutions<br />
- prendre conscience de leur propre corps, comprendre les impacts qu&rsquo;ils exercent sur leur<br />
environnement, ainsi que les impacts que l&rsquo;environnement exerce sur eux<br />
- savoir comment s&rsquo;engager en faveur de la pr&eacute;servation de l&rsquo;environnement et savoir comment<br />
se comporter de mani&egrave;re responsable sur les plans personnels, politique et &eacute;conomique<br />
- constater l&rsquo;intervention de l&rsquo;homme par des processus chimiques dans le cycle naturel et biologique<br />
de divers &eacute;l&eacute;ments et &agrave; prendre connaissance des modifications que cette intervention en tra&icirc;ne<br />
- r&eacute;fl&eacute;chir &agrave; la probl&eacute;matique du d&eacute;veloppement durable et chercher des solutions<br />
- d&eacute;crire les probl&egrave;mes environnementaux et leurs causes, d&rsquo;identifier les approches ad&eacute;quates<br />
pour les r&eacute;soudre et d&rsquo;agir dans le respect de l&rsquo;espace naturel et social<br />
- &ecirc;tre capables de d&eacute;crire les ph&eacute;nom&egrave;nes, les probl&eacute;matiques et les processus &eacute;conomiques<br />
et juridiques en mettant en &eacute;vidence les conflits d&rsquo;objectifs ainsi que les interactions avec<br />
l&rsquo;environnement naturel, technologique, &eacute;conomique, culturel et social. Ils saisissent les aspects<br />
&eacute;conomiques du fonctionnement de la soci&eacute;t&eacute; et sont capables de d&eacute;crire les cadres l&eacute;gal et<br />
&eacute;conomique applicables.<br />
Des activit&eacute;s ou des manifestations trans- ou interdisciplinaires ponctuelles pourront avoir<br />
&eacute;galement lieu.</p>',
'indicator' => 'Au travers des contenus du PEc ainsi que des évaluations qui seront faites dans les différentes
branches.',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-06 07:04:19',
'updated_at' => '2020-04-06 07:04:19',
),
95 => 
array (
'id' => 97,
'code' => '10.19',
'label' => 'Développer des formations continues ciblées sur la gestion des milieux naturels',
'image' => NULL,
'description' => '<p>La gestion &eacute;cologique de milieux naturels et semi-naturels n&eacute;cessite des comp&eacute;tences sp&eacute;cifiques<br />
et pointues, que la majorit&eacute; des professionnels actifs dans le domaine du paysagisme ne ma&icirc;trisent<br />
souvent que partiellement.<br />
Actuellement, &agrave; l&rsquo;exception de la gestion des esp&egrave;ces exotiques envahissantes, il n&rsquo;existe aucune<br />
offre de formation continue pour les professionnels en exercice. Une lacune d&rsquo;autant plus critique &agrave;<br />
l&rsquo;heure o&ugrave; la population et les collectivit&eacute;s publiques se pr&eacute;occupent pour la biodiversit&eacute;.<br />
Cette action pr&eacute;voit de mettre sur pied un groupe de travail charg&eacute; d&rsquo;identifier et pr&eacute;ciser les besoins<br />
et attentes de chacun (OCAN, HEPIA, CFPNE, professionnels). Puis, de d&eacute;finir les th&egrave;mes et la<br />
forme des cours, de d&eacute;velopper leur contenu, et d&rsquo;offrir de nouvelles formations continues. Leurs<br />
th&egrave;mes potentiels sont nombreux : gestion diff&eacute;renci&eacute;e de surfaces herbac&eacute;es, cr&eacute;ation et entretien de<br />
lisi&egrave;res &eacute;tag&eacute;es, am&eacute;nagement de microstructures, cr&eacute;ation de biotopes aquatiques, reconnaissance<br />
d&rsquo;esp&egrave;ces d&rsquo;int&eacute;r&ecirc;t, etc.<br />
D&rsquo;autres sp&eacute;cialistes pourront &ecirc;tre int&eacute;gr&eacute;s selon les sujets : le centre de comp&eacute;tence en sylviculture<br />
de Lyss, l&rsquo;HAFL, le centre de formation foresti&egrave;re du Mont-sur-Lausanne.</p>',
'indicator' => 'Nombre d’étudiants / professionnels ayant suivi l’une des formations continues mises en place',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-06 07:06:30',
'updated_at' => '2020-04-06 07:06:30',
),
96 => 
array (
'id' => 98,
'code' => '10.20',
'label' => 'Mettre en place un programme de formations continues pour l’animation nature',
'image' => NULL,
'description' => '<p>Offrir des modules de formations &agrave; l&rsquo;intention des acteurs qui effectuent des animations dans les<br />
sites prot&eacute;g&eacute;s ou/et les sites &agrave; enjeux du canton.<br />
L&rsquo;objectif de cette formation est de transmettre des connaissances approfondies sur les milieux<br />
prot&eacute;g&eacute;s du canton afin que les visites de ces sites aient un impact minimum sur la flore et la faune<br />
de ces milieux et que les messages transmis aux visiteurs soient pertinents, complets et coh&eacute;rents<br />
avec les enjeux des sites. Elle permet de favoriser un comportement responsable des personnes<br />
fr&eacute;quentant ces sites et induit une cohabitation harmonieuse entre la nature et les activit&eacute;s de loisirs.<br />
Cette formation aborde notamment la th&eacute;matique de la l&eacute;gislation, de la faune et de la flore indig&egrave;ne,<br />
des plantes n&eacute;ophytes, de la gestion des sites naturels, des services &eacute;cosyst&eacute;miques et de la<br />
transmission de contenus aux diff&eacute;rents publics. Les publics cibles sont les adultes, particuli&egrave;rement<br />
les animateurs nature des diverses associations et de l&rsquo;Etat de Gen&egrave;ve, ainsi que les enseignants<br />
et professeurs.<br />
Cette formation pourrait &ecirc;tre certifi&eacute;e par une accr&eacute;ditation officielle sous forme d&rsquo;un CAS ou prendre<br />
la forme d&rsquo;une formation plus l&eacute;g&egrave;re sans certification officielle</p>',
'indicator' => 'Le nombre de personnes inscrites à cette formation',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => NULL,
'created_at' => '2020-04-06 07:08:50',
'updated_at' => '2020-04-06 07:08:50',
),
97 => 
array (
'id' => 99,
'code' => '10.21',
'label' => 'Pérenniser et assurer la gratuité d’accès au programme d’animations de l’ASL dans les classes primaires',
'image' => NULL,
'description' => '<p>L&rsquo;Association pour la sauvegarde du L&eacute;man (ASL) propose depuis 2016 des animations en lien avec<br />
le Programme d&rsquo;&eacute;tudes romand (PER) pour les classes primaires.<br />
En effet, le L&eacute;man, est un important r&eacute;servoir d&rsquo;eau potable, un milieu naturel riche en faune et en flore,<br />
un lieu privil&eacute;gi&eacute; pour la d&eacute;couverte de la nature et l&rsquo;apprentissage de th&egrave;mes li&eacute;s au d&eacute;veloppement<br />
durable (contraintes li&eacute;es aux usages de l&rsquo;eau, pression sur la biodiversit&eacute;, enjeux environnementaux,<br />
sociaux et &eacute;conomiques).<br />
L&rsquo;objectif est de proposer des demi-journ&eacute;es d&rsquo;animations &agrave; 90 classes primaires par ann&eacute;e dans le<br />
canton de Gen&egrave;ve.</p>',
'indicator' => NULL,
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 10,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:10:09',
'updated_at' => '2020-04-06 07:10:09',
),
98 => 
array (
'id' => 100,
'code' => '11.1',
'label' => 'Analyser l’architecture du système d’information de l’OCAN',
'image' => NULL,
'description' => '<p>L&rsquo;objectif de cette action est d&rsquo;inventorier pr&eacute;cis&eacute;ment l&rsquo;ensemble des donn&eacute;es g&eacute;n&eacute;r&eacute;es par l&rsquo;OCAN<br />
et les diff&eacute;rents flux avec les autres syst&egrave;mes d&rsquo;information (SI). Cette analyse devra &ecirc;tre renouvel&eacute;e<br />
et mise &agrave; jour r&eacute;guli&egrave;rement afin d&rsquo;atteindre une version id&eacute;ale du SI Agriculture et Nature.<br />
Par exemple, il s&rsquo;agira d&rsquo;optimiser l&rsquo;application GESNAT, qui existe depuis 2012. Il s&rsquo;agit d&rsquo;une<br />
extension du programme ArcGIS qui permet de g&eacute;or&eacute;f&eacute;rencer et renseigner les travaux r&eacute;alis&eacute;s au<br />
sein des milieux naturels (types d&rsquo;intervention, dates, entreprises, co&ucirc;ts, etc.). Elle permet de conserver<br />
l&rsquo;historique d&rsquo;un site et de planifier les interventions pour les ann&eacute;es suivantes, et ainsi de conserver<br />
une vision globale de la gestion des sites prot&eacute;g&eacute;s. Actuellement, l&rsquo;application n&rsquo;est pas optimale et<br />
pourrait &ecirc;tre am&eacute;lior&eacute;e. Pour un gain de temps dans la planification des travaux ou la pr&eacute;paration de<br />
bilans annuels, il conviendrait notamment de faciliter la saisie et d&rsquo;optimiser les r&eacute;sultats des requ&ecirc;tes,<br />
et de faciliter globalement son usage. L&rsquo;application GESNAT devrait aussi permettre de communiquer<br />
au grand public les informations relatives aux travaux pr&eacute;vus sur les sites prot&eacute;g&eacute;s, ce qui renforcerait<br />
la communication d&eacute;j&agrave; en place sur les diff&eacute;rents sites.<br />
Actions/Etapes:<br />
1. Inventorier les applications (ISAAC)<br />
2. Lancer une &eacute;tude d&rsquo;architecture de notre SI avec la Direction de l&rsquo;organisation des syst&egrave;mes<br />
d&rsquo;information. Identifier les flux vers les autres SI.<br />
3. Identifier les donn&eacute;es manquantes dans les diff&eacute;rentes th&eacute;matiques et les besoins en applications<br />
(comme GESNAT).<br />
4. Relier les besoins dans le plan directeur SI et s&rsquo;inscrire dans un SI transversal pour le D&eacute;partement<br />
du territoire.<br />
5. Mettre en &oelig;uvre les projets informatiques qui r&eacute;pondent aux besoins identifi&eacute;s.<br />
6. Mise &agrave; jour de l&rsquo;analyse d&rsquo;architecture.</p>',
'indicator' => 'Nombre de besoins décrits par l’étude d’architecture. Projets informatiques réalisés.',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 11,
'comment_id' => NULL,
'state_id' => 1,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:13:35',
'updated_at' => '2020-04-06 07:13:35',
),
99 => 
array (
'id' => 101,
'code' => '11.2',
'label' => 'Renforcer la saisie et le partage de données',
'image' => NULL,
'description' => '<p>De nombreux naturalistes sp&eacute;cialis&eacute;s dans l&rsquo;&eacute;tude d&rsquo;un groupe d&rsquo;esp&egrave;ces particulier r&eacute;alisent des<br />
observations de la faune et la flore de notre canton. Avec la carte des milieux naturels, ces nombreuses<br />
observations, qui sont souvent g&eacute;or&eacute;f&eacute;renc&eacute;es, forment la base n&eacute;cessaire pour l&rsquo;analyse de notre<br />
biodiversit&eacute;. Souvent centralis&eacute;es au sein d&rsquo;associations ou de fondations, ces observations sont<br />
envoy&eacute;es aux bases de donn&eacute;es nationales, mais elles ne sont pas toujours transmises aux services<br />
de la conservation de la nature au niveau cantonal, ni au niveau du Grand Gen&egrave;ve.<br />
Actions/Etapes:<br />
1. Organiser la coordination via une groupe de personnes responsables de l&rsquo;action. Syst&eacute;matiser la<br />
transmission des observations vers les base de donn&eacute;es nationales au travers d&rsquo;une plateforme<br />
commune, telle que FauneGen&egrave;ve ou le Syst&egrave;me d&rsquo;Informations du Patrimoine Vert.<br />
2. Etablir des flux automatis&eacute;s entre les base de donn&eacute;es nationales et le SITG.<br />
3. Etablir des conventions d&rsquo;&eacute;change de donn&eacute;es avec les r&eacute;gions fran&ccedil;aises et la r&eacute;gion de Nyon.<br />
4. Stimuler la participation citoyenne au travers des associations et de projets innovants pour augmenter<br />
les connaissances, notamment sur la flore et la faune communes (voir &eacute;galement CA8).<br />
5. Utiliser ces projets de recensement comme vecteurs pour la sensibilisation aux enjeux de la<br />
biodiversit&eacute;, notamment en milieu scolaire (source d&rsquo;informations pour les cours et p&eacute;dagogie<br />
active, voir &eacute;galement CA 9).</p>',
'indicator' => '1. Nombre de données saisies par mois ou par année, qui transitent à travers le flux de données
nationales.
2. Pourcentage de données précises par secteur, taxons, etc.',
'R' => 0,
'A' => 0,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 11,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 2,
'created_at' => '2020-04-06 07:14:44',
'updated_at' => '2020-04-06 07:14:44',
),
100 => 
array (
'id' => 102,
'code' => '11.3',
'label' => 'Etendre et maintenir à jour la cartographie des milieux naturels',
'image' => NULL,
'description' => '<p>La carte des milieux est une donn&eacute;e issue du consortium Syst&egrave;me d&rsquo;information du patrimoine<br />
vert (SIPV). La carte des milieux couvre l&rsquo;ensemble du canton de Gen&egrave;ve et distingue plus d&rsquo;une<br />
centaine de cat&eacute;gories de milieux naturels et b&acirc;tis. Elle sert de base de travail pour la d&eacute;finition de<br />
l&rsquo;infrastructure &eacute;cologique sur le Canton. Elle est r&eacute;guli&egrave;rement mise &agrave; jour et consolid&eacute;e par des<br />
relev&eacute;s de terrain, et ses donn&eacute;es sont g&eacute;r&eacute;es par la Direction de l&rsquo;information du territoire. Cette<br />
carte poss&egrave;de l&rsquo;avantage d&rsquo;int&eacute;grer les donn&eacute;es cadastrales sur la partie b&acirc;tie.<br />
Actions/Etapes:<br />
1. Poursuivre la mise &agrave; jour de la carte des milieux au niveau cantonal et du Grand Gen&egrave;ve.<br />
2. Encourager les retours des municipalit&eacute;s et des citoyens.<br />
3. D&eacute;velopper un outil de mise &agrave; jour th&eacute;matique et/ou g&eacute;om&eacute;trique mobile.<br />
4. Elargir la cartographie &agrave; l&rsquo;ensemble du Grand Gen&egrave;ve.</p>',
'indicator' => '1. Pourcentage de la surface mise à jour annuellement
2. Nombre de polygones modifiés sur le total
3. Nombre de retours pour améliorer la carte
Nota : Les indicateurs MonGE pour la carte des Milieux Naturels sont les suivants.
Pourcentage des corrections des alertes DIT traitées
Pourcentage des reports terrain traités
Pourcentage des SPB à jour (selon données fournies)
Pourcentage des plans de gestion intégrés (selon données fournies)
Mise à jour et diffusion via serveur métier/SITG effectuées.',
'R' => 0,
'A' => 0,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 11,
'comment_id' => NULL,
'state_id' => 1,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:18:00',
'updated_at' => '2020-04-06 07:18:00',
),
101 => 
array (
'id' => 103,
'code' => '11.4',
'label' => 'Synthétiser l’évolution de la biodiversité',
'image' => NULL,
'description' => '<p>Le canton de Gen&egrave;ve poss&egrave;de un vaste panel de donn&eacute;es g&eacute;ographiques num&eacute;ris&eacute;es. Ces donn&eacute;es<br />
sont en constante &eacute;volution, car elles refl&egrave;tent les changements sur le territoire. Des indicateurs<br />
synth&eacute;tiques de l&rsquo;&eacute;tat de la biodiversit&eacute; peuvent &ecirc;tre group&eacute;s sous forme de tableaux de bord (ou<br />
dashboards) qui fournissent une vue d&rsquo;ensemble de la situation et de l&rsquo;&eacute;volution de la biodiversit&eacute;,<br />
afin de d&eacute;ployer les actions ad&eacute;quates. Des tableaux de bord de ce type sont en cours d&rsquo;&eacute;laboration<br />
pour la flore sauvage, les bryophytes, les lichens, les arbres isol&eacute;s, les milieux naturels, les services<br />
&eacute;cosyst&egrave;miques et l&rsquo;infrastructure &eacute;cologique. Les responsables de cette action donneront une<br />
coh&eacute;rence &agrave; cet ensemble et s&eacute;lectionneront des indicateurs pour suivre l&rsquo;&eacute;volution de la biodiversit&eacute;<br />
&agrave; l&rsquo;horizon 2030 (en coh&eacute;rence avec la vision de la SBG2030). Les autres indicateurs &ndash; pour le suivi<br />
de la SBG2030 et du Plan Biodiversit&eacute; 2020-2023 &ndash; sont d&eacute;crits dans l&rsquo;action 12.9.<br />
Actions/Etapes:<br />
1. Mise en place des tableaux de bords et indicateurs<br />
2. Mise &agrave; jour en continu et maintenance</p>',
'indicator' => 'Fréquentation des sites web présentant ces tableaux de bord',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 11,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:19:51',
'updated_at' => '2020-04-06 07:19:51',
),
102 => 
array (
'id' => 104,
'code' => '11.5',
'label' => 'Valoriser les données sur le vivant',
'image' => NULL,
'description' => '<p>Le SITG promeut les donn&eacute;es brutes ainsi que leur diffusion (open access) &agrave; l&rsquo;ensemble des<br />
partenaires int&eacute;ress&eacute;s. Des outils de mise en forme de ces donn&eacute;es brutes se d&eacute;veloppent, afin de<br />
les rendre accessibles &agrave; un large public. L&rsquo;information peut alors se d&eacute;cliner sous forme de sc&eacute;nario<br />
narratif (voir par exemple la StoryMap Flore en ville).<br />
Actions/Etapes:<br />
1. Le Service de la communication (DT) projette la mise en place d&rsquo;un site web Gen&egrave;ve Nature, con&ccedil;u<br />
comme une porte d&rsquo;entr&eacute;e qui rassemble, valorise et compl&egrave;te les sites web existants. Ce site web<br />
devrait aussi servir de base de donn&eacute;es des connaissances sur la biodiversit&eacute; du Grand Gen&egrave;ve.<br />
Cette action vise &agrave; soutenir le d&eacute;veloppement du module cartographique, les autres volets du site<br />
web Gen&egrave;ve Nature &eacute;tant int&eacute;gr&eacute;s dans l&rsquo;action 8.12.<br />
2. Une meilleure int&eacute;gration des donn&eacute;es sur la biodiversit&eacute; dans les plateformes existantes telles<br />
que G&eacute;oAgglo, G&eacute;oFab, site web du SIPV, 1001sitesnatureenville sera &eacute;galement r&eacute;alis&eacute;e.</p>',
'indicator' => 'Fréquentation du site web Genève Nature et d’autres sites présentant des données sur la biodiversité.',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 11,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:21:37',
'updated_at' => '2020-04-06 07:21:37',
),
103 => 
array (
'id' => 105,
'code' => '11.6',
'label' => 'Développer un outil de gestion des suivis de chantier et des compensations',
'image' => NULL,
'description' => '<p>L&rsquo;OCAN d&eacute;livre plus de 2000 pr&eacute;avis par an dans le cadre notamment des autorisations de construire.<br />
Des conditions sont mises &agrave; ces pr&eacute;avis pour le maintien ou le remplacement des valeurs naturelles<br />
pendant et apr&egrave;s le chantier. A l&rsquo;heure actuelle, l&rsquo;OCAN ne dispose pas d&rsquo;outil de suivi des conditions<br />
mises au pr&eacute;avis, ni des remplacements ou des compensations exig&eacute;es. Il est donc indispensable<br />
de cr&eacute;er un outil de suivi temporel des chantiers, d&egrave;s leur ouverture et jusqu&rsquo;&agrave; r&eacute;ception finale (ie<br />
v&eacute;rification 2 ans apr&egrave;s la plantation) des &eacute;l&eacute;ments naturels. Ce nouvel outil s&rsquo;inscrit aussi dans le<br />
projet de d&eacute;mat&eacute;rialisation des autorisations de construire (AC-d&eacute;mat).<br />
Actions/Etapes:<br />
1. Cr&eacute;ation de l&rsquo;outil de suivi<br />
2. Mettre en production et maintenir l&rsquo;outil</p>',
'indicator' => '1. Surface de compensation
2. Nombre d’arbre plantés',
'R' => 0,
'A' => 0,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 11,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:22:50',
'updated_at' => '2020-04-06 07:22:50',
),
104 => 
array (
'id' => 106,
'code' => '11.7',
'label' => 'Intégrer la biodiversité dans les nouvelles technologies',
'image' => NULL,
'description' => '<p>Les exemples de d&eacute;marches innovantes sont nombreuses sur le canton et il est important que la<br />
biodiversit&eacute; en fasse partie. Parmi ces exemples, la d&eacute;marche &ldquo;Smart Geneva&rdquo; (d&eacute;crite dans la Feuille<br />
de route du DT pubil&eacute;e en mai 2019) et les conventions de collaboration entre l&rsquo;Etat de Gen&egrave;ve et<br />
les hautes &eacute;coles (Universit&eacute; de Gen&egrave;ve et HEPIA). Ces conventions incluent l&rsquo;aide &agrave; la d&eacute;cision<br />
strat&eacute;gique et politique en mati&egrave;re environnementale, qui sera fournie par le r&eacute;seau &ldquo;GE-EN-VIE&rdquo;.<br />
Ce r&eacute;seau pr&eacute;voit la mise en place de trois &eacute;l&eacute;ments:<br />
- Un Observatoire, pour produire de nouvelles connaissances et mettre en relation les besoins des<br />
politiques publiques avec les comp&eacute;tences de recherche des hautes &eacute;coles genevoises.<br />
- Un Laboratoire, pour exp&eacute;rimenter, mener des exp&eacute;riences innovantes et mettre en exergue des<br />
actions pilotes ;<br />
- Une Plateforme, pour am&eacute;liorer le partage d&rsquo;informations et la communication, notamment &agrave; propos<br />
des actions d&eacute;ploy&eacute;es par le DT et les hautes &eacute;coles dans le domaine environnemental.<br />
(Nota : Le volet biodiversit&eacute; est trait&eacute; par GE-21, un r&eacute;seau d&rsquo;experts provenant du milieu acad&eacute;mique<br />
et de l&rsquo;administration publique).<br />
Par ailleurs, le canton s&rsquo;inscrit r&eacute;solument dans l&rsquo;&eacute;volution num&eacute;rique, notamment au travers de<br />
projets innovants tels que le BIM ; une mod&eacute;lisation 3D d&rsquo;un projet de b&acirc;timent et de son sous-sol,<br />
ainsi que de sa r&eacute;alisation. Le BIM est un mod&egrave;le dynamique mis &agrave; jour pendant toute la dur&eacute;e de<br />
vie du b&acirc;timent/ouvrage.<br />
Le pas vers la num&eacute;risation se fait &eacute;galement au niveau de l&rsquo;administration publique et de<br />
l&rsquo;am&eacute;nagement du territoire via notamment la plateforme du r&eacute;f&eacute;rentiel des projets urbains qui<br />
permettra aux bureaux d&rsquo;&eacute;tude d&rsquo;extraire des donn&eacute;es en format num&eacute;rique, puis de les r&eacute;importer<br />
avec un contr&ocirc;le de qualit&eacute; automatique. Dans le site cartographique du SITG de l&rsquo;am&eacute;nagement, les<br />
donn&eacute;es proviennent actuellement de Synthurba et sont saisies &agrave; la main. A la mise en production<br />
de la plateforme du r&eacute;f&eacute;rentiel urbain, cette mise &agrave; jour se fera automatiquement et quotidiennement.<br />
Ces donn&eacute;es concernent des projets existants et termin&eacute;s mais &eacute;galement des projets en cours et &agrave;<br />
venir, les projets seront suivis de leur &eacute;laboration &agrave; leur fin. Les p&eacute;rim&egrave;tres couverts sont ceux des<br />
PLQ et les th&eacute;matiques trait&eacute;es sont l&rsquo;urbanisme, l&rsquo;environnement et la mobilit&eacute;. Des indicateurs<br />
seront calcul&eacute;s &agrave; partir des donn&eacute;es du r&eacute;f&eacute;rentiel. Le lien de ce projet avec l&rsquo;action 1.3 est notable<br />
pour la partie concernant les PLQ.</p>',
'indicator' => 'Mise en place de l’Observatoire GE-EN-VIE.
Nombre de projets innovants en lien avec la biodiversité',
'R' => 0,
'A' => 1,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 11,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:24:08',
'updated_at' => '2020-04-06 07:24:08',
),
105 => 
array (
'id' => 107,
'code' => '12.1',
'label' => 'Soutenir les communes',
'image' => NULL,
'description' => '<p>Les communes genevoises participent d&eacute;j&agrave; &agrave; la pr&eacute;servation de la biodiversit&eacute; par le biais d&rsquo;actions<br />
locales ; il s&rsquo;agit d&eacute;sormais de valoriser ce qui est fait, d&rsquo;accompagner la mise en &oelig;uvre de la strat&eacute;gie<br />
biodiversit&eacute; et ses actions et de faciliter les synergies, notamment &agrave; travers les actions suivantes :<br />
1. Encourager la nomination d&rsquo;un r&eacute;f&eacute;rent biodiversit&eacute; dans les communes (ou regroupement de<br />
communes), comme interlocuteur privil&eacute;gi&eacute; pour organiser et coordonner les actions communales.<br />
2. Accompagner les communes pour d&eacute;ployer les 3 mesures prioritaires identifi&eacute;es conjointement dans<br />
le cadre de l&rsquo;atelier du 23 mai 2019 (voir point 6) :<br />
a) Renforcer la biodiversit&eacute; au niveau communal pour une meilleure r&eacute;silience face aux changements<br />
climatiques ;<br />
b) Promouvoir la &laquo; trame noire &raquo; pour cr&eacute;er des corridors d&rsquo;obscurit&eacute; n&eacute;cessaires au d&eacute;placement<br />
des esp&egrave;ces ;<br />
c) Sensibiliser la population pour valoriser la biodiversit&eacute; et partager ses bienfaits face aux<br />
changements climatiques.<br />
3. Soutenir les communes pour l&rsquo;&eacute;laboration de leur plan d&rsquo;actions biodiversit&eacute; propre pr&eacute;cisant leurs<br />
engagements dans leur plan directeur. Ce dernier sera bas&eacute; sur le plan cantonal (PB1). Il pourra<br />
d&eacute;cliner une &agrave; deux actions sp&eacute;cifique(s) &agrave; la commune par champs d&rsquo;application et/ou faire un renvoi<br />
au PB1 pour les actions transversales (cf. point 2 ci-dessus).<br />
4. Soutenir le Service cantonal du d&eacute;veloppement durable dans la mise en &oelig;uvre du Plan d&rsquo;actions<br />
d&eacute;veloppement durable 2019-2023 (collaboration avec les communes) qui pr&eacute;voit de : 1) Favoriser<br />
l&rsquo;impl&eacute;mentation de l&rsquo;Agenda 2030 au niveau communal et veiller &agrave; la coh&eacute;rence des d&eacute;marches<br />
entre les diff&eacute;rents &eacute;chelons (Conf&eacute;d&eacute;ration, canton, communes) ; 2) Fournir aux communes des<br />
outils et informations pratiques pour faciliter la mise en &oelig;uvre d&rsquo;une d&eacute;marche de d&eacute;veloppement<br />
durable ; 3) Favoriser l&rsquo;&eacute;change et le partage de bonnes pratiques.<br />
5. Mettre &agrave; disposition des communes un outil cartographique sur le site GE-21, pour mieux concilier<br />
social, environnement et &eacute;conomie lors de la r&eacute;vision de leur plan directeur communal.<br />
6. Favoriser la coordination Etat/Communes pour promouvoir la mise en &oelig;uvre des bonnes pratiques, par<br />
le biais de rencontres et d&rsquo;ateliers organis&eacute;s au moins deux fois par an. Un premier atelier th&eacute;matique<br />
&laquo; Promotion de la biodiversit&eacute; dans les communes genevoises pour s&rsquo;adapter aux changements<br />
climatiques &raquo; s&rsquo;est tenu le 23 mai 2019 en partenariat avec le Service cantonal du d&eacute;veloppement<br />
durable.<br />
7. Relayer l&rsquo;action &ldquo;Dehors &agrave; petits pas!&rdquo; mise en place par le WWF Gen&egrave;ve et SILVIVA &agrave; la rentr&eacute;e<br />
2019-2020. Le but de ce projet est d&rsquo;offrir aux structures d&rsquo;accueil de la petite enfance (cr&egrave;ches) des<br />
possibilit&eacute;s pour sortir davantage avec les enfants dans un environnement naturel proche et de donner<br />
aux &eacute;ducateurs/trices les outils pour pouvoir sortir r&eacute;guli&egrave;rement avec leurs groupes d&rsquo;enfants.</p>',
'indicator' => 'Bilan des actions communales',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:26:20',
'updated_at' => '2020-04-06 07:26:20',
),
106 => 
array (
'id' => 108,
'code' => '12.2',
'label' => 'Protéger la biodiversité pour préserver notre santé',
'image' => NULL,
'description' => '<p>Parmi les facteurs d&eacute;terminant l&rsquo;&eacute;tat de sant&eacute; de la population, l&rsquo;environnement et les conditions<br />
d&rsquo;habitat jouent un r&ocirc;le plus important que le syst&egrave;me de soins.<br />
Partout dans le monde, de plus en plus de m&eacute;decins prescrivent comme traitement un s&eacute;jour dans la<br />
nature pour toutes sortes de maladies, aussi bien physiques que mentales. &Ecirc;tre &agrave; l&rsquo;ext&eacute;rieur procure<br />
d&rsquo;innombrables bienfaits &ndash; par exemple la r&eacute;duction des hormones responsables du stress et de<br />
l&rsquo;inflammation &ndash; et cela sans aucun effet secondaire. Un s&eacute;jour dans la nature active notre syst&egrave;me<br />
parasympathique, nous plongeant ainsi dans un &eacute;tat r&eacute;parateur, par contraste avec celui d&rsquo;&eacute;puisement<br />
souvent caus&eacute; par le bruit ou la pollution.<br />
Une &eacute;tude r&eacute;alis&eacute;e en Grande-Bretagne sur 20&rsquo;000 individus a observ&eacute; que les personnes qui passent<br />
au moins 2 heures par semaine en contact avec la nature rapportent 1.6 fois plus fr&eacute;quemment &ecirc;tre<br />
en bonne sant&eacute;. En Suisse, une &eacute;tude sur 8 ans et plus de 4 millions de personnes a r&eacute;v&eacute;l&eacute; un taux<br />
de mortalit&eacute; r&eacute;duit de 5% chez les personnes r&eacute;sidant &agrave; moins de 500 m&egrave;tres d&rsquo;un parc ou d&rsquo;une<br />
zone de verdure. La proximit&eacute; avec les espaces verts facilite une activit&eacute; physique r&eacute;guli&egrave;re, qui<br />
contribue notamment &agrave; r&eacute;duire les risques d&rsquo;ob&eacute;sit&eacute;, de maladies cardiovasculaires, et de d&eacute;pression.<br />
Ces espaces contribuent &agrave; cr&eacute;er un environnement agr&eacute;able qui incite les individus &agrave; se d&eacute;placer &agrave;<br />
pied ou &agrave; bicyclette. Ils forment &eacute;galement des lieux de rencontre et de loisirs qui favorisent la mixit&eacute;<br />
sociale et pr&eacute;viennent l&rsquo;isolement.<br />
Pour renforcer le lien entre biodiversit&eacute; et sant&eacute;, les actions suivantes seront d&eacute;ploy&eacute;es :<br />
&bull; Mat&eacute;rialiser les liens entre services &eacute;cosyst&eacute;miques et sant&eacute;, par exemple &agrave; travers l&rsquo;accessibilit&eacute; des<br />
espaces naturels pour la d&eacute;tente, ou la r&eacute;silience face aux &eacute;v&egrave;nements m&eacute;t&eacute;orologiques extr&ecirc;mes.<br />
&bull; Collaborer avec l&rsquo;Association Genevoise des M&eacute;decins pour &eacute;tablir des ordonnances prescrivant<br />
explicitement des visites et immersions dans des espaces naturels.<br />
&bull; Cartographier la pr&eacute;sence de plantes allerg&egrave;nes et de vecteurs de maladies (p.ex. tiques, moustique<br />
tigre, etc.)<br />
&bull; Mesurer l&rsquo;effet d&rsquo;un projet de renaturation ou v&eacute;g&eacute;talisation urbaine sur l&rsquo;&eacute;tat de sant&eacute; physique et<br />
mentale des riverains (en collaboration avec le Bus Sant&eacute; des H&ocirc;pitaux Universitaires de Gen&egrave;ve).<br />
&bull; En lien avec le champ d&rsquo;action 4 (Arbres) et le projet NOS-ARBRES, participer activement &agrave; la<br />
d&eacute;finition des plans de v&eacute;g&eacute;talisation communaux pour planter des arbres prioritairement aux endroits<br />
qui manquent de fra&icirc;cheur et d&rsquo;espaces de d&eacute;tente, pour att&eacute;nuer les pics de chaleur et am&eacute;liorer la<br />
qualit&eacute; de vie des habitants.<br />
&bull; Pr&eacute;ciser la &ldquo;R&eacute;partition g&eacute;ographique des espaces verts en zone urbaine&rdquo; (m&eacute;thodologie &agrave; d&eacute;finir),<br />
un indicateur retenu pour suivre la mise en &oelig;uvre du Plan cantonal de promotion de la sant&eacute; et de<br />
pr&eacute;vention 2019-2023.<br />
Des liens seront &eacute;galement &agrave; mettre en place avec les projets Constellations Urbaines Vertes (CUV)<br />
et CoolCity.</p>',
'indicator' => 'Bilan des actions mises en œuvre en relation avec la santé',
'R' => 0,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-06 07:27:56',
'updated_at' => '2020-04-06 07:27:56',
),
107 => 
array (
'id' => 109,
'code' => '12.3',
'label' => 'Faire de la biodiversité un des leviers de la résilience / Appliquer le “réflexe biodiversité”',
'image' => NULL,
'description' => '<p>La protection et le d&eacute;veloppement de la biodiversit&eacute; sont des enjeux transversaux qui s&rsquo;inscrivent dans<br />
de nombreux domaines, il est donc indispensable de lier les enjeux de la biodiversit&eacute; aux grandes<br />
th&eacute;matiques du d&eacute;veloppement durable et le climat en coh&eacute;rence avec la politique cantonale, les<br />
orientations strat&eacute;giques et les plans sectoriels.<br />
Les actions pr&eacute;vues doivent permettre d&rsquo;int&eacute;grer la biodiversit&eacute; dans une gouvernance de la transition<br />
&eacute;cologique. Il s&rsquo;agira notamment de :<br />
- Solliciter le P&ocirc;le de transition &eacute;cologique pour &eacute;lever les enjeux vitaux de la biodiversit&eacute; et du climat<br />
au niveau de ceux de l&rsquo;&eacute;conomie et l&rsquo;&eacute;nergie. Ce p&ocirc;le regroupant notamment des repr&eacute;sentants<br />
climat, environnement et biodiversit&eacute; aura la charge de coordonner les dispositifs en faveur de la<br />
transition &eacute;cologique. Il devra par ailleurs avoir un poids d&eacute;cisionnel dans le cas de pes&eacute;e d&rsquo;int&eacute;r&ecirc;ts<br />
dans les projets d&rsquo;am&eacute;nagement du territoire.<br />
- Promouvoir une culture commune de la biodiversit&eacute; au sein de l&rsquo;administration cantonale et adopter<br />
le r&eacute;flexe biodiversit&eacute; pour la gestion des parcelles appartenant &agrave; l&rsquo;Etat (Etat exemplaire).<br />
- Instaurer un processus permettant d&rsquo;identifier les impacts en mati&egrave;re de biodiversit&eacute; d&rsquo;un projet de<br />
loi avant son traitement parlementaire. La Chancellerie pourrait d&eacute;finir un processus qui permette<br />
&agrave; l&rsquo;office charg&eacute; de la biodiversit&eacute; de participer &agrave; l&rsquo;&eacute;laboration de nouvelles lois (ou &agrave; la mise &agrave; jour<br />
des lois existantes) et identifier l&rsquo;outil de suivi pour relever le nombre de consultations de l&rsquo;OCAN<br />
en tant que co-rapporteur.<br />
- Inscrire les enjeux de biodiversit&eacute; dans les politiques publiques.<br />
- Proposer au Conseil d&rsquo;Etat une m&eacute;thodologie d&rsquo;examen sous l&rsquo;angle biodiversit&eacute; des strat&eacute;gies<br />
sectorielles en vue de leur renouvellement.<br />
- Renforcer la repr&eacute;sentation de la biodiversit&eacute; dans les instances appropri&eacute;es.<br />
- Inscrire des orientations d&rsquo;am&eacute;nagement du territoire en faveur de la coh&eacute;rence &eacute;cologique d&egrave;s les<br />
phases de planification directrices.<br />
- Inscrire des prescriptions/pr&eacute;conisations sp&eacute;cifiques dans tous les projets d&rsquo;am&eacute;nagement du<br />
territoire (y compris la prise en compte de la biodiversit&eacute; &laquo; grise &raquo; en phase chantier , planification<br />
de chantiers respectueuse de la biodiversit&eacute;).<br />
- Adapter les normes techniques faisant obstacle &agrave; la biodiversit&eacute; (VSS, BPA, etc.).</p>',
'indicator' => 'Description qualitative de la mise en œuvre de ces actions',
'R' => 1,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-06 07:29:20',
'updated_at' => '2020-04-06 07:29:20',
),
108 => 
array (
'id' => 110,
'code' => '12.4',
'label' => 'Inclure les services écosystémiques dans les outils d’évaluation',
'image' => NULL,
'description' => '<p>Le canton de Gen&egrave;ve, s&rsquo;est dot&eacute; d&rsquo;un outil d&rsquo;&eacute;valuation environnemental strat&eacute;gique qui vise &agrave; orienter<br />
les grands projets vers des variantes qui minimisent les impacts environnementaux. L&rsquo;application de<br />
l&rsquo;outil Evaluation Environnementale Strat&eacute;gique (EES) a montr&eacute; ses limites dans plusieurs projets<br />
d&rsquo;infrastructures routi&egrave;res dans le canton (exemples : TLac, Gen&egrave;ve Sud). Ces projets, sur le plan<br />
environnemental, ont souffert de l&rsquo;absence d&rsquo;une v&eacute;ritable analyse prospective, ou d&rsquo;aides &agrave; la d&eacute;cision<br />
sur les plans techniques et politiques (quelle plus-value, quelles pertes, quelles opportunit&eacute;s ?)<br />
L&rsquo;int&eacute;gration des services &eacute;cosyst&eacute;miques rendus par la biodiversit&eacute; (esp&egrave;ces et &eacute;cosyst&egrave;mes) dans<br />
l&rsquo;outil EES &ndash; ainsi que dans les Etudes d&rsquo;Impact sur l&rsquo;Environnement (EIE) &ndash; permettrait d&rsquo;int&eacute;grer<br />
des dimensions environnementales non-trait&eacute;es classiquement jusqu&rsquo;ici dans l&rsquo;analyse et les pes&eacute;es<br />
d&rsquo;int&eacute;r&ecirc;ts des projets, par exemple les valeurs culturelles et immat&eacute;rielles li&eacute;es &agrave; la biodiversit&eacute; et<br />
au paysage.<br />
Des m&eacute;thodes d&rsquo;&eacute;valuation des services &eacute;cosyst&eacute;miques sont en cours d&rsquo;analyse dans le cadre<br />
des travaux men&eacute;s par GE-21 et permettront d&rsquo;orienter le choix sur la m&eacute;thode la plus adapt&eacute;e au<br />
contexte genevois.</p>',
'indicator' => 'Production d’un guide méthodologique et cartographique pour assurer l’intégration des SE dans les
EES, voire les EIE.',
'R' => 1,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-06 07:31:09',
'updated_at' => '2020-04-06 07:31:09',
),
109 => 
array (
'id' => 111,
'code' => '12.5',
'label' => 'Compenser les pertes de biodiversité',
'image' => NULL,
'description' => '<p>Il est imp&eacute;ratif de conforter la biodiversit&eacute; comme donn&eacute;e structurante, notamment dans les projets<br />
d&rsquo;am&eacute;nagement du territoire. Il s&rsquo;agira de rappeler constamment aux porteurs de projets soumis &agrave;<br />
autorisation, les pr&eacute;conisations visant &agrave; &eacute;viter les atteintes &agrave; la biodiversit&eacute;, &agrave; d&eacute;faut &agrave; les r&eacute;duire et,<br />
en dernier recours, &agrave; remplacer les impacts r&eacute;siduels n&rsquo;ayant pu &ecirc;tre &eacute;vit&eacute;s ou r&eacute;duits pour tendre<br />
vers la z&eacute;ro perte nette de biodiversit&eacute;.<br />
Au-del&agrave; de cela, la l&eacute;gislation (LPN art. 18b) demande aux cantons de veiller &agrave; mettre en place des<br />
compensations &eacute;cologiques dans les r&eacute;gions o&ugrave; l&rsquo;exploitation du sol est intensive &agrave; l&rsquo;int&eacute;rieur et &agrave;<br />
l&rsquo;ext&eacute;rieur des localit&eacute;s. Afin de positionner celles-ci le plus judicieusement possible sur le territoire,<br />
il est indispensable que le canton se dote d&rsquo;outils performants dans ce domaine (voir action 11.6). La<br />
compensation &eacute;cologique est r&eacute;alis&eacute;e selon trois principes, l&rsquo;&eacute;quivalence, la p&eacute;rennit&eacute; des mesures<br />
sur la base de la dur&eacute;e des atteintes, et la proximit&eacute;.<br />
Deux possibilit&eacute;s de compensation sont envisageables:<br />
&bull; Directement par le porteur de projet.<br />
&bull; Par acquisition d&rsquo;unit&eacute;s de compensation dans le cadre d&rsquo;un site naturel de compensation mis en<br />
place et entretenu par un partenaire public ou priv&eacute; (notamment dans les gravi&egrave;res, qui ont un<br />
potentiel &eacute;lev&eacute; dans ce domaine). On parlera de &ldquo;Coldspot&rdquo; dans &lsquo;infrastructure &eacute;cologique ou de<br />
points de friction.<br />
La planification de ces compensations pourra s&rsquo;appuyer sur l&rsquo;infrastructure &eacute;cologique pour identifier<br />
les sites en favorisant les continuit&eacute;s &eacute;cologiques. Les mesures de compensation devront aussi &ecirc;tre<br />
accompagn&eacute;es d&rsquo;un dispositif de suivi et de contr&ocirc;le sur le long terme pour garantir leurs effets.<br />
Dans cette d&eacute;marche, l&rsquo;OCAN a d&eacute;j&agrave; mis en place une proc&eacute;dure pour int&eacute;grer des mesures<br />
&ldquo;biodiversit&eacute;&rdquo; &agrave; l&rsquo;amont des projets et lors des pr&eacute;avis.</p>',
'indicator' => '% de compensation écologique sur l’ensemble des zones déclassées',
'R' => 1,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:32:30',
'updated_at' => '2020-04-06 07:32:30',
),
110 => 
array (
'id' => 112,
'code' => '12.6',
'label' => 'Favoriser l’émergence de financements innovants et cohérents',
'image' => NULL,
'description' => '<p>La n&eacute;cessit&eacute; de sensibiliser aux enjeux, voire de mettre un terme &agrave; la perte de biodiversit&eacute;, doit<br />
mobiliser des moyens financiers qui &agrave; ce jour d&eacute;passent les dispositifs traditionnels. Ceci pourrait<br />
passer &agrave; terme par une valorisation des services &eacute;cosyst&eacute;miques. Il s&rsquo;agit donc de compl&eacute;ter les<br />
dispositifs de financement actuels par d&rsquo;autres sources/leviers innovants.<br />
Pour ceux d&eacute;j&agrave; existants, il s&rsquo;agit d&rsquo;optimiser leur utilisation afin de permettre la tra&ccedil;abilit&eacute; des moyens<br />
et des actions d&eacute;j&agrave; financ&eacute;es par l&rsquo;Etat en faveur de la biodiversit&eacute;.<br />
Il s&rsquo;agira notamment de d&eacute;velopper les actions suivantes :<br />
- Mettre en place le monitoring des investissements engag&eacute;s pour la mise en &oelig;uvre du Plan<br />
Biodiversit&eacute; 2020-2023.<br />
- Lancer le Fonds en faveur de la biodiversit&eacute; et d&eacute;finir pr&eacute;cis&eacute;ment son fonctionnement, ses crit&egrave;res<br />
d&rsquo;octroi de soutien, ses modalit&eacute;s de suivi des d&eacute;penses, etc.<br />
- Asseoir un engagement politique durable et global en mettant notamment en &eacute;vidence l&rsquo;ensemble<br />
des ressources que l&rsquo;&Eacute;tat souhaite consacrer &agrave; la biodiversit&eacute; A l&rsquo;heure actuelle, la part du budget<br />
annuel du Canton d&eacute;di&eacute;e &agrave; la biodiversit&eacute; (CHF 6 mio) repr&eacute;sente moins de 0,1% du budget cantonal.<br />
- Identifier au sein des diff&eacute;rentes conventions-programmes de la Conf&eacute;d&eacute;ration, non directement<br />
li&eacute;es &agrave; la biodiversit&eacute;, les subventions ayant une influence sur la biodiversit&eacute; et analyser leurs effets.<br />
Solliciter le cas &eacute;ch&eacute;ant, une adaptation ou des fonds suppl&eacute;mentaires aupr&egrave;s de la Conf&eacute;d&eacute;ration<br />
(ie. Projet de loi)<br />
- Mieux choisir / prioriser les mesures en d&eacute;finissant notamment des crit&egrave;res d&rsquo;octroi bas&eacute;s sur une<br />
v&eacute;ritable strat&eacute;gie (crit&egrave;re d&rsquo;efficience).<br />
- Assurer un reporting ad&eacute;quat des mesures financ&eacute;es (Canton / Conf&eacute;d&eacute;ration).<br />
- S&rsquo;appuyer sur la LBio et le RBio.<br />
D&rsquo;autres mesures innovantes devront &ecirc;tre &eacute;tudi&eacute;es, comme par exemple:<br />
- La notion d&rsquo;externalit&eacute; positive pour la reconnaissance des services &eacute;cosyst&eacute;miques rendus par<br />
certains espaces.<br />
- Une incitation &eacute;conomique pour favoriser un changement de comportement et pr&eacute;server la<br />
biodiversit&eacute;.<br />
- La r&eacute;servation d&rsquo;un pourcent (1% biodiversit&eacute;) sur le co&ucirc;t d&rsquo;une construction pour financer des<br />
actions en faveur de la biodiversit&eacute;, ou la d&eacute;taxation des projets immobiliers conformes &agrave; la r&egrave;gle<br />
des 30% de superficie d&eacute;volus &agrave; l&rsquo;infrastructure &eacute;cologique.<br />
- Taxe biodiversit&eacute;.</p>

<p>- L&rsquo;implication renforc&eacute;e du secteur philanthropique, Gen&egrave;ve &eacute;tant particuli&egrave;rement bien<br />
dot&eacute;e en la mati&egrave;re avec plus de 24 fondations pour 10&rsquo;000 habitants et plus de CHF 125<br />
millions de patrimoine d&eacute;di&eacute; &agrave; la protection de l&rsquo;environnement (https://www.ge.ch/document/<br />
rapport-fondations-suisse-2019). La Direction g&eacute;n&eacute;rale du d&eacute;veloppement &eacute;conomique, de<br />
la recherche et de l&rsquo;innovation (D&eacute;partement du d&eacute;veloppement &eacute;conomique) tient d&rsquo;ailleurs<br />
&agrave; jour une cartographie de ces acteurs https://sitg.maps.arcgis.com/apps/MapJournal/index.<br />
html?appid=9895b4cab37b4e319bcfae9fa8e3b99b</p>',
'indicator' => 'Mise en place d’outils alternatifs aux incitations négatives',
'R' => 1,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-06 07:34:19',
'updated_at' => '2020-04-06 07:34:19',
),
111 => 
array (
'id' => 113,
'code' => '12.7',
'label' => 'Promouvoir la biodiversité dans la solidarité internationale',
'image' => NULL,
'description' => '<p>Le d&eacute;partement veille &agrave; encourager des projets de solidarit&eacute; internationale touchant &agrave; la biodiversit&eacute;<br />
(Lbio art. 9). La loi applicable en mati&egrave;re de solidarit&eacute; internationale est la Loi sur le financement<br />
de la solidarit&eacute; internationale (LFSI) dont l&rsquo;objectif est de mener une politique active en faveur de la<br />
solidarit&eacute; internationale. Pour concr&eacute;tiser cet objectif, la R&eacute;publique et canton de Gen&egrave;ve consacre<br />
au moins 0,7% de son budget annuel de fonctionnement &agrave; la solidarit&eacute; internationale, particuli&egrave;rement<br />
en soutenant des projets de coop&eacute;ration, d&rsquo;aide au d&eacute;veloppement, de promotion de la paix et de<br />
d&eacute;fense des droits sociaux et de la personne. La coordination des actions men&eacute;es rel&egrave;ve du Service<br />
de la solidarit&eacute; internationale (SSI).<br />
Les deux services SSI et OCAN devront collaborer pour (mieux) int&eacute;grer la biodiversit&eacute; dans les<br />
projets soutenus par le SSI dans le cadre de ses pr&eacute;rogatives :<br />
Soutenir la mise en &oelig;uvre:<br />
1. du Plan d&rsquo;actions d&eacute;veloppement durable 2019-2023 (Modes de production et de consommation)<br />
2. du document Engagement du canton de Gen&egrave;ve dans la solidarit&eacute;́ internationale (2018- 2023).<br />
Les actions pourront intervenir &agrave; deux niveaux:<br />
1. Expertise biodiversit&eacute; pour les projets d&eacute;pos&eacute;s pour financements (renforcer les opportunit&eacute;s et<br />
&eacute;viter les impacts n&eacute;gatifs)<br />
2. Proposition de sujets / sites n&eacute;cessitant des actions, conseils en mati&egrave;re de biodiversit&eacute; pour la<br />
pr&eacute;paration de projets</p>

<p>&nbsp;</p>',
'indicator' => 'Réalisations en matière de biodiversité dans des projets de solidarité internationale soutenus par le
canton de Genève.',
'R' => 1,
'A' => 1,
'E' => 1,
'T' => 1,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:35:38',
'updated_at' => '2020-04-06 07:35:38',
),
112 => 
array (
'id' => 114,
'code' => '12.8',
'label' => 'Organiser la mise en œuvre du plan et partager les bonnes pratiques',
'image' => NULL,
'description' => '<p>La coordination entre les acteurs et la coh&eacute;sion des actions en faveur de la biodiversit&eacute; &agrave; diff&eacute;rentes<br />
&eacute;chelles du territoire et de la r&eacute;gion sont essentielles. A cet effet, l&rsquo;OCAN coordonnera avec les acteurs<br />
du territoire les actions suivantes :<br />
- Nommer un r&eacute;f&eacute;rent d&eacute;di&eacute; biodiversit&eacute; au sein de l&rsquo;OCAN, garant du suivi de la mise en &oelig;uvre<br />
des plans biodiversit&eacute; successifs. Il s&rsquo;agit d&rsquo;un &eacute;l&eacute;ment essentiel pour coordonner et soutenir les<br />
acteurs du territoire, et faciliter et valoriser la mise en &oelig;uvre des bonnes pratiques.<br />
- Cr&eacute;er le r&eacute;flexe biodiversit&eacute; en limitant les pressions et en renfor&ccedil;ant les synergies entre les acteurs<br />
du territoire.<br />
- Accompagner les &eacute;tablissements publics autonomes dans une d&eacute;marche d&rsquo;int&eacute;gration d&rsquo;objectifs<br />
de biodiversit&eacute; dans les contrats de prestation et les conventions d&rsquo;objectifs, tout en valorisant les<br />
actions d&eacute;j&agrave; entreprises par ces acteurs embl&eacute;matiques. Les accompagner &agrave; la mise en place<br />
d&rsquo;actions nouvelles dans leur p&eacute;rim&egrave;tre d&rsquo;activit&eacute; et/ou &agrave; la participation &agrave; des initiatives en faveur<br />
de la biodiversit&eacute;.<br />
- Accompagner les acteurs de la Gen&egrave;ve internationale (OI, ONG, Missions diplomatiques) pour<br />
l&rsquo;exploration de possibles collaborations ou d&rsquo;&eacute;changes de bonnes pratiques. Valoriser les actions<br />
d&eacute;j&agrave; entreprises et &eacute;valuer la possibilit&eacute; d&rsquo;int&eacute;grer des objectifs de biodiversit&eacute; dans une &laquo;charte<br />
environnementale&raquo;. Les accompagner &agrave; la mise en place d&rsquo;actions nouvelles dans leur p&eacute;rim&egrave;tre<br />
d&rsquo;activit&eacute; et/ou &agrave; la participation &agrave; des initiatives en faveur de la biodiversit&eacute;. (lien FA07 solidarit&eacute;<br />
internationale)<br />
- Utiliser et renforcer le r&ocirc;le des instances existantes (notamment la CCDB et la plateforme GE-21).<br />
Concernant la CCDB il s&rsquo;agira d&rsquo;assurer le suivi des actions, &eacute;valuer leurs effets, impulser la large<br />
information pr&eacute;vue par la loi et soutenir la convergence des partenaires.<br />
- Initier la cr&eacute;ation du Forum des acteurs de la Biodiversit&eacute; et des milieux int&eacute;ress&eacute;s &agrave; l&rsquo;&eacute;chelle<br />
romande et organiser la collaboration avec le Forum Biodiversit&eacute; Suisse. Ce forum pourrait s&rsquo;engager<br />
&agrave; promouvoir la recherche en biodiversit&eacute;, et &agrave; entretenir le dialogue et la collaboration entre les<br />
scientifiques, la soci&eacute;t&eacute; et les d&eacute;cideurs dans l&rsquo;administration, la politique et l&rsquo;&eacute;conomie. GE-EN-<br />
VIE et le Geneva-Lab pourraient aider &agrave; mettre en place une telle structure de mani&egrave;re novatrice<br />
et participative (https://www.ge.ch/dossier/geneve-lab).</p>',
'indicator' => 'Évaluation de la pertinence des actions énumérées et financement éventuel de mandats ciblés',
'R' => 1,
'A' => 1,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:37:02',
'updated_at' => '2020-04-06 07:37:02',
),
113 => 
array (
'id' => 115,
'code' => '12.9',
'label' => 'Définir des indicateurs pour mesurer l’impact de la Stratégie Biodiversité Genève 2030',
'image' => NULL,
'description' => '<p>Pour suivre l&rsquo;&eacute;volution de la biodiversit&eacute; et v&eacute;rifier l&rsquo;efficacit&eacute; des actions d&eacute;ploy&eacute;es (outil d&rsquo;aide &agrave; la<br />
d&eacute;cision), un syst&egrave;me d&rsquo;indicateurs sera mis en place en se basant sur 4 crit&egrave;res principaux :<br />
- Pertinence : les indicateurs mesurent une composante sur laquelle les actions des plans biodiversit&eacute;<br />
successifs devraient avoir un impact.<br />
- Disponibilit&eacute; : id&eacute;alement, choisir des indicateurs dont les relev&eacute;s sont disponibles d&egrave;s 2018, pour<br />
pouvoir mesurer l&rsquo;&eacute;tat initial (2019), interm&eacute;diaire (2023 et 2027) et final (2030).Ils devraient aussi<br />
&ecirc;tre mesurables &agrave; l&rsquo;&eacute;chelle des communes, gr&acirc;ce &agrave; l&rsquo;Observatoire du r&eacute;seau GE-EN-VIE.<br />
- Faisabilit&eacute; : la collecte de l&rsquo;information pour les indicateurs ne devrait pas &ecirc;tre trop difficile ou<br />
co&ucirc;teuse.<br />
- Sensibilit&eacute; : les indicateurs doivent &ecirc;tre assez sensibles pour d&eacute;tecter des changements significatifs<br />
&agrave; l&rsquo;horizon 2030.<br />
Dans le domaine de la biodiversit&eacute;, l&rsquo;Universit&eacute; de Gen&egrave;ve, l&rsquo;HEPIA et l&rsquo;OCAN collaborent d&eacute;j&agrave; depuis<br />
plusieurs ann&eacute;es &agrave; travers la plateforme GE-21. Un groupe de travail indicateurs a entam&eacute; en 2019<br />
des r&eacute;unions pour coordonner les diff&eacute;rents projets de recherche li&eacute;s &agrave; des indicateurs, notamment<br />
pour le suivi de l&rsquo;&eacute;volution de la biodiversit&eacute; (action 11.4). Ce travail doit &ecirc;tre poursuivi pour aboutir<br />
&agrave; une liste d&rsquo;indicateurs permettant de mesurer l&rsquo;effet de la SBG-2030. Le r&eacute;f&eacute;rentiel d&rsquo;indicateurs<br />
propos&eacute;s, ainsi que les bilans &eacute;labor&eacute;s sur la base de ces indicateurs, seront soumis &agrave; l&rsquo;appr&eacute;ciation<br />
de la CCDB dans son r&ocirc;le d&rsquo;accompagnement du suivi de la mise en &oelig;uvre de la SBG-2030 et des<br />
plans biodiversit&eacute; qui en d&eacute;coulent.<br />
L&rsquo;approche DPSIR permet d&rsquo;identifier et de r&eacute;partir les indicateurs dans cinq cat&eacute;gories: &ldquo;Drivers/driving<br />
forces&rdquo; = forces, &ldquo;Pressures&rdquo; = pressions, &ldquo;State&rdquo; = &eacute;tat, &ldquo;Impact&rdquo; = impacts et &ldquo;Responses&rdquo; = r&eacute;ponses).<br />
Cette classification des indicateurs r&eacute;v&egrave;le les relations de causalit&eacute; entre les activit&eacute;s humaines<br />
et l&rsquo;environnement. Cette approche &ndash; &eacute;galement retenue par l&rsquo;Office f&eacute;d&eacute;ral de l&rsquo;environnement<br />
&ndash; permettra de suivre l&rsquo;effet des plans d&rsquo;action successifs et l&rsquo;atteinte des objectifs de la SBG-<br />
2030. Par exemple, les diff&eacute;rents indicateurs relatifs aux services &eacute;cosyst&eacute;miques font partie de la<br />
cat&eacute;gorie &laquo; impact &raquo; ; ce sont ceux utilis&eacute;s &ndash; notamment par la Plateforme intergouvernementale<br />
sur la biodiversit&eacute; et les services &eacute;cosyst&eacute;miques (IPBES) &ndash; pour communiquer avec la population<br />
&agrave; propos de la biodiversit&eacute;.<br />
En outre, pour la for&ecirc;t, l&rsquo;OCAN poss&egrave;de d&eacute;j&agrave; depuis 2015 un set d&rsquo;indicateurs inspir&eacute; des indicateurs<br />
retenus au niveau international et d&eacute;crit par l&rsquo;OFEV et les cantons dans une aide &agrave; la d&eacute;cision.</p>',
'indicator' => 'Nombre d’indicateurs relevés à la fin de chaque législature',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:38:30',
'updated_at' => '2020-04-06 07:38:30',
),
114 => 
array (
'id' => 116,
'code' => '12.10',
'label' => 'Adopter l’approche comportementale dans la compréhension et la résolution des enjeux de préservation de la biodiversité',
'image' => NULL,
'description' => '<p>Les facteurs humains et les comportements des populations, des &eacute;lus et des acteurs industriels<br />
sont des enjeux transversaux aux 12 domaines de la Strat&eacute;gie Biodiversit&eacute; Gen&egrave;ve 2030. Le but de<br />
cette action est d&rsquo;utiliser les outils scientifiques et interventionnels de l&rsquo;approche comportementale<br />
(behavioral insights) pour comprendre et agir sur ces facteurs humains et comportementaux pour<br />
accompagner la mise en &oelig;uvre du plan d&rsquo;actions. Pour ce faire, les actions suivantes sont pr&eacute;vues :<br />
&bull; Accompagnement de la traduction de la SBG-2030 en Plan Biodiversit&eacute; en int&eacute;grant pour chaque<br />
enjeu &eacute;cosyst&eacute;mique une r&eacute;flexion, et si n&eacute;cessaire une mod&eacute;lisation, des aspects humains et<br />
comportementaux.<br />
&bull; Accompagner les acteurs (&eacute;tat, associations, &eacute;tablissements publics autonomes) dans la conception<br />
et la mise en &oelig;uvre de strat&eacute;gies d&rsquo;interventions comportementales qui visent &agrave; atteindre les objectifs<br />
d&eacute;finis dans le PlanBiodiversit&eacute;<br />
&bull; Pr&eacute;voir syst&eacute;matiquement une &eacute;valuation des strat&eacute;gies d&rsquo;interventions comportementales mises<br />
en place (en lien avec les outils analytiques du domaine n&deg;11)<br />
&bull; Nommer un r&eacute;f&eacute;rent d&eacute;di&eacute; &agrave; l&rsquo;approche comportementale au sein de l&rsquo;OCAN ou du DT</p>',
'indicator' => 'Validation de chaque point par des indicateurs quantifiables :
• nombre de domaines qui ont intégrés l’approche comportementale
• nombre d’interventions conçues selon cette approche
• proportion des interventions mises en place et évaluées',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-06 07:39:44',
'updated_at' => '2020-04-06 07:39:44',
),
115 => 
array (
'id' => 117,
'code' => '12.11',
'label' => 'Prendre en compte la biodiversité dans la politique d’achat des collectivités publiques',
'image' => NULL,
'description' => '<p>Veiller &agrave; ce que les achats publics selon les principes du Guide des achats professionnels responsables,<br />
pr&eacute;voient sous aspects environnementaux la prise en compte des effets sur la biodiversit&eacute; du bien<br />
en question, sur toute sa cha&icirc;ne de valeur.<br />
Inscrire ces &eacute;l&eacute;ments dans les crit&egrave;res https://www.achats-responsables.ch/leguide/parse/outils/4/5 :<br />
Texte actuel : &laquo;Ces crit&egrave;res portent sur les moyens mis en &oelig;uvre par le fournisseur pour limiter les<br />
impacts environnementaux sur les sites de production. Il est recommand&eacute; de formuler ces principes<br />
sous forme d&rsquo;engagements &agrave; s&rsquo;am&eacute;liorer.&raquo;<br />
Modification propos&eacute;e &laquo; les impacts environnementaux, notamment sur la biodiversit&eacute;, en particulier<br />
sur.. : &raquo;<br />
Inscrire ces &eacute;l&eacute;ments dans le crit&egrave;re ci-dessous mentionn&eacute; d&rsquo;&eacute;ligibilit&eacute; comme fournisseur de la<br />
centrale commune d&rsquo;achats : https://www.ge.ch/node/12243/impression<br />
Texte actuel : &laquo;Fournir une &laquo; D&eacute;claration (...) s&rsquo;engageant &agrave; respecter les principes du d&eacute;veloppement<br />
durable &raquo;<br />
Ajout propos&eacute; &laquo; notamment en mati&egrave;re de biodiversit&eacute; &raquo;.<br />
Cons&eacute;quence de l&rsquo;application de ce crit&egrave;re : s&rsquo;il n&rsquo;est pas garanti que le bien n&rsquo;a pas d&rsquo;impact n&eacute;gatif<br />
ou un impact n&eacute;gligeable sur la biodiversit&eacute;, il ne peut &ecirc;tre achet&eacute; par une collectivit&eacute; publique.<br />
Exemples : produits contenant de l&rsquo;huile de palme ou du soja cultiv&eacute; suite &agrave; la destruction de la for&ecirc;t<br />
tropicale, un usage excessif de pesticides (interdits en Suisse) et/ou un mode de culture destructeur<br />
du sol ; importations de bois tropical non certifi&eacute; FSC ou apparent&eacute;, etc.<br />
Mesure : introduire ces pr&eacute;cisions, d&eacute;livrer des instructions/exemples sur comment les v&eacute;rifier et quels<br />
sont les produits probl&eacute;matiques resp. alternatifs, organiser des formations ad hoc</p>',
'indicator' => 'Nombre d’achats concernés et où l’absence d’impact négatif ou un impact négatif négligeable a été
établi',
'R' => 1,
'A' => 0,
'E' => 0,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 3,
'ponc_id' => 1,
'created_at' => '2020-04-06 07:40:58',
'updated_at' => '2020-04-06 07:40:58',
),
116 => 
array (
'id' => 118,
'code' => '12.12',
'label' => 'Interroger la mise en œuvre opérationnelle de la Stratégie Biodiversité Genève 2030',
'image' => NULL,
'description' => '<p>Une structure para&eacute;tatique pour la biodiversit&eacute; &agrave; l&rsquo;instar de l&rsquo;Agence fran&ccedil;aise pour la biodiversit&eacute;. Une<br />
premi&egrave;re en Suisse. Cette structure aurait pour mission d&rsquo;assurer la mise en &oelig;uvre op&eacute;rationnelle<br />
de la Strat&eacute;gie Biodiversit&eacute; Gen&egrave;ve 2030 (SBG-2030). Elle viendrait en appui aux acteurs publics<br />
mais travaillerait &eacute;galement en partenariat &eacute;troit avec les acteurs priv&eacute;s socio-&eacute;conomiques. Elle<br />
aurait &eacute;galement vocation &agrave; aller &agrave; la rencontre du public pour mobiliser les citoyens en faveur de la<br />
biodiversit&eacute;. Un r&eacute;el op&eacute;rateur ind&eacute;pendant pour coordonner et accompagner les plans d&rsquo;actions et<br />
les d&eacute;marches initi&eacute;es &agrave; l&rsquo;&eacute;chelle du territoire genevois. Cette structure pourrait se voir rattacher les<br />
comp&eacute;tences, les outils et une partie des financements existants. Un savoir-faire ainsi regroup&eacute; dans<br />
l&rsquo;action pour co-enclencher la transition &eacute;cologique et r&eacute;pondre &agrave; l&rsquo;urgence climatique.<br />
La forme juridique &agrave; &eacute;valuer pourrait &ecirc;tre une fondation de droit priv&eacute; r&eacute;gie par les articles 80 et<br />
suivants du code civil suisse ou un &eacute;tablissement public autonome. Dans les 2 cas, cette structure<br />
serait sous tutelle de l&rsquo;Etat, ses objectifs et ses activit&eacute;s pourraient &ecirc;tre conclus avec ce dernier par<br />
le biais d&rsquo;un contrat d&rsquo;objectifs et de prestations. Un projet de loi ouvrant un cr&eacute;dit d&rsquo;investissement<br />
pour la constitution d&rsquo;un capital de dotation de l&rsquo;Etat de Gen&egrave;ve en faveur de la structure pourrait<br />
&ecirc;tre vot&eacute;. De m&ecirc;me qu&rsquo;une indemnit&eacute; mon&eacute;taire d&rsquo;exploitation pourrait &ecirc;tre fix&eacute;e au sens de l&rsquo;article<br />
2 de la loi sur les indemnit&eacute;s et les aides financi&egrave;res, du 15 d&eacute;cembre 2005.<br />
La gouvernance devrait &ecirc;tre repr&eacute;sentative de la diversit&eacute; des acteurs de la biodiversit&eacute; et pourrait<br />
se d&eacute;cliner comme suit :<br />
&bull; Conseil d&rsquo;administration ;<br />
&bull; Conseil scientifique<br />
&bull; Comit&eacute;s d&rsquo;orientation th&eacute;matiques pour associer les acteurs (inc. soci&eacute;t&eacute; civile)<br />
&bull; Comit&eacute; pour la concertation citoyenne<br />
En synth&egrave;se, il s&rsquo;agit de lancer une analyse de faisabilit&eacute; pour &eacute;valuer la pertinence de cr&eacute;er une<br />
telle structure &agrave; l&rsquo;&eacute;chelle du canton de Gen&egrave;ve et de d&eacute;crire le mod&egrave;le, la Gouvernance, le r&ocirc;le et<br />
les responsabilit&eacute;s de cette entit&eacute;. Il sera &eacute;galement opportun d&rsquo;&eacute;valuer si cette structure doit/peut<br />
int&eacute;grer d&rsquo;autres th&eacute;matiques et ainsi cr&eacute;er une entit&eacute; transversale et op&eacute;rationnelle en mati&egrave;re de<br />
transition &eacute;cologique.</p>',
'indicator' => 'Réalisation de l’étude de faisabilité pour la création de l’Agence Biodiversité du canton de Genève',
'R' => 0,
'A' => 0,
'E' => 1,
'T' => 0,
'total_cout_etat' => NULL,
'cout_externe' => NULL,
'total_couts' => NULL,
'project_id' => 12,
'comment_id' => NULL,
'state_id' => 2,
'ponc_id' => 2,
'created_at' => '2020-04-06 07:42:06',
'updated_at' => '2020-04-06 07:42:06',
),
));
        
        
    }
}