  <!-- BEGIN CONTENT -->
  <div class="page-wrapper">

    <!-- BEGIN PAGE TITLE -->
    <div class="page-title dash">
      <h3>Berkas Laporan</h3>
    </div> 
    <!-- END OF PAGE TITLE -->

    <!-- BEGIN BREADCRUMB -->
    <ol class="breadcrumb dash">
      <li><a href="<?php echo base_url().'dashboard/insight';?>">Halaman Utama</a></li>
      <li class="active">Berkas Laporan</li>
    </ol>
    <!-- END OF BREADCRUMB -->

    <div class="row">
      <!-- BEGIN PORTLET -->
      <div class="col-md-12">
        <div class="portlet box blue-hoki">
          <!-- PORTLET TITLE -->
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-lg fa-file"></i>Berkas Laporan PKL
            </div>
          </div>
          <!-- END PORTLET TITLE -->
          <!-- PORTLET BODY -->
          <div class="portlet-body">
          	<!-- BEGIN TABLE TOOLBAR -->
          	<div class="table-toolbar">
          	  <div class="row">
          	  </div>
          	</div>
          	<!-- END TABLE TOOLBAR -->
          	<!-- BEGIN TABLE -->
          	<table class="table table-striped table-bordered table-hover" id="berkas">
          		<thead>
          		  <tr>
          			<th class="center">No</th>
          			<th class="center">ID Member</th>
          			<th class="center">Nama</th>
          			<th class="center">Instansi</th>
          			<th class="center">Jenis</th> 
          			<th class="center" width="50">Proposal</th>
          			<th class="center" width="50">Absensi</th>
          			<th class="center" width="50">Laporan</th>
          			<th class="center" width="50">SK Pembimbing</th>          				
          		  </tr>
          		</thead>
          		<tbody>
          		  <tr>
          		  	<td class="center"></td>
          		  	<td class="center"></td>
          		  	<td class="center"></td>
          		  	<td class="center"></td>
          		  	<td class="center"></td>
          		  	<td class="center">
          		  		<span class="badge badge-primary" style="height:25px"><i class="fa fa-check"></i></span>
          		  	</td>
          		  	<td class="center">
          		  		<span class="badge badge-danger" style="height:25px"><i class="fa fa-times"></i></span>
          		  	</td>
          		  	<td class="center">
          		  		<span class="badge badge-primary" style="height:25px"><i class="fa fa-check"></i></span>
          		  	</td>
          		  	<td class="center">
          		  		<span class="badge badge-danger" style="height:25px"><i class="fa fa-times"></i></span>
          		  	</td>
          		  </tr>          			
          		</tbody>
          	</table>
          	<!-- END OF TABLE -->

          </div>  
          <!-- END PORTLET BODY -->
        </div>  
      </div>     
      <!-- END OF PORTLET -->
      <!-- BEGIN PORTLET -->
      <!-- <div class="col-md-5">
        <div class="portlet box red">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-upload"></i>Upload Berkas
            </div>
          </div>
          <div class="portlet-body">   -->
            <!-- BEGIN TABLE -->
            <!-- <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <a href="">
                    <button class="btn btn-warning"><i class="fa fa-download"></i></button>
                    </a> 
                  </td>
                </tr>
            </table> -->
            <!-- END OF TABLE -->
            <!-- BEGIN FORM -->           
            <!-- <form action=""  method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="file" name="proposal" class="form-control">
                <p class="help-block">File type .pdf, max file 700 kb.</p>
              </div>
              <input type="submit" class="btn btn-success btn-block" name="tb_upload" value="Upload">
            </form> -->
            
            <!-- END OF FORM -->
          <!-- </div>
        </div>                
      </div> -->
      <!-- END OF PORTLET --> 
    <!-- </div> -->
    <!-- END OF ROW -->
  </div>  
  <!-- END OF CONTENT -->
</div>  
<!-- END OF PAGE -->