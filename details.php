<?php
require 'config.php';
$term = $_GET['term'];
$obj = new Config();
$jsonresponse = $obj->CURL($term);
//$json = json_encode($jsonresponse);
?>

    <div align="center" style="margin-top:100px;">
        <h1>Movie Details</h1>
        <?php
if(!empty($jsonresponse)){ ?>
            <table style="width:40%">
                <tr>
                    <th>Title:</th>
                    <td>
                        <?php echo $jsonresponse['Title']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Year:</th>
                    <td>
                        <?php echo $jsonresponse['Year']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Rated:</th>
                    <td>
                        <?php echo $jsonresponse['Rated']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Runtime:</th>
                    <td>
                        <?php echo $jsonresponse['Runtime']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Genre:</th>
                    <td>
                        <?php echo $jsonresponse['Genre']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Director:</th>
                    <td>
                        <?php echo $jsonresponse['Director']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Writer:</th>
                    <td>
                        <?php echo $jsonresponse['Writer']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Actors:</th>
                    <td>
                        <?php echo $jsonresponse['Actors']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Plot:</th>
                    <td>
                        <?php echo $jsonresponse['Plot']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Language:</th>
                    <td>
                        <?php echo $jsonresponse['Language']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Country:</th>
                    <td>
                        <?php echo $jsonresponse['Country']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Poster:</th>
                    <td>
                        <img src="<?php echo $jsonresponse['Poster']; ?>" alt="<?php echo $jsonresponse['Title']; ?>" height="60" width="60">
                    </td>
                </tr>
                <tr>
                    <th>Metascore:</th>
                    <td>
                        <?php echo $jsonresponse['Metascore']; ?>
                    </td>
                </tr>
                <tr>
                    <th>imdbRating:</th>
                    <td>
                        <?php echo $jsonresponse['imdbRating']; ?>
                    </td>
                </tr>
                <tr>
                    <th>imdbVotes:</th>
                    <td>
                        <?php echo $jsonresponse['imdbVotes']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Type:</th>
                    <td>
                        <?php echo $jsonresponse['Type']; ?>
                    </td>
                </tr>
                <tr>
                    <th>DVD:</th>
                    <td>
                        <?php echo $jsonresponse['DVD']; ?>
                    </td>
                </tr>
                <tr>
                    <th>BoxOffice:</th>
                    <td>
                        <?php echo $jsonresponse['BoxOffice']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Production:</th>
                    <td>
                        <?php echo $jsonresponse['Production']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Website:</th>
                    <td>
                        <?php echo $jsonresponse['Website']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Response:</th>
                    <td>
                        <?php echo $jsonresponse['Response']; ?>
                    </td>
                </tr>
            </table>
            <?php 
} 
else{
	echo 'Movie Details Not Available';
}
?>

    </div>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #EBECEB;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }
    </style>