<?

require_once("../src/adapter/EventsAdapterall.php");

use Church\controllers\EventsControllers;

$controller_events = new EventsControllers();

$result = $controller_events->all_events_igreja();
foreach ($result as $key => $value) {


?>
<div class="row d-flex justify-align-center align-items-center">
            <div class="col-xl-8 col-lg-8 col-md-6 event-card mb-5">
                <div class="row py-3">
                    <div class="col-xl-4 col-lg-4 recent-img">
                        <img src="../<?= $value["image"] ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <article>
                            <h3><?= $value["name"] ?></h3>
                            <p>
                            <?= $value["description"] ?>
                            </p>
                            <button type="button" class="btn btn-style-2 ml-0">view event</button>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 event-line">
                <article>
                    <p><?= $value["updatecreate"] ?></p>
                    <h3></h3>
                </article>
            </div>
        </div>

<?
    }

?>