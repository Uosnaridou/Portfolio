
    <?php 
    if (isset($_SESSION["id"])) {?>
        <a id="connectionAdmin" href="index.php?page=pageAdmin">
            <i class="fas fa-lock"></i>
        </a>
    <?php }else{ ?>
        <a id="connectionAdmin" href="index.php?page=connexionAdmin">
            <i class="fas fa-lock"></i>
        </a>
    <?php } ?>
