<div class="row">
    <div class="col-md-6 col-lg-6 d-flex">
        <div class="card mb-4 flex-fill w-100">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fs-17 font-weight-600 mb-0"><?php echo (!empty($title)?$title:null) ?></h6>
                    </div>
                    <div class="text-right">
                        <div class="actions">
                             <a href="" class="action-item"><i class="ti-reload"></i></a>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group row">
                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('user_id') ?></label>
                        <div class="col-sm-8">
                            <?php echo esc($user->user_id) ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('username') ?></label>
                        <div class="col-sm-8">
                            <?php echo esc($user->username) ?></span>
                        </div>
                    </div>
                  
                     
                    <div class="form-group row">
                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('firstname') ?></label>
                        <div class="col-sm-8">
                            <?php echo esc($user->f_name) ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('lastname') ?></label>
                        <div class="col-sm-8">
                            <?php echo esc($user->l_name) ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('email') ?></label>
                        <div class="col-sm-8">
                            <?php echo esc($user->email) ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('mobile') ?></label>
                        <div class="col-sm-8">
                            <?php echo esc($user->phone) ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('registered_ip') ?></label>
                        <div class="col-sm-8">
                            <?php echo esc($user->reg_ip) ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('status') ?></label>
                        <div class="col-sm-8">
                            <?php echo ($user->status==1)?display('active'):display('inactive'); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cid" class="col-sm-4 col-form-label"><?php echo display('Registered_Date'); ?></label>
                        <div class="col-sm-8">
                            <?php 
                                $date=date_create($user->created);
                                echo date_format($date,"jS F Y");  
                            ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-sm-6 col-md-6 d-flex">
        <div class="card mb-4 flex-fill w-100">
            <div class="card-header">

                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fs-17 font-weight-600 mb-0"><?php echo display('Wallet Info');?></h6>
                    </div>
                    <div class="text-right">
                        <div class="actions">
                             <a href="" class="action-item"><i class="ti-reload"></i></a>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="card-body"> 
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table id="investable" class="table  table-bordered table-striped table-hover">
                       
                        <thead>
                            <tr> 
                                <th><?php echo display('Wallet Address'); ?></th>
                                <th><?php echo display('Balance'); ?></th>   
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo esc($user->wallet_address);  ?></td>
                                <td><span id="balance_<?php echo esc($user->uid); ?>">0.00</span></td>
                                 
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
   
</div>

 
<script src="<?php echo base_url("app/Modules/User/Assets/Admin/js/custom.js") ?>"></script>