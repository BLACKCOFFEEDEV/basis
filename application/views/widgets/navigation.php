<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>

            <?php foreach ($items as $item) : ?>
            <li class="treeview">
                <?php if(is_parent($item->id) > 0) : ?>
                <a href="#">
                    <i class="fa <?php echo $item->icon ?>"></i> <span><?php echo $item->label ?></span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php foreach (get_child($item->id) as $child): ?>
                    <li><a href="<?php echo base_url($child->link) ?>"><i class="fa <?php echo $child->icon ?>"></i> <?php echo $child->label ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <?php else: ?>
            <li class="active"><a href="<?php echo base_url($item->link) ?>"><i class="fa <?php echo $item->icon ?>"></i> <span><?php echo $item->label ?></span></a></li>
            <?php endif; ?>
            <?php endforeach; ?>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Form Member</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="add_member"><i class="fa fa-circle-o"></i> Registrasi Member</a></li>
                    <li><a href="list_member"><i class="fa fa-circle-o"></i>Data Member</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Summary</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Pemohon</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Data Baru</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Tertunda</a></li>
                </ul>
            </li>

            <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>