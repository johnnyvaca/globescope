<!--
Auteurs : Kevin Vaucher et Johnny Vaca
Projet : Projet Web Globescope
Date : 16.03.2020
-->

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="images/favicon.ico">
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/style.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/sideBarStyle.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/searchBar.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/searchResults.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/helpStyle.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/progressBar.css?d=<?php echo time(); ?>">

    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-reboot.css" rel="stylesheet">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</head>
<body>
<?= $content ?>
<script src="js/three.min.js"></script>
<script src="js/three/controls/OrbitControls.js"></script>
<script src="js/three/loaders/DDSLoader.js"></script>
<script src="js/loader.js"></script>
<script src="js/searchChild.js"></script>
<script src="js/childClicked.js"></script>
<script src="js/Tween.js"></script>
<script type="application/x-glsl" id="sky-vertex">
varying vec2 vUV;
void main() {
    vUV = uv;
    vec4 pos = vec4(position, 1.0);
    gl_Position = projectionMatrix * modelViewMatrix * pos;
}
</script>
<script type="application/x-glsl" id="sky-fragment">
uniform sampler2D texture;
varying vec2 vUV;

void main() {
    vec4 sample = texture2D(texture, vUV);
    gl_FragColor = vec4(sample.xyz, sample.w);
}
</script>

<script src="/js/globescope.js"></script>
</body>
</html>
