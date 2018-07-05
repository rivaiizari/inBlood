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
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1"><i class="glyphicon glyphicon-user"></i>
          Profil &nbsp;&nbsp;<?php echo $_SESSION['username']; ?>
        </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in listsb " role="tabpanel" aria-labelledby="heading1">
      <!-- sub -->
      <li><a href="?tampil=akun"><i class="glyphicon glyphicon-file"></i>&nbsp;&nbsp;lihat biodata</a></li>
      <li><a href="?tampil=user_edit"><i class="glyphicon glyphicon-random"></i>&nbsp;&nbsp;Ganti Password</a></li>
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
          <li><a href="../../" target="blank"><i class="glyphicon glyphicon-tint"></i>&nbsp;&nbsp;Preview</a></li>
          <li><a onclick="return konfirmasiexit()"href="?tampil=keluar"><i class="glyphicon glyphicon-off"></i>&nbsp;&nbsp;Log Out</a></li>
      </div>
    </div>
  </div>
</div>


