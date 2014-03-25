 <div id="main-content">
    <div class="clear"></div>
    <!-- End .clear -->
    <div class="content-box">
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
          <div class="notification attention png_bg"> <a href="#" class="close"><img src="/statics/images/index/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
            <div> This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross. </div>
          </div>
          <table>
            <thead>
              <tr>
                <th>
                  <input class="check-all" type="checkbox" />
                </th>
                <th>ID</th>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($rows as $key => $row) { ?>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td>
                    <!-- Icons -->
                    <a href="Architectural/edit/id/<?php echo $row['id'];?>" title="Edit"><img src="/statics/images/index/icons/pencil.png" alt="Edit" /></a> 
                    <a href="Architectural/delete/id/<?php echo $row['id'];?>" title="Delete"><img src="/statics/images/index/icons/cross.png" alt="Delete" /></a>
                    <a href="Architectural/add/" title="add Meta"><img src="/statics/images/index/icons/hammer_screwdriver.png" alt="Edit Meta" /></a> </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- End #tab2 -->
      </div>
    </div>
  <!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>
