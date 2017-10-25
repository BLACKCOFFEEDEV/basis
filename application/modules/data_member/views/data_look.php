<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        List Data Member
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#">Form Member</a></li>
            <li class="active">Data Member</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- Other Box table--
            <div class="box"></div>-->
                <!-- /.box -->

                <div class="box">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Tempat</th>
                                    <th>Alamat</th>
                                    <th>Latitud</th>
                                    <th>Longitud</th>
                                    <th>Tipe</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if ($fetch_data->num_rows() > 0){
                                    foreach($fetch_data->result() as $row){
                            ?>

                                    <tr>
                                        <td>
                                            <?php echo $row->marker_name;?>
                                        </td>
                                        <td>
                                            <?php echo $row->marker_address;?>
                                        </td>
                                        <td>
                                            <?php echo $row->marker_lat;?>
                                        </td>
                                        <td>
                                            <?php echo $row->marker_lng;?>
                                        </td>
                                        <td>
                                            <?php echo $row->marker_type;?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-success btn-xs">Confirm</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger btn-xs">Suspend</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-warning btn-xs">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger btn-xs">Delete</button>
                                        </td>
                                    </tr>

                                    <?
                                    }
                                }
                            ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Tempat</th>
                                    <th>Alamat</th>
                                    <th>Latitud</th>
                                    <th>Longitud</th>
                                    <th>Tipe</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
