<?php
    $mem = [
        "mem1" => ["name"=> "Justin Nalog","date"=>"8/7/24","file"=>"./justin/justin.php","rep"=>"Miles Delfino"],
        "mem2" => ["name"=> "Chelzie Taño","date"=>"8/7/24","file"=>"./chi/info.php","rep"=>"Jergi Villanueva"],
        "mem3" => ["name"=> "Gabby Evangelista","date"=>"8/19/24","file"=>"./Gab/JohnGab.php","rep"=>"Palma Caleb"],
        "mem4" => ["name"=> "Karlfren Valdez","date"=>"8/19/24","file"=>"./Karlfren/about_me.php","rep"=>"Joaquin Ramos"]
        
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>

    <div id="h">Former Members History</div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend+Peta:wght@100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap');
        *{
            margin: 0;
        }body{
            background-color: #fff5ed;
        }
        #h{
            color: #733e12;
            background-color: #faddb7;
            font-size: 75px;
            font-family: "Major Mono Display", monospace;
            margin-top: 3%;
            text-align: center;
        }#box{
            background-color: #E89E5D;
            height: 400px;
            width: 900px;
            border-radius: 50px;
            position: absolute;
            margin-top:5%;
            margin-right: 15%;
            margin-left: 20%;
        }
        th {
            font-size: 24px;
            text-align: center;
            border-bottom: 4px solid #B46824 ;
        }td{
            text-align: center;
            font-weight: 600;
            font-size: 20px;
            border-bottom: 2px solid #B46824 ;
        }
        .tablea{
            text-decoration: none;
            color: white;
        }.tablea:hover{
            color: #8C470A;
            background-color: #faddb7;
            text-shadow: none;
        }#table{
            margin-top: 3%;
            margin-left: auto;
            margin-right: auto;
            overflow: scroll;
            border-collapse: collapse ;
        }#table,th,td{
            font-family: "lexend peta";
            font-weight: 250;
            font-size: 15px;
            color: white;
            text-shadow: 1px 1px #B46824 ;
            
        }#home,#h2{
            font-family: 'Courier New';
            color: #733e12;
            text-align: center;
            margin-top: 500px;
            font-weight: 900;
            font-size: 25px;
            text-decoration: none;
            padding: 15px;
            border-radius: 30px/30px;
            transition: 0.2s;
        }#h2:hover{
            background-color:rgb(180, 104, 36 ,0.5);
            color: white;
            font-size: 28px;
        }

    </style>
</head>


<body>
        <div id="box">
            <table id="table" style= "width: 80%;">
                <tr>
                    <th>Member Name</th>
                    <th>Date</th>
                    <th>Work</th>
                    <th>Replaced by</th>
                </tr>

                <tr>
                    <td><?= $mem ["mem3"]["name"]?></td>
                    <td><?= $mem ["mem3"]["date"]?></td>
                    <td> 
                        <a class="tablea" href="<?= $mem ["mem3"]["file"]?>"> Gab's file</a>
                     </td>
                    <td><?= $mem ["mem3"]["rep"]?></td>
                </tr>

                <tr>
                    <td><?= $mem ["mem4"]["name"]?></td>
                    <td><?= $mem ["mem4"]["date"]?></td>
                    <td> 
                        <a class="tablea" href="<?= $mem ["mem4"]["file"]?>">Karlfren's file</a>
                     </td>
                    <td><?= $mem ["mem4"]["rep"]?></td>
                </tr>

                <tr>
                    <td><?= $mem ["mem1"]["name"]?></td>
                    <td><?= $mem ["mem1"]["date"]?></td>
                    <td> <a class="tablea" href="<?= $mem ["mem1"]["file"]?>"> Justin's file</a>
                    </td>
                    <td><?= $mem ["mem1"]["rep"]?></td>
                </tr>

                <tr>
                    <td><?= $mem ["mem2"]["name"]?></td>
                    <td><?= $mem ["mem2"]["date"]?></td>
                    <td> 
                        <a class="tablea" href="<?= $mem ["mem2"]["file"]?>"> Chelzie's file</a>
                     </td>
                    <td><?= $mem ["mem2"]["rep"]?></td>
                </tr>

                
            </table>

        </div>

        <div id="home">
        <a href="../main.php" id="h2" > Click to go back</a>
        </div>
            

</body>
</html>