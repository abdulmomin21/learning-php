<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        /* Loader styles */
        #windowLoader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            z-index: 9999;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .spinner {
            border: 6px solid #f3f3f3;
            border-top: 6px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 pt-4 mt-4 border border-success">
                <h3 class="text-center p-2 m-2 bg-success text-white">usser information</h3>
                <table class='table table-success'>
                    <tr>
                        <td>id</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>number</td>
                        <td>password</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    require 'connection.php';
                    $rows = mysqli_query($conn, "SELECT *FROM crud");
                    ?>
                    <?php foreach ($rows as $row) : ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["number"]; ?></td>
                            <td><?php echo $row["password"]; ?></td>
                            <td>
                                <a href="editing.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <button type="button" onclick="submitData(<?php echo $row['id']; ?>);">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>



    <div id="windowLoader">
        <div class="spinner"></div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Fullscreen Loader -->
    <div id="windowLoader">
        <div class="spinner"></div>
    </div>


    <script type="text/javascript">
        // function submitData(action) {
        //     // No need for $(document).ready() inside this function
        //     var data = {
        //         action: action,
        //         id: $("#id").val(),
        //         name: $("#name").val(),
        //         email: $("#email").val(),
        //         number: $("#number").val(),
        //         password: $("#password").val(),
        //     };

        //     $.ajax({
        //         url: 'function.php',
        //         type: 'POST',
        //         data: data,
        //         beforeSend: function() {
        //             $("#windowLoader").css("display", "flex");
        //         },
        //         success: function(response) {
        //             alert(response);
        //             if (response === "Deleted Succesfully") {
        //                 $("#" + action).hide(); 
        //                 location.reload();

        //             }
        //         },
        //         complete: function() {
        //             $("#windowLoader").hide();
        //         }
        //     });
        // }

        function submitData(id) {
            var data = {
                action: "delete",
                id: id
            };

            $.ajax({
                url: 'function.php',
                type: 'POST',
                data: data,
                beforeSend: function() {
                    $("#windowLoader").css("display", "flex");
                },
                success: function(response) {
                    alert(response);
                    if (response.trim() === "Deleted Successfully") {
                        location.reload();
                    }

                },
                complete: function() {
                    $("#windowLoader").hide();
                }
            });
        }
    </script>
    <a href="adding.php">add</a>
    <?php
    // require 'jsscript.php'; 
    ?>


</body>

</html>