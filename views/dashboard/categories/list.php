<section class="pe-5">
    <div class="container p-5" id="container__creatList">
        <div class="row pt-5">
            <div class="col pt-5">
                <!-- bouton de redirection pour ajouter une catégorie -->
                <a href="/controllers/dashboard/categories/add-ctrl.php">
                    <button type="button" class="btn btn-dark"><i class="fa-solid fa-plus pe-3"></i>Ajouter une catégorie</button>
                </a>
            </div>
        </div>
    </div>
    <div class="container p-5 pt-0" id="container__readList">
        <div class="row">
            <div class="col">
                <!-- carte contenant les infos -->
                <div class="card bg-light mb-3" style="max-width: 20rem;">
                    <div class="card-header">
                        Liste des catégories
                    </div>
                    <div class="card-body p-5">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold mb-2">
                                Nom :
                            </li>
                            <?php
                            foreach ($results as $result) { ?>

                                <li class="list-group-item list-group-item--border">
                                    <?= $result['name'] ?> <span class="logos"><i class="fa-solid fa-pen-to-square"></i> <i class="fa-solid fa-trash"></i></span>
                                </li>
                            <?php } ?>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>