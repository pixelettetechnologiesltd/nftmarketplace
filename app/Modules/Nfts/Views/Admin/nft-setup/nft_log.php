

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fs-17 font-weight-600 mb-0"></h6>
                    </div>
                    <div class="text-right">
                        <div class="actions">
                            <a href="#" class="action-item"><i class="ti-reload"></i></a>
                        </div>
                    </div>
                </div>
            </div>          
            <div class="card-body">
                <div class="table-responsive">
                    <table id="ajaxtable" class="table  table-bordered table-striped table-hover">
                       <thead>
                            <tr> 
                                <th><?php echo display('NFT Name') ?></th> 
                                <th width="320px"><?php echo display('NFT ID') ?></th> 
                                <th><?php echo display('NFT Owner') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                        <?php  foreach($result as $results){ ?>
                        <tr role="row" class="odd">
                        <td><?php echo $results->name;  ?></td>
                        <td><?php echo $results->nft_id;  ?></td>
                        <td><?php echo $results->username;  ?></td>
                          </tr>
                      <?php   }   ?>
                        </tbody>
                      
                    </table> 
                </div>
             
            </div> 
        </div>
    </div>
</div>

<script src="<?php echo base_url("public/assets/plugins/datatables/dataTables.min.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/dataTables.bootstrap4.min.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/dataTables.responsive.min.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/responsive.bootstrap4.min.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/dataTables.buttons.min.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/buttons.bootstrap4.min.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/jszip.min.js") ?>"></script>

<script src="<?php echo base_url("public/assets/plugins/datatables/pdfmake.min.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/vfs_fonts.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/buttons.html5.min.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/buttons.print.min.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/buttons.colVis.min.js") ?>"></script>
<script src="<?php echo base_url("public/assets/plugins/datatables/data-bootstrap4.active.js") ?>"></script>
<script src="<?php echo base_url("app/Modules/User/Assets/Admin/js/custom.js") ?>"></script>