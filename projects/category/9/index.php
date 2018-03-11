<?php require_once(__DIR__."/../../inc/view/controller_view.php"); ?>

<!-- Header -->
<?php include(__DIR__."/../../inc/view/header.php"); ?>

<!-- Masthead -->
<?php include(__DIR__."/../../inc/masthead/masthead_a.php"); ?>

<!-- Navigation -->
<?php include(__DIR__."/../../inc/view/navigation.php"); ?>

<!-- Application -->
<?php include(__DIR__."/../../inc/view/application.php"); ?>

<tr>
    <td valign="top" style="padding: 0; border-left: 1px #dfdfdf solid; border-right: 1px #dfdfdf solid;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <?php echo $code ?>
            </tbody>
        </table>
    </td>
</tr>

<!-- footer -->
<?php include(__DIR__."/../../inc/view/footer.php"); ?>
