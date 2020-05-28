<!DOCTYPE html>
<html>
<head>
<?php
$pageTitle = "Staff";
include '../inc/header.php';
?>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="team.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">


</head>
<body>
<?php include '../inc/navbar.php'; ?>

<!-- Content -->
<div class="container" id="content">
    <div class="row">
        <div class="col-md-12">
            <img src="../assets/img/logo.png" class="content-logo">
        </div>
    </div>
</div>
<!-- ---- -->

<!-- Users -->

<div class="container-fluid" id="users">
    <div class="row">
        <?php
        $adminIgnore = array('6314bea3-0a42-4845-a1cc-16f2cba1361e', '85f4b494-efbf-4d76-a8a9-ff896fb687ba', 'e2acdc6d-8ebc-4c90-8e4a-89c6b27fdcac');
        $devIgnore = array('9fe5b38f-5215-4014-9578-282f0b03207e', '6851a11a-9125-4425-8fe5-5c3e56bae33c', '28e1808f-2429-34be-a114-580eb7260ec1', '7db23df4-2c20-360f-824a-4620f36eed71', '8abc95fe-24d7-3937-af55-e27d0b011af1');

        $json = 'https://api.spleefleague.com/staff';
        $content = file_get_contents($json);
        $json = json_decode($content, true);


        echo '<h1 class="user-title" style="color: rgb(108, 0, 0);">Admins</h1> <div class="col-md-12">';

        foreach ($json['ranks'] as $result) {
            if ($result['rank'] == "ADMIN" && !in_array($result['uuid'], $adminIgnore)) {
                echo '<div class="user"><img class="user-avatar" src="https://crafatar.com/avatars/', $result['uuid'], '?size=100&overlay"/>',
                '<h3 class="user-name">', $result['username'], '</h3> </div>';
            }
        }

        echo '<h1 class="user-title" style="color: rgb(0, 74, 205);">Developers</h1> <div class="col-md-12">';

        foreach ($json['ranks'] as $result) {
            if ($result['rank'] == "DEVELOPER" && !in_array($result['uuid'], $devIgnore)) {
                echo '<div class="user"><img class="user-avatar" src="https://crafatar.com/avatars/', $result['uuid'], '?size=100&overlay"/>',
                '<h3 class="user-name">', $result['username'], '</h3> </div>';
            }
        }

        echo '<h1 class="user-title" style="color: rgb(205, 0, 0);">Moderators</h1><div class="col-md-12">';


        foreach ($json['ranks'] as $result) {

            if ($result['rank'] == "MODERATOR") {
                echo '<div class="user"><img class="user-avatar" src="https://crafatar.com/avatars/', $result['uuid'], '?size=100&overlay"/>',
                '<h3 class="user-name">', $result['username'], '</h3> </div>';
            }
        }
        ?>
    </div>
</div>
<!-- ---- -->

<?php include '../inc/footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="team.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>