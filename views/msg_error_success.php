<?php
session_start();
if (isset($_SESSION['success'])): ?>
    <div class="msg">
    <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
        ?>
    </div>
<?php endif ?>
<?php if (isset($_SESSION['error'])): ?>
    <div class="err">
        <?php 
            echo $_SESSION['error']; 
            unset($_SESSION['error']);
        ?>
    </div>
<?php endif ?>


<!-- index msg-success-error  -->
<?php if (isset(($_GET['s']))): ?>
    <div class="msg">
        <?php 
        $success = base64_decode($_GET['s']);
        echo $success; 
        unset($success);
        ?>
    </div>
<?php endif ?>
<?php if (isset(($_GET['e']))): ?>
    <div class="err">
        <?php 
            $error = base64_decode($_GET['e']);
            echo $error; 
            unset($error);
        ?>
    </div>
<?php endif ?>