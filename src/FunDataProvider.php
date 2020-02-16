<?php


namespace FunDataProvider;

/**
 * Provider for the Fun Data generator
 */
class FunDataProvider extends \Faker\Provider\Base
{
    const NAMES = [
        'Abel Auboisdormant',
        'Agathe Zeblouse',
        'Agnès Téziste',
        'Aïcha Fémal',
        'Alain Di',
        'Alain Parfait',
        'Alain Posteur',
        'Alain Proviste',
        'Alain Térieur',
        'Alain Verse',
        'Alex Térieur',
        'Alex Trémité',
        'Ali Gator',
        'Amédée Pan',
        'Anna Conda',
        'Anna Tomie',
        'Anne Orak',
        'Annie Versaire',
        'Aubin Sahalor',
        'Aude Javel',
        'Aude Vaisselle',
        'Beth Rave',
        'Camille Honête',
        'Candy Raton',
        'Carry Bout',
        'Cathy Mini',
        'Cécile Encieu',
        'Côme Toulemonde',
        'Daisy Dérata',
        'Daisy Draté',
        'Daisy Rable',
        'Eddy Denante',
        'Edith Orial',
        'Eléonore Iléosud',
        'Elie Vadeboncoeur',
        'Ella Danlosse',
        'Elmer Itmieu',
        'Elvire Agoche',
        'Eva Peauré',
        'Eve Rest',
        'Félicie Tation',
        'Gaspard Alizan',
        'Geoffroy Danledo',
        'Gérard Menvussa',
        'Guy Liguili',
        'Guy Tarehéro',
        'Guy Tarembois',
        'Harry Cover',
        'Harry Stocrate',
        'Hassan Cehef',
        'Hilary Amablag',
        'Ines Spéré',
        'Jacques Célère',
        'Jacques Ouzi',
        'Jade Mire',
        'Jean Aimarre',
        'Jean Bambois',
        'Jean Cérien',
        'Jean Tanrien',
        'Jerry Canne',
        'John Atend',
        'John Deuf',
        'Judas Nanas',
        'Jude Orange',
        'Juste Ificatif',
        'Justin Ptipeu',
        'Kelly Diote',
        'Laure Dure',
        'Laurent Gina',
        'Laurent Outan',
        'Lili Coptère',
        'Line Evitable',
        'Luc Ratif',
        'Luc Sation',
        'Lucie Fer',
        'Lydie Commandement',
        'Marc Assin',
        'Marie Rouana',
        'Marie Vière',
        'Maud Erateur',
        'Mehdi Cament',
        'Mehdi Térannée',
        'Milène Micoton',
        'Modeste Oma',
        'Nordine Ateur',
        'Otto Graf',
        'Otto Matik',
        'Oussama Lairbizar',
        'Pacôme Toulemonde',
        'Pat Icier',
        'Paul Emploi',
        'Paul Hémique',
        'Paul Icier',
        'Paul Ution',
        'Paula Roïd',
        'Phil Danstachambre',
        'Phil Defer',
        'Ray Ciproque',
        'Remy Fasol',
        'Renée Sens',
        'Robin Desbois',
        'Sacha Touille',
        'Sam Convient',
        'Samira Bien',
        'Sarah Pelle',
        'Scott Ché',
        'Serge Oin',
        'Sophie Fonfec',
        'Sophie Stiqué',
        'Terry Dicule',
        'Terry Golo',
        'Thérèse Plendissante',
        'Thomas Toketchup',
        'Thomas Wak',
        'Tom Desavoie',
        'Vincent Time',
        'Vishnou Lapaix',
        'Yves Remord',
    ];

    const CONTREPETRIES = [
        'Il faudrait une bonne purge à cette vaisselle!',
        'Ma belle-mère admire les rossignols du caroubier. ',
        'Votre père a l\'air mutin. ',
        'L\'Empereur est arrivé à pied par la Chine.',
        'Est-ce un feu de poutre? ',
        'Mammouth écrase les prix. ',
        'C\'est ici qu\'on pendit le fuselage de l\'aviatrice.',
        'Les étudiantes admiraient le factum du recteur. ',
        'Les laborieuses populations du Cap.',
        'La cuvette est pleine de bouillon. ',
        'Le scorpion est malade. ',
        'Quel beau métier: professeur! ',
        'Elle est folle de la messe.',
        'Dès qu\'on touche à son petit banc, cet enfant boude. ',
        'A la vue des Nippons, la Chine se soulève.',
        'Glisser dans la piscine. ',
        'Taisez-vous en bas! ',
        'Ma soeur taille des jupes au Pirée.',
        'Pour bien dîner, il faut être peu. ',
        'Auberge de Vendée.',
        'Chère collaboratrice, je vous laisse le choix dans la date.',
        'Parachute.',
        'Couper les nouilles au sécateur.',
        'Empiler les culottes.',
        'L\'assistante brouille l\'écoute de l\'ingénieur qui a une panne de micro. ',
        'Un mine de chapeau.',
        'Arriver à Béziers la veille. ',
        'J\'ai des rebords à mes épaulettes. ',
        'Allons, chérie, essuie ça vite et bien.',
        'Ces colonnes de gauchistes se branchent devant l\'Irak. ',
        'La princesse aime la dotation du roi. ',
        'La femme du capitaine à fait mander le marin à bord.',
        'À l\'Éducation Nationale, on aime bien l\'équipe en place. ',
        'Escalope sur une salade.',
        'Le gros entrepreneur pétrit le béton à la tonne. ',
        'La jeune paysanne rêve devant un beau vendeur. ',
        'L\'archéologue met dans des caisses le produit de ses fouilles. ',
        'Cette femme habite les gîtes.',
        'Le préfet de Nîmes voudrait plus d\'écus pour son Gard. ',
        'Souhaitez-vous, Monsieur, des nouilles encore?',
        'Aucun homme n\'est jamais assez fort pour ce calcul.',
        'J\'aime vachement votre frangin.',
        'Je te verrais bien en curé, avec une calotte. ',
        'La philantropie de l\'ouvrier charpentier.',
        'Deux carrioles sans mulet.',
        'La jeune fille revient de la ferme pleine d\'espoir jusqu\'au pont du Jura.',
        'Alors que les athées se battent, les abbés se taisent.',
        'Cette jolie fille habite Laval. ',
        'L\'Afrique est bonne hôtesse quand la canicule nous emballe. ',
        'Ces soupers manquent de pains. ',
        'Elle fait de délicieuses tripes aux papillotes. ',
        'Madame, il faut secouer les mites de vos habits. ',
        'Elle avait un chapelet de citrouilles autour du cou. ',
        'Il courait tant de buts divers qu\'il en perdait sa belle mine.',
        'Devenu riche à force de peiner, l\'ouvrier roule sur les pépettes.',
        'Un curé précis refuse toujours le tennis. ',
        'J\'ai du tracas jusqu\'au cou! ',
        'On ne peut pas dîner, si on est pas assez pur.',
        'Affaissant subitement son broc, le garçon laitier mouilla les fiches de la dactylo et chuta dans la jatte.',
        'Les nonnes aimeraient faire des chatouilles sur leur pape. ',
        'Cette jeune femme a l\'art de décaler les sons. ',
        'La botaniste admire ce plan qui vient de la Guinée. ',
        'L\'étudiante en archéologie rêve de tomber sur des fouilles curieuses. ',
        'Un hachis parmentier. ',
        'Elle est assise sur la berge du ravin.',
        'Quel bonheur pour la princesse que la dotation du roi.',
        'Les mutins passaient le berge du grand ravin.',
        'Saisons belles qui passent!',
        'Le capitaine redoute les proues qui tuent. ',
        'La pratique intensive du tennis en pension donne aux jeunes une mine piteuse.',
        'Il court, il court, le furet.',
        'C\'était une fine appellation.',
        'C\'est dimanche: un coup de vin.',
        'Un petit calcul et on s\'en va.',
        'Le chercheur est fatigué après une belle thèse. ',
        'Les corbeaux aiment le sang qui coule à la curée d\'un cerf.',
        'A l\'évêché on peut voir un vieux plan de Gap.',
        'Elle est folle de la messe. ',
        'Salut Patrick!',
        'Les luxations répétées provoquent la fêlure.',
        'A force de mouiller les fiches, je suis arrivé au fond de la colle.',
        'A la boutique des Milles Bottes, on solde des tennis de pro.',
        'A l\'armée, le lieutenant veut défiler et le général m\'engueule!',
        'A l\'auberge des Deux Reines, le cuisinier entame une vache marginale.',
        'A l\'auberge du Congre Debout, j\'ai humé des Côtes en fût et j\'ai senti des rillettes du cru.',
        'A l\'auberge du Congre Debout, j\'ai mangé de la tourte aux cailles et je me suis délectée d\'une vieille fine sans dépôt.',
        'Faites donc voir votre glu à l\'ancienne: cette vielle colle s\'enflamme au contact des feux.',
        'A l\'hôtel du Bon Coucher, j\'ai goûté un vieux marc très doux et j\'ai apprécié la poire à la fine.',
        'A l\'idée de voir la Chine, la jeune fille est envahie d\'une étrange pâleur.',
        'A quoi bon me pousser pour que je vous trompe?',
        'A vouloir aller plus vite que le son, vous risquez de vous briser la nuque!',
        'A Wimbledon, le juge de touche s\'est fait acculer derrière Sanchez.',
        'Madame, admirez donc l\'écaille de ces moules!',
        'Adjudant, faites bisser l\'appel!',
        'Ah Madame! Si vous saviez ce que votre plante me fait!',
        'Ah! Ma sœur! Vous avez bêché trois allées?! ',
        'Aimer le blanc, c\'est une histoire de goût.',
        'Les religieuses se lèvent au couchant et se passent facilement de pain jusqu\'aux matines.',
        'Après de pareils faits, vous pouvez vous permettre.',
        'Apprendre à calculer en cent leçons.',
    ];

    public static function funName()
    {
        return static::randomElement(self::NAMES);
    }

    public static function contrepetrie()
    {
        return static::randomElement(self::CONTREPETRIES);
    }


}
