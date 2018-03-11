<?php require_once(__DIR__."/../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../includes/functions.php"); ?>

<?php blockPage(); ?>

<?php require_once(__DIR__."/../../includes/header.php"); ?>

<?php $project_categories = projectCategory();?>
<?php
$product_category = "<input type='text' class='form-control' name='product_category[]' value=''>";
$products = "
            <input type='text' class='form-control' name='product_title[]' value=''>
            <input type='text' class='form-control' name='rrp[]' value=''>
            <input type='text' class='form-control'  name='dp[]' value=''>
            <input type='text' class='form-control'  name='percent[]' value=''>
            <input type='text' class='form-control'  name='image[]' value=''>
            <input type='text' class='form-control'  name='url[]' value=''>
            ";
$navigations = "<input type='text' class='form-control' name='nav_url[]' value=''>";
$banners = "
            <input type='text' class='form-control' name='img_source[]' value=''>
            <input type='text' class='form-control' name='img_url[]' value=''>
            ";
?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Create Project</h2>

        <div class="right-wrapper pull-right">
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-lg-12">
            <div class="inner-body">

                <form id="form" action="/projects/inc/process_add_product.php" method="post">

                	<?php echo returnPageError(); ?>
                    <input type="hidden" type="text" name="project_category" value="11">

                	<div class="inner-toolbar form-btn clearfix">
                		<ul>
                			<li><i class="fa fa-arrow-up mr-sm"></i><input type="submit" name="submit" value="Create"></li>
                		</ul>
                	</div>

                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                            </div>
                            <h2 class="panel-title">Page Setting</h2>
                        </header>
                        <div class="panel-body">
                            <div class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="inputDefault">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" class="form-control" value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div style="display: none;">
                        <select name="project_host" class="form-control">
                            <option value="http://image.11st.my/g3/md_img/edm">http://image.11st.my</option>
                            <option value="http://www.11street.my">http://www.11street.my</option>
                            <option value="http://myfo.coding.com">http://myfo.coding.com</option>
                        </select>
                        <input type="text" name="project_ref_id" class="form-control" value="">
                        <input type="text" name="logo_url" class="form-control" value="">
                        <input type="text" class="form-control" name="project_box_color" value="">

                        <!-- section main banner -->
                        <input type="text" class="form-control" name="main_banner_source" value="">
                        <input type="text" class="form-control" name="main_banner_url" value="">
                        <!-- //section main banner -->

                        <!-- section daily deals -->
                        <input type="text" class="form-control" name="project_dd_title" value="">
                        <input type="text" class="form-control" name="project_dd_caption" value="">
                        <input type="text" class="form-control" name="project_dd_url" value="">
                        <!-- //section daily deals -->

                        <!-- section products -->
                        <input type="text" class="form-control" name="product_category_box_color" value="">
                        <?php echo str_repeat($navigations, 9);?>
                        <?php echo str_repeat($product_category, 2);?>
                        <!-- //section products -->

                        <!-- section products -->
                        <?php echo str_repeat($products, 8);?>
                        <!-- //section products -->

                        <!-- section bottom banner -->
                        <?php echo str_repeat($banners, 6);?>
                        <!-- //section bottom banner -->
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- end: page -->
</section>

<?php require_once(__DIR__."/../../includes/footer.php"); ?>
