<?php
$cookie_name = "user";
$cookie_value = "ee11cbb19052e40b07aac0ca060c23ee";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Get My Cookies</title>
</head>

<body>
    <center>
        
        <div style="width: 500px; margin-top: 200px;">

            <?php
                if(isset($_COOKIE[$cookie_name])) {
                    $value = $_COOKIE[$cookie_name];
                    if ($value == "21232f297a57a5a743894a0e4a801fc3") {
                        echo "SELAMAT DATANG, ADMIN";
                        $flag = "LKS69{G3t_M3_C00k13s!}";
                    } else {
                        echo "ANDA BUKAN ADMIN, SILAHKAN KELUAR!";
                        $flag = "Just Kidding Brouh :P ";
                    }
                } else{
                    echo "Error";
                }
            ?>
            <br><br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Get Flag For Free
            </button><br>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">There Your Flag</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="modal-body">
                            <?php echo $flag; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>
</body>

</html>