<?php $this->load->view('Partials/header.php'); ?>
<header
    class="masthead"
    style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Tambahkan Artikel</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h1>Tambah Artikel</h1>
                <div class="alert alert-warning">
                      <?php echo validation_errors();  ?>
                </div>
                <?php echo form_open_multipart(); ?>
                <div class="form-group">
                    <label>Judul</label>
                    <?php echo form_input(
                        'title',
                        set_value('title'),
                        'class="form-control"'
                    ); ?>
                </div>
                <div class="form-group">
                    <label>Url</label>
                    <?php echo form_input(
                        'url',
                        set_value('url'),
                        'class="form-control"'
                    ); ?>
                </div>
                <div class="form-group">
                    <label>Konten</label>
                    <?php echo form_textarea(
                        'content',
                        set_value('content'),
                        'class="form-control" id="" cols="30" rows="10"'
                    ); ?>
                </div>
                <div class="form-group">
                    <label>Cover</label>
                    <?php echo form_upload(
                        'cover',
                        set_value('cover'),
                        'class="form-control"'
                    ); ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Artikel</button>
            </div>
        </div>
    </div>
</article>
<?php $this->load->view('Partials/footer.php'); ?>
