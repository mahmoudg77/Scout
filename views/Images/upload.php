<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>


<form action="<?=actionLink("upload")?>" method="post" enctype="multipart/form-data">
    <table class="table table-striped ">
        <tr>
            <td>Model Name</td>
            <td>
                <input type="text" name="modelname" class="form-control" required/>
            </td>
        </tr>

        <tr>
            <td>Model ID</td>
            <td>
                <input type="text" name="modelid" class="form-control" required/>
            </td>
        </tr>
        <tr>
            <td>Tag</td>
            <td>
                <input type="text" name="tag" class="form-control" required/>
            </td>
        </tr>
        <tr>
            <td>Image file</td>
            <td>
                <input type="file" name="image" class="form-control" required/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <?=Framework\Request::CSRF()?>
                <input type="submit" name="submit" value="Upload" />
            </td>
        </tr>

    </table>
</form>
<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>

