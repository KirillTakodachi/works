<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php $human = [
                                [
                                    "preveu" => "sunny.png",
                                    "alt_name" => "Sunny A.",
                                    "skill" => "Sunny A. (UI/UX Expert)",
                                    "cont_name" => "Sunny",
                                    "link" => "myplaneticket",
                                    "status" => "Lead Author",
                                ],
                                [
                                    "preveu" => "josh.png",
                                    "name" => "Jos K. (ASP.NET Developer)",
                                    "alt_name" => "Jos K.",
                                    "cont_name" => "Jos",
                                    "link" => "atlantez",
                                    "status" => "Partner &amp; Contributor",
                                ],
                                [
                                    "preveu" => "jovanni.png",
                                    "name" => "Jovanni L. (PHP Developer)",
                                    "alt_name" => "Jovanni Lo",
                                    "cont_name" => "Jovanni",
                                    "status" => "Partner &amp; Contributor",
                                    "link" => "lodev09",
                                ],
                                [
                                    "preveu" => "roberto.png",
                                    "name" => "Roberto R. (Rails Developer)",
                                    "alt_name" => "Roberto R.",
                                    "cont_name" => "Roberto",
                                    "link" => "sildur",
                                    "status" => "Partner &amp; Contributor",
                                ],
                            ]; ?>
                            <?php foreach ($human as $data => $value) { ?>
                                    <div class="<?php if ($value["cont_name"] == "Jovanni" || "Roberto") {echo "banned";}?>rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                        <img src="img/demo/authors/<?php echo $value["preveu"];?>" alt="<?php echo $value["alt_name"];?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                        <div class="ml-2 mr-3">
                                            <h5 class="m-0">
                                                <?php echo $value["name"]?>
                                                <small class="m-0 fw-300">
                                                    <?php echo $value["skill"] ?>
                                                </small>
                                            </h5>
                                            <a href="https://twitter.com/@<?php echo $value["link"] ?>" class="text-info fs-sm" target="_blank">@<?php echo $value["link"] ?></a> -
                                            <a href="https://wrapbootstrap.com/user/<?php echo $value["link"] ?>" class=" text-info fs-sm" target="_blank" title="Contact <?php echo $value["cont_name"] ?>"><i class="fal fa-envelope"></i></a>
                                        </div>
                                    </div>
                                <?php }; ?>
                                <!-- <div class="banned rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                    <img src="img/demo/authors/roberto.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                    <div class="ml-2 mr-3">
                                        <h5 class="m-0">
                                            Roberto R. (Rails Developer)
                                            <small class="m-0 fw-300">
                                                Partner &amp; Contributor
                                            </small>
                                        </h5>
                                        <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> -
                                        <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank" title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>