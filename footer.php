  <!--php footer-->
  <footer class="footer">
    <div class="container">
      <p class="text-muted text-right">
        Copy Right By Frank Young.
        <a href="http://<?php echo $webDescription['webBlog'];?>" data-toggle="tooltip" data-placement="right" title="我的个人博客"><?php echo $webDescription['webBlog'];?></a>
      </p>
    </div>
  </footer>
  <!-- login in alert start-->
   <a class="glyphicon glyphicon-triangle-top" href="javascript:;" id="btn" title="回到顶部"></a>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/goTop.js"></script>
  <script type="text/javascript" src="js/verify.js"></script>
  <script type="text/javascript">
    $(function(){//设置点击后添加active
      $("ul li ").click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
    });
      $(function () {
       $('[data-toggle="tooltip"]').tooltip();
       $('[data-toggle="popover"]').popover();
    })
    /*list sidebar */
      $(document).ready(function () {
     $('[data-toggle="offcanvas"]').click(function (){
           $('.row-offcanvas').toggleClass('active glyphicon glyphicon-menu-right');
      });
    });
    </script>

</body>
</html>
<!--php footer-->