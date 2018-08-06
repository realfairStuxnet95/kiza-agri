<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/kiza/views/utils/system_header.php';
?>
<body class="disable_transitions sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <?php include 'views/utils/navigation.php'; ?>
    <!-- main header end -->
    <!-- main sidebar -->
    <?php include 'views/utils/sidebar.php'; ?>
    <!-- main sidebar end -->

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">
                Ubutumwa bya Koperative :<?php echo $cooperativeName; ?>
            </h3>
            <!-- statistics (small charts) -->
            <?php include 'coo_crops/add_modal.php'; ?>
            <?php include 'views/communication/message_statistics.php'; ?>
            <?php 
            //get number of messages
            $cooperativeMessages=$cooperative->loadCooperativeMessages($cooperativeId);
            if(count($cooperativeMessages)>0){
                include_once 'views/communication/load_messages.php';
            }else{
                ?>
                <div style="background: #dd4422;" class="uk-alert uk-alert-large" data-uk-alert>
                    <h4 class="heading_b">Nta makuru ahari</h4>
                    <?php 
                    echo $errors->no_message();
                    ?>
                </div>
                <?php
            }
            //var_dump($cooperativeMessages);
            ?>
        </div>
    </div>
    <?php include 'views/utils/data_scripts.php'; ?>
    <?php include 'views/utils/my_scripts.php'; ?>
</body>
</html>