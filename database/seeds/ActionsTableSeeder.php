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
            'updated_at' => '2020-04-01 04:31:44',
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
            'updated_at' => '2020-04-01 05:11:50',
        ),
        2 => 
        array (
            'id' => 4,
            'code' => '1.3',
            'label' => 'Infrastructure écologique du territoire',
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
        'updated_at' => '2020-04-01 05:22:29',
    ),
));
        
        
    }
}