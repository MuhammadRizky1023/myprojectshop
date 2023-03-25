<?php $this->load->view('Partials/header.php') ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('./assets/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                  <?php echo $this->session->flashdata('message') ?>  
                  <form>
                    <input type="text" name="find">
                    <button type="submit">Cari</button>
                   </form>
                    <?php foreach($blogs as $key=>$blog):?>
                    <div class="post-preview">
                        <a href="<?php echo site_url('blog/detail/' .$blog['url']);?>">
                            <h2 class="post-title"><?php  echo $blog['title'];?></h2></h2>
                        </a>
                        <p class="post-meta">
                            Posted by on <?php echo $blog['date']; ?>
                          <a href="<?php echo site_url('blog/edit/'.$blog['id']);?>"> Edit</a>
                          <a href="<?php echo site_url('blog/delete/'.$blog['id']);?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"> Delete</a>
                        </p>
                          <?php echo $blog['content']; ?>
                    </div>
                    <?php endforeach ?>
                    <hr class="my-4" />
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="<?php echo site_url('blog/Add/'.$blog['id']);?>">Add Article →</a></div>
                </div>
                <?php   echo $this->pagination->create_links(); ?>
            </div>
        </div>
        <?php  $this->load->view('Partials/footer.php')?>
    </body>
</html>
