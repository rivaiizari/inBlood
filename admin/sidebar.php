<script type="text/javascript" language="JavaScript">
    function konfirmasiexit(){
      tanya = confirm("Anda Yakin keluar dari sini?");
      if (tanya == true) return true;
      else return false;
    }</script>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading1">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1"><i class="glyphicon glyphicon-file"></i>
          POST
        </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in listsb " role="tabpanel" aria-labelledby="heading1">
      <!-- sub -->
      <li><a href="?tampil=artikel"><i class="glyphicon glyphicon-file"></i>&nbsp;&nbsp;artikel</a></li>
      <li><a href="?tampil=galeri"><i class="glyphicon glyphicon-file"></i>&nbsp;&nbsp;galeri</a></li>
      <li><a href="?tampil=slide"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;slide</a></li>
    </div>
  </div>
  <!-- COL2 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading2">
      <h4 class="panel-title">
        <a class="collapsed glyphicon glyphicon-th-list" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
        NAV
        </a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse listsb" role="tabpanel" aria-labelledby="heading2">
      <div class="panel-body listsb">
        <li><a href="?tampil=menu"><i class="glyphicon glyphicon-file"></i>&nbsp;&nbsp;new menu</a></li>
        <li><a href="?tampil=submenu"><i class="glyphicon glyphicon-file"></i>&nbsp;&nbsp;sub menu</a></li>
        <li><a href="?tampil=halaman"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;halaman</a></li>
      </div>
    </div>
  </div>
  <!-- COL3 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading3">
      <h4 class="panel-title">
        <a class="collapsed glyphicon glyphicon-user" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
        ACCOUNT
        </a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse" role="tabpanel " aria-labelledby="heading3">
      <div class="panel-body listsb">
          <li><a href="?tampil=admin"><i class="glyphicon glyphicon-tags"></i>&nbsp;&nbsp;Admin</a></li>
          <li><a href="?tampil=operator"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;Operator</a></li>
          <li><a href="?tampil=akun"><i class="glyphicon glyphicon-file"></i>&nbsp;&nbsp;User</a></li>
      </div>
    </div>
  </div>

<!-- col4 -->
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading4">
      <h4 class="panel-title">
        <a class="collapsed glyphicon glyphicon-th-list" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
        Darah UTD
        </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpane4" aria-labelledby="heading4">
      <div class="panel-body listsb">
        <li><a href="?tampil=utdrs"><i class="glyphicon glyphicon-tags"></i>&nbsp;&nbsp;Rumahsakit</a></li>
        <li><a href="?tampil=utdprof"><i class="glyphicon glyphicon-tags"></i>&nbsp;&nbsp;Profinsi</a></li>
        <li><a href="?tampil=pesan"><i class="glyphicon glyphicon-tags"></i>&nbsp;&nbsp;Chatt</a></li>
      </div>
    </div>
  </div>


     
    <!-- col last -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingLast">
      <h4 class="panel-title">
        <a class="collapsed glyphicon glyphicon-cog" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseLast" aria-expanded="false" aria-controls="collapseLast">
          SETTING
        </a>
      </h4>
    </div>
    
    <div id="collapseLast" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLast">
      <div class="panel-body listsb">
          <li><a href="?tampil=user_edit"><i class="glyphicon glyphicon-random"></i>&nbsp;&nbsp;Ganti Password</a></li>
          <li><a onclick="return konfirmasiexit()"href="?tampil=keluar"><i class="glyphicon glyphicon-off"></i>&nbsp;&nbsp;Log Out</a></li>
      </div>
    </div>
  </div>
</div>


