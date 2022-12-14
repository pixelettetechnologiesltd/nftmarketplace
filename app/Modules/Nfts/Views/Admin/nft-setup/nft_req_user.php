<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                </div>
            </div>            
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table  table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('Name'); ?></th>
                                <th><?php echo display('VAT Number'); ?></th>
                                <th><?php echo display('Email'); ?></th>
                                <th><?php echo display('Phone'); ?></th> 
                                <th><?php echo display('Project scope'); ?></th>
                                <th><?php echo display('Reason to Create a Project'); ?></th>
                                <th><?php echo display('status') ?></th>
                                <th><?php echo display('Action') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  foreach($users as $user) {  ?>
                            <tr>
                            
                                <td><?php echo $user->name;  ?></td>
                                <td><?php echo $user->vat_number;  ?></td>
                                <td><?php echo $user->email;  ?></td>
                                <td><?php echo $user->phone;  ?></td>
                                <td><?php echo $user->project_scope;  ?></td>
                                <td><?php echo $user->reason_to_create_project;?></td>
                                <td style="color:black"    id="notApproved"><?php  if($user->nft_status==0){ echo "Not Active"; } else { echo "Active";} ?> </td>
                                <td><?php if($user->nft_status==0){  ?><a href="<?php echo base_url("backend/nft/approved/$user->id")  ?>" class="btn btn-info btn-sm" title="Admin">Approve</a> <?php  } else{ null;} ?></td>                                  
                            </tr>
                          <?php  }   ?>
                        </tbody>
                    </table>
                </div>  
                </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url("app/Modules/Nfts/Assets/Admin/js/status.js") ?>"></script>


 