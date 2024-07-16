<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="adminupload/<?php echo $r;?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $n; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
         
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="admindashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>
			 
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Add Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="addtrain.php"><i class="fa fa-circle-o"></i> Train</a></li>
                <li><a href="addstation.php"><i class="fa fa-circle-o"></i> Station</a></li>
                <li><a href="addroute.php"><i class="fa fa-circle-o"></i> Route</a></li>
				<li><a href="addstate.php"><i class="fa fa-circle-o"></i> State</a></li>
				<li><a href="adddistrict.php"><i class="fa fa-circle-o"></i> District</a></li>
				<li><a href="addtime.php"><i class="fa fa-circle-o"></i>Train Time</a></li>
				<li><a href="addbus.php"><i class="fa fa-circle-o"></i> Bus</a></li>
				<li><a href="addbusstopage.php"><i class="fa fa-circle-o"></i> Stopage</a></li>
				<li><a href="addbusroute.php"><i class="fa fa-circle-o"></i> Bus Route</a></li>
				<li><a href="addbustime.php"><i class="fa fa-circle-o"></i> Bus Time</a></li>
				<li><a href="foodcategory.php"><i class="fa fa-circle-o"></i> Food Category</a></li>
				<li><a href="foodsubcategory.php"><i class="fa fa-circle-o"></i> Sub Food Category</a></li>
				<li><a href="addfood.php"><i class="fa fa-circle-o"></i> Food </a></li>
              </ul>
            </li>
			 <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li><a href="showfoodbooking.php"><i class="fa fa-circle-o"></i>Show All Food Booking</a></li>
              </ul>
            </li>
       
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>