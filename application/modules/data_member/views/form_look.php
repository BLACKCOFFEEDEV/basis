<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Registrasi Member
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Form Member</a></li>
            <li class="active">Form Registrasi</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Digitasi Luas Bangunan</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php echo Modules::run('map_housing/mapshtmloader_reg');?>

                            <script src="<?php echo base_url(); ?>assets/maps/js/script.js"></script>
                            <form role="form" method="post" action="validation_member">
                                <!-- text input -->

                                <?php
                                if($result == "inserted"){
                                    echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><span class="glyphicon glyphicon-thumbs-up"> SUKSES BRO</span></div>';
                                }elseif($result == "failed"){
                                    echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><span class="glyphicon glyphicon-thumbs-down #00a65a"> GAGAL BRO</span></div>';
                                }
                            ?>

                                    <div class="form-group">

                                        <input class="form-control required" name="marker_name" placeholder="Pemilik" type="text">
                                        <span class="help-block with-errors"><?php echo form_error("marker_name");?></span>

                                    </div>
                                    <div class="form-group">

                                        <textarea class="form-control" name="marker_address" placeholder="Alamat Lokasi"></textarea>
                                        <span class="help-block with-errors"><?php echo form_error("marker_address");?></span>

                                    </div>
                                    <div class="form-group">

                                        <input class="form-control" name="marker_lat" placeholder="Latitude" disabled="" type="text">
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control" name="marker_lng" placeholder="Longitude" disabled="" type="text">
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control" name="marker_type" placeholder="Jenis Izin Lokasi" type="text">
                                        <span class="help-block with-errors"><?php echo form_error("marker_type");?></span>

                                    </div>
                                    <div class="box-footer">
                                        <div class="from-group">
                                            <input type="submit" name="insert" value="Submit" class="btn btn-primary">
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>

                            </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
