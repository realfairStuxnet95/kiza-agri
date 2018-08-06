<?php 
$cooperative_crops=array();
$cooperative_crops=$cooperative->loadCooperativeCrops($cooperativeId);
$cooperative_crops=$cooperative->clearResult($cooperative_crops);

//load cooperative members
$cooperativeMembers=array();
$cooperativeMembers=$cooperative->loadCooperativeMembers($cooperativeId);
?>
<div class="uk-modal" id="modal_header_footer">
    <div class="uk-modal-dialog">
        <div class="uk-modal-header">
            <h3 class="uk-modal-title"><?php echo $errors->pricing_modal_title(); ?></h3>
        </div>
        <form id="frm_add_harvest">
            <div class="row">
                <div class="uk-form-row">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">
                            <label><?php echo $errors->crop_name(); ?></label>
                            <select id="coop_crop_name" class="md-input" required="">
                                <?php 
                                foreach ($cooperative_crops as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value['crop']; ?>">
                                        <?php 
                                        echo $system->selectTableField("system_crops","name","cropid",$value['crop']);
                                        ?>
                                    </option>
                                    <?php
                                }
                                ?>
                                <option>
                                    
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div id="" class="uk-width-medium-1-1">
                            <label><?php echo $errors->crop_grades(); ?></label>
                            <select id="coopCropsGrades" class="md-input" required="">
                                
                            </select>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div id="" class="uk-width-medium-1-1">
                            <label><?php echo $errors->pricing_crop_variety(); ?></label>
                            <select id="cropsVariety" class="md-input" required="">
                                
                            </select>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">
                            <label><?php echo $errors->input_member(); ?></label>
                            <select id="cooperative_members" class="md-input" required="">
                                <?php 
                                foreach ($cooperativeMembers as $key => $value) {
                                   ?>
                                   <option value="<?php echo $value['memberId']; ?>">
                                       <?php echo $value['name']; ?>
                                   </option>
                                   <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">
                            <label><?php echo $errors->input_member_harvest(); ?></label>
                            <input id="member_harvest" type="number" class="md-input" name="" required="">
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">
                            <label><?php echo $errors->input_cooperative_harvest(); ?></label>
                            <input id="cooperative_harvest" type="number" class="md-input" name="" required="">
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">
                            <input type="hidden" value="<?php echo $cooperativeId ?>" name="cooperative" id="cooperative">
                            <button type="submit" class="md-btn md-btn-primary md-btn-large md-btn-wave-light md-btn-icon waves-effect waves-button waves-light">
                                    <i class="fa fa-user-plus"></i>
                                    <?php echo $errors->save_cooperative_harvest_btn(); ?>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="uk-modal-footer uk-text-right">
            <button type="button" class="md-btn md-btn-flat uk-modal-close">BIREKE</button>
        </div>
    </div>
</div>
<!-- <script src="scripts/functions.js"></script> -->