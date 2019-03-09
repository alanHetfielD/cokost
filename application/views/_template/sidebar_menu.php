<?php

  $menus = array(

    array(

      'menuId' => "home",

      'menuName' => "Home",

      // 'menuPath' => site_url("home"),
      'menuPath' => site_url(""),

      'menuIcon' => "fa fa-file-archive-o"

    ),

    array(

      'menuId' => "kost",

      'menuName' => "Tambah Kost",

      'menuPath' => site_url("kost"),

      'menuIcon' => 'fa fa-plus'

    ),

    array(

      'menuId' => "add",

      'menuName' => "Tambah Kamar",

      'menuPath' => site_url("add"),

      'menuIcon' => 'fa fa-plus'

    )

  );

  $admin = array(

    'menuId' => "admin",

    'menuName' => "4dm1n",

    'menuPath' => site_url("admin"),

    'menuIcon' => 'fa fa-times'

  );

  $log = array(

    'menuId' => "log",

    'menuName' => "log activity",

    'menuPath' => site_url("log"),

    'menuIcon' => 'fa fa-times'

  );



  if( $this->session->userdata('user_level') == 1 ){

    array_push($menus, $admin) ;

    array_push($menus, $log) ;

  }



?>

<script type="text/javascript">

    function a(path){

      console.log(path);

    }

</script>

<script type="text/javascript">

    // function getFilename(fullPath){

    //   // var name= document.getElementById("document_file1").value;

    //   var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));

    //   var filename = fullPath.substring(startIndex);

    //   if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {

    //       filename = filename.substring(1);

    //   }

    //   console.log(filename);



    //   document.getElementById('title1').value = filename.substring(0, filename.indexOf('.'));



    // }

</script>

<script type="text/javascript">

    function menuActive( id ){

        // var a =document.getElementById("menu").children[num-1].className="active";
        if( id == "" )
          var a =document.getElementById("home").className="active";
        else
          var a =document.getElementById(id).className="active";

        console.log(a);

    }

</script>

<div class="main-container ace-save-state" id="main-container">

<script type="text/javascript">

  try{ace.settings.loadState('main-container')}catch(e){}

</script>

<div id="sidebar" class="sidebar responsive ace-save-state">

  <script type="text/javascript">

    try{ace.settings.loadState('sidebar')}catch(e){}

  </script>

  <div class="sidebar-shortcuts" id="sidebar-shortcuts">

    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">

      <img src="<?php echo base_url()?>assets/images/logo/logots.png" height="40px" >

    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">

      <span class="btn btn-success"></span>

      <span class="btn btn-info"></span>

      <span class="btn btn-warning"></span>

      <span class="btn btn-danger"></span>

    </div>

  </div>

  <!-- /.sidebar-shortcuts -->

  <ul id="menu" class="nav nav-list">

    <?php

      foreach($menus as $menu):

    ?>

    <li id="<?php echo $menu['menuId'] ?>">

      <a href="<?php echo $menu['menuPath'] ?>">

      <i class="menu-icon <?php echo $menu['menuIcon'] ?>"></i>

      <span class="menu-text"> <?php echo $menu['menuName'] ?> </span>

      </a>

      <b class="arrow"></b>

    </li>

    <?php

      endforeach;

    ?>

  </ul>

  <!-- /.nav-list -->

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">

    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>

  </div>

</div>



<!-- <br><br><br><br><br> -->

