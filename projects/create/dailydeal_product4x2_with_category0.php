<?php require_once(__DIR__."/../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../includes/functions.php"); ?>

<?php blockPage(); ?>

<?php require_once(__DIR__."/../../includes/header.php"); ?>

<?php $project_categories = projectCategory();?>
<?php
$product_category = "<div class='form-group'>
    <div class='col-md-12 col-product'>
        <div class='input-group'>
            <span class='input-group-addon'>Product Category</span>
            <input type='text' class='form-control' name='product_category[]' value=''>
        </div>
    </div>
</div>";

$products = "<div class='form-group'>
    <div class='col-md-6 col-product'>
        <div class='input-group'>
            <span class='input-group-addon'>Title</span>
            <input type='text' class='form-control' name='product_title[]' value=''>
        </div>
    </div>
    <div class='col-md-2 col-product'>
        <div class='input-group'>
            <span class='input-group-addon'>RRP</span>
            <input type='text' class='form-control' name='rrp[]' value=''>
        </div>
    </div>
    <div class='col-md-2 col-product'>
        <div class='input-group'>
            <span class='input-group-addon'>DP</span>
            <input type='text' class='form-control'  name='dp[]' value=''>
        </div>
    </div>
    <div class='col-md-2 col-product'>
        <div class='input-group'>
            <span class='input-group-addon'>%</span>
            <input type='text' class='form-control'  name='percent[]' value=''>
        </div>
    </div>
    <div class='col-md-12 col-product'>
        <div class='input-group'>
            <span class='input-group-addon'>Source</span>
            <input type='text' class='form-control'  name='image[]' value=''>
        </div>
    </div>
    <div class='col-md-12 col-product'>
        <div class='input-group'>
            <span class='input-group-addon'>Url</span>
            <input type='text' class='form-control'  name='url[]' value=''>
        </div>
    </div>
</div>";

$navigations = "<div class='form-group'>
    <div class='col-md-12 col-product'>
        <div class='input-group'>
            <span class='input-group-addon'></span>
            <input type='text' class='form-control' name='nav_url[]' value=''>
        </div>
    </div>
</div>";

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
                    <input type="hidden" type="text" name="project_category" value="5">

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
                            <h2 class="panel-title">Header</h2>
                        </header>
                        <div class="panel-body">
                            <div class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="inputDefault">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="inputDefault">Host</label>
                                    <div class="col-md-10">
                                        <select name="project_host" class="form-control">
                    						<option value="http://www.11street.my">http://www.11street.my</option>
                                            <option value="http://myfo.coding.com">http://myfo.coding.com</option>
                        				</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="inputDefault">Ref ID</label>
                                    <div class="col-md-10">
                                        <input type="text" name="project_ref_id" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="inputDefault">Logo</label>
                                    <div class="col-md-10">
                                        <input type="text" name="logo_url" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="inputDefault">Box Color</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <span class="input-group-addon">#</span>
                                            <input type="text" class="form-control" name="project_box_color" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- section navigation -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                            </div>
                            <h2 class="panel-title">Navigation</h2>
                        </header>
                        <div class="panel-body">
                			<div class="form-horizontal form-bordered form-add-product form-navigation">
                                <!-- products -->
                				<?php echo str_repeat($navigations, 5);?>
                            </div>
                        </div>
                    </section>
                    <!-- //section navigation -->

                    <!-- section main banner -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                            </div>
                            <h2 class="panel-title">Main Banner</h2>
                        </header>
                        <div class="panel-body">
                			<div class="form-horizontal form-bordered form-add-product">
                                <div class="form-group">
                                    <div class="col-md-12 col-product">
                                        <div class="input-group">
                                            <span class="input-group-addon">Source</span>
                                            <input type="text" class="form-control" name="main_banner_source" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-product">
                                        <div class="input-group">
                                            <span class="input-group-addon">Url</span>
                                            <input type="text" class="form-control" name="main_banner_url" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- //section main banner -->

                    <!-- section daily deals -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                            </div>
                            <h2 class="panel-title">Daily Deals</h2>
                        </header>
                        <div class="panel-body">
                			<div class="form-horizontal form-bordered form-add-product">
                                <div class="form-group">
                                    <div class="col-md-12 col-product">
                                        <div class="input-group">
                                            <span class="input-group-addon">Title</span>
                                            <input type="text" class="form-control" name="project_dd_title" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-product">
                                        <div class="input-group">
                                            <span class="input-group-addon">Caption</span>
                                            <input type="text" class="form-control" name="project_dd_caption" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-product">
                                        <div class="input-group">
                                            <span class="input-group-addon">Url</span>
                                            <input type="text" class="form-control" name="project_dd_url" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- //section daily deals -->

                    <!-- section products -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                            </div>
                            <h2 class="panel-title">Product Category</h2>
                        </header>
                        <div class="panel-body">
                			<div class="form-horizontal form-bordered form-add-product">
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="inputDefault">Box Color</label>
                                    <div class="col-md-10">
                                        <div class="input-group color" data-plugin-colorpicker>
                                            <span class="input-group-addon"><i></i></span>
                                            <input type="text" class="form-control" name="product_category_box_color" value="">
                                        </div>
                                    </div>
                                </div>
                                <!-- product category -->
                				<?php echo str_repeat($product_category, 2);?>
                            </div>
                        </div>
                    </section>
                    <!-- //section products -->

                    <!-- section products -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                            </div>
                            <h2 class="panel-title">Products</h2>
                        </header>
                        <div class="panel-body">
                			<div class="form-horizontal form-bordered form-add-product">
                                <!-- products -->
                				<?php echo str_repeat($products, 8);?>
                            </div>
                        </div>
                    </section>
                    <!-- //section products -->

                    <!-- section bottom banner -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                            </div>
                            <h2 class="panel-title">Bottom Banner</h2>
                        </header>
                        <div class="panel-body">
                			<div class="form-horizontal form-bordered form-add-product">
                                <div class="form-group">
                                    <div class="col-md-12 col-product">
                                        <h2 class="panel-title">Banner 1</h2>
                                    </div>
                                    <div class="col-md-12 col-product">
                                        <div class="input-group">
                                            <span class="input-group-addon">Source</span>
                                            <input type="text" class="form-control" name="img_source[]" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-product">
                                        <div class="input-group">
                                            <span class="input-group-addon">Url</span>
                                            <input type="text" class="form-control" name="img_url[]" value="">
                                        </div>
                                    </div>
                                </div>
                	                <div class="form-group">
                	                    <div class="col-md-12 col-product">
                	                        <h2 class="panel-title">Banner 2</h2>
                	                    </div>
                	                    <div class="col-md-12 col-product">
                	                        <div class="input-group">
                	                            <span class="input-group-addon">Source</span>
                	                            <input type="text" class="form-control" name="img_source[]" value="">
                	                        </div>
                	                    </div>
                	                    <div class="col-md-12 col-product">
                	                        <div class="input-group">
                	                            <span class="input-group-addon">Url</span>
                	                            <input type="text" class="form-control" name="img_url[]" value="">
                	                        </div>
                	                    </div>
                	                </div>
                            </div>
                        </div>
                    </section>
                    <!-- //section bottom banner -->

                </form>

            </div>
        </div>
    </div>
    <!-- end: page -->
</section>

<?php require_once(__DIR__."/../../includes/footer.php"); ?>
