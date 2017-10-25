<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('sess/wrong');
}

 ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php $this->load->view('section/user/user_head');?>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php $this->load->view('section/user/user_header');?>
                <?php $this->load->view('section/user/user_side');?>

                    <!-- Page Content -->
                    <?php echo $content_get;?>
                        <!-- End Content -->
                        <?php $this->load->view('section/user/user_footer');?>
        </div>
        <?php $this->load->view('section/user/user_core');?>
    </body>

    </html>
