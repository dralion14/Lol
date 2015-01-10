<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>League of Legends</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" type="text/css" href="css/summoner.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script>
        function buscar(nombre){
            var parametros = {
                "nombre" : nombre
            };

            $.ajax({
                data:  parametros,
                url:   'search.php',
                type:  'post',
                beforeSend: function () {
                    text = '<div id="image-loader">Buscando invocador...</div>';
                    $("#result-search").html(text);
                    $("#name").html("");
                },
                success:  function (response) {
                    $("#result-search").html(response);
                }
            });
        }
    </script>
</head>

<body>
    <div id="container_inner">
        <div>
            <div class="search-container">
                <div class="suggestive-search-container">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input autofocus="autofocus" type="text" id="name" name="name" autocomplete="off" placeholder="Nombre invocador..." value="" tabindex="0">
                    <div class="tselect-container" style="position: absolute; right: 92px;top: 2px; z-index: 11001; display: inline-block;">
                        <input type="hidden" name="region" value="LAS">
                        <ul class="tester" style="">
                            <li style="display: list-item;">LAS</li>
                            <li data-tselect-selected-label="NA" data-tselect-value="NA" style="display: none;">North America</li>
                            <li data-tselect-selected-label="EUW" data-tselect-value="EUW" style="display: none;">Europe West</li>
                            <li data-tselect-selected-label="EUNE" data-tselect-value="EUNE" style="display: none;">Europe Nordic &amp; East</li>
                            <li data-tselect-selected-label="BR" data-tselect-value="BR" style="display: none;">Brazil</li>
                            <li data-tselect-selected-label="TR" data-tselect-value="TR" style="display: none;">Turkey</li>
                            <li data-tselect-selected-label="RU" data-tselect-value="RU" style="display: none;">Russia</li>
                            <li data-tselect-selected-label="LAN" data-tselect-value="LAN" style="display: none;">Latin America North</li>
                            <li data-tselect-selected-label="LAS" data-tselect-value="LAS" style="display: none;">Latin America South</li>
                            <li data-tselect-selected-label="OCE" data-tselect-value="OCE" style="display: none;">Oceania</li>
                        </ul>
                    </div>
                    <button name="submit" style="float: right; width: 90px; height: 30px;line-height: normal;" onclick="buscar($('#name').val());return false;">Buscar</button>
                </form>

                <ul class="search-suggestions-container" style="display: none;"></ul>
                <img id="select-your-region-callout" style="display: none; position: absolute; right: 118px; top: 100%; margin-top: -2px;" src="//lkimg.zamimg.com/images/select-your-region.png">
            </div>
            </div>
        </div>
        <div id="result-search">
        </div>
    </div>
</body>
</html>