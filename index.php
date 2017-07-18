<?php
require 'config.php';
?>
    <html>

    <head>
        <title>Search Movies</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <style>
            .glyphicon {
                left: 380px !important;
            }

            .list_item_container {
                width: 300px;
                height: 60px;
                padding: 5px 0;
            }

            .image {
                width: 60px;
                height: 60px;
                margin-right: 10px;
                float: left;
            }

            .description {
                font-style: italic;
                font-size: 0.8em;
                color: gray;
            }

            .label,
            .description {
                color: #000;
            }
        </style>
    </head>

    <body>
        <form method="GET" action="index.php">
            <div class="ui-widget" align="center" style="margin-top:120px;">
                <label for="term">Movies: </label>
                <span class="glyphicon glyphicon-search"></span>
                <input name="term" id="term" placeholder="Search" size="40" style="border: 2px solid #a1a1a1;">
            </div>
        </form>



        <?php

if(!empty($_GET)){
$term = $_GET['term'];
$obj = new Config();
$jsonresponse = $obj->CURL($term);
?>

            <div>
                <table align="center">
                    <tr>
                        <td><a href="<?php echo $base_url.'details.php?term='.$jsonresponse['Title']; ?>"><img src="<?php echo $jsonresponse['Poster']; ?>" alt="<?php echo $jsonresponse['Title']; ?>" height="100" width="100"></a></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="<?php echo $base_url.'details.php?term='.$jsonresponse['Title']; ?>">
                                <?php echo $jsonresponse['Title']; ?>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>

            <?php } ?>





    </body>

    </html>

    <script>
        $(function() {
            var baseurl = '<?php echo $base_url; ?>';
            $("#term").autocomplete({
                source: "search.php",
                minLength: 3,
            }).data("ui-autocomplete")._renderItem = function(ul, item) {
                var inner_html = '<a href="' + item.detailurl + '"><div class="list_item_container"><div class="image"><img width="60" height="60" src="' + item.thumbnail + '"></div><div class="label">' + item.label + '</div><div class="description"></div></div></a>';
                return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append(inner_html)
                    .appendTo(ul);
            };

        });
    </script>