<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Legality
            <small>create new legality</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active">New Legality</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Legality</h3>
                    </div>


                    <form role="form" action="<?php echo base_url('masters/legality/save') ?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Legality *</label>
                                <input type="hidden" name="id" value="<?php if(isset($object)) echo $object->id ?>">
                                <input type="text" class="form-control" name="name" id="legalityName" placeholder="Legality" value="<?php if(isset($object)) echo $object->name ?>" required="required">
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" onclick="freeze()"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        //
    });
</script>