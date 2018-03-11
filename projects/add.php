<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php blockPage(); ?>
<?php $project_categories = projectCategory();?>

<?php require_once(__DIR__."/../includes/header.php"); ?>

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

            <form action="process_add.php" method="post">

            	<?php echo returnPageError(); ?>

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
                                <label class="col-md-2 control-label" for="inputDefault">Category</label>
                                <div class="col-md-10">
                                    <select name="project_category" class="form-control">
                    					<?php foreach($project_categories as $project_category): ?>
                    						<option value="<?php echo $project_category['cid'] ?>"><?php echo $project_category['category'] ?></option>
                    					<?php endforeach; ?>
                    				</select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="inputDefault">Title</label>
                                <div class="col-md-10">
                                    <input type="text" name="title" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                        </div>
                        <h2 class="panel-title">Products</h2>
                    </header>
                    <div class="panel-body">
            			<div class="form-horizontal form-bordered form-add-product">
                        </div>
                        <div id="btn_add_product" class="btn btn-primary">Add Item</div>
                    </div>
                </section>


            </form>



            </div>
        </div>
    </div>
<!-- end: page -->
</section>
<?php require_once(__DIR__."/../includes/footer.php"); ?>
