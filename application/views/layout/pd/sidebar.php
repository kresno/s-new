        <!-- ===== Left-Sidebar ===== -->
        <aside class="sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div class="profile-image">
                            <img src="<?php echo base_url('public/plugins/images/users/foto.png'); ?>" alt="user-img" class="img-circle">
                            <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-danger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                        </div>
                        <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> Pemerintah Kab. Sukabumi</a></p>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="side-menu">
                        <li>
                            <a class="waves-effect" href="<?php echo base_url('index.php/pd/dashboard'); ?>" aria-expanded="false"><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu"> Dashboard </span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="<?php echo base_url('index.php/pd/program'); ?>" aria-expanded="false"><i class="icon-notebook fa-fw"></i> <span class="hide-menu"> Program </span></a>
                        </li>
                        <li>
                            <a class="waves-effect" href="<?php echo base_url('index.php/pd/kegiatan'); ?>" aria-expanded="false"><i class="icon-envelope-letter fa-fw"></i> <span class="hide-menu"> Kegiatan </span></a>
                        </li>
                        <!-- <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-equalizer fa-fw"></i> <span class="hide-menu"> Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('index.php/pd/laporan/tri_satu'); ?>">Triwulan I</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- ===== Left-Sidebar-End ===== -->