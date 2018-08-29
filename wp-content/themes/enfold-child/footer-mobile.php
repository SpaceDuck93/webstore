<style>
  #mobile-bar {
    display: none;
    position: fixed;
    bottom: 0px;
    width: 100%;
    background: #084a79;
    padding: 10px;
    z-index: 999;
    color: white;
    box-shadow: 0px -3px 18px rgba(0, 0, 0, 0.4);
  }

  .d-flex {
    display: flex;
    flex-direction: row;
  }

  .flex-column {
    flex-basis: 50%;
  }

  .text-center {
    text-align: center;
  }

  .b-right {
    border-right: 1px solid white;
  }
  #formPopup {
    display: none;
    background: rgba(8, 35, 60, 0.9);
    position: fixed;
    bottom: 48px;
    width: 100%;
    height: auto;
    max-height: 100%;
    z-index: 999;
    padding: 5px;
    text-align: center;
    box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.4);
  }
  #formPopup h2 {
    color: white;
  }
  .overflow {
    height: 100%;
    overflow-y: scroll;
    position: static;
    max-height: calc(100vh - 58px);
    padding-top: 15px;
  }
  .noscroll {
    overflow-y: hidden!important;
  }
  @media screen and (max-width: 768px) {
    #mobile-bar {
      display: block !important;
    }
  }
</style>
<div id="mobile-bar">
  <div class="d-flex">
    <div class="flex_column text-center b-right">
      <a href="tel:888-786-9479" style="color: white;">
        <?php echo do_shortcode("[av_font_icon icon='ue854' font='entypo-fontello' style='' caption='' link='' linktarget='' size='24px' position='center' color='' custom_class='' admin_preview_bg='' av_uid='av-6f14vz'][/av_font_icon]");?>
      </a>
    </div>
    <div class="flex_column text-center" onclick="openFormPopup();">
      <div class="toggle-icon">
        <?php echo do_shortcode("[av_font_icon icon='ue84c' font='entypo-fontello' style='' caption='' link='' linktarget='' size='24px' position='center' color='' custom_class='' admin_preview_bg='' av_uid='av-6f14vz'][/av_font_icon]");?>
      </div>  
      <div class="toggle-icon" style="display: none;">
      <?php echo do_shortcode("[av_font_icon icon='ue815' font='entypo-fontello' style='' caption='' link='' linktarget='' size='24px' position='center' color='' custom_class='' admin_preview_bg='' av_uid='av-6f14vz'][/av_font_icon]");?>
      </div>
    </div>
  </div>
</div>
<div id="formPopup">
  <div class="overflow">
    <h2 class="text-center">Timeshare Exit Guaranteed</h2>
    <?php include('exit-form.php') ?>
  </div>
</div>
<script>
  function openFormPopup() {
    var html = jQuery('html');
    var body = jQuery('body');
    var pop = jQuery('#formPopup');
    var icon = jQuery('.toggle-icon');
    body.toggleClass('noscroll');
    html.toggleClass('noscroll');
    pop.toggle();
    icon.toggle();
  }
</script>