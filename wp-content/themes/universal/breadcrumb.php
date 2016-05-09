<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="col-md-5">
                <div class="breadcrumb">
                    <?php
                    if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>