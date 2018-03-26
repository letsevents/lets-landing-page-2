<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- 4:3 aspect ratio -->
                <div class="embed-responsive embed-responsive-4by3">
                    <?php echo get_field('video_do_modal') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="faleConsultor" aria-labelledby="faleConsultor">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <?php echo get_field('fale-consultor') ?>
    </div>
  </div>
</div>
