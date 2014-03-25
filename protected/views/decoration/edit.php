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
          <form action="/decoration/update" method="post">
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
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td><input name="id" readonly="readonly" value="<?php echo $row['id'];?>"/></td>
                    <td><input name="name" value="<?php echo $row['name'];?>"/></td>
                  </tr>
              </tbody>
            </table>
            <div style="background: #DCE6EA; width: 100%; height: 33px; text-align: center; border: 1px solid #EEF2F2;">
                <input type="submit" name="submit" value="修改" style="border: none; width: 200px; height: 33px; font-size: 14px; cursor: pointer; background: #FFF;">
            </div>
          </form>
      </div>
        <!-- End #tab2 -->
    </div>
  </div>
  <!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>
