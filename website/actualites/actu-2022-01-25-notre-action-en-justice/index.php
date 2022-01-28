<?php
include '../../includes/header.php';
include './metadata.php';
require_once '../functions.php';
?>

<div class="container my-5 article">
  <h1 class="title is-3 mt-4"><?= $metadata['titre'] ?></h1>

  <p class="date has-text-grey-light"><i class="fa fa-calendar-alt mr-2"></i><?= $metadata['date'] ?></p>

  <div class="share-buttons mt-4">
    <span class="has-text-grey has-text-weight-bold">Partager sur :</span>
    <!-- Telegram -->
    <a href="https://t.me/share/url?url=<?= urlencode($metadata['absolute_url']) ?>" target="_blank" rel="noopener noreferrer" class="telegram">
      <i class="fab fa-telegram-plane fa-2x"></i></a>
    <!-- Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($metadata['absolute_url']) ?>" target="_blank" rel="noopener noreferrer" class="facebook"><i class="fab fa-facebook fa-2x"></i></a>
    <!-- Twitter -->
    <a href="https://twitter.com/share?url=<?= urlencode($metadata['absolute_url']) ?>" target="_blank" rel="noopener noreferrer" class="twitter"><i class="fab fa-twitter fa-2x"></i></a>
    <!-- Mail -->
    <a href="mailto:?Subject=Article de Bancs Publics : <?= $metadata['titre'] ?>&Body=<?= $metadata['titre'] ?>%0A%0AArticle%20de%20Bancs%20Publics%20%3A%20<?= $metadata['titre'] ?>%0A%0ALire%20l'article%20sur%20:%20<?= urlencode($metadata['absolute_url']) ?>" target="_blank" rel="noopener noreferrer"><i class="far fa-envelope fa-2x"></i></a>
    <!-- Whatsapp -->
    <a href="https://web.whatsapp.com/send?text=<?= urlencode($metadata['absolute_url']) ?>" target="_blank" rel="noopener noreferrer" class="whatsapp"><i class="fab fa-whatsapp fa-2x"></i></a>
  </div>

  <section class="content my-4">
    <p>
      <b>
      Le Tribunal Administratif n'a pas encore statué. Aujourd’hui, la situation est la suivante :
      </b>
      <br>
      <b>
      La Ville de Sète a suspendu les travaux, et même plus exactement, ne les a pas commencés. Elle est contrainte à construire les autorisations nécessaires, qu'une lettre du Préfet rappelle. 
      </b>
    </p>
    <p>
      Mais le Tribunal n'est pas pressé : en effet il n'y a plus d'urgence. Peut-être même attend-il les autorisations pour donner son feu vert aux travaux. La date de l'audience n'a plus vraiment d'importance, car en réalité la Mairie s'est pliée à notre exigence en suspendant tout travaux, aux fins de respecter le droit, sans doute en espérant pouvoir trouver le moyen de le contourner.
    </p>
    <p>
      <b>Quelques informations sur notre action en justice :</b>
      <br>
      Le 24 décembre dernier, l'association Bancs Publics et dix riverains ont déposé un recours en référé devant le Tribunal administratif de Montpellier, demandant la suspension de tous travaux, en l'absence de toute autorisation d'urbanisme. La Ville avait pensé pouvoir passer en force sans aucune autorisation, au mépris de toute règle légale.
      <br>
      Tous ces motifs sont explicités dans notre recours par des références aux textes législatifs et confirmés par une nombreuse jurisprudence, notamment du Conseil d'État.
    </p>
    <p>
      <b>Notre recours</b> s'appuyait sur 4 motifs de droit :
      <ul>
        <li><b>Un permis de démolir</b> est obligatoire, pour les travaux envisagés sur la place : cette obligation définie dans le Code de l'Urbanisme et transcrite dans le Plan Local d'Urbanisme (PLU) est renforcée car la place fait partie d'un Site Patrimonial Remarquable (SPR)</li>
        <li><b>Le Kiosque</b> est un "Édifice Remarquable" situé dans un Site Patrimonial Remarquable, inscrit comme tel au PLU. Sa démolition est de ce fait interdite par le Code de l'Urbanisme.</li>
        <li><b>L'alignement d'arbres remarquables</b> est protégé par la Loi : c'est une catégorie juridique définie dans le Code de l'Environnement et dans le Code de l'urbanisme : "Le fait d'abattre, de porter atteinte à l'arbre, de compromettre la conservation ou de modifier radicalement l'aspect d'un ou de plusieurs arbres d'une allée ou d'un alignement d'arbres est interdit"</li>
        <li><b>L'information et la participation</b> du public sont des obligations, définies dans la Convention Internationale d'Aartus, transcrite en France dans la Charte de l'Environnement, intégrée au préambule de notre Constitution. L'absence d'une telle démarche pour ce parking et cette place est contraire à ces principes constitutionnels.</li>
      </ul>
    </p>
    <p>
      La Ville de Sète a reçu notification de ce référé le 27 décembre, et y a répondu dans un mémoire daté du 11 janvier, en affirmant que le Permis de Construire est toujours en cours d'instruction. 
      <br>
      Dans la réunion publique du 3 décembre, la Mairie avait expliqué que le Permis de Construire ne portait que sur le parking lui-même mais pas sur la place, et qu'une large consultation des riverains aurait lieu après la construction du parking pour voir comment réaménager la place. 
      <br>
      Or la Mairie revient sur cette promesse en affirmant que la place sera aménagée en rétablissant l’alignement des arbres historiques tel qu’il existait en 1898 lors de la création de l’Esplanade (en réalité cette création date de 50 ans avant) et travaille pour cela en étroite collaboration avec l’Architecte des Bâtiments de France. 
      <br>
      Toutefois, pour l’heure, le projet est toujours en cours de définition et aucune autorisation d’urbanisme n’a encore été sollicitée.
    </p>
    <p>
    En conséquence, écrit la Mairie, nonobstant les annonces faites prématurément, notamment par voie de presse : 
    "Les travaux n’ont pas encore débuté et ne sont pas sur le point de commencer."
    <br>
    <b>C'est faux</b> : les préparatifs avaient commencé activement. Nous avons pu stopper certaines interventions, notamment le démontage d'un panneau publicitaire et le marquage au sol préalable à l'intervention lourde d'ENEDIS. Et si nous avons pu empêcher le démontage des luminaires du kiosque, nous n'avons pas pu empêcher le sectionnement des câbles, ce qui plonge le kiosque et la place dans l'obscurité la nuit.  
    </p>
    <p>
      Par conséquent le référé déposé par Bancs Publics et des riverains n'a pas d'objet et peut même entraver le projet, qui est toujours en cours de définition et qu'aucune autorisation d’urbanisme n’a encore été sollicitée.
      <br>
      Il est bien entendu inconcevable pour la SPLBT et la Commune de Sète de commencer les travaux sans avoir obtenu au préalable les autorisations d’urbanisme nécessaires ! (sic : souligné dans le texte). C’est pourquoi la Ville de Sète analyse actuellement la nécessité de déposer un permis de démolir, alors que c'est obligatoire. La Ville tenterait-elle d'y échapper ?
    </p>
  </section>

  <div class="has-text-centered mt-6">
    <img src="<?= $metadata['image'] ?>" alt="">
  </div>
</div>

<?php include '../../includes/footer.php'; ?>
