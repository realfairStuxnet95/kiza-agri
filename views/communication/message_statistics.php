            <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right">
                                <i style="font-size: 44px;" class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <span class="uk-text-muted uk-text-small">
                                <?php echo $errors->messages_counter(); ?>
                            </span>
                            <h2 class="uk-margin-remove"><span class="countUpMe"><?php echo $cooperative->getCooperativeMessagesCounter($cooperativeId); ?><noscript>12</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <a style="display: none; cursor: pointer;" data-uk-modal="{target:'#modal_header_footer'}">
                <div>
                    <div class="md-card" style="display: none; background: #009966;color: #fff;">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right">
                                <i style="font-size: 44px;" class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                            <span  style="color: #fff;" class="uk-text-muted uk-text-small"><font style="color: #fff;">Shyiramo igihingwa gishya</font></span>
                            <h2 style="color: #fff;" class="uk-margin-remove"><span class="countUpMe">Kanda hano<noscript>Kanda hano</noscript></span></h2>
                        </div>
                    </div>
                </div> 
                </a>
            </div>